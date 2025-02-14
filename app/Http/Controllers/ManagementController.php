<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manage;
use Illuminate\Support\Facades\Log;

class ManagementController extends Controller
{
    public function store(Request $req) {
        Log::info('Form submission started');
        dd($req->all());
        $validateData = $req->validate([
            'tanggal' => 'required|date',
            'jenis' => 'required|in:hadir,izin,sakit,spj,lembur,weekly_report,cuti',
            'tipe' => 'nullable|in:kerja,libur|required_unless:jenis,weekly_report',
            'durasi' => 'nullable|integer|required_if:jenis,hadir,lembur,spj|max:24',
            'justifikasi' => [
                'nullable',
                function ($attribute, $value, $fail) use ($req) {
                    if (($req->jenis === 'spj' || ($req->has('durasi') && $req->durasi > 8)) && !$req->hasFile('justifikasi')) {
                        $fail($attribute.' is required when jenis is spj or durasi is greater than 8.');
                    }
                },
                'file',
                'mimes:jpg,png',
                'max:2048'
            ],
            'deskripsi' => 'required|string',
            'catatan_koreksi' => 'nullable|string',
            'latitude' => 'required|string',
            'longitude' => 'required|string',
            'id_talent' => 'required|integer',
        ]);
        Log::error($validateData);
        // Combine latitude and longitude into one string
        $validateData['lokasi'] = "{$req->latitude}, {$req->longitude}";

        Log::info('Validation passed', $validateData);
        // Remove latitude and longitude from the array
        unset($validateData['latitude'], $validateData['longitude']);

        try {
            // Check if the file exists before attempting to store
            if ($req->hasFile('justifikasi')) {
                $justifikasiPath = $req->file('justifikasi')->store('public/justifikasi');
                $validateData['justifikasi'] = $justifikasiPath;
                Log::info('File uploaded', ['path' => $justifikasiPath]);
            }
    
            // Store the validated data in the database
            $manage = Manage::create($validateData);

            if (!$manage) {
                throw new \Exception('Failed to create record in database');
            }

            Log::info('Record created successfully', ['id' => $manage->id]);

            return redirect()->route('management.create')->with('success', 'Performance report submitted successfully.');
        } catch (\Exception $e) {
            Log::error('Error occurred while submitting the form', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            return redirect()->back()->with('error', 'An error occurred while submitting the form: ' . $e->getMessage())->withInput();
        }
    }
        
    public function create() {
        return view('manage');
    }
}


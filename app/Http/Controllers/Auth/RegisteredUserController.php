<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nama_lengkap' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'no_telepon' => ['required', 'string', 'max:255'],
            'pendidikan_terakhir' => ['required', 'string', 'max:255'],
            'nama_institusi' => ['required', 'string', 'max:255'],
            'tanggal_lahir' => ['required', 'date', 'max:255'],
            'fakultas' => ['required', 'string', 'max:255'],
            'keahlian' => ['required', 'string', 'max:255'],
            'gaji_harapan' => ['required', 'string', 'max:255'],
            'file_cv' => ['required', 'string', 'max:255']
        ]);

        $user = User::create([
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'no_telepon' => $request->no_telepon,
            'pendidikan_terakhir' => $request->pendidikan_terakhir,
            'nama_institusi' => $request->nama_institusi,
            'tanggal_lahir' => $request->tanggal_lahir,
            'fakultas' => $request->fakultas,
            'keahlian' => $request->keahlian,
            'gaji_harapan' => $request->gaji_harapan,
            'file_cv' => $request->gaji_harapan
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}

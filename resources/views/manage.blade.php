<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Performance Report</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bs-stepper/dist/css/bs-stepper.min.css">
    <link href="https://cdn.jsdelivr.net/npm/@coreui/coreui@5.2.0/dist/css/coreui.min.css" rel="stylesheet" integrity="sha384-u3h5SFn5baVOWbh8UkOrAaLXttgSF0vXI15ODtCSxl0v/VKivnCN6iHCcvlyTL7L" crossorigin="anonymous">

    <!-- Moment.js (Required for DateRangePicker) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>

    <!-- DateRangePicker CSS & JS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.1/daterangepicker.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.1/daterangepicker.min.js"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap');
        @import url('https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css');

        .footer-container {
            background-color: #dddddd;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 15px 0;
            margin-top: 40px;
            box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.1);
            background-color: rgba(255, 255, 255, 0.1);
        }

        .footer-content {
            text-align: center;
            color: #333;
            font-size: 0.9rem;
            margin: 0;
            padding: 0 15px;
        }

        main {
            padding-bottom: 70px;
        }

        body {
            display: flex;
            background-color: #f4f3f3;
        }

        aside {
            background-color: #dddddd;
            color: black;
            width: 240px;
            height: 100vh;
            display: flex;
            flex-direction: column;
            padding: 1.5rem 1rem;
            transition: all 0.3s ease;
            position: fixed;
            left: 0;
            top: 0;
            z-index: 1000;
        }

        aside.mini {
            width: 80px;
            padding: 1.5rem 0.5rem;
        }

        aside button {
            background-color: transparent;
            border: none;
            height: 48px;
            width: 60px;
            font-size: 1.25rem;
            color: black;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 0.5rem;
            margin-bottom: 0;
            align-self: flex-start;
        }

        aside .link {
            flex: 1;
        }

        aside ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        aside ul li {
            display: flex;
            align-items: center;
            padding: 0.75rem 1rem;
            border-radius: 0.5rem;
            cursor: pointer;
            margin-bottom: 0.5rem;
            transition: all 0.3s ease;
        }

        aside ul li i {
            width: 24px;
            height: 24px;
            font-size: 1.25rem;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 1rem;
        }

        aside ul li label {
            margin: 0;
            font-size: 1rem;
            white-space: nowrap;
            cursor: inherit;
        }

        aside.mini ul li {
            padding: 0.75rem;
            justify-content: center;
        }

        aside.mini ul li i {
            margin-right: 0;
        }

        aside.mini ul li label {
            display: none;
        }

        aside ul li.active,
        aside ul li:hover {
            background-color: #ff7700;
            color: #000;
        }

        .dropdown-menu .dropdown-item {
            color: #000;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .dropdown-menu .dropdown-item:hover {
            background-color: #FF7700 !important;
            color: #fff !important;
        }


        /* Main content adjustment */
        .main-wrapper {
            display: flex;
            justify-content: center;
            width: 100%;
        }

        main {
            margin-left: 240px;
            width: calc(100% - 240px);
            transition: all 0.3s ease;
            padding: 1.5rem;
            max-width: 1200px;
        }

        aside.mini+.main-wrapper main {
            margin-left: 80px;
            width: calc(100% - 80px);
        }

        .page-title {
            color: #2B2B2B;
            font-weight: bold;
            margin-bottom: 0;
            text-align: center;
        }

        .page-subtitle {
            color: #6C757D;
            font-size: 1rem;
            margin-bottom: 2rem;
            text-align: center;
        }

        .form-control,
        .form-select {
            border: 1px solid #ddd;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #007bff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
        }

        .bs-stepper {
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 50px;
            margin-bottom: 20px;
        }

        .bs-stepper-header {
            max-width: 600px;
            margin: 0 auto;
            position: relative;
            padding: 20px 0;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
        }

        .step {
            flex: 0 1 auto;
            width: 250px;
        }

        .bs-stepper-header::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 80px;
            height: 2px;
            background-color: #dee2e6;
            z-index: 1;
        }

        .step-trigger {
            display: flex;
            align-items: center;
            padding: 0;
            border: none;
            background: none;
            width: 100%;
            text-decoration: none;
        }

        .step-status {
            background-color: #fff;
            border-radius: 50px;
            padding: 8px 20px;
            width: auto;
            min-width: 200px;
            position: relative;
            z-index: 2;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
        }

        .bs-stepper-circle {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 25px;
            height: 25px;
            border-radius: 50%;
            background-color: #dee2e6;
            margin-right: 12px;
            flex-shrink: 0;
        }

        .step.active .bs-stepper-circle {
            background-color: #ee5656;
            color: white;
        }

        .bs-stepper-label {
            margin: 0;
            font-weight: 500;
            color: #6c757d;
        }

        .step.active .bs-stepper-label {
            color: black;
        }

        .btn-with-circle {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 8px 20px;
            border: none;
            background: none;
            font-weight: 500;
            color: #495057;
        }

        /* Menghilangkan efek hover */
        .btn-with-circle:hover {
            background-color: transparent;
            color: #495057;
        }

        .circle-icon {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background-color: black;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }

        /* Memastikan circle icon tidak berubah saat hover */
        .btn-primary.btn-with-circle:hover,
        .btn-secondary.btn-with-circle:hover {
            background-color: transparent;
        }

        .btn-primary.btn-with-circle:hover .circle-icon,
        .btn-secondary.btn-with-circle:hover .circle-icon {
            background-color: black;
        }

        .content {
            display: none;
        }

        .content.active {
            display: block;
            animation: fadeIn 0.5s;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .nav-link {
            border-radius: 4px;
            margin: 5px 0;
            transition: all 0.3s ease;
            color: #000 !important;
            font-weight: bold;
        }

        .nav-link.active {
            background-color: rgba(0, 0, 0, 0.1);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            margin-bottom: 80px;
            padding: 0 15px;
        }

        .logo-img {
            width: 120px;
            height: auto;
            display: none;
            margin-left: 10px;
            transition: all 0.3s ease;
            opacity: 0;
        }

        aside:not(.mini) .logo-img {
            display: block;
            opacity: 1;
        }

        .btn-success {
            color: white !important;
        }
        .btn-success:hover {
            color: white !important;
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    <aside>
        <div style="display: flex; align-items: center; margin-bottom: 2rem;">
            <button id="toggle">
                <i class="fi fi-rr-list"></i>
            </button>
            <img src="img/jagoit.png" alt="Jago Logo" class="logo-img">
        </div>
        <div class="link">
            <ul>
                <li>
                    <a href="{{ route('dashboard') }}" class="d-flex align-items-center text-decoration-none text-dark">
                        <i class="fi fi-rr-home"></i>
                        <label class="ms-2">Dashboard</label>
                    </a>
                </li>

                <li class="active">
                    <i class="fi fi-rr-document"></i>
                    <label class="ms-2">Form</label>
                </li>

                <li>
                    <a href="{{ route('management.view') }}" class="d-flex align-items-center text-decoration-none text-dark">
                        <i class="fi fi-rr-chart-histogram"></i>
                        <label class="ms-2">Report</label>
                    </a>
                </li>

                <li style="margin-top:360px">
                    <a class="nav-link dropdown-toggle d-flex align-items-center text-decoration-none text-dark" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-weight:normal;">
                        <ion-icon name="person-circle-outline" size="large"></ion-icon>
                        <label class="ms-2">{{ Str::limit(Auth::user()->name, 10, '...') }}</label>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Edit</a></li>
                        <li style="margin-top:-10px">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{route('logout')}}"
                                    onclick="event.preventDefault();
                                        this.closest('form').submit();" class="dropdown-item">
                                    {{ __('Log Out') }}
                                </a>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </aside>

    <!-- Main content wrapper -->
    <div class="main-wrapper">
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="container mt-4">
                <div class="bs-stepper">
                    <h1 class="page-title">Laporan Kinerja</h1>
                    <p class="page-subtitle">Buat laporan kinerja anda!</p>

                    <div class="bs-stepper-header" role="tablist">
                        <div class="step active" data-target="#job-details-part">
                            <div class="step-status">
                                <span class="bs-stepper-circle">
                                    <i class="bi bi-check-lg"></i>
                                </span>
                                <span class="bs-stepper-label">Detail Pekerjaan</span>
                            </div>
                        </div>
                        <div class="step" data-target="#justification-part">
                            <button type="button" class="step-trigger" role="tab">
                                <div class="step-status">
                                    <span class="bs-stepper-circle">
                                        <i class="bi bi-check-lg"></i>
                                    </span>
                                    <span class="bs-stepper-label">Justifikasi</span>
                                </div>
                            </button>
                        </div>
                    </div>

                    <form id="improvedForm" class="needs-validation" novalidate method="post" action="{{ route('management.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="bs-stepper-content">
                            <!-- Job Details Step -->
                            <div id="job-details-part" class="content active" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="jenis" class="form-label">Jenis Kehadiran <strong class="text-danger">*</strong></label>
                                        <select class="form-select" id="jenis" name="jenis" required>
                                            <option value="hadir" selected>Hadir</option>
                                            <option value="sakit">Sakit</option>
                                            <option value="izin">Izin</option>
                                            <option value="cuti">Cuti</option>
                                            <option value="spj">SPJ</option>
                                            <option value="lembur">Lembur</option>
                                            <option value="weekly_report">Weekly Report</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="tipe" class="form-label" id="labeltipe">Tipe Hari<strong class='text-danger'> *</strong></label>
                                        <select class="form-select" id="tipe" name="tipe">
                                            <option value="kerja" selected>Hari Kerja</option>
                                            <option value="libur">Hari Libur</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <label for="date_range" class="form-label">Tanggal <strong class="text-danger">*</strong></label>
                                        <input type="date" class="form-control" id="date_range"  placeholder="Pilih tanggal" hidden>
                                        <input type="date" class="form-control" id="dat" placeholder="Pilih tanggal" required>
                                        <p id="val"></p>
                                        <input type="hidden" class="form-control" id="id_talent" name="id_talent" value="{{ Auth::user()->id }}" required>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label id="durasimsk" for="durasi1" class="form-label">Jam Masuk<strong class='text-danger'> *</strong></label>
                                        <input type="Time" class="form-control" name="durasi1" id="durasi1" value="{{ old('durasi1') }}" required>
                                        <input type="hidden" class="form-control" id="durasi" name="durasi" required>
                                        <div class="invalid-feedback"></div>
                                        <p id="errorMsg"></p>
                                    </div>

                                    <div class="col-md-3 mb-3">
                                        <label id="durasiplg" for="durasi2" class="form-label">Jam Pulang<strong class='text-danger'> *</strong></label>
                                        <input type="Time" class="form-control" name="durasi2" id="durasi2" value="{{ old('durasi2') }}" required>
                                        <div class="invalid-feedback"></div>

                                    </div>
                                </div>

                                <div class="mt-3">
                                    <label for="deskripsi" class="form-label" id="labeldeskripsi">Deskripsi</label>
                                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
                                </div>

                                <div class="mt-3">
                                    <button type="button" class="btn btn-primary btn-with-circle float-end" onclick="goToStep(2)">
                                        NEXT
                                        <span class="circle-icon">
                                            <i class="bi bi-arrow-right"></i>
                                        </span>
                                    </button>
                                </div>
                            </div>

                            <!-- Justification Step -->
                            <div id="justification-part" class="content" role="tabpanel">
                                <div class="mb-3">
                                    <label for="justifikasi" class="form-label" id="labeljustifikasi">Approval & Agenda Justification</label>
                                    <input type="file" class="form-control" id="justifikasi" name="justifikasi" accept=".jpg,.png,.docx,.pdf,.jpeg">
                                </div>
                                <div class="mt-3">
                                    <label for="catatan_koreksi" class="form-label">Catatan</label>
                                    <textarea class="form-control" id="catatan_koreksi" name="catatan_koreksi" rows="3" placeholder="Catatan tambahan..."></textarea>
                                    <input type="hidden" id="longitude" name="longitude" required readonly>
                                    <input type="hidden" id="latitude" name="latitude" required readonly>
                                </div>
                                <div class="mb-3" style="margin-top:25px">
                                    <button type="button" class="btn btn-secondary btn-with-circle  float-start" onclick="goToStep(1)">
                                        <span class="circle-icon">
                                            <i class="bi bi-arrow-left"></i>
                                        </span>
                                        PREV
                                    </button>
                                    <button type="submit" class="btn btn-primary float-end text-white" style="margin-top:10px; color: white !important;" onclick="getLocation()">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Footer -->
            <div class="footer-container" style="position:s">
                <div class="footer-content">
                    © Copyright 2025 PT Jago Talenta Indonesia. All Rights Reserved
                </div>
            </div>

        </main>
    </div>
    </div>


    <!-- Scripts -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        let sideBar = document.querySelector("aside");
        let toggle = document.querySelector("#toggle");
        toggle.addEventListener("click", function(e) {
            if (sideBar.classList.contains("mini")) {
                sideBar.classList.remove("mini");
            } else {
                sideBar.classList.add("mini");
            }
        });

        function goToStep(step) {
            document.querySelectorAll('.step, .content').forEach(el => el.classList.remove('active'));
            document.querySelectorAll('.step')[step - 1].classList.add('active');
            document.querySelectorAll('.content')[step - 1].classList.add('active');
        }

        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition((position) => {
                    document.getElementById("latitude").value = position.coords.latitude;
                    document.getElementById("longitude").value = position.coords.longitude;
                });
            } else {
                alert("Geolocation tidak didukung di browser ini.");
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            const dateDaily = document.getElementById('dat');
            const dateWeekly = document.getElementById('date_range');
            let dateValidated = false;

            $('#dat').on('keydown paste', function (e) {
                e.preventDefault(); // Prevent typing
            });
            $('#date_range').on('keydown', function (e) {
                e.preventDefault(); // Prevent typing
            });
            

            flatpickr("#date_range", {
                mode: "range",
                dateFormat: "Y-m-d",
                onChange: function(selectedDates, dateStr, instance) {
                    if (dateValidated) {
                        validateDateInput(dateWeekly);
                    }
                }
            });
            flatpickr("#dat", {
                mode: "single",
                dateFormat: "Y-m-d",
                onChange: function(selectedDates, dateStr, instance) {
                    if (dateValidated) {
                        validateDateInput(dateDaily);
                    }
                }
            });

            console.log("jQuery Loaded:", typeof jQuery !== "undefined");
            console.log("DateRangePicker Loaded:", typeof $.fn.daterangepicker !== "undefined");
            if (typeof $.fn.daterangepicker !== "undefined") {
                $("#kt_daterangepicker_1").daterangepicker({
                    locale: { format: 'YYYY-MM-DD' }
                });
            } else {
                console.error("DateRangePicker is not available. Check script loading order.");
            }

            function datepicks() {
                if ($('#jenis').val() === "weekly_report") {
                    $('#date_range').prop('hidden', false).prop('required', true).val('');
                    $('#dat').prop('hidden', true).prop('required', false);
                    $('#date_range').prop('name', 'tanggal');
                    $('#dat').removeAttr('name');
                } else {
                    $('#date_range').prop('hidden', true).prop('required', false);
                    $('#dat').prop('hidden', false).prop('required', true).val('');
                    $('#dat').prop('name', 'tanggal');
                    $('#date_range').removeAttr('name');
                }

                if (dateValidated) {
                    validateDateInput($('#jenis').val() === "weekly_report" ? dateWeekly : dateDaily);
                }
            }
            datepicks();
            $('#jenis').on('change', datepicks);

            function spj() {
                let justifikasilabel = $('#labeljustifikasi');
                let strongTag = "<strong class='text-danger'> *</strong>";

                if ($('#jenis').val() === "spj" || $('#jenis').val() === "lembur") {
                    $('#justifikasi').prop('disabled', false).prop('required', true);
                    if (justifikasilabel.find("strong").length === 0) {
                        justifikasilabel.append(strongTag);
                    }
                } else {
                    $('#justifikasi').prop('disabled', true).val("").prop('required', false);
                    justifikasilabel.find("strong").remove();
                }
            }

            function desk() {
                $("#labeldeskripsi strong").remove();
                if ($('#jenis').val() == 'lembur' || $('#jenis').val() == 'spj' || $('#jenis').val() == 'cuti' || $('#jenis').val() == 'weekly_report' || $('#jenis').val() == 'sakit' || $('#jenis').val() == 'izin') {
                    $('#deskripsi').prop('disabled', false).prop('required', true);
                    $('#labeldeskripsi').append("<strong class='text-danger'> *</strong>");
                } else if ($('#jenis').val() == 'hadir') {
                    $('#deskripsi').prop('disabled', true).prop('required', false).val('');
                }
            }
            desk();
            $('#jenis').on('change', desk);


            spj();
            $('#jenis').on('change', spj);

            $("#jenis").change(function() {
                let selectedValue = $(this).val();
                $("#labeltipe strong, #durasimsk strong, #durasiplg strong").remove();

                if (selectedValue === "weekly_report") {
                    $("#tipe, #durasi1, #durasi2").prop("disabled", true).val("");
                    $("#justifikasi").prop("disabled", true).val("");
                } else if (selectedValue === "spj" || selectedValue === "hadir" || selectedValue === "lembur") {
                    $("#tipe,  #durasi1, #durasi2").prop("disabled", false);
                    $("#tipe,  #durasi1, #durasi2").prop("required", true);
                    $('#labeltipe, #durasimsk, #durasiplg').append("<strong class='text-danger'> *</strong>");
                    $("#tipe").val("kerja");
                } else if (selectedValue === "cuti" || selectedValue === "izin" || selectedValue === "sakit") {
                    $(" #durasi1, #durasi2").prop("disabled", true).val("");
                    $(" #durasi1, #durasi2").prop("required", false);
                    $('#labeltipe').append("<strong class='text-danger'> *</strong>");
                    $("#tipe").prop("disabled", false);
                    $("#tipe").prop("required", true);
                    $("#tipe").val("kerja");
                }
            });

            $('#jenis').change(function() {
                var selectedOption = $(this).val();
                var placeholderText = '';

                if (selectedOption == 'hadir') {
                    placeholderText = '';
                } else if (selectedOption == 'lembur') {
                    placeholderText = 'Jelaskan alasan Lembur...';
                } else if (selectedOption == 'sakit') {
                    placeholderText = 'Jelaskan alasan Sakit...';
                } else if (selectedOption == 'spj') {
                    placeholderText = 'Jelaskan alasan SPJ...';
                } else if (selectedOption == 'cuti') {
                    placeholderText = 'Jelaskan alasan Cuti...';
                } else if (selectedOption == 'weekly_report') {
                    placeholderText = 'Apa yang anda lakukan selama satu minggu';
                } else if (selectedOption == 'izin') {
                    placeholderText = 'Jelaskan alasan Izin...';
                }

                $('#deskripsi').attr('placeholder', placeholderText);
            });

            function updateCombinedText() { 
                let durasi1 = $('#durasi1').val();
                let durasi2 = $('#durasi2').val();
            
                if (!durasi1 || !durasi2) return; 
            
                let [h1, m1] = durasi1.split(':').map(Number);
                let [h2, m2] = durasi2.split(':').map(Number);
            
                let totalMinutes1 = h1 * 60 + m1;
                let totalMinutes2 = h2 * 60 + m2;
            
                if (totalMinutes1 > totalMinutes2) {
                    $('#errorMsg').text("Error: Start time cannot be greater than end time.").css("color", "red");
                    $('#durasi').val(""); 
                    return;
                } else {
                    $('#errorMsg').text(""); 
                }
            
                let diffMinutes = totalMinutes2 - totalMinutes1;
            
                let hours = Math.floor(diffMinutes / 60);
                let minutes = diffMinutes % 60;
            
                let result = String(hours).padStart(2, '0') + ":" + String(minutes).padStart(2, '0');
            
                $('#durasi').val(result); 
            }

            $('#durasi1, #durasi2').on('input', updateCombinedText);

    function validateDateInput(input) {
        let isValid = false;

        if ($('#jenis').val() === "weekly_report") {
            // Pastikan ada value, lalu cek panjangnya
            if (input.value && input.value.length === 24) {
                isValid = true;
            } else {
                isValid = false;
            }
        } else {
            // Untuk date picker biasa, cukup pastikan ada value
            isValid = !!input.value;
        }

        // Update tampilan input
        if (isValid) {
            input.classList.remove('is-invalid');
            input.classList.add('is-valid');
        } else {
            input.classList.remove('is-valid');
            input.classList.add('is-invalid');
        }
        return isValid;
    }

    const form = document.getElementById('improvedForm');
    form.addEventListener('submit', function(event) {
        event.preventDefault();

        // Tambahkan kelas 'was-validated' segera agar validasi bawaan muncul di semua input
        form.classList.add('was-validated');
        dateValidated = true;

        // Validasi custom untuk input tanggal
        let inputToValidate = $('#jenis').val() === "weekly_report" ? dateWeekly : dateDaily;
        let customValid = validateDateInput(inputToValidate);

        // Validasi bawaan HTML untuk seluruh form (termasuk input lain)
        let builtInValid = form.checkValidity();

        // Jika salah satu validasi gagal, tampilkan error dan hentikan submit
        if (!customValid || !builtInValid) {
            event.stopPropagation();
            Swal.fire({
                text: "Data yang anda masukkan tidak valid!",
                icon: "error",
                buttonsStyling: false,
                confirmButtonText: "Kembali",
                customClass: {
                    confirmButton: "btn btn-secondary"
                }
            });
            return;
        }

        // Jika semua valid, minta konfirmasi pengiriman form
        Swal.fire({
            title: "Apakah anda yakin?",
            text: "Anda akan mengirim form ini.",
            icon: "question",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            cancelButtonText: "Batal",
            confirmButtonText: "Ya"
        }).then((result) => {
            if (result.isConfirmed) {
                getLocation();
                form.submit();
                Swal.fire({
                    title: "Terkirim!",
                    text: "Form anda telah terkirim.",
                    icon: "success"
                });
            }
        });
    });
        });
    </script>
</body>
</html>
</body>
</html>

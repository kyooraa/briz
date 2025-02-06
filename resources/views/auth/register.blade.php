<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="nama_lengkap" :value="__('Nama Lengkap')" />
            <x-text-input id="nama_lengkap" class="block mt-1 w-full" type="text" name="nama_lengkap" :value="old('nama_lengkap')" required autofocus autocomplete="nama_lengkap" />
            <x-input-error :messages="$errors->get('nama_lengkap')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- No Telp -->
        <div class="mt-4">
            <x-input-label for="no_telepon" :value="__('No Telepon')" />
            <x-text-input id="no_telepon" class="block mt-1 w-full" type="text" name="no_telepon" :value="old('no_telepon')" required autofocus autocomplete="no_telepon" />
            <x-input-error :messages="$errors->get('no_telepon')" class="mt-2" />
        </div>
        
        <!-- Tanggal Lahir -->
        <div class="mt-4">
            <x-input-label for="tanggal_lahir" :value="__('Tanggal Lahir')" />
            <x-text-input id="tanggal_lahir" class="block mt-1 w-full" type="date" name="tanggal_lahir" :value="old('tanggal_lahir')" required autofocus autocomplete="tanggal_lahir" />
            <x-input-error :messages="$errors->get('tanggal_lahir')" class="mt-2" />
        </div> 

        <!-- Pendidikan Terakhir -->
        <div class="mt-4">
            <x-input-label for="pendidikan_terakhir" :value="__('Pendidikan Terakhir')" />
            <x-text-input id="pendidikan_terakhir" class="block mt-1 w-full" type="text" name="pendidikan_terakhir" :value="old('pendidikan_terakhir')" required autofocus autocomplete="pendidikan_terakhir" />
            <x-input-error :messages="$errors->get('pendidikan_terakhir')" class="mt-2" />
        </div> 

        <!-- Nama Institusi -->
        <div class="mt-4">
            <x-input-label for="nama_institusi" :value="__('Nama Institusi')" />
            <x-text-input id="nama_institusi" class="block mt-1 w-full" type="text" name="nama_institusi" :value="old('nama_institusi')" required autofocus autocomplete="nama_institusi" />
            <x-input-error :messages="$errors->get('nama_institusi')" class="mt-2" />
        </div> 

        <!-- Nama Fakultas -->
        <div class="mt-4">
            <x-input-label for="fakultas" :value="__('Nama Fakultas')" />
            <x-text-input id="fakultas" class="block mt-1 w-full" type="text" name="fakultas" :value="old('fakultas')" required autofocus autocomplete="fakultas" />
            <x-input-error :messages="$errors->get('fakultas')" class="mt-2" />
        </div> 

        <!-- Keahlian -->
        <div class="mt-4">
            <x-input-label for="keahlian" :value="__('Keahlian')" />
            <x-text-input id="keahlian" class="block mt-1 w-full" type="text" name="keahlian" :value="old('keahlian')" required autofocus autocomplete="keahlian" />
            <x-input-error :messages="$errors->get('keahlian')" class="mt-2" />
        </div> 

        <!-- Gaji Harapan -->
        <div class="mt-4">
            <x-input-label for="gaji_harapan" :value="__('Gaji Harapan')" />
            <x-text-input id="gaji_harapan" class="block mt-1 w-full" type="text" name="gaji_harapan" :value="old('gaji_harapan')" required autofocus autocomplete="gaji_harapan" />
            <x-input-error :messages="$errors->get('gaji_harapan')" class="mt-2" />
        </div> 

        <!-- File CV -->
        <div class="mt-4">
            <x-input-label for="file_cv" :value="__('File CV')" />
            <x-text-input id="file_cv" class="block mt-1 w-full" type="text" name="file_cv" :value="old('file_cv')" required autofocus autocomplete="file_cv" />
            <x-input-error :messages="$errors->get('file_cv')" class="mt-2" />
        </div> 

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>


        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

@extends('layouts.app')

@section('content')
<div class="mt-5 container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header bg-primary text-white text-center rounded-top-4 p-3">
                    <h3 class="mb-0 fw-bold">{{ $title ?? 'Edit Data Mahasiswa' }}</h3>
                </div>

                <div class="card-body p-4 p-md-5">
                    {{-- Tombol Kembali --}}
                    <a href="{{ route('user.index') }}" class="btn btn-outline-secondary mb-4 rounded-pill">
                        <i class="bi bi-arrow-left me-2"></i> Kembali ke Daftar User
                    </a>

                    {{-- Form Edit User --}}
                    <form action="{{ route('user.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        {{-- Nama --}}
                        <div class="mb-4">
                            <label for="nama" class="form-label fw-semibold">Nama Lengkap</label>
                            <input 
                                type="text" 
                                class="form-control rounded-3 @error('nama') is-invalid @enderror" 
                                id="nama" 
                                name="nama" 
                                value="{{ old('nama', $user->nama) }}" 
                                placeholder="Masukkan nama lengkap" 
                                required
                            >
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- NIM --}}
                        <div class="mb-4">
                            <label for="nim" class="form-label fw-semibold">NIM</label>
                            <input 
                                type="text" 
                                class="form-control rounded-3 @error('nim') is-invalid @enderror" 
                                id="nim" 
                                name="nim" 
                                value="{{ old('nim', $user->nim) }}" 
                                placeholder="Masukkan Nomor Induk Mahasiswa" 
                                required
                            >
                            @error('nim')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Kelas --}}
                        <div class="mb-5">
                            <label for="kelas_id" class="form-label fw-semibold">Kelas</label>
                            <select 
                                class="form-select rounded-3 @error('kelas_id') is-invalid @enderror" 
                                id="kelas_id" 
                                name="kelas_id" 
                                required
                            >
                                <option value="">Pilih Kelas</option>
                                @foreach ($kelas as $k)
                                    <option value="{{ $k->id }}" 
                                        {{ old('kelas_id', $user->kelas_id) == $k->id ? 'selected' : '' }}>
                                        {{ $k->nama_kelas }}
                                    </option>
                                @endforeach
                            </select>
                            @error('kelas_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Tombol Submit --}}
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-lg rounded-pill shadow-sm">
                                <i class="bi bi-save me-2"></i> Simpan Perubahan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

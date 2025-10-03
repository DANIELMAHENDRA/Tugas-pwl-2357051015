@extends('layouts.app')

@section('content')
<div class="mt-5 position-relative">

    {{-- Page Header --}}
    <div class="text-center mb-5">
        <h1 class="fw-bold text-primary display-5">Daftar User</h1>
        <p class="text-secondary fs-6">Berikut adalah daftar user yang sudah terdaftar di sistem</p>
    </div>

    {{-- User Table Card --}}
    <div class="card shadow-sm rounded-4 border-0">
        <div class="card-header p-3" style="background: linear-gradient(90deg, #74b9ff, #0984e3);">
            <h5 class="mb-0 text-white fw-semibold">Tabel Data User</h5>
        </div>
        <div class="card-body p-0">
            <table class="table align-middle mb-0">
                <thead class="text-white" style="background: linear-gradient(90deg, #0984e3, #74b9ff);">
                    <tr>
                        <th scope="col" class="text-center py-3">ID</th>
                        <th scope="col" class="py-3">Nama</th>
                        <th scope="col" class="text-center py-3">NIM</th>
                        <th scope="col" class="text-center py-3">Kelas</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                        <tr class="border-bottom hover-shadow" style="transition: background-color .3s;">
                            <td class="text-center py-3 fw-semibold">{{ $user->id }}</td>
                            <td class="py-3">{{ $user->nama }}</td>
                            <td class="text-center py-3">{{ $user->nim }}</td>
                            <td class="text-center py-3">
                                <span class="badge rounded-pill bg-gradient"
                                      style="background: #2d98da; cursor: default; transition: background-color 0.3s;"
                                      onmouseover="this.style.background='#0a74da';"
                                      onmouseout="this.style.background='#2d98da';">
                                    {{-- tampil sesuai input database --}}
                                    {{ $user->kelas }}
                                </span>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center text-muted py-5 fst-italic">Belum ada data user</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    {{-- Floating Add User Button --}}
    <a href="{{ url('/create') }}"
       class="btn btn-primary btn-lg rounded-circle shadow-lg position-fixed"
       style="bottom: 30px; right: 30px; width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;"
       title="Tambah User"
       aria-label="Tambah User">
        <i class="bi bi-person-plus-fill fs-3"></i>
    </a>

</div>
@endsection

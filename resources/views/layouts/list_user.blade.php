@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-header bg-primary text-white text-center py-3 rounded-top-4">
            <h3 class="mb-0 fw-bold">{{ $title }}</h3>
        </div>
        <div class="card-body">
            <div class="d-flex justify-content-end mb-3">
                <a href="{{ route('user.create') }}" class="btn btn-success">
                    <i class="bi bi-plus-circle"></i> Tambah User
                </a>
            </div>

            <div class="table-responsive">
                <table class="table table-hover align-middle text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Kelas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $index => $user)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td class="fw-semibold text-start">{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <span class="badge bg-info text-dark px-3 py-2">
                                    {{ $user->nama_kelas }}
                                </span>
                            </td>
                            <td>
                                <a href="#" class="btn btn-warning btn-sm me-1">
                                    <i class="bi bi-pencil-square"></i> Edit
                                </a>
                                <a href="#" class="btn btn-danger btn-sm me-1">
                                    <i class="bi bi-trash3"></i> Hapus
                                </a>
                                <a href="{{ route('user.profile', $user->id) }}" class="btn btn-info btn-sm text-white">
                                    <i class="bi bi-person-circle"></i> Profil
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted py-4">
                                <i class="bi bi-exclamation-circle"></i> Belum ada data pengguna.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

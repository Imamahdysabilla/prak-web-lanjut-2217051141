@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-header bg-primary text-white text-center py-3 rounded-top-4">
            <h3 class="mb-0 fw-bold">Tambah Pengguna Baru</h3>
        </div>
        <div class="card-body p-4">
            <form action="{{ route('user.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label fw-semibold">Nama Lengkap</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Masukkan nama lengkap" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label fw-semibold">Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Masukkan email" required>
                </div>

                <div class="mb-3">
                    <label for="kelas_id" class="form-label fw-semibold">Kelas</label>
                    <select name="kelas_id" id="kelas_id" class="form-select" required>
                        <option value="" disabled selected>Pilih Kelas</option>
                        @foreach ($kelas as $kelasItem)
                            <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-success px-4">
                        <i class="bi bi-check-circle"></i> Simpan
                    </button>
                    <a href="{{ url('/user') }}" class="btn btn-secondary px-4">
                        <i class="bi bi-arrow-left"></i> Kembali
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

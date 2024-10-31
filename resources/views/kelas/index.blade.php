<!-- resources/views/kelas/index.blade.php -->
@extends('layouts.main')

@section('title', 'Daftar Kelas')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <div class="row">
        <div class="col-lg-12 col-xs-12">
            <div class="d-flex justify-content-between mb-4">
                <h1>Daftar Kelas</h1>
                <a href="{{ route('kelas.create') }}" class="btn btn-primary">Tambah Kelas</a>
            </div>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kelas</th>
                        <th>Wali Kelas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kelas as $key => $kls)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $kls->nama_kelas }}</td>
                        <td>{{ $kls->wali_kelas }}</td>
                        <td>
                            <a href="{{ route('kelas.edit', $kls->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('kelas.destroy', $kls->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

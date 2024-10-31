<!-- resources/views/kelas/form.blade.php -->
@extends('layouts.main')

@section('title', isset($kelas) ? 'Edit Kelas' : 'Tambah Kelas')

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
<h1>{{ isset($kelas) ? 'Edit Kelas' : 'Tambah Kelas' }}</h1>

<form action="{{ isset($kelas) ? route('kelas.update', $kelas->id) : route('kelas.store') }}" method="POST">
    @csrf
    @if(isset($kelas))
        @method('PUT')
    @endif

    <div class="mb-3">
        <label for="nama_kelas" class="form-label">Nama Kelas</label>
        <input type="text" name="nama_kelas" id="nama_kelas" class="form-control" value="{{ old('nama_kelas', $kelas->nama_kelas ?? '') }}" required>
    </div>

    <div class="mb-3">
        <label for="wali_kelas" class="form-label">Wali Kelas</label>
        <input type="text" name="wali_kelas" id="wali_kelas" class="form-control" value="{{ old('wali_kelas', $kelas->wali_kelas ?? '') }}">
    </div>

    <button type="submit" class="btn btn-primary">{{ isset($kelas) ? 'Update' : 'Simpan' }}</button>
    <a href="{{ route('kelas.index') }}" class="btn btn-secondary">Batal</a>
</form>
            </div>
        </div></div>
</div>

@endsection

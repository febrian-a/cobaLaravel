@extends('layout.main')

@section('title', 'Form Edit Data Siswa')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Edit Data Siswa</h1>
        
            <form method="post" action="/students/{{ $student->id }}">
                @method('patch')
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama" value="{{ $student->nama }}">
                </div>
                <div class="form-group">
                    <label for="nis">NIS</label>
                    <input type="text" class="form-control" id="nis" placeholder="Masukkan NIS" name="nis" value="{{ $student->nis }}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" placeholder="Masukkan Email" name="email" value="{{ $student->email }}">
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" class="form-control" id="jurusan" placeholder="Masukkan Jurusan" name="jurusan" value="{{ $student->jurusan }}">
                </div>
                <button type="submit" class="btn btn-primary">Edit Data</button>
            </form>

        </div>
     </div>
</div>
@endsection


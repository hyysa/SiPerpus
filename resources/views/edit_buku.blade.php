@extends('Layout.master')
@section('title','Edit Buku | SIPERPUS')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Edit Buku</h1>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<section class="content">
<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <!-- Default box -->
      <div class="card">
        <div class="card-body">
            <form action="/update_buku/{{ $data_buku->kode_buku }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputKodebuku" class="form-label">Kode Buku</label>
                <input type="text" name="kode_buku" class="form-control" id="exampleInputKodebuku" aria-describedby="emailHelp" required value="{{ $data_buku->kode_buku }}">
                    <div id="emailHelp" class="form-text">Masukkan kode buku yang ada pada buku.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputJudulbuku" class="form-label">Judul Buku</label>
                    <input type="text" name="judul_buku" class="form-control" id="exampleInputJudulbuku" required value="{{ $data_buku->judul_buku }}">
                </div>
                <label for="exampleInputJudulbuku" class="form-label">Penerbit dan Tahun Terbit</label>
                <div class="input-group mb-3">
                    <input type="text" name="penerbit" class="form-control" placeholder="Penerbit" aria-label="Penerbit" required value="{{ $data_buku->penerbit }}">
                    <input type="number" name="tahun" class="form-control" placeholder="Tahun terbit" aria-label="Tahun terbit" required value="{{ $data_buku->tahun }}">
                </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
      </div>
      <!-- /.card -->
    </div>
  </div>
</div>
</section>
@endsection
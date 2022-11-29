@extends('Layout.master')
@section('title','Laporan | SIPERPUS')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Laporan</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="callout callout-info">
            <h5><i class="fas fa-info"></i> Catatan:</h5>
            Klik tombol cetak untuk mencetak laporan dari daftar buku di Sistem Informasi Perpustakaan (SIPERPUS).
          </div>


          <!-- Main content -->
          <div class="invoice p-3 mb-3">
            <!-- title row -->
            <div class="row">
              <div class="col-12">
                <h4>
                  <i class="fas fa-book"></i> SIPERPUS
                </h4>
              </div>
              <!-- /.col -->
            </div>

            <!-- Table row -->
            <div class="row">
              <div class="col-12 table-responsive">
                <table class="table table-hover">
                  <thead>
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Kode Buku</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Penerbit</th>
                    <th scope="col">Tahun</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ( $laporan as $buku)
                  <tr>
                  <td scope="row">{{ $loop->iteration }}</td>
                  <td>{{ $buku->kode_buku }}</td>
                  <td>{{ $buku->judul_buku }}</td>
                  <td>{{ $buku->penerbit }}</td>
                  <td>{{ $buku->tahun }}</td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.col -->
            </div>

            <!-- this row will not appear when printing -->
            <div class="row no-print">
              <div class="col-12">
                <a href="/cetak_laporan" rel="noopener" target="_blank" class="btn btn-primary float-right"><i class="fas fa-print"></i> Cetak</a>
              </div>
            </div>
          </div>
          <!-- /.invoice -->
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
@endsection
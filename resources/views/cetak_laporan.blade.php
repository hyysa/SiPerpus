<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('') }}assets/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Cetak Laporan | SIPERPUS</title>
  </head>
  <body>
      <br>
        <h3 class="text-center">
                SISTEM INFORMASI PERPUSTAKAAN<br>
                TAHUN 2020-2021
        </h3>
        <h5 class="text-center">LAPORAN DATA BUKU</h5>
        <hr>
    <table class="table table-bordered table-hover">
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
        @foreach($cetak_laporan as $buku)
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
    <script src="{{ asset('') }}assets/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>
<!-- script mencetak laporan data siswa -->
<script>
window.print();
</script>
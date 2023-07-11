<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Student Excel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <table class="table">
          <thead>
            <tr>
              <th>Jenjang</th>
              <th>Jenis Pendaftaran</th>
              <th>Pesantren</th>
              <th>Nama Lengkap</th>
              <th>NISN</th>
              <th>Jenis Kelamin</th>
              <th>Tempat Tanggal Lahir</th>
              <th>Nomor Whatsapp</th>
              <th>Alamat Lengkap</th>
              <th>Nama Ayah</th>
              <th>Nama Ibu</th>
              <th>Asal Sekolah</th>
              <th>Tanggal Daftar Online</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $item)
              <tr>
                <td>{{ $item->jenjang == 1 ? 'MA' : 'MTs' }}</td>
                <td>{{ $item->jenis_pendaftaran == 1 ? 'Siswa Baru' : 'Pindahan' }}</td>
                <th>{{ $item->fullname }}</th>
                <td>{{ $item->nisn }}</td>
                <td>{{ $item->gender == 1 ? 'Laki-laki' : 'Perempuan' }}</td>
                <td>{{ $item->born_place}}, {{ \Carbon\Carbon::parse($item->born_date)->translatedFormat('d F Y')  }}</td>
                <td>{{ $item->nama_ayah }}</td>
                <td>{{ $item->nama_ibu }}</td>
                <td>{{ $item->asal_sekolah }}</td>
                <td>{{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('d F Y')  }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="id">
<head>
  <title>Dokumentasi Tipografi Indonesia</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style>
    body {
      font-family: 'Segoe UI', Helvetica, Arial, sans-serif;
      font-weight: 300;
      color: #555;
      line-height: 1.6;
      padding: 40px 20px;
      background-color: #fdfdfd;
    }
    .container-custom {
      max-width: 900px;
      margin: auto;
      background: white;
      padding: 30px;
      border: 1px solid #eee;
    }
    h1, h2, h3, h4, h5, h6 {
      font-weight: 200;
      color: #222;
      margin-top: 30px;
    }
    div[class] {
      margin-bottom: 50px;
      padding-bottom: 20px;
      border-bottom: 1px solid #f2f2f2;
    }
    div[class]:last-child { border-bottom: none; }
    mark { background-color: #fff3cd; padding: 2px 5px; }
    kbd { background-color: #333; }
    pre {
      background: #f8f9fa;
      border: 1px solid #eee;
      border-left: 3px solid #ccc;
      border-radius: 0;
    }
    .bg-primary, .bg-success, .bg-info, .bg-warning, .bg-danger {
      padding: 15px;
      margin: 5px 0;
      font-weight: 400;
    }
  </style>
</head>
<body>

<div class="container-custom">

    <div class="Judul">
        <h1 class="text-center">Typography</h1>
        <h5 class="text-center">Mukhammad Bagas Aditya - 5026241011</h5>
    </div>

  <div class="heading">
    <h1>H1 Judul Utama (36px)</h1>
    <h2>H2 Judul Sekunder (30px)</h2>
    <h3>H3 Sub-judul (24px)</h3>
    <h4>H4 Judul Kecil (18px)</h4>
    <h5>H5 Judul Sangat Kecil (14px)</h5>
    <h6>H6 Judul Minimal (12px)</h6>
  </div>

  <div class="lighter">
    <h1>Teks Sekunder Halus</h1>
    <p>Elemen <code>small</code> digunakan untuk menciptakan teks tambahan yang lebih ringan di dalam judul:</p>
    <h1>Judul H1 <small>teks tambahan</small></h1>
    <h2>Judul H2 <small>teks tambahan</small></h2>
    <h3>Judul H3 <small>teks tambahan</small></h3>
  </div>

  <div class="highlight">
    <h1>Menyorot Teks</h1>
    <p>Gunakan elemen <code>mark</code> untuk <mark>menyoroti</mark> kata atau kalimat penting.</p>
  </div>

  <div class="abbreviations">
    <h1>Singkatan (Abbreviations)</h1>
    <p>Elemen <code>abbr</code> digunakan untuk menandai singkatan atau akronim:</p>
    <p><abbr title="Badan Meteorologi, Klimatologi, dan Geofisika">BMKG</abbr> didirikan pada tahun 1866.</p>
  </div>

  <div class="blockquotes">
    <h1>Kutipan (Blockquotes)</h1>
    <p>Digunakan untuk menampilkan konten yang berasal dari sumber lain:</p>
    <blockquote>
      <p>Selama lebih dari 50 tahun, WWF telah melindungi masa depan alam. Organisasi konservasi terkemuka di dunia yang bekerja di 100 negara.</p>
      <footer>Dari situs web resmi WWF</footer>
    </blockquote>
  </div>

  <div class="blockquote-reverse">
    <h1>Kutipan Rata Kanan</h1>
    <p>Gunakan kelas <code>.blockquote-reverse</code> untuk mengarahkan kutipan ke kanan:</p>
    <blockquote class="blockquote-reverse">
      <p>Pendidikan adalah senjata paling ampuh yang dapat Anda gunakan untuk mengubah dunia.</p>
      <footer>Nelson Mandela</footer>
    </blockquote>
  </div>

  <div class="dl">
    <h1>Daftar Deskripsi</h1>
    <p>Elemen <code>dl</code> menunjukkan daftar deskripsi barang:</p>
    <dl>
      <dt>Kopi Hitam</dt>
      <dd>- minuman panas berwarna gelap</dd>
      <dt>Susu Segar</dt>
      <dd>- minuman dingin berwarna putih</dd>
    </dl>
  </div>

  <div class="code">
    <h1>Potongan Kode</h1>
    <p>Gunakan elemen <code>code</code> untuk cuplikan kode dalam baris:</p>
    <p>Elemen HTML berikut: <code>span</code>, <code>section</code>, dan <code>div</code> mendefinisikan bagian dalam dokumen.</p>
  </div>

  <div class="kdb">
    <h1>Input Keyboard</h1>
    <p>Gunakan elemen <code>kbd</code> untuk menunjukkan input tombol keyboard:</p>
    <p>Gunakan <kbd>ctrl + p</kbd> untuk membuka kotak dialog cetak.</p>
  </div>

  <div class="multiple-code-lines">
      <h1>Baris Kode Ganda</h1>
      <p>Untuk kode beberapa baris, gunakan elemen <code>pre</code>:</p>
      <pre>
        Teks dalam elemen pre
        ditampilkan dengan font lebar tetap,
        menjaga spasi dan
        jeda baris sesuai aslinya.
      </pre>
  </div>

  <div class="contextual-colors">
    <h2>Warna Kontekstual</h2>
    <p>Gunakan kelas kontekstual untuk memberikan "makna melalui warna":</p>
    <p class="text-muted">Teks ini diredam (muted).</p>
    <p class="text-primary">Teks ini bersifat utama/penting.</p>
    <p class="text-success">Teks ini menandakan keberhasilan.</p>
    <p class="text-info">Teks ini mewakili sebuah informasi.</p>
    <p class="text-warning">Teks ini mewakili sebuah peringatan.</p>
    <p class="text-danger">Teks ini mewakili sebuah bahaya.</p>
  </div>

  <div class="contextual-backgrounds">
    <h2>Latar Belakang Kontekstual</h2>
    <p>Gunakan kelas latar belakang untuk memberikan penekanan visual:</p>
    <p class="bg-primary">Latar belakang biru informasi utama.</p>
    <p class="bg-success">Latar belakang hijau tanda sukses.</p>
    <p class="bg-info">Latar belakang biru muda informasi.</p>
    <p class="bg-warning">Latar belakang kuning peringatan.</p>
    <p class="bg-danger">Latar belakang merah tanda bahaya.</p>
  </div>

  <div class="lead">
    <h2>Tipografi Utama (Lead)</h2>
    <p>Gunakan kelas <code>.lead</code> untuk membuat paragraf lebih menonjol:</p>
    <p class="lead">Paragraf ini terlihat lebih besar dan menonjol.</p>
    <p>Ini adalah paragraf biasa sebagai perbandingan.</p>
  </div>

  <div class="small">
      <h2>Teks Kecil</h2>
      <p>Gunakan kelas <code>.small</code> untuk mengecilkan ukuran teks:</p>
      <p class="small">Paragraf ini berukuran lebih kecil dari standar.</p>
      <p>Ini adalah paragraf biasa.</p>
  </div>

  <div class="aligned-text">
    <h2>Penyelarasan Teks</h2>
    <p class="text-left">Teks rata kiri.</p>
    <p class="text-right">Teks rata kanan.</p>
    <p class="text-center">Teks rata tengah.</p>
    <p class="text-justify">Teks rata kiri-kanan (justified) untuk paragraf yang panjang agar terlihat rapi di kedua sisi.</p>
    <p class="text-nowrap">Teks tanpa pembungkus baris otomatis.</p>
  </div>

  <div class="lowercase-uppercase-capitalize">
    <h2>Transformasi Huruf</h2>
    <p class="text-lowercase">teks huruf kecil semua.</p>
    <p class="text-uppercase">TEKS HURUF BESAR SEMUA.</p>
    <p class="text-capitalize">teks huruf kapital di setiap kata.</p>
  </div>

  <div class="abbreviations-initialism">
    <h2>Singkatan Kecil</h2>
    <p>Singkatan normal: <abbr title="World Health Organization">WHO</abbr>.</p>
    <p>Singkatan lebih kecil: <abbr title="World Health Organization" class="initialism">WHO</abbr>.</p>
  </div>

  <div class="list-unstyled">
    <h2>Daftar Tanpa Gaya</h2>
    <p>Kelas <code>.list-unstyled</code> menghapus bullet point bawaan:</p>
    <ul class="list-unstyled">
      <li>Kopi Hitam</li>
      <li>Teh Manis
        <ul>
          <li>Teh Hijau</li>
          <li>Teh Melati</li>
        </ul>
      </li>
      <li>Susu Sapi</li>
    </ul>
  </div>

  <div class="list-inline">
    <h2>Daftar Sejajar (Inline)</h2>
    <p>Kelas <code>.list-inline</code> menempatkan semua item dalam satu baris:</p>
    <ul class="list-inline">
      <li>Beranda</li>
      <li>Tentang Kami</li>
      <li>Layanan</li>
      <li>Kontak</li>
    </ul>
  </div>

  <div class="dl-horizontal">
    <h2>Daftar Deskripsi Horizontal</h2>
    <p>Gunakan <code>.dl-horizontal</code> agar deskripsi tampil bersisian:</p>
    <dl class="dl-horizontal">
      <dt>Espresso</dt>
      <dd>Kopi pekat murni tanpa campuran susu.</dd>
      <dt>Latte</dt>
      <dd>Kopi dengan campuran susu yang dominan.</dd>
    </dl>
  </div>

  <div class="scrollable-pre">
    <h2>Area Kode Gulir</h2>
    <p>Jika Anda menambahkan kelas <code>.pre-scrollable</code>, elemen akan memiliki tinggi maksimal 350px dan muncul scrollbar:</p>
    <pre class="pre-scrollable">
        Baris 1: Log sistem dimulai...
        Baris 2: Memuat modul tipografi...
        Baris 3: Menghubungkan ke server...
        Baris 4: Status OK.
        Baris 5: Data diproses.
        Baris 6: Menampilkan hasil...
    </pre>
  </div>

</div>

</body>
</html>

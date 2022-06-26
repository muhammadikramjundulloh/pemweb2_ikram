



<html>
    <head>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    <body>
  <h3>Form Nilai Siswa</h3>
  <hr>
  <form action="nilai_siswa.php" method="post"style='width:50%; text-align:right;margin-left: 20px; margin-top : 100px'>

  <div class="form-group row" >
    <label for="" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <input id="" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="select" name="matkul" class="custom-select">
        <option value="ddp">Dasar dasar pemrograma</option>
        <option value="pw">Pemrograman Web</option>
        <option value="jk">Jaringan Komputer</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="text1" name="nilai_uts" placeholder="NIlai UTS" type="number" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="text" name="nilai_uas" placeholder="Nilai UAS" type="number" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">Nilai Tugas Praktikum</label> 
    <div class="col-8">
      <input id="text2" name="nilai_tugas" placeholder="Nilai Tugas Praktikum" type="number" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" class="btn btn-primary">Simpan</button>
    </div>
  </div>
</form>


    </body>
</html>

<!-- <?php
$proses = $_GET['proses'];
$nama_siswa = $_GET['nama'];
$mata_kuliah = $_GET['matkul'];
$nilai_uts = $_GET['nilai_uts'];
$nilai_uas = $_GET['nilai_uas'];
$nilai_tugas = $_GET['nilai_tugas'];

echo 'Proses : '.$proses;
echo '<br> Nama:'.$nama_siswa;
echo '<br> Nilai Uts:'.$nilai_uas;
echo '<br> Nilai Uas:'.$nilai_uas;
echo '<br> Nilai Tugas: '.$nilai_tugas;



?> -->
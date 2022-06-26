<?php
$proses = $_POST['proses'];
$nama_siswa = $_POST['nama'];
$mata_kuliah = $_POST['matkul'];
$nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];
$nilai_tugas = $_POST['nilai_tugas'];
$jumlah = $nilai_tugas + $nilai_uas + $nilai_tugas;
$persen= $jumlah/ 3;
    echo 'Proses : '.$proses;
    echo '<br> Nama:'.$nama_siswa;
    echo '<br> Nilai Uts:'.$nilai_uts;
    echo '<br> Nilai Uas:'.$nilai_uas;
    echo '<br> Nilai Tugas: '.$nilai_tugas;
    echo '<br> Jumlah :'.$jumlah;
    echo '<br> Hasil Akhir :'.$persen;
    

    if($persen <= 55){
        echo'<br>Anda Tidak LULUS!';
    }else{
        echo'<br>Selamat Anda LULUS!';
    };

    if($persen <= 35 ){
        $predikat='E';
    }elseif($persen <= 55 ){
       $predikat='D';
    }elseif($persen <= 69 ){
       $predikat='C';
    }elseif($persen <= 84){
       $predikat='B';
    }elseif($persen <= 0 ){
       $predikat='I';
    }elseif($persen >= 101 ){
       $predikat='I';
    }else{
       $predikat='A';
    }
    echo '<br> Predikat:'.$predikat;


    switch($predikat){
        case 'A':
            echo'<br> Sangat Memuaskan :)';
        break;
        case 'B':
            echo'<br> Memuaskan :)';
        break;
        case 'C':
            echo'<br> cukup :|';
        break;
        case 'D':
            echo'<br> Kurang :(';
        break;
        case 'E':
            echo'<br> Sangat Kurang :(';
        break;
        default:
            echo'<br>Tidak Ada ';
    }

    


?>
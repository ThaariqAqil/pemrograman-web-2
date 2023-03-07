<?php
require_once 'fucntion.php'
$proses = $_POST['proses'];
$nama_siswa = $_POST['name'];
$mata_kuliah = $_POST['matkul'];
$uts = $_POST['nilai_uts'];
$uas = $_POST['nilai_uas'];
$tugas = $_POST['nilai_tugas'];
$_nilai = $nilai_uts + $nilai_uas + $nilai_uas / 3;
$hasil_ujian = kelulusan($_nilai);

if(!empty($proses)) {
echo "nama : $nama_siswa";
echo "<br/>Mata Kuliah : $mata_kuliah";
echo "<br/>Nilai UTS : $uts";
echo "<br/>Nilai UAS : $uas";
echo "<br/>Nilai Tugas Praktikum : $tugas";
echo "br/>Keterangan : $hasil_ujian";
echo "<br/>Data telah di $proses";
}
?>
<?php
function daftar_presensi($ambalan,$angkatan){
    global $connect;
    $quotes_qry="SELECT * FROM cyi_presensi WHERE ambalan = $ambalan AND angkatan = $angkatan";
    return $result=mysqli_query($connect,$quotes_qry); 
}
function detail_presensi($id){
    global $connect;
    $query="SELECT * FROM cyi_presensi WHERE id='".$id."'";
    return mysqli_fetch_array(mysqli_query($connect,$query));
}
function tambah_presensi($data){
    Insert('cyi_presensi', $data);
}
function edit_presensi($data, $where){
    Update('cyi_presensi', $data, $where);
}
function hapus_presensi($where){
    Delete('cyi_presensi', $where);
}
?>
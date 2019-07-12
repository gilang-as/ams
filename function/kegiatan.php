<?php
function daftar_kegiatan($angkatan, $ambalan){
    global $connect;
    $quotes_qry="SELECT * FROM cyi_kegiatan WHERE angkatan='".$angkatan."' AND ambalan='".$ambalan."'";
    return $result=mysqli_query($connect,$quotes_qry); 
}
function detail_kegiatan($angkatan, $ambalan, $id){
    global $connect;
    $query="SELECT * FROM cyi_kegiatan WHERE angkatan='".$angkatan."' AND ambalan='".$ambalan."' AND id='".$id."'";
    return mysqli_fetch_array(mysqli_query($connect,$query));
}
function tambah_kegiatan($data){
    Insert('cyi_kegiatan', $data);
}
function edit_kegiatan($data, $where){
    Update('cyi_kegiatan', $data, $where);
}
function hapus_kegiatan($where){
    Delete('cyi_kegiatan', $where);
}
?>
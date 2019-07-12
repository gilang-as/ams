<?php
function daftar_kegiatan($angkatan){
    global $connect;
    $quotes_qry="SELECT * FROM cyi_kegiatan WHERE angkatan='".$angkatan."'";
    return $result=mysqli_query($connect,$quotes_qry); 
}
function detail_kegiatan($angkatan, $id){
    global $connect;
    $query="SELECT * FROM cyi_kegiatan WHERE angkatan='".$angkatan."' and id='".$id."'";
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
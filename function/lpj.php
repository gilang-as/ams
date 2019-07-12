<?php
function daftar_lpj($angkatan, $ambalan){
    global $connect;
    $quotes_qry="SELECT cyi_kegiatan.nama, cyi_lpj.* FROM cyi_lpj LEFT JOIN cyi_kegiatan ON cyi_kegiatan.id=cyi_lpj.kegiatan WHERE cyi_kegiatan.angkatan='".$angkatan."' AND cyi_lpj.angkatan='".$angkatan."' AND cyi_kegiatan.ambalan='".$ambalan."' AND cyi_lpj.ambalan='".$ambalan."'";
    return $result=mysqli_query($connect,$quotes_qry); 
}
function detail_lpj($angkatan, $ambalan, $id){
    global $connect;
    $query="SELECT cyi_kegiatan.nama, cyi_lpj.* FROM cyi_lpj LEFT JOIN cyi_kegiatan ON cyi_kegiatan.id=cyi_lpj.kegiatan WHERE cyi_kegiatan.angkatan='".$angkatan."' AND cyi_lpj.angkatan='".$angkatan."' AND cyi_kegiatan.ambalan='".$ambalan."' AND cyi_lpj.ambalan='".$ambalan."' AND cyi_lpj.id='".$id."'";
    return mysqli_fetch_array(mysqli_query($connect,$query));
}
function tambah_lpj($data){
    Insert('cyi_lpj', $data);
}
function edit_lpj($data, $where){
    Update('cyi_lpj', $data, $where);
}
function hapus_lpj($where){
    Delete('cyi_lpj', $where);
}
?>
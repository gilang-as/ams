<?php
function daftar_proposal($angkatan, $ambalan){
    global $connect;
    $quotes_qry="SELECT cyi_kegiatan.nama, cyi_proposal.* FROM cyi_proposal LEFT JOIN cyi_kegiatan ON cyi_kegiatan.id=cyi_proposal.kegiatan WHERE cyi_kegiatan.angkatan='".$angkatan."' AND cyi_proposal.angkatan='".$angkatan."' AND cyi_kegiatan.ambalan='".$ambalan."' AND cyi_proposal.ambalan='".$ambalan."'";
    return $result=mysqli_query($connect,$quotes_qry); 
}
function detail_proposal($angkatan, $ambalan, $id){
    global $connect;
    $query="SELECT cyi_kegiatan.nama, cyi_proposal.* FROM cyi_proposal LEFT JOIN cyi_kegiatan ON cyi_kegiatan.id=cyi_proposal.kegiatan WHERE cyi_kegiatan.angkatan='".$angkatan."' AND cyi_proposal.angkatan='".$angkatan."' AND cyi_kegiatan.ambalan='".$ambalan."' AND cyi_proposal.ambalan='".$ambalan."' AND cyi_proposal.id='".$id."'";
    return mysqli_fetch_array(mysqli_query($connect,$query));
}
function tambah_proposal($data){
    Insert('cyi_proposal', $data);
}
function edit_proposal($data, $where){
    Update('cyi_proposal', $data, $where);
}
function hapus_proposal($where){
    Delete('cyi_proposal', $where);
}
?>
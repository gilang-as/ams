<?php
function daftar_kelas(){
    global $connect;
    $quotes_qry="SELECT * FROM cyi_kelas";
    return $result=mysqli_query($connect,$quotes_qry); 
}
function detail_kelas($id){
    global $connect;
    $query="SELECT * FROM cyi_kelas WHERE id='".$id."'";
    return mysqli_fetch_array(mysqli_query($connect,$query));
}
function tambah_kelas($data){
    Insert('cyi_kelas', $data);
}
function edit_kelas($data, $where){
    Update('cyi_kelas', $data, $where);
}
function hapus_kelas($where){
    Delete('cyi_kelas', $where);
}
?>
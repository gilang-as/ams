<?php
function daftar_siswa(){
    global $connect;
    $quotes_qry="SELECT * FROM cyi_akun";
    return $result=mysqli_query($connect,$quotes_qry); 
}
function detail_siswa($id){
    global $connect;
    $query="SELECT * FROM cyi_akun WHERE id='".$id."'";
    return mysqli_fetch_array(mysqli_query($connect,$query));
}
function tambah_siswa($data){
    Insert('cyi_akun', $data);
}
function edit_siswa($data, $where){
    Update('cyi_akun', $data, $where);
}
function hapus_siswa($where){
    Delete('cyi_akun', $where);
}
?>
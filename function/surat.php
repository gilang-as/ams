<?php
//GLOBAL
function total_surat(){
    global $connect;
    $query = "SELECT t1.rows + t2.rows as total_rows from ( select count(*) as rows from cyi_surat_masuk ) as t1 cross join ( select count(*) as rows from cyi_surat_keluar ) as t2";
    $total_pages = mysqli_fetch_array(mysqli_query($connect,$query));
    return $total_pages['total_rows'];
}
function total_surat_angkatan($angkatan){
    global $connect;
    $query = "SELECT t1.rows + t2.rows as total_rows from ( select count(*) as rows from cyi_surat_masuk where angkatan='".$angkatan."') as t1 cross join ( select count(*) as rows from cyi_surat_keluar where angkatan='".$angkatan."') as t2";
    $total_pages = mysqli_fetch_array(mysqli_query($connect,$query));
    return $total_pages['total_rows'];
}
function array_jenis_surat($where){
    $json = file_get_contents('data/jenis_surat.json');
    $jenis_surat = json_decode($json, TRUE);
    return $jenis_surat[array_search($where, array_column($jenis_surat, 'no'))]['isi'];
}
//SURAT MASUK
function daftar_surat_masuk($angkatan, $ambalan){
    global $connect;
    $quotes_qry="SELECT * FROM cyi_surat_masuk WHERE angkatan='".$angkatan."' AND ambalan='".$ambalan."'";
    return $result=mysqli_query($connect,$quotes_qry); 
}
function detail_surat_masuk($angkatan, $ambalan , $id){
    global $connect;
    $query="SELECT * FROM cyi_surat_masuk WHERE angkatan='".$angkatan."' AND ambalan='".$ambalan."' AND id='".$id."'";
    return mysqli_fetch_array(mysqli_query($connect,$query));
}
function tambah_surat_masuk($data){
    Insert('cyi_surat_masuk', $data);
}
function edit_surat_masuk($data, $where){
    Update('cyi_surat_masuk', $data, $where);
}
function hapus_surat_masuk($where){
    Delete('cyi_surat_masuk', $where);
}
function total_surat_masuk($angkatan){
    global $connect;
    $query="SELECT count(*) as total FROM cyi_surat_masuk WHERE angkatan='".$angkatan."'";
    $result=mysqli_fetch_array(mysqli_query($connect,$query));
    return $result['total'];
}

//SURAT KELUAR
function daftar_surat_keluar($angkatan, $ambalan){
    global $connect;
    $query="SELECT * FROM cyi_surat_keluar WHERE angkatan='".$angkatan."' AND ambalan='".$ambalan."'";
    return $result=mysqli_query($connect,$query); 
}
function detail_surat_keluar($angkatan, $ambalan, $id){
    global $connect;
    $query="SELECT * FROM cyi_surat_keluar WHERE angkatan='".$angkatan."' AND ambalan='".$ambalan."' AND id='".$id."'";
    return mysqli_fetch_array(mysqli_query($connect,$query));
}
function tambah_surat_keluar($data){
    Insert('cyi_surat_keluar', $data);
}
function edit_surat_keluar($data){
    Update('cyi_surat_keluar', $data);
}
function hapus_surat_keluar($where){
    Delete('cyi_surat_keluar', $where);
}
function total_surat_keluar($angkatan){
    global $connect;
    $query="SELECT count(*) as total FROM cyi_surat_keluar WHERE angkatan='".$angkatan."'";
    $result=mysqli_fetch_array(mysqli_query($connect,$query));
    return $result['total'];
}

?>
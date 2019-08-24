<?php
function daftar_sangga($ambalan){
    global $connect;
    $quotes_qry="SELECT * FROM cyi_sangga WHERE ambalan = $ambalan";
    return $result=mysqli_query($connect,$quotes_qry); 
}
function detail_sangga($id){
    global $connect;
    $query="SELECT * FROM cyi_sangga WHERE id='".$id."'";
    return mysqli_fetch_array(mysqli_query($connect,$query));
}
function tambah_sangga($data){
    Insert('cyi_sangga', $data);
}
function edit_sangga($data, $where){
    Update('cyi_sangga', $data, $where);
}
function hapus_sangga($where){
    Delete('cyi_sangga', $where);
}
?>
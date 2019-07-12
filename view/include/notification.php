<?php
    function notification($data=null){
        if(!empty($data)){
?>
<script>
    $(function(t) {
        t.NotificationApp.send("<?php echo $data['judul']?>","<?php echo $data['tulisan']?>","<?php echo $data['posisi']?>","<?php echo $data['warna']?>","<?php echo $data['tipe']?>")
    });
</script>
<?php
        }
    }
?>
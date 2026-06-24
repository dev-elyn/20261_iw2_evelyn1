<?php
include 'conecta.php';
include 'consulta.php';
$id = $_POST['id'];
$cor = $_POST['cor'];
$tamanho = $_POST['tamanho'];
$sql = "UPDATE tb_camisa SET sg_cor='".$cor."', sg_tamanho='".$tamanho."' WHERE cd_camisa = $id";


if($conn->query($sql)){
 echo insere();
}else{
    echo "erro";
}
?>
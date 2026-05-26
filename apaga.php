<?php
include 'conecta.php';
include 'consulta.php';

$id = $_POST['id'];
$sql = "DELETE FROM tb_camisa WHERE cd_camisa = '$id'";

if ($conn->exec($sql)) {
    echo insere();
} else {
    echo "Erro ao concluir";
}
?>
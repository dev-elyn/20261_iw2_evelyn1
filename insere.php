<?php
include 'conecta.php';
include 'consulta.php';

$corSelecionada = $_POST["cor"];
$tamanhoSelecionado = $_POST["tamanho"];
$sql = $conn->query("INSERT INTO `tb_camisa`(`cd_camisa`, `sg_tamanho`, `sg_cor`) VALUES (null,'$tamanhoSelecionado','$corSelecionada')");

if ($sql) {
    echo insere();
} else {
    echo "Erro ao concluir ";
}
?>
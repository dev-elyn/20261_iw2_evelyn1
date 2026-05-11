<?php
include 'conecta.php';

$corSelecionada = $_POST["cor"];
$tamanhoSelecionado = $_POST["tamanho"];

if ($conn->query("INSERT INTO `tb_camisa`(`cd_camisa`, `sg_tamanho`, `sg_cor`) VALUES (null,'$tamanhoSelecionado','$corSelecionada')")) {
    echo "Concluído";
} else {
    echo "Erro ao concluir ";
}
?>
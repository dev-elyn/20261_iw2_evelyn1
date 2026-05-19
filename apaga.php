<?php
include 'conecta.php';
include 'consulta.php';


$sql = "DELETE FROM 'tb_camisa' WHERE ID = '""'"
if ($conn->exec($sql)) {
    insere();
} else {
    echo "Erro ao concluir ";

?>
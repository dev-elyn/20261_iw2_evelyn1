<?php
include 'conecta.php';
include 'consulta.php';

if (isset($_POST['id']) && $_POST['id'] !== '') {
    $id = intval($_POST['id']);
    $sql = "DELETE FROM tb_camisa WHERE cd_camisa = :id";
    $stmt = $conn->prepare($sql);

    if ($stmt->execute([':id' => $id])) {
        echo insere();
    } else {
        echo "Erro ao concluir";
    }
} else {
    echo "ID inválido";
}
?>
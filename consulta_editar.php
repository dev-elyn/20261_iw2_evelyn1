<?php
// php e sql eu vou ser boa nisso por bem ou pormal 
header('Content-Type: application/json; charset=utf-8');
include 'conecta.php';
    $id = $_POST['id'];
    $stmt = $conn->prepare("SELECT * FROM tb_camisa WHERE cd_camisa = :id");
    $stmt->execute(['id' => $id]);
    
    $roupa = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($roupa) {
        echo json_encode([
            'sg_cor'      => $roupa['sg_cor'],
            'sg_tamanho'  => $roupa['sg_tamanho'],
        ]);
        exit;
    }
    echo json_encode([
        'sg_cor'       => '',
        'sg_tamanho'   => '',
    ]);
    exit;

    //acaba por fgavorrrrrrrrrr
?>

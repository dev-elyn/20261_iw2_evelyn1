<?php
function insere(){
include 'conecta.php';

$stmt = $conn->query("SELECT * FROM tb_camisa");
$resultado="<table border='1'>";

while ($row = $stmt->fetchObject()) {
    $resultado .= "<tr>
    <td>$row->sg_tamanho</td>
    <td>$row->sg_cor </td>
    </tr>";
}
$resultado .= "</table>";
echo $resultado;
}
?>
<?php
function insere(){
$resultado="<table border='1'>";

include 'conecta.php';

$stmt = $conn->query("SELECT * FROM tb_camisa");

while ($row = $stmt->fetchObject()) {
    $resultado .= "<tr>
    <td>$row->sg_tamanho</td>
    <td>$row->sg_cor </td>
    <td> <button class='excluir' id='$row->cd_camisa'>Excluir</button></td>
    </tr>";
}
$resultado .= "</table>";
echo $resultado;
}
?>
<?php
function insere(){
    $resultado = "<table border='1'>";

    include 'conecta.php';

    $stmt = $conn->query("SELECT * FROM tb_camisa");

    while ($row = $stmt->fetchObject()) {
        $resultado .= "<tr>
        <td>$row->sg_tamanho</td>
        <td>$row->sg_cor </td> 
        <td> <button type='button' class='excluir' data-id='$row->cd_camisa'>Excluir</button>
        <button type='button' class='editar' data-id='$row->cd_camisa'>Editar</button>
        </td>
        </tr>";
    }
    $resultado .= "</table>";
    return $resultado;
}
?>
<?php
function insere(){
    $resultado = "<table border='1'>";

    include 'conecta.php';

    $stmt = $conn->query("SELECT * FROM tb_camisa");

    while ($row = $stmt->fetchObject()) {
        $resultado .= "<tr>
        <td class='p-3'>$row->sg_tamanho</td>
        <td class='p-3'>$row->sg_cor </td> 
        <td class='p-3'> <button type='button' class='btn btn-danger btn-sm mr-2 excluir' data-id='$row->cd_camisa'>Excluir</button>
        <button type='button' class='btn btn-info btn-sm editar' data-id='$row->cd_camisa'>Editar</button>
        </td>
        </tr>";
    }
    $resultado .= "</table>";
    return $resultado;
}
echo insere();
?>
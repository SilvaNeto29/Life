<?php

$where = '';

if(!empty($_REQUEST['placa'])) {
    $where = "WHERE v.placa LIKE '%{$_REQUEST['placa']}%'";
}

$db = new Database();

if($db->connect()) {

    $dados = $db->sqlQueryArray(
        "SELECT
            v.nome,
            v.placa,
            CONCAT(v.vel_maxima,' Km/h ') AS vel_maxima,
            CONCAT(v.ESPECIE,' - ',v.TIPO) AS tp_veiculo
        FROM veiculo v
        {$where} ORDER BY v.nome ASC"
    );

    echo json_encode(array(
        'status' => 'success',
        'data' => $dados
    ));

} else {
    echo json_encode(array(
        'status' => 'failure',
        'message' => 'Erro ao conectar ao banco'
    ));
}
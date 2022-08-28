<?php

$where = '';

if($_REQUEST['placa'] != '') {
    $where = " WHERE v.PLACA LIKE '%{$_REQUEST['placa']}%'";
}

if($_REQUEST['nome'] != '' AND $_REQUEST['placa'] != '') {
    $where = $where . " AND f.nome LIKE '%{$_REQUEST['nome']}%'";
} else {
    $where = " WHERE f.nome LIKE '%{$_REQUEST['nome']}%'";
}

$db = new Database();

if($db->connect()) {

    $dados = $db->sqlQueryArray(
        "SELECT
            f.NOME,
            r.DTHR,
            v.PLACA,
            concat(ve.VEL_MAXIMA, ' Km/h') as VEL_MAXIMA,
            concat(r.VLREGISTRADA, ' Km/h') as VLREGISTRADA,
            CONCAT( SUBSTR((((( ve.VEL_MAXIMA - r.VLREGISTRADA )/ ve.VEL_MAXIMA ) * 100 )* - 1 ), 1, 4 ), ' %' ) AS PORCENTAGEM,
            r.LATITUDE,
            r.LONGETUDE 
        FROM
            rastreamento AS r
        INNER JOIN funcionario AS f ON r.nome = f.CODFUNCIONARIO
        INNER JOIN veiculo AS v ON r.PLACA = v.ID
        INNER JOIN veiculo AS ve ON r.VLMAX = ve.ID
        {$where}"
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
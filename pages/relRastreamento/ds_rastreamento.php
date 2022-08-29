<?php

$where = '';

if(!empty($_REQUEST['placa'])) {
    $where = " WHERE v.PLACA LIKE '%{$_REQUEST['placa']}%'";
}

if(!empty($_REQUEST['nome']) AND !empty($_REQUEST['placa'])) {
    $where = $where . " AND f.nome LIKE '%{$_REQUEST['nome']}%'";

} else if (!empty($_REQUEST['nome']) AND empty($_REQUEST['placa'])){
    $where =  " WHERE f.nome LIKE '%{$_REQUEST['nome']}%'";
}

if((!empty($_REQUEST['nome']) OR !empty($_REQUEST['placa'])) AND !empty($_REQUEST['data'])) {

    $_REQUEST['data'] = implode("-",array_reverse(explode("/",$_REQUEST['data'])));
    $where = $where . " AND r.DTHR = '{$_REQUEST['data']}%'";

} else if (empty($_REQUEST['nome']) AND empty($_REQUEST['placa']) AND !empty($_REQUEST['data'])){

    $_REQUEST['data'] = implode("-",array_reverse(explode("/",$_REQUEST['data'])));
    $where =  " WHERE r.DTHR = '{$_REQUEST['data']}%'";
}

$db = new Database();

if($db->connect()) {

    $dados = $db->sqlQueryArray(
        "SELECT
            f.NOME,
            CONCAT(SUBSTR(r.DTHR,9,2), '/', SUBSTR(r.DTHR,6,2), '/', SUBSTR(r.DTHR,1,4), ' ', SUBSTR(r.DTHR,11,9)) as DTHR,
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
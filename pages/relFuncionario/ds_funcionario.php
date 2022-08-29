<?php

$where = '';

if(!empty($_REQUEST['nome'])) {
    $where = "WHERE f.nome LIKE '%{$_REQUEST['nome']}%'";
} 

if(!empty($_REQUEST['cpf'])) {
    $_REQUEST['cpf'] = str_replace('-','',str_replace('.', '',$_REQUEST['cpf']));
    $where = "WHERE f.CPF LIKE '%{$_REQUEST['cpf']}%'";
}




$db = new Database();

if($db->connect()) {

    $dados = $db->sqlQueryArray(
        "SELECT
            f.nome,
            CONCAT(fc.nome,' - ', fc.CONTRATACAO) AS funcao,
            f.tel,
            CONCAT(SUBSTRING(f.CPF,1,3),'.',SUBSTRING(f.CPF,4,3),'.',SUBSTRING(f.CPF,7,3),'-',SUBSTRING(f.CPF,10,2)) AS cpf
        FROM funcionario f
        INNER JOIN funcao fc ON fc.id = f.funcao_id
        {$where} ORDER BY f.NOME ASC"
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
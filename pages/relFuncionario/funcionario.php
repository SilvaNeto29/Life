<div class="row">
    <div class="col-12">
        <div class="jumbotron">
            <div id="divInputNome"></div>
            <div id="divInputCpf"></div>
            <div id="divBtnConsultar" ></div>
        </div>

        <div id="divCmpGridFuncionario"></div>
    </div>
</div>

<style type="text/css">
    .jumbotron {
        padding: 32px;
    }

    #divInputNome, #divBtnConsultar {
        display: inline-block;
        vertical-align: top;
    }

    #divBtnConsultar {
        margin-top: 32px;
        margin-left: 20px;
    }

    #divCmpGridFuncionario {
        display: inline-block;
        width: 100%;
        margin-bottom: 20px;
    }

    .jumbotron{
        display: flex ;
        vertical-align: center;    
        background-color:azure;
    }

    .form-group{
        margin-left: 30px;
        margin-right: 30px;
    }


    #nome-0,#funcao-3{
        text-align: left;
        padding-left: 10px;
    }

    #cpf-1,#tel-2{
        text-align: center;
    }

    body{
        background-color: #F0F0F0;
    }


</style>

<script type="text/javascript">
    Cmp.ready(function() {
        new Cmp.RelFuncionario().init();
    });
</script>
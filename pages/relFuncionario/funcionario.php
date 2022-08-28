<div class="row">
    <div class="col-12">
        <div class="jumbotron">
            <div id="divInputNome"></div>
            <div id="divBtnConsultar"></div>
            <div id="divBtnRel"><input type="submit" value="Imprimir PDF" id="pdf" class="btn btn-primary"></input></div>
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
        margin-left: 10px;
    }

    #divCmpGridFuncionario {
        display: inline-block;
        width: 100%;
        margin-bottom: 20px;
    }

    .jumbotron{
        display: flex ;
        vertical-align: center;    
    }

    .form-group{
        margin-left: 30px;
        margin-right: 30px;
    }

    #pdf{
        margin-left: 36px;
        margin-right: 30px;
        margin-top: 32px;  
    }

    #nome-0,#funcao-3{
        text-align: left;
        padding-left: 10px;
    }

    #cpf-1,#tel-2{
        text-align: center;
    }

</style>

<script type="text/javascript">
    Cmp.ready(function() {
        new Cmp.RelFuncionario().init();
    });
</script>
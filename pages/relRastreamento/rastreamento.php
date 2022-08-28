<div class="row">
    <div class="col-12">
        <div class="jumbotron">
            <div id="divInputPlaca"></div>
            <div id="divInputFuncionario"></div>
            <div id="divInputReg"></div>
            <div id="divBtnConsultar"></div>
            <div id="divBtnRel"><input type="submit" value="Imprimir PDF" id="pdf" class="btn btn-primary"></input></div>
        </div>

        <div id="divCmpGridVeiculo" ></div>
    </div>
</div>

<style type="text/css">
    .jumbotron {
        padding: 32px;
        background-color: #DEDEDE;
    }

    #divInputPlaca, #divBtnConsultar {
        display: inline-block;
        vertical-align: top;
    }

    #divBtnConsultar {
        margin-top: 32px;
        margin-left: 21px;
    }

    .form-group{
        margin-left: 30px;
        margin-right: 30px;
    }

    #divCmpGridVeiculo {
        display: inline-block;
        width: 100%;
        margin-bottom: 20px;
    }

    #pdf{
        margin-left: 40px;
        margin-right: 30px;
        margin-top: 32px;
        transition: 0.5s background ease-in-out;  
    }

    .jumbotron{
        display: flex ;
        vertical-align: center;    
    }

    #PLACA-0, #DTHR-2,#VEL_MAXIMA-3,#VLREGISTRADA-4,#PORCENTAGEM-5, #LATITUDE-6, #LONGETUDE-7{
        text-align: center;
    }

    #NOME-1{
        padding-left: 11px;
        text-align: left;
    }

    body{
        background-color: #F0F0F0;
    }

</style>

<script type="text/javascript">
    Cmp.ready(function() {
        new Cmp.RelVeiculo().init();
    });
</script>
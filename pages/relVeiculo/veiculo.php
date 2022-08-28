<div class="row">
    <div class="col-12">
        <div class="jumbotron">
            <div id="divInputPlaca"></div>
            <div id="divInputNome"></div>
            <div id="divInputData"></div>
            <div id="divBtnConsultar"></div>
            <div id="divBtnRel"><input type="submit" value="Imprimir PDF" id="pdf" class="btn btn-primary"></input></div>
        </div>

        <div id="divCmpGridVeiculo"></div>
    </div>
</div>

<style type="text/css">
    .jumbotron {
        padding: 32px;
    }

    #divBtnConsultar {
        margin-left: 23px;
        margin-right: 10px;
        margin-top: 30px;
    }

    .form-group{
        margin-left: 30px;
        margin-right: 30px;
    }

    #pdf{
        margin-left: 30px;
        margin-right: 30px;
        margin-top: 30px;
    }

    #divCmpGridVeiculo {
        display: inline-block;
        width: 100%;
        margin-bottom: 20px;
    }

    .jumbotron{
        display: flex ;
        vertical-align: center;    
    }

    #nome-0,#tp_veiculo-3{
        text-align: left;
        padding-left: 10px;
    }

    #placa-1,#vel_maxima-2{
        text-align: center; 
    }


</style>

<script type="text/javascript">
    Cmp.ready(function() {
        new Cmp.RelVeiculo().init();
    });
</script>
<div class="row">
    <div class="col-12">
        <div class="jumbotron">
            <div id="divInputPlaca"></div>
            <div id="divInputNome"></div>
            <div id="divInputData"></div>
            <div id="divBtnConsultar"></div>
        </div>

        <div id="divCmpGridVeiculo"></div>
    </div>
</div>

<style type="text/css">
    .jumbotron {
        padding: 32px;
    }

    #divInputPlaca, #divInpuNome, #divInputData {
        margin-left: 20px;
        margin-right: 20px;
     }  

    #divBtnConsultar {
        margin-left: 30px;
        margin-right: 20px;
        margin-top: 30px;
    }

    label{
        margin-left: 20px;
        margin-right: 20px;  
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
</style>

<script type="text/javascript">
    Cmp.ready(function() {
        new Cmp.RelVeiculo().init();
    });
</script>
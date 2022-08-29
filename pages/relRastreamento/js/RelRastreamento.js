Cmp.RelVeiculo = function() {
    
    var private = {

        render: function() {

            Cmp.createInput({
                id: 'inputPlaca',
                renderTo: '#divInputPlaca',
                label: 'Placa do veículo',
                width: '200px'
            });

            Cmp.createInput({
                id: 'inputFuncionario',
                renderTo: '#divInputFuncionario',
                label: 'Nome do funcionário',
                width: '200px'
            });

            Cmp.createInput({
                id: 'inputReg',
                renderTo: '#divInputReg',
                label: 'Dt registro (DD/MM/YYYY)',
                width: '200px'
            });

            Cmp.createButton({
                id: 'btnBuscar',
                renderTo: '#divBtnConsultar',
                text: 'Buscar',
                handler: function() {
                    private.buscar();
                }
            });

            Cmp.createGrid({
                id: 'gridDadosVeiculos',
                renderTo: '#divCmpGridVeiculo',
                header: [
                    {
                        text: 'Placa',
                        field: 'PLACA',
                        align: "center",
                        width: 70
                    }, {
                        text: 'Funcionário',
                        field: 'NOME',
                        align: "left",
                        width: 150,
                     }, {
                        text: 'DT Registro',
                        field: 'DTHR',
                        width: 150,
                        align: "center",
                    }, {
                        text: 'Vl. Max',
                        field: 'VEL_MAXIMA',
                        // width: 100,
                        align: "center"
                    },{
                        text: 'Vl. Regis.',
                        field: 'VLREGISTRADA',
                        // width: 100,
                        align: "center"
                    },{
                        text: 'Diff. Vel.',
                        field: 'PORCENTAGEM',
                        // width: 70,
                        align: "center"
                    },{
                        text: 'Latitude',
                        field: 'LATITUDE',
                        // width: 100,
                        align: "center"
                    },{
                        text: 'Longetude',
                        field: 'LONGETUDE',
                        width: 100,
                        align: "center"
                    }
                ]
            });
        },

        buscar: function() {
            Cmp.showLoading();

            Cmp.request({
                url: 'index.php?mdl=relRastreamento&file=ds_rastreamento.php',
                params: {
                    placa: Cmp.get('inputPlaca').getValue(),
                    nome: Cmp.get('inputFuncionario').getValue(),
                    data: Cmp.get('inputReg').getValue()
                },
                success: function(res) {
                    Cmp.hideLoading();
                    if(res.status == 'success') {
                        Cmp.get('gridDadosVeiculos').loadData(res.data);
                    } else {
                        Cmp.showErrorMessage(res.message || 'Ocorreu um erro na requisição');
                    }
                }
            });
        }

    };

    this.init = function() {
        private.render();
    }

}

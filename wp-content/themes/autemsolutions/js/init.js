/*!
 * JavaScript file for functions.
 * bulk design developed at 2016.
 * All Rights Reserved.
 */

/* Initialization */
$(document).ready(function(){
	$('.parallax').parallax();
	$('.slider').slider({interval: 2500, transition:1200});
	$('.scrollspy').scrollSpy();
	$('.modal').modal();
	$(".button-collapse").sideNav();
	$(".dropdown-button").dropdown();
    $('select').material_select();

	function limpa_formulário_cep() {
        // Limpa valores do formulário de cep.
        $("#rua").val("");
        $("#cidade").val("");
        $("#uf").val("");
    }
            
    //Quando o campo cep perde o foco.
    $("#cep").mask("99999-999");
    $("#cep").blur(function() {

        //Nova variável "cep" somente com dígitos.
        var cep = $(this).val().replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                $("#rua").val("...");
                $("#cidade").val("...");
                $("#uf").val("...");

                //Consulta o webservice viacep.com.br/
                $.getJSON("//viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                    if (!("erro" in dados)) {
                        //Atualiza os campos com os valores da consulta.
                        $("#rua").val(dados.logradouro);
                        $("#cidade").val(dados.localidade);
                        $("#uf").val(dados.uf);
                    } //end if.
                    else {
                        //CEP pesquisado não foi encontrado.
                        limpa_formulário_cep();
                        alert("CEP não encontrado.");
                    }
                });
            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    });

	$("#cpfcnpj").mask("999.999.999-99/9999-99");

	$('body').on('keyup', '#cpfcnpj', function (e) {
        var query = $(this).val().replace(/[^a-zA-Z 0-9]+/g,'');;
        if (query.length == 11) {
            $("#cpfcnpj").mask("999.999.999-99?9999-99");
        }
        if (query.length == 14) {
            $("#cpfcnpj").mask("99.999.999/9999-99");
        }
    });

	jQuery( function($){
	    $("#telefone").mask("(99) 9999-9999?9");
	    $("#telefone").blur(function(event) {
	        if($(this).val().length == 15){
	          $('#telefone').mask('(99) 99999-999?9');
	        } else {
	          $('#telefone').mask('(99) 9999-9999?9');
	        }
	    });
	});

    $('input[type=radio]').change(function () {
        if ($(this).val() == 'Sim') {
            $('#outros').show();
        } else {
            $('#outros').hide();
        }
    });

});
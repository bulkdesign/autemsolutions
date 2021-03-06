/*!
 * JavaScript file for functions.
 * bulk design developed at 2016.
 * All Rights Reserved.
 */

/* Initialization */
$(document).ready(function(){
    $('.carousel.carousel-slider').carousel({fullWidth: true});
	$('.slider').slider({interval: 2500, transition:1200});
	$('.scrollspy').scrollSpy();
	$('.modal').modal();
	$(".button-collapse").sideNav();
	$(".dropdown-button").dropdown();
    $('select').material_select();
    $('.toggle-overlay').click(function() {
        $('aside').toggleClass('open');
    })
    $('.astronauta').parallax({ speed: 0.6, axis: 'y' });
    $("#home").sticky({topSpacing:0});

    $('.collapsible-header').click(function () {
            $(".collapsible-header").toggleClass('border-bottom-remove');
            $("#rocketmarketing").toggle();
            $("#trendssolution").toggle();
            $("#targetcustomer").toggle();
            $("#communicationandmarketing").toggle();
            $("#brandpositioning").toggle();
            $("#productlaunch").toggle();
            $("#consumerexperience").toggle();
        }
    );

    $('.rocketmarketing').click(function () {
        $('.servico1').toggleClass('servico1-branco');
    });

    $('.trendssolution').click(function () {
        $('.servico2').toggleClass('servico2-branco');
    });

    $('.targetcustomer').click(function () {
        $('.servico3').toggleClass('servico3-branco');
    });    

    $('.communicationandmarketing').click(function () {
        $('.servico4').toggleClass('servico4-branco');
    });    

    $('.brandpositioning').click(function () {
        $('.servico5').toggleClass('servico5-branco');
    });

    $('.productlaunch').click(function () {
        $('.servico6').toggleClass('servico6-branco');
    });

    $('.consumerexperience').click(function () {
        $('.servico7').toggleClass('servico7-branco');
    });

    $('#oquefazemos').click(function () {
            $(this).hide();
        }
    );


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
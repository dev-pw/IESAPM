<?php
/**
 *
 * Página para inscrição dos cursos
 *
 * Template Name: Inscreva-se
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage iesapm
 *
 */

?>

<?php

get_header(); ?>

<main role="main">

    <section class="bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-auto py-3">
                    <h1 class="text-white"><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </section>

    <section class="pad-page">
        <div class="container">

            <div class="mb-5">
                <?php get_template_part('template-parts/breadcrumbs'); ?>
            </div>

            <div class="row justify-content-center">

                <form action="#" class="col-lg-10">

                    <div class="row">

                        <div class="col-12 mb-5">
                            <h2 class="text-center h2">Embarque em uma jornada de ensino no IESAPM que vai transformar sua carreira!</h2>
                            <p class="text-center fs-2">Informe seus dados e finalize seu processo de inscrição.</p>
                        </div>

                        <div class="col-12 mb-3">
                            <label for="cp-nome" class="form-label fw-bold small">Nome Completo *</label>
                            <input type="text" class="form-control border-dark-subtle" id="cp-nome" placeholder="Digite seu nome completo">
                        </div>

                        <div class="col-lg-6 mb-3">
                            <label for="cp-passaporte-cpf" class="form-label fw-bold small">CPF ou Passaporte *</label>
                            <input type="text" class="form-control border-dark-subtle" id="cp-passaporte-cpf" placeholder="Digite seu CPF ou Passaporte">
                        </div>

                        <div class="col-lg-6 mb-3">
                            <label for="cp-data-nasc" class="form-label fw-bold small">Data de Nascimento *</label>
                            <input type="text" class="form-control border-dark-subtle" id="cp-data-nasc" placeholder="DD/MM/AAAA">
                        </div>


                        <div class="col-lg-6 mb-3">
                            <label for="cp-numero-rg" class="form-label fw-bold small">Número do RG *</label>
                            <input type="text" class="form-control border-dark-subtle" id="cp-numero-rg" placeholder="Digite seu RG">
                        </div>

                        <div class="col-lg-6 mb-3">
                            <label for="cp-uf-rg" class="form-label fw-bold small">UF do RG</label>
                            <select class="form-select border-dark-subtle" aria-label="cp-uf-rg">
                                <option disabled selected>Selecione...</option><option value="AC">AC</option><option value="AL">AL</option><option value="AM">AM</option><option value="AP">AP</option><option value="BA">BA</option><option value="CE">CE</option><option value="DF">DF</option><option value="ES">ES</option><option value="GO">GO</option><option value="MA">MA</option><option value="MG">MG</option><option value="MS">MS</option><option value="MT">MT</option><option value="PA">PA</option><option value="PB">PB</option><option value="PE">PE</option><option value="PI">PI</option><option value="PR">PR</option><option value="RJ">RJ</option><option value="RN">RN</option><option value="RO">RO</option><option value="RR">RR</option><option value="RS">RS</option><option value="SC">SC</option><option value="SE">SE</option><option value="SP">SP</option><option value="TO">TO</option>
                            </select>
                        </div>

                        <div class="col-lg-6 mb-3">
                            <label for="cp-celular" class="form-label fw-bold small">Celular *</label>
                            <input type="text" class="form-control border-dark-subtle" id="cp-celular" placeholder="Digite seu número de celular com DDD">
                        </div>

                        <div class="col-lg-6 mb-3">
                            <label for="cp-email" class="form-label fw-bold small">E-mail *</label>
                            <input type="email" class="form-control border-dark-subtle" id="cp-email" placeholder="Digite seu e-mail">
                        </div>

                        <!-- bloco necessidade especial -->
                        <div class="col-lg-12 mb-3">
                            <label for="cp-necess-esp" class="form-label fw-bold small">Necessidade Especial</label>
                            <select id="cp-necess-esp" class="form-select border-dark-subtle" aria-label="cp-necess-esp">
                                <option disabled selected>Selecione...</option>
                                <option value="1">Não</option>
                                <option value="2">Sim</option>
                            </select>
                        </div>

                        <div id="cp-qual-necess" class="col-lg-12 mb-3">
                            <label for="cp-qual-necess" class="form-label fw-bold small">Qual Necessidade Especial?</label>
                            <select class="form-select border-dark-subtle" aria-label="cp-qual-necess">
                                <option disabled selected>Selecione...</option>
                                <option value="Deficiência física">Deficiência física</option>
                                <option value="Cegueira">Cegueira</option>
                                <option value="Baixa visão">Baixa visão</option>
                                <option value="Surdocegueira">Surdocegueira</option>
                                <option value="Defic. intelectual">Deficiência intelectual</option>
                                <option value="Surdez">Surdez</option>
                                <option value="Deficiência auditiva">Deficiência auditiva</option>
                                <option value="TDAH">TDAH</option>
                                <option value="TEA">TEA</option>
                                <option value="Transtornos globais">Transtornos globais</option>
                            </select>
                        </div>
                        <!-- // bloco necessidade especial -->

                        <div class="col-lg-6 mb-3">
                            <label for="cp-nivel-ensino" class="form-label fw-bold small">Nível de Ensino *</label>
                            <select id="cp-nivel-ensino" class="form-select border-dark-subtle" aria-label="cp-nivel-ensino">
                                <option disabled selected>Selecione...</option>
                                <option value="1">Graduação</option>
                                <option value="2">Pós-Graduação</option>
                            </select>
                        </div>

                        <div class="col-lg-6 mb-3">
                            <label for="cp-modalidade" class="form-label fw-bold small">Modalidade *</label>
                            <select class="form-select border-dark-subtle" aria-label="cp-modalidade">
                                <option disabled selected>Selecione...</option>
                                <option value="1">Presencial</option>
                                <option value="2">Híbrido</option>
                                <option value="3">EAD</option>
                            </select>
                        </div>

                        <div class="col-lg-12 mb-3">
                            <label for="cp-curso" class="form-label fw-bold small">Curso *</label>
                            <select class="form-select border-dark-subtle" aria-label="cp-curso">
                                <option disabled selected>Selecione...</option>
                                <option value="1">Tecnologia em Gestão Hospitalar - EAD</option>
                            </select>
                        </div>

                    </div>

                    <!-- vestibular -->
                    <div id="bloco-vestibular" class="row mt-4">

                        <div class="col-12">
                            <h2 class="mb-4">Vestibular</h2>
                        </div>

                        <div class="col-lg-12 mb-3">
                            <label for="cp-forma-ingresso" class="form-label fw-bold small">Forma de Ingresso *</label>
                            <select id="qual-forma-ingresso" class="form-select border-dark-subtle" aria-label="cp-forma-ingresso">
                                <option disabled selected>Selecione...</option>
                                <option value="1">Vestibular On-Line</option>
                                <option value="2">Vestibular Presencial Tradicional</option>
                                <option value="3">Vestibular Presencial Agendado</option>
                                <option value="4">ENEM</option>
                                <option value="5">Portador de Diploma</option>
                                <option value="6">Ingresso por Transferência</option>
                            </select>
                        </div>

                        <!-- bloco Vestibular Presencial Tradicional -->
                        <div id="bloco-vestibular-presencial-tradicional" class="col-lg-12">
                            <p class="fw-bold small mb-3">Em qual data gostaria de realizar seu vestibular? *</p>
                            <div class="mb-3">
                                <select class="form-select border-dark-subtle" aria-label="cp-data-vest-tradicional">
                                    <option disabled selected>Selecione...</option>
                                    <option value="1">20/05/2023 - 13:00</option>
                                    <option value="2">20/05/2023 - 15:00</option>
                                    <option value="3">23/05/2023 - 13:00</option>
                                    <option value="4">23/05/2023 - 15:00</option>
                                    <option value="5">25/05/2023 - 13:00</option>
                                    <option value="6">25/05/2023 - 15:00</option>
                                </select>
                            </div>
                            <div class="mt-4">
                                <p class="alert alert-warning"><span class="fw-bold">Local da prova: </span>Av. Brigadeiro Luís Antônio, 278 Bela Vista - São Paulo/SP</p>
                            </div>
                            <div class="col-12 mt-4">
                                <p class="alert alert-info">Por gentileza, comparecer no local da prova, com pelo menos meia hora de antecedência do horário agendado para a prova, munido de: Documento original de identidade com fotografia; Caneta esferográfica azul ou preta.</p>
                            </div>
                        </div>
                        <!-- // bloco Vestibular Presencial Tradicional -->

                        <!-- bloco Vestibular Presencial Agendado -->
                        <div id="bloco-vestibular-presencial-agendado" class="col-lg-12">
                            <p class="fw-bold small mb-3">Em qual data gostaria de agendar seu vestibular?</p>
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <label for="cp-vest-pres-agendado-1" class="form-label fw-bold small">Data da prova *</label>
                                    <input id="datepicker" type="text" name="data_prova_agend" class="form-control border-dark-subtle" autocomplete="off" placeholder="Selecione...">
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label for="cp-vest-pres-agendado-2" class="form-label fw-bold small">Hora da prova *</label>
                                    <select class="form-control border-dark-subtle" name="hora_prova_agend" required>
                                        <option disabled selected>Selecione...</option>
                                        <option value="14h">14h</option>
                                        <option value="15h">15h</option>
                                        <option value="16h">16h</option>
                                        <option value="17h">17h</option>
                                        <option value="18h">18h</option>
                                        <option value="20h">20h</option>
                                    </select>
                                </div>
                                <div class="mt-3">
                                    <p class="alert alert-warning"><span class="fw-bold">Local da prova: </span>Av. Brigadeiro Luís Antônio, 278 Bela Vista - São Paulo/SP</p>
                                </div>
                                <div class="col-12 mt-3">
                                    <p class="alert alert-info">Por gentileza, comparecer no local da prova, com pelo menos meia hora de antecedência do horário agendado para a prova, munido de: Documento original de identidade com fotografia; Caneta esferográfica azul ou preta.</p>
                                </div>
                            </div>
                        </div>
                        <!-- // bloco Vestibular Presencial Agendado -->

                        <!-- bloco Enem -->
                        <div id="bloco-enem" class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-12 mb-3">
                                    <label for="cp-enem-1" class="form-label fw-bold small">Cópia autenticada do Boletim de Desempenho Individual de Notas do ENEM</label>
                                    <input type="file" class="form-control border-dark-subtle" id="cp-enem-1" placeholder="Procurar arquivo">
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <label for="cp-enem-2" class="form-label fw-bold small">Cópia autenticada da cédula de identidade (frente e verso)</label>
                                    <input type="file" class="form-control border-dark-subtle" id="cp-enem-2" placeholder="Procurar arquivo">
                                </div>
                                <div class="col-12 mt-4">
                                    <p class="alert alert-info"><span class="fw-bold">Atenção candidato: </span> A apresentação de documentação comprobatória constante neste formulário de inscrição é obrigatória para efetivação de matrícula. No entanto, esses documentos poderão ser apresentados posteriormente, até 28/04/2023. Para sua comodidade, recomendamos que já anexe esses documentos. Em caso de dúvidas, entre em contato conosco. <span class="fw-bold">Tel/Whatsapp:</span>  (11) 3188-4313</p>
                                </div>
                            </div>
                        </div>
                        <!-- // bloco Enem -->

                        <!-- bloco Portador de Diploma -->
                        <div id="bloco-diploma" class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-12 mb-3">
                                    <label for="cp-diploma-1" class="form-label fw-bold small">Fotocópia do histórico escolar do Ensino Superior (frente e verso)</label>
                                    <input type="file" class="form-control border-dark-subtle" id="cp-diploma-1" placeholder="Procurar arquivo">
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <label for="cp-diploma-2" class="form-label fw-bold small">Fotocópia do diploma registrado (frente e verso)</label>
                                    <input type="file" class="form-control border-dark-subtle" id="cp-diploma-2" placeholder="Procurar arquivo">
                                </div>
                                <div class="col-12 mt-4">
                                    <p class="alert alert-info"><span class="fw-bold">Atenção candidato: </span> A apresentação de documentação comprobatória constante neste formulário de inscrição é obrigatória para efetivação de matrícula. No entanto, esses documentos poderão ser apresentados posteriormente, até 28/04/2023. Para sua comodidade, recomendamos que já anexe esses documentos. Em caso de dúvidas, entre em contato conosco. <span class="fw-bold">Tel/Whatsapp:</span>  (11) 3188-4313</p>
                                </div>
                            </div>
                        </div>
                        <!-- // bloco Portador de Diploma -->

                        <!-- bloco Ingresso por Transferência -->
                        <div id="bloco-transferencia" class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-12 mb-3">
                                    <label for="cp-transf-1" class="form-label fw-bold small">Fotocópia do histórico escolar do Ensino Superior (frente e verso)</label>
                                    <input type="file" class="form-control border-dark-subtle" id="cp-transf-1" placeholder="Procurar arquivo">
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <label for="cp-transf-2" class="form-label fw-bold small">Documento original do Conteúdo programático (Ementário)</label>
                                    <input type="file" class="form-control border-dark-subtle" id="cp-transf-2" placeholder="Procurar arquivo">
                                </div>
                                <div class="col-12 mt-4">
                                    <p class="alert alert-info"><span class="fw-bold">Atenção candidato: </span> A apresentação de documentação comprobatória constante neste formulário de inscrição é obrigatória para efetivação de matrícula. No entanto, esses documentos poderão ser apresentados posteriormente, até 28/04/2023. Para sua comodidade, recomendamos que já anexe esses documentos. Em caso de dúvidas, entre em contato conosco. <span class="fw-bold">Tel/Whatsapp:</span>  (11) 3188-4313</p>
                                </div>
                            </div>
                        </div>
                        <!-- // bloco Ingresso por Transferência -->

                    </div>

                    <div class="col-12 mt-4">
                        <button type="submit" class="btn btn-primary fs-4 py-4 rounded-3 w-100">Enviar Inscrição</button>
                    </div>

                </form>

            </div>

        </div>

    </section>

</main>

<?php get_footer(); ?>

<script>
jQuery(document).ready(function ($) {

    // Condição bloco necessidade especial
    $('#cp-qual-necess').hide();
    $('#cp-necess-esp').on('change', function(){
        var selectValor = $(this).val();

        if (selectValor == '2') {
            $('#cp-qual-necess').show();
        }else{
            $('#cp-qual-necess').hide();
        }
    })

    // Esconder o bloco do vestibular
    $('#bloco-vestibular').hide();

    // Mostra bloco vestibular se nivel de ensino for graduação
    $('#cp-nivel-ensino').on('change', function(){
        var selectValor = $(this).val();

        if (selectValor == '1'){
            $('#bloco-vestibular').show();
        }

        else{
            $('#bloco-vestibular').hide();
        }

    })

    // Esconder os blocos das formas de ingresso
    $('#bloco-vestibular-presencial-tradicional').hide();
    $('#bloco-vestibular-presencial-agendado').hide();
    $('#bloco-enem').hide();
    $('#bloco-diploma').hide();
    $('#bloco-transferencia').hide();

    $('#qual-forma-ingresso').on('change', function(){
        var selectValor = $(this).val();

        // Esconde todos os campos se selecionado vestibular on-line
        if (selectValor == '1'){
            $('#bloco-vestibular-presencial-tradicional').hide();
            $('#bloco-vestibular-presencial-agendado').hide();
            $('#bloco-enem').hide();
            $('#bloco-diploma').hide();
            $('#bloco-transferencia').hide();
        }

        // Mostra bloco vestibular presencial tradicional
        if (selectValor == '2') {
            $('#bloco-vestibular-presencial-tradicional').show();
            $('#bloco-vestibular-presencial-agendado').hide();
            $('#bloco-enem').hide();
            $('#bloco-diploma').hide();
            $('#bloco-transferencia').hide();
        }

        // Mostra bloco vestibular presencial agendado
        if (selectValor == '3') {
            $('#bloco-vestibular-presencial-tradicional').hide();
            $('#bloco-vestibular-presencial-agendado').show();
            $('#bloco-enem').hide();
            $('#bloco-diploma').hide();
            $('#bloco-transferencia').hide();
        }

        // Mostra bloco enem
        if (selectValor == '4') {
            $('#bloco-vestibular-presencial-tradicional').hide();
            $('#bloco-vestibular-presencial-agendado').hide();
            $('#bloco-enem').show();
            $('#bloco-diploma').hide();
            $('#bloco-transferencia').hide();
        }

        // Mostra bloco portador de diploma
        if (selectValor == '5') {
            $('#bloco-vestibular-presencial-tradicional').hide();
            $('#bloco-vestibular-presencial-agendado').hide();
            $('#bloco-enem').hide();
            $('#bloco-diploma').show();
            $('#bloco-transferencia').hide();
        }

        // Mostra bloco transferência
        if (selectValor == '6') {
            $('#bloco-vestibular-presencial-tradicional').hide();
            $('#bloco-vestibular-presencial-agendado').hide();
            $('#bloco-enem').hide();
            $('#bloco-diploma').hide();
            $('#bloco-transferencia').show();
        }

        // Esconde todos se voltar para o selecione
        if (selectValor == ''){
            $('#bloco-vestibular-presencial-tradicional').hide();
            $('#bloco-vestibular-presencial-agendado').hide();
            $('#bloco-enem').hide();
            $('#bloco-diploma').hide();
            $('#bloco-transferencia').hide();
        }
    })

    // Configurações do Datepicker
    $(function () {

        // DATAS INDISPONÍVEIS (FERIADOS, FINAIS DE SEMANA)
        var unavailableDates = [
            "9-10-2022",
            "8-10-2022",
            "12-10-2022",
            "15-10-2022",
            "16-10-2022",
            "22-10-2022",
            "23-10-2022",
            "29-10-2022",
            "30-10-2022",
            "2-11-2022",
            "5-11-2022",
            "6-11-2022",
            "12-11-2022",
            "13-11-2022",
            "14-11-2022",
            "15-11-2022",
            "19-11-2022",
            "20-11-2022",
            "26-11-2022",
            "27-11-2022",
            "3-12-2022",
            "4-12-2022",
            "10-12-2022",
            "11-12-2022",
            "17-12-2022",
            "18-12-2022",
            "23-12-2022",
            "24-12-2022",
            "25-12-2022",
            "26-12-2022",
            "27-12-2022",
            "28-12-2022",
            "29-12-2022",
            "30-12-2022",
            "31-12-2022",
            "1-1-2023",
            "7-1-2023",
            "8-1-2023",
            "14-1-2023",
            "15-1-2023",
            "21-1-2023",
            "22-1-2023",
            "25-1-2023",
            "28-1-2023",
            "29-1-2023",
            "4-2-2023",
            "5-2-2023",
            "11-2-2023",
            "12-2-2023",
            "18-2-2023",
            "19-2-2023",
            "20-2-2023",
            "21-2-2023",
            "22-2-2023",
            "23-2-2023",
            "24-2-2023",
            "25-2-2023",
            "26-2-2023",

            "4-3-2023",
            "5-3-2023",
            "11-3-2023",
            "12-3-2023",
            "18-3-2023",
            "19-3-2023",
            "25-3-2023",
            "26-3-2023",

            "1-4-2023",
            "2-4-2023",
            "7-4-2023",
            "8-4-2023",
            "9-4-2023",
            "15-4-2023",
            "16-4-2023",
            "21-4-2023",
            "22-4-2023",
            "23-4-2023",
            "29-4-2023",
            "30-4-2023",
        ];

        function unavailable(date) {
            dmy = date.getDate() + "-" + (date.getMonth() + 1) + "-" + date.getFullYear();
            if ($.inArray(dmy, unavailableDates) == -1) {
                return [true, ""];
            } else {
                return [false, "", "Unavailable"];
            }
        }

        $("#datepicker").datepicker({
            minDate: 0,
            maxDate: new Date('2023-4-28'),
            beforeShowDay: unavailable,
            dateFormat: "dd/mm/yy",
            dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado', 'Domingo'],
            dayNamesMin: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S', 'D'],
            dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb', 'Dom'],
            monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
            monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez']
        });

        $("#datepicker").focusout(function(e){
          // $(this).css("background-color", "#FFFFFF"); 13
          console.log($("#datepicker").val());
        });

    });

    var body = $('body');
});
</script>

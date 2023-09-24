<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--CSS BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!--REFERENCIA DO BOOTSTRAP AO JAVASCRIPT-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

    <!-- CSS PESSOAL -->
    <link rel="stylesheet" href="public/css/style.css">

    <!-- BOOSTRAP ICONES-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


    <link rel="shortcut icon" href="public/imgs/favicon.ico" type="image/x-icon">


    <title>MED.ONLINE - Agendamentos de Consultas Médicas</title>

</head>

<body>
    <!-- HEADER -->
    <header>
        <!-- CONTAINER -->
        <div class="container-sm">
            <nav><a href="index.html">
                    <img id="logoInicio" src="public/imgs/logo.png" alt="logo" width="40" height="32"
                        viewBox="0 0 118 94">
                    <ul class="ul">
                        <a href="index.html">Home</a>
                        <a href="Tela-4-CONSULTAR.html">Consultar agendamento</a>
                        <a href="index.html">Contato</a>

                        <a style="color: white;" class=" nav-link" href="<?=route('autenticacao/logar')?>">Agendar
                            Consulta</a>

                        <!--<ul class="btn dropdown">
                    <a id="btn" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Entrar
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="login.html">Como paciente</a></li>
                      <li><a class="dropdown-item" href="#">Como profissional da saúde</a></li>
                    </ul>
                </ul>-->
                    </ul>
            </nav>

            <section class="banner">
                <div class="banner-text">
                    <h1>MED.ONLINE</h1>
                    <p>Software de Agendamentos de Consultas Médicas</p>
                </div>
            </section>
        </div>
        <!-- END CONTAINER-->
    </header>
    <br><br><br><br><br><br>
    <!-- END HEADER-->
    <!-- MED 1.0-->
    <section class="agenda">
        <!-- CONTAINER -->
        <div class="container">
            <div class="agenda-text">
                <h3>Agendamentos de Consultas Médicas de forma online</h3>
                <p>Sem precisar sair de casa! Agende pelo celular ou pelo computador</p>
            </div>
            <div class="agenda-img">
                <img src="public/imgs/img-agenda.png" alt="agenda-img">
            </div>
        </div>
        <!-- END CONTAINER -->
    </section>
    <!-- END MED 1.0-->
    <!-- MED 2.0-->
    <section class="agenda">
        <!-- CONTAINER -->
        <div class="container">
            <div class="agenda-img">
                <img src="public/imgs/pilha-papel.png" alt="agenda-img">
            </div>
            <div class="agenda-text">
                <h3>Praticidade no atendimento</h3>
                <p>Sem a necessidade de meios manuais ou uso do papel.
                    Aproveite a tecnologia, acelere o processo e ganhe mais qualidade e praticidade em seus atendimentos
                    médicos</p>
            </div>
        </div>
        <!-- END CONTAINER -->
    </section>
    <!-- END MED 2.0-->
    <!-- COMO EU AGENDO???-->
    <section class="passo-a-passo">
        <div class="container">
            <h3>Como agendar uma consulta?</h3>
            <p style="color: #0000009c;">Siga o passo a passo abaixo:</p>
            <div class="cards">
                <div class="card-item">
                    <i class="bi bi-box-arrow-in-right" style="color: #82dcff;"></i>
                    <p>Acesse o botão "agendar consulta", logo em seguida você será direcionado a um formulário onde
                        precisará que seja preenchido pelos seus dados para realizar o agendamento de sua consulta</p>
                </div>

                <div class="card-item">
                    <i class="bi bi-calendar3" style="color: #82dcff;"></i>
                    <p>Escolha a especialidade médica para a qual deseja ir e o dia da consulta</p>
                </div>

                <div class="card-item">
                    <i class="bi bi-check2" style="color: #82dcff;"></i>
                    <p>Pronto, sua consulta está agendada! Você receberá um código para consultar as informações, basta
                        acessar o botão localizado no cabeçalho do site.<br>
                        Chegue cedo!</p>
                </div>
            </div>
        </div>
    </section>
    <!-- END | COMO EU AGENDO???-->
    <section class="informações">
        <div class="container">
            <hr>
            <div class="name-Page">
                <img id="logo" src="public/imgs/medEndPage.png" alt="">
                <p></p>
            </div>
            <div class="login">
                <button><a id="btn2" href="login.html">Login do Profissional da Saúde</a></button>
            </div>
        </div>
    </section>
    <script src="js/script.js"></script>
</body>

</html>
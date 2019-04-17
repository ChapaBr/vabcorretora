<!-- Include Header -->
<?php 
$page = 'cotacao';
include('layouts/header.php'); ?>

<section id="cotacao">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mt-5">
                <h3 class="tittle-back-white mt-5">Cotação - Automóveis</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 mt-5">
                <center>
                    <iframe id="ifrm" width=100% height='600px' src="https://www.w3corretor.com.br/cotacaoAutoCadastro1.html?TIPO=1&NM_LOGIN=
COTAAQUI.VB&DS_SENHA_CRIPT=micro123&CHAVE_DECRIPT=yFuKAnsJXT239KRK%2BcVTPQ%3D%3D">
                    </iframe>
                </center>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 text-center mt-5 content_text">
                <p>Não procura cotação de automóveis?<br> Quer outros serviços? <br> Entre em contato conosco aqui.</p>
                <a href="contato.php" class="btn_post">Outros orçamentos</a>
            </div>
        </div>
    </div>
</section>

<!-- Include Footer -->
<?php include('layouts/footer.php'); ?>
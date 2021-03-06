<!-- INCLUDE -->

<?php
define('U', '');
// TITULO DA PAGINA
$titulo = "Teste Dok Despachante";
include_once(U . 'includes/header.php');

?>

<!-- INCLUDE -->

<section class="header">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md-4 order-2 order-sm-1">
                <figure>
                    <img src="<?php echo U?>src/imgs/foto_matheus.png" class="w-100 img-matheus" alt="">
                </figure>
            </div>
            <div class="col-md-7 order-1 order-sm-2">
                <h1 class="header__title">Torne-se um afiliado do maior despachante do Brasil!</h1>
            </div>
        </div>
    </div>
</section>

<!-- FORM INPUT CADASTRO -->
    <section class="afiliado">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <figure>
                        <img src="<?php echo U?>src/imgs/video-placeholder.jpg" class="w-100" alt="">
                    </figure>
                </div>
                <div class="col-md-6">
                    <div class="afiliado_form">
                        <form action="" method="post" id="signupForm">
                            <div class="mb-3">
                                <input type="text" for="nome" class="form-control form-default" id="nome" placeholder="Informe seu Nome">
                                <div class="valid-feedback">
                                    <span class="text-white">Tudo certo!</span>
                                </div>
                            </div>
                            <div class="mb-4">
                                <input type="email" for="email"  class="form-control form-default" id="email" id="email" placeholder="Informe seu E-mail">
                                <div class="valid-feedback">
                                <span class="text-white">Tudo certo!</span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn__green">Sim, quero ser um afiliado</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- FORM INPUT CADASTRO -->

<!-- SECTION MOTIVOS -->
<section class="motivos">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="motivos__title">Conhe??a TODOS os motivos para ser um Afiliado DOK Despachante</h2>
            </div>

            <!-- CARD -->
            <div class="col-md-6">
                <div class="motivos__card">
                    <div class="motivos__card__icon">
                        <figure>
                            <img src="<?php echo U?>src/imgs/porcentagem.svg" alt="">
                        </figure>
                    </div>
                    <div class="motivos__card__text">
                        <p>Fature <strong>40%</strong> dos honor??rios de cada pedido com pagamento aprovado!</p>
                    </div>
                </div>
            </div>
             <!-- CARD -->

             <!-- CARD -->
            <div class="col-md-6">
                <div class="motivos__card">
                    <div class="motivos__card__icon">
                        <figure>
                            <img src="<?php echo U?>src/imgs/enviar.svg" alt="">
                        </figure>
                    </div>
                    <div class="motivos__card__text">
                        <p>Tenha suporte di??rio em nosso <strong>grupo exclusivo</strong> do Telegram.</p>
                    </div>
                </div>
            </div>
             <!-- CARD -->

             <!-- CARD -->
            <div class="col-md-6">
                <div class="motivos__card">
                    <div class="motivos__card__icon">
                        <figure>
                            <img src="<?php echo U?>src/imgs/presente.svg" alt="">
                        </figure>
                    </div>
                    <div class="motivos__card__text">
                        <p>Receba <strong>premia????es</strong> a cada cota de vendas alcan??adas! Ganhe Smartwatches, Smartphones e muito mais.</p>
                    </div>
                </div>
            </div>
             <!-- CARD -->

             <!-- CARD -->
            <div class="col-md-6">
                <div class="motivos__card">
                    <div class="motivos__card__icon">
                        <figure>
                            <img src="<?php echo U?>src/imgs/moeda.svg" alt="">
                        </figure>
                    </div>
                    <div class="motivos__card__text">
                        <p>Procurando por renda complementar? Fature at?? R$1000.00 por m??s fazendo uma ??nica venda por dia.</p>
                    </div>
                </div>
            </div>
             <!-- CARD -->
             
        </div>
    </div>
</section>
<!-- SECTION MOTIVOS -->

<!-- INFORMATIVO -->
    <section class="informativo">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h2 class="informativo__title">J?? pensou em quantos ve??culos existem s?? no estado de S??o Paulo?</h2>
                    <h3 class="informativo__subTitle">H?? 30 milh??es de pessoas para voc?? vender esse produto</h3>
                </div>
                <div class="col-md-4">
                    <figure>
                        <img src="<?php echo U?>src/imgs/carro.png" class="w-100" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </section>
<!-- INFORMATIVO -->

<!-- INFORMA????ES CARROS -->
    <article class="informacoes">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-7">
                     <p class="informacoes__text">Somente na capital paulista existem mais de 8.603.239 ve??culos circulando diariamente, de acordo com a pesquisa da Companhia de Engenharia de Tr??fego (CET), de 2018.</p>
                     <p class="informacoes__text--red">No Estado de S??o Paulo h?? mais de 30 milh??es de ve??culos. Isso quer dizer que voc?? tem 30 milh??es de potenciais clientes que precisam e que v??o regularizar os d??bitos dos seus ve??culos anualmente.</p>
                     <p class="informacoes__text">Come??ando pelo IPVA, nos 3 primeiros meses do ano, passando para o licenciamento, que vai at?? dezembro, sem contar com eventuais multas e condutores inadimplentes que buscam parcelamentos durante o ano todo.</p>
                </div>
                <div class="col-md-4">
                    <figure>
                        <img src="<?php echo U?>src/imgs/carros_parque.png" class="w-100" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </section>
<!-- INFORMA????ES CARROS -->


<!-- AFILIADO INFORMACOES -->
<article class="afiliado-informacoes">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-12">
                        <h2 class="afiliado-informacoes__title">Seja um afiliado e aproveite todo o potencial deste p??blico!</h2>
                </div>
                <div class="col-md-4">
                        <figure>
                            <img src="<?php echo U?>src/imgs/carteira.png" class="w-100" alt="">
                        </figure>
                    </div>
                    <div class="col-md-7">
                        <p class="afiliado-informacoes__text">Com o DOK Despachante voc?? oferece praticidade e solu????o para quem busca pagar seus d??bitos com a menor burocracia poss??vel. Nossos servi??os funcionam 100% online, com parcelamentos em at?? 12x, divididos em 6 diferentes cart??es, com as menores taxas do mercado.</p>
                        <p class="afiliado-informacoes__text">Afilie-se, leve nossos servi??os para quem precisa e aproveite a renda extra que voc?? sempre sonhou. Fa??a parte do time do despachante que mais cresce no Brasil, com 15 anos de experi??ncia no mercado de ve??culos paulista.</p>
                    </div>
                    <div class="col-md-12 justify-content-center d-flex mt-4">
                        <a href="" class="btn btn__green">QUERO SER UM AFILIADO</a>
                    </div>
                </div>
        </div>
    </section>
<!-- INFORMA????ES CARROS -->


<!-- FOOTER -->
<?php include_once(U . 'includes/footer.php'); ?>
<!-- FOOTER -->
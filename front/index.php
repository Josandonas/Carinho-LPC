<?php
require('../funcoes.php');
$link = ConectarBD();
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Net-Smart</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Net-Smart</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cadastro.html">Cadastrar-se</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.html">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <!-- Page Content -->
            <form method="post" action="../exec.php">
    <div class="container col-lg-8">
        <div class="row col-lg-14">

            <!-- /.col-lg-3 -->

                <input type="hidden" name="id_produto" value="4">
                <div class="col-lg-6 col-md-5 mb-4">
                    <div class="card h-100">
                        <a href="pagitem1.html"><img class="card-img-top1" src="./imagens/picture1.jpg"></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="pagitem1.html" class="nomeimg1">TV LED 19,5 polegadas</a>
                            </h4>
                            <br>
                            <h5>R$ 499,90</h5>
                            <p class="card-text">HQ HD Conversor Digital HQTV19 HDMI USB</p>
                        </div>
                        <div class="card-footer">
                            <small><button type="submit" class="btn btn-primary btn-lg btn-block" class="text-muted">Adicionar ao Carrinho</button></small>
                        </div>
                    </div>
                </div>
<!--            </form> -->

<!--            <form method="post" onsubmit="ProdutoNoCarrinho()">--> 
                <input type="hidden" name="id_produto" value="5">
                <div class="col-lg-6 col-md-5 mb-4">
                    <div class="card h-100">
                        <a href="pagitem2.html"><img class="card-img-top2" src="./imagens/picture2.jpg"></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="pagitem2.html" class="nomeimg2"> Philips 32 Polegadas</a>
                            </h4>
                            <h5>R$ 1.159,00</h5>
                            <p class="card-text">Smart TV LED 32" Philips 32PHG5102/78 com Conversor Digital Wi-Fi integrado 2 USB 3 HDMI</p>
                        </div>
                        <div class="card-footer">
                            <small><button type="submit" class="btn btn-primary btn-lg btn-block" class="text-muted">Adicionar ao Carrinho</button></small>
                        </div>
                    </div>
                </div>
<!--            </form> -->

<!--            <form method="post" onsubmit="ProdutoNoCarrinho()"> -->
                <input type="hidden" name="id_produto" value="2">
                <div class="col-lg-6 col-md-5 mb-4">
                    <div class="card h-100">
                        <a href="pagitem3.html"><img class="card-img-top3" src="./imagens/picture3.jpg"></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="pagitem3.html" class="nomeimg3">Panasonic: TV LED 32</a>
                            </h4>
                            <h5>R$ 819,00</h5>
                            <p class="card-text">HD Panasonic TC-32F400B 2 HDMI USB Conversor Digital</p>
                        </div>
                        <div class="card-footer">
                            <small><button type="submit" class="btn btn-primary btn-lg btn-block" class="text-muted">Adicionar ao Carrinho</button></small>
                        </div>
                    </div>
                </div>
<!--            </form> -->

<!--            <form method="post" onsubmit="ProdutoNoCarrinho()"> -->
                <input type="hidden" name="id_produto" value="3">
                <div class="col-lg-6 col-md-5 mb-4">
                    <div class="card h-100">
                        <a href="pagitem4.html"><img class="card-img-top4" src="./imagens/picture4.jpg"></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="pagitem4.html" class="nomeimg4">Philco: TV LED 24</a>
                            </h4>
                            <h5>R$ 629,00 </h5>
                            <p class="card-text">Philco PTV24N92D HD com Conversor Digital 1 HDMI 1 USB Sleep timer - 60Hz</p>
                        </div>
                        <div class="card-footer">
                            <small><button type="submit" class="btn btn-primary btn-lg btn-block" class="text-muted">Adicionar ao Carrinho</button></small>
                        </div>
                    </div>
                </div>
<!--            </form> -->


<!--            <form method="post" onsubmit="ProdutoNoCarrinho()">-->
                <input type="hidden" name="id_produto" value="1">
                <div class="col-lg-6 col-md-5 mb-4">
                    <div class="card h-100">
                        <a href="pagitem5.html"><img class="card-img-top5" src="./imagens/picture5.jpg"></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="pagitem5.html" class="nomeimg5">Philco: Smart TV LED 32</a>
                            </h4>
                            <h5>R$ 800,00</h5>
                            <p class="card-text">Philco PTV32G50SN HD com Conversor Digital 2 HDMI 1 USB Wi-Fi Áudio Dolby Preta</p>
                        </div>
                        <div class="card-footer">
                            <small><button type="submit" class="btn btn-primary btn-lg btn-block" class="text-muted">Adicionar ao Carrinho</button></small>
                        </div>
                    </div>
                </div>
<!--            </form> -->


<!--            <form method="post" onsubmit="ProdutoNoCarrinho()">-->
                <input type="hidden" name="id_produto" value="10">
                <div class="col-lg-6 col-md-5 mb-4">
                    <div class="card h-100">
                        <a href="pagitem6.html"><img class="card-img-top6" src="./imagens/picture6.jpg"></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="pagitem6.html" class="nomeimg6">Smartphone: Samsung Galaxy J8</a>
                            </h4>
                            <br>
                            <br>
                            <br>
                            <h5>R$ 1.100,00</h5>

                            <p class="card-text">64GB Dual Chip Android 8.0 Tela 6" Octa-Core 1.8GHz 4G Câmera 16MP F1.7 + 5MP F1.9 (Dual Cam) - Preto</p>
                        </div>
                        <div class="card-footer">
                            <small><button type="submit" class="btn btn-primary btn-lg btn-block" class="text-muted">Adicionar ao Carrinho</button></small>
                        </div>
                    </div>
                </div>
<!--            </form>  -->



<!--            <form method="post" onsubmit="ProdutoNoCarrinho()"> -->
                <input type="hidden" name="id_produto" value="9">
                <div class="col-lg-6 col-md-5 mb-4">
                    <div class="card h-100">
                        <a href="pagitem7.html"><img class="card-img-top7" src="./imagens/picture7.jpg"></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="pagitem7.html" class="nomeimg7">iPhone 8</a>
                            </h4>
                            <br>
                            <br>
                            <h5>R$ 3.000,00</h5>
                            <p class="card-text">64GB Cinza Espacial Tela 4.7" IOS 4G Câmera 12MP - Apple</p>
                        </div>
                        <div class="card-footer">
                            <small><button type="submit" class="btn btn-primary btn-lg btn-block" class="text-muted">Adicionar ao Carrinho</button></small>
                        </div>
                    </div>
                </div>
<!--            </form> -->

<!--            <form method="post" onsubmit="ProdutoNoCarrinho()"> -->
                <input type="hidden" name="id_produto" value="7">
                <div class="col-lg-6 col-md-5 mb-4">
                    <div class="card h-100">
                        <a href="pagitem8.html"><img class="card-img-top8" src="./imagens/picture8.jpg"></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="pagitem8.html" class="nomeimg8">Smartphone: LG Q7+</a>
                            </h4>
                            <br>
                            <br>
                            <h5>R$ 1.299,00</h5>
                            <p class="card-text"> Dual Chip Android 8.1.0 Oreo Tela 5.5" Octa-Core 1.5 Ghz 64GB 4G Câmera 16MP com TV - Preto</p>
                        </div>
                        <div class="card-footer">
                            <small><button type="submit" class="btn btn-primary btn-lg btn-block" class="text-muted">Adicionar ao Carrinho</button></small>
                        </div>
                    </div>
                </div>
<!--            </form> -->

<!--            <form method="post" onsubmit="ProdutoNoCarrinho()"> -->
                <input type="hidden" name="id_produto" value="6">
                <div class="col-lg-6 col-md-5 mb-4">
                    <div class="card h-100">
                        <a href="pagitem9.html"><img class="card-img-top9" src="./imagens/picture9.jpg"></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="pagitem9.html" class="nomeimg9">Smartphone: Motorola Moto G7 Play</a>
                            </h4>
                            <br>
                            <br>
                            <h5>R$ 800,00</h5>
                            <p class="card-text">32GB Dual Chip Android Pie - 9.0 Tela 5.7" 1.8 GHz Octa-Core 4G Câmera 13MP - Indigo</p>
                        </div>
                        <div class="card-footer">
                            <small><button type="submit" class="btn btn-primary btn-lg btn-block" class="text-muted">Adicionar ao Carrinho</button></small>
                        </div>
                    </div>
                </div>
<!--            </form> -->


<!--            <form method="post" onsubmit="ProdutoNoCarrinho()"> -->
                <input type="hidden" name="id_produto" value="8">
                <div class="col-lg-6 col-md-5 mb-4">
                    <div class="card h-100">
                        <a href="pagitem10.html"><img class="card-img-top10" src="./imagens/picture10.jpg"></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="pagitem10.html" class="nomeimg10">iPhone Xs Max</a>
                            </h4>
                            <br>
                            <br>
                            <br>
                            <h5>R$ 7.100,00</h5>
                            <p class="card-text"> 256GB IOS12 4G + Wi-fi Câmera 12MP - Apple</p>
                        </div>
                        <div class="card-footer">
                            <small><button type="submit" class="btn btn-primary btn-lg btn-block" class="text-muted">Adicionar ao Carrinho</button></small>
                        </div>
                    </div>
                </div>
            </form>


            <!-- /.row -->


            <!-- /.col-lg-9 -->

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Net-Smart 2019</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html> 
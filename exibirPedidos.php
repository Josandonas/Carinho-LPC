<?php require('funcoes.php');?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

  <title>Net-Smart</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">
  <link href="pedidos.css" rel="stylesheet">

</head>

<body>
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
              <span class="sr-only"></span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.html">Sair</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <br>
</nav>
<section class="jumbotron text-center">
  <div class="container">
    <h1 class="jumbotron-heading">HISTÓRICO DE PEDIDOS</h1>
  </div>
</section>

<div class="container mb-4">
  <?php
  $sql = "select Produtos.imagem as imagem, quantidade, Produtos.valor as valor, subtotal from Cliente inner join Carrinho on Carrinho.cliente = Cliente.idCliente 
  inner join Produtos_has_Carrinho on Produtos_has_Carrinho.idCarrinho = Carrinho.idCarrinho
  inner join Produtos on Produtos_has_Carrinho.idProduto = Produtos.idProduto where idCliente='".$cliente."';";
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) {
    echo "<div class=\"row\">";
    echo "<div class=\"col-12\">";
    echo "<div class=\"table-responsive\">";
    echo "<table class=\"table table-striped\">";
    echo "<thead>";
    echo "<tr>";
    echo "<th scope=\"col\"></th>";
    echo "<th scope=\"col\">Produto</th>";
    echo "<th scope=\"col\" class=\"text-center\">Quantidade</th>";
    echo "<th scope=\"col\" class=\"text-right\">Preço</th>";
    echo "<th> </th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    echo "<tr>";
    echo "<td><src="data:image/jpeg;base64,' . base64_encode($row['imagem']) .'"/></td>";
    echo "<td> </td>";
    echo "<td><input class=\"form-control\" type=\"text\" value=".$row['quantidade']." /></td>";
    echo "<td class=\"text-right\">R$.['valor'].</td>";
    echo "<td class=\"text-right\"></td>";
    echo "</tr>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td>Sub-Total</td>";
    echo "<td class=\"text-right\">R$.['subtotal'].</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td><strong>Total</strong></td>";
    echo "<td class=\"text-right\"><strong></strong></td>";
    echo "</tr>";
    echo "</tbody>";
    echo "</table>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    ?>
  }
</div>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
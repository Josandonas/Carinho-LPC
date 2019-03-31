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
  <link href="css/exibir.css" rel="stylesheet">
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
            
            <a class="nav-link" onclick="goBack()">Continuar Comprando</a>
            
          </li>
          <li class="nav-item">
            <a class="nav-link" href="front/login.html">Sair</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
  <br>
<section class="jumbotron text-center">
  <div class="container">
    <h1 class="jumbotron-heading">HISTÓRICO DE PEDIDOS</h1>
  </div>
</section>

<div class="container mb-4">
  <?php
  $link = ConectarBD();
  $cliente = GetCliente($link);

 $selV = "select sum(subtotal) from Produtos_has_Carrinho
inner join Carrinho on Produtos_has_Carrinho.idCarrinho = Carrinho.idCarrinho
inner join Cliente on Carrinho.cliente = Cliente.idCliente
 where idCliente='".$cliente."';";

 $ret = mysqli_query($link, $selV);
 $total = mysqli_fetch_row($ret);

  $sql = "select Produtos.nomeProduto as Produto, quantidade, Produtos.valor as valor, subtotal from Cliente inner join Carrinho on Carrinho.cliente = Cliente.idCliente 
inner join Produtos_has_Carrinho on Produtos_has_Carrinho.idCarrinho = Carrinho.idCarrinho
inner join Produtos on Produtos_has_Carrinho.idProduto = Produtos.idProduto where idCliente='".$cliente."';";
  $result = mysqli_query($link,$sql);
  while($row = $result->fetch_assoc()) {
    echo "<center>";
    echo "<div class=\"row\">";
    echo "<div class=\"col-12\">";
    echo "<div class=\"table-responsive\">";
    echo "<table class=\"table table-striped\">";
    echo "<tr>";
    echo "<th>Produto</th>";
    echo "<th>Quantidade</th>";
    echo "<th>Preço</th>";
    echo "<th>Subtotal</th>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>'".$row['Produto']."'</td>";
    echo "<td>'".$row['quantidade']."'</td>";
    echo "<td>R$'".$row['valor']."'</td>";
    echo "<td>R$'".$row['subtotal']."'</td>";
    echo "</tr>";
    echo "</table>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</center>";
      }

    echo "<td><strong>Total: R$'".round($total[0],3)."'</strong></td>";
    ?>
</div>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
function goBack() {
  window.history.back();
}
</script>

</body>

</html>
<?php 

require('validacoes.php');
$link = ConectarBD();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<title>Teste Imagem</title>
</head>
<body>
	<?php
	$sql = "SELECT idProdutos, nomeProduto, imagem FROM Produtos";
	$result = mysqli_query($link,$sql);

	if ($result->num_rows > 0) {
    // output data of each row
		while($row = $result->fetch_assoc()) {
			echo "<div class=\"card\" style=\"width: 18rem;\">";
			echo "<form method=\"get\" action=\"adicionarCarrinho.php\">";
				//echo "<img class=\"card-img-top\" src=\"...\" alt=\"Card image cap\">";
			echo '<img class=\"card-img-top\" src="data:image/jpeg;base64,' . base64_encode($row['imagem']) .'"/>';
			echo "<div class=\"card-body\">";
			echo "<h5 class=\"card-title\">Card title</h5>";
			echo "<p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>";
			echo "</div>";
			echo "<ul class=\"list-group list-group-flush\">";
			echo "<input name=\"id_p\"type=\"text\" value=".$row['idProdutos'].">";
			echo "<li class=\"list-group-item\" value=".$row['nomeProduto']."></li>";
			echo "<li class=\"list-group-item\">Vestibulum at eros</li>";
			echo "</ul>";
			echo "<div class=\"card-body\">";
			echo "<input type=\"submit\" value=\"Adicionar ao Carrinho\">";
			echo "</div>";
			echo "</form>";
			echo "</div>";
}
} else {
echo "Nenhum resultado encontrado!";
}
?>
</body>
</html>
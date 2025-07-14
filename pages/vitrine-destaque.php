<?php 

require 'classes/Veiculo.php';

$veiculos = new Veiculo();

$lista = $veiculos->listar();

foreach ($lista as $item):

?>
<div class="vitrine-destaque">
	<div style="background-image:url('imagens/<?= $item['foto_principal'] ?>');" class="carro-img"></div>
	<!--carro-img-->
	<div class="info-carro">
		<h2><?= $item['titulo'] ?></h2>
		<p><?= $item['info'] ?></p>
		<a class="btn1" href="veiculo.php?id=<?= $item['id'] ?>">Mais Detalhes</a>
	</div>
	<!--info-carro-->
</div>
<!--vitrine-destaque-->
<?php endforeach; ?>
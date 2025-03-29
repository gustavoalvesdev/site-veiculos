<?php 
require 'config.php';
require 'pages/header.php';

require 'classes/Veiculo.php';

$id = addslashes($_GET['id']);

if (!isset($id) || empty($id)) {
	header('Location: ' . $base_url);
	exit;
}

$v = new Veiculo();
$veiculo = $v->obter($id);

?>



	<section class="venda-single">


		<div class="line-titulo">
			<div class="ln1"></div>
			<h2>Veículo para Venda</h2>
		</div>


		<div class="container">

			<div class="info-veiculo">
				<div class="info-bread"><a href="index.html">HOME</a><span>></span>
					<a href="venda.html">VENDA</a><span>></span>
					<a href="<?php $base_url ?>veiculo.php?id=<?= $id ?>"><?= strtoupper($veiculo['titulo']) ?></a>
				</div>
				<div class="foto-destaque"></div>
				<div class="nav-galeria-parent">
					<div class="arrow-left-nav"></div>
					<div class="arrow-right-nav"></div>
					<div class="nav-galeria">
						<div class="nav-galeria-wraper">
							<div class="mini-img-wraper">
								<div style="background-image:url('imagens/<?= $veiculo['foto_principal'] ?>');" class="mini-img"></div>
							</div>
							<div class="mini-img-wraper">
								<div style="background-image:url('imagens/carro2.jpg');" class="mini-img"></div>
							</div>
							<div class="mini-img-wraper">
								<div style="background-image:url('imagens/carro3.jpg');" class="mini-img"></div>
							</div>
							<div class="mini-img-wraper">
								<div style="background-image:url('imagens/carro4.jpg');" class="mini-img"></div>
							</div>
						</div>
						<!--nav-galeria-wraper-->

					</div>
					<!--nav-galeria-->
				</div>
				<!--nav-galeria-parent-->
			</div>
			<!--info-->

			<div class="descricao-veiculo">
				<h2>R$ <?= number_format($veiculo['preco'], 2, ',', '.') ?></h2>
				<p><?= $veiculo['descricao'] ?></p>
				<a class="btn1" href="<?= $base_url ?>veiculo.php?id=<?= $id ?>#contato">Entre em contato</a>
			</div>
			<!--descricao-veiculo-->
			<div class="clear"></div>
		</div>
		<!--container-->

	</section>
	<!--venda-single-->




	<section class="contato" id="contato">
		<div class="line-titulo">
			<div class="ln1"></div>
			<h2>Contato</h2>
		</div>
		<!--line-titulo-->

		<form>
			<div class="input-wraper w100">
				<input placeholder="Nome*" type="text" required />
			</div>
			<!--input-wraper-->

			<div class="input-wraper w50">
				<input placeholder="E-mail*" type="text" required />
			</div>
			<!--input-wraper-->

			<div class="input-wraper w50">
				<input placeholder="Telefone*" type="text" required />
			</div>
			<!--input-wraper-->

			<div class="input-wraper w100">
				<textarea placeholder="Mensagem*" required></textarea>
			</div>
			<!--input-wraper-->

			<div class="input-wraper w100">
				<input class="btn1" type="submit" value="Enviar" />
			</div>
			<!--input-wraper-->

			<div class="clear"></div>
			<!--clear-->

		</form>

	</section>
	<!--contato-->


	<section class="veiculos-destaque">
		<div class="line-titulo">
			<div class="ln1"></div>
			<h2>Veículos em destaque</h2>
		</div>
		<!--line-titulo-->
		<div class="container">
			<div class="vitrine-destaque">
				<div style="background-image:url('imagens/carro1.jpg');" class="carro-img"></div>
				<!--carro-img-->
				<div class="info-carro">
					<h2>Volkswagen Karmann-ghia</h2>
					<p>1.6 8v, Gasolina, 2P, Manual1969</p>
					<a class="btn1" href="veiculo-teste.html">Mais Detalhes</a>
				</div>
				<!--info-carro-->
			</div>
			<!--vitrine-destaque-->

			<div class="vitrine-destaque">
				<div style="background-image:url('imagens/carro1.jpg');" class="carro-img"></div>
				<!--carro-img-->
				<div class="info-carro">
					<h2>Volkswagen Karmann-ghia</h2>
					<p>1.6 8v, Gasolina, 2P, Manual1969</p>
					<a class="btn1" href="veiculo-teste.html">Mais Detalhes</a>
				</div>
				<!--info-carro-->
			</div>
			<!--vitrine-destaque-->

			<div class="vitrine-destaque">
				<div style="background-image:url('imagens/carro1.jpg');" class="carro-img"></div>
				<!--carro-img-->
				<div class="info-carro">
					<h2>Volkswagen Karmann-ghia</h2>
					<p>1.6 8v, Gasolina, 2P, Manual1969</p>
					<a class="btn1" href="veiculo-teste.html">Mais Detalhes</a>
				</div>
				<!--info-carro-->
			</div>
			<!--vitrine-destaque-->
			<div class="clear"></div>
		</div>
		<!--container-->
	</section>
	<!--veiculos-destaque-->

<?php require 'pages/footer.php'; ?>
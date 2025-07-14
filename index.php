<?php require 'config.php'; ?>
<?php require 'pages/header.php'; ?>

	

	<section class="banner">
		<div class="container">
			<div class="text-banner">
				<div class="text-banner-single">Consultoria</div>
				<div class="text-banner-single">Compra</div>
				<div class="text-banner-single">Venda</div>
				<div class="text-banner-single">e-mail@hotmail.com</div>
			</div>
			<!--text-banner-->
		</div>
		<!--container-->
	</section>
	<!--banner-->

	<section class="veiculos-destaque">
		<div class="line-titulo">
			<div class="ln1"></div>
			<h2>Veículos em destaque</h2>
		</div>
		<!--line-titulo-->
		<div class="container">
			<?php require 'pages/vitrine-destaque.php'; ?>
			<div class="clear"></div>
		</div>
		<!--container-->
	</section>
	<!--veiculos-destaque-->

	<section class="servicos-descricao">
		<div class="half1">
			<div class="half1-wraper">
				<h2>Serviços</h2>
				<ul>
					<li>Compra</li>
					<li>Venda</li>
					<li>Consultoria de veículos</li>
					<li>Indicação de Mecânicos e peças</li>
				</ul>
				<a class="btn1" href="">Saiba mais</a>
			</div>
		</div>
		<!--half-1-->

		<div class="half2">

			<h2>Depoimentos</h2>
			<div class="depoimento-single">
				<p>“O Rafael foi muito atencioso, me buscou no aeroporto
					e garantiu toda comodidade e conforto no almoço, no transfer, na visita ao veículo e durante o
					test-drive”</p>
				<div class="navigation">
					<div class="arrows">
						<img src="imagens/arrow-left.png" />
						<img src="imagens/arrow-right.png" />
					</div>
					<!--arrows-->
					<div class="nome-depoimento">João da silva</div>
				</div>
				<!--navigation-->
			</div>
			<!--depoimento-single-->
		</div>
		<!--half2-->

	</section>
	<!--servicos-descricao-->

	<section class="contato" id="contato">
		<div class="line-titulo">
			<div class="ln1"></div>
			<h2>Contato</h2>
		</div>
		<!--line-titulo-->

		<?php 

			if (isset($_POST['acao'])) {

				require 'classes/Contato.php';

				$contato = new Contato();

				$nome = addslashes($_POST['nome']);
				$email = addslashes($_POST['email']);
				$telefone = addslashes($_POST['telefone']);
				$mensagem = addslashes($_POST['mensagem']);

				if ($contato->addContato($nome, $email, $telefone, $mensagem)) {

					echo "<p>Mensagem enviada com sucesso!</p>";

				} else {
					echo "<p>Falha ao enviar mensagem!</p>";
				}

				header('Location: ./index.php#contato');

			}

		?>

		<form method="POST">
			<div class="input-wraper w100">
				<input placeholder="Nome*" name="nome" type="text" required />
			</div>
			<!--input-wraper-->

			<div class="input-wraper w50">
				<input placeholder="E-mail*" name="email" type="text" required />
			</div>
			<!--input-wraper-->

			<div class="input-wraper w50">
				<input placeholder="Telefone*" name="telefone" type="text" required />
			</div>
			<!--input-wraper-->

			<div class="input-wraper w100">
				<textarea placeholder="Mensagem*" name="mensagem" required></textarea>
			</div>
			<!--input-wraper-->

			<div class="input-wraper w100">
				<input class="btn1" type="submit" name="acao" value="Enviar" />
			</div>
			<!--input-wraper-->

			<div class="clear"></div>
			<!--clear-->

		</form>

	</section>
	<!--contato-->

<?php require 'pages/footer.php'; ?>
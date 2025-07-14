<?php require 'config.php'; ?>
<?php require 'pages/header.php'; ?>

	<section class="venda">
		<div class="line-titulo">
			<div class="ln1"></div>
			<h2>Veículos</h2>
		</div>
		<!--line-titulo-->

		<div class="content-venda">
			<div class="container">
				<div class="sidebar">
					<div class="search1">
						<h2>Filtre por preço</h2>
						<div class="barra-preco">
							<div class="barra-preco-fill"></div>
							<!--barra-preco-fill-->
							<div class="pointer-barra"></div>
						</div>
						<!--barra-preco-->
						<div class="valor-pesquisa">
							<p class="preco_pesquisa">R$0,00</p>
							<p>R$70.000,00</p>
							<div class="clear"></div>
						</div>
						<!--valor-pesquisa-->
					</div>
					<!--search1-->

					<div class="search2">
						<h2>Filtre por ano</h2>
						<form>
							<div class="form-venda-wraper">
								<input type="checkbox" id="item1" />
								<label for="item1">
									<div class="circle"></div>
								</label>
								<!--item-->
								<span>Todas as décadas</span>
							</div>
							<!--form-venda-wraper-->


							<div class="form-venda-wraper">
								<input type="checkbox" id="item2" />
								<label for="item2">
									<div class="circle"></div>
								</label>
								<span>1960 - 1970</span>
							</div>
							<!--form-venda-wraper-->


							<div class="form-venda-wraper">
								<input type="checkbox" id="item3" />
								<label for="item3">
									<div class="circle"></div>
								</label>
								<span>1971 - 1990</span>
							</div>
							<!--form-venda-wraper-->

							<div class="form-venda-wraper">
								<input type="checkbox" id="item4" />
								<label for="item4">
									<div class="circle"></div>
								</label>
								<span>1991 - 2000</span>
							</div>
							<!--form-venda-wraper-->
						</form>
					</div>
					<!--search2-->
				</div>
				<!--sidebar-->

				<div class="vitrine-venda">

					<?php require 'pages/vitrine-destaque.php'; ?>

				</div>
				<!--vitrine-venda-->

				<div class="clear"></div>
			</div>
			<!--container-->
		</div>
		<!--content-venda-->

	</section>
	<!--venda-->


<?php require 'pages/footer.php'; ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="icon" href="SPUTNIK.png" type="image/x-icon"/>
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Robótica IFSP - BRI</title>
		<meta name="viewport" content="width=device-width,initial-scale=1, user-scalable=no">
		<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    	<!-- Bootstrap CSS -->
    	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    	<style type="text/css">
    		
    		.grid-container {
  				display: grid;
  				grid-column-gap: 50px;
  				grid-template-columns: auto auto auto;
  				padding: 10px;
			}

			.card1{
				border-radius: 25px;
			}
    	</style>
    </head>

    <body style="background-color: #262626;">
		<section class="menu">
			<label for="btn_menu">&#9776;</label>
			<header>
				<a href="" class="logo">
					<img src="./img/IFSP.png" style="width: 280px; height: 80px; top: 0;">
				</a>
				<a class="toggle"><b>Menu</b></a>
				<ul class="active">
					<li><a href="index.php"><b>Home</b></a></li>
					<li><a href="informacao.php">Competições<b></b></a></li>
					<li><a href="modalidades.php"><b>Modalidades</b></a></li>
					<li><a href="pesquisas.php"><b>Pesquisas</b></a></li>
					<button id="btn_Area" type="button" class="btn btn-secondary" data-toggle="modal" data-target="#Modal" ><b>ÁREA RESTRITA</b></button>
					<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					    <div class="modal-dialog">
					    	<div class="modal-content">
					    		<div class="modal-header">
					    			<h5 class="modal-title">Faça Login</h5>
									<button type="button" class="close" data-dismiss="modal"><span>×</span></button>	
								</div>
					       		<div id="modal-body" class="modal-body">
									<form method="post" enctype="multipart/form-data" action="login.php">
		 								<div id="box_comp">
			 		    					<label class="text2" for="nome" class="text2"> Login*: </label><br>
					  						<input type="text" id="login" name="login" required placeholder="Insira aqui o seu Login"><br>
										</div>
										<div>
											<br>
								 			<label class="text2" for="email"> Senha*: </label> <br>
								 			<input type="password" id="senha" name="senha" required placeholder="Insira aqui sua Senha" ><br>
										</div>
										<div>
											<br>
											<p>Esqueceu a senha? <a href="esqueceu.html" target="_blank">Clique aqui</a></p>
											<input type="submit" value="ENVIAR" class="botao_login" id="button_1" name="btn_enviar"><br><br>
										</div>
										<div class="modal-footer">
											<p id="paragra">Ainda não possui uma conta? <a href="formulario_cadastro.php" target="_blank">Cadastre-se!</a></p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
										</div>
									</form>	
				        		</div>
				      		</div>
				    	</div>
				  	</div>						
				</ul>
			</header>
		</section>

		<div class="container" style="margin:30px auto 30px auto;">
			<div class="row">
				<div class="col-md-12"></div>
			</div>
		</div>

		 <div class="grid-container">

			<div class="grid-item"></div>

  			<div class="grid-item">  
				<div class="container" style="margin:40px auto 30px auto;">
					<div class="row">
						<div class="col order-first">
							<div class="card1">
								<div class="card" style="width: 18rem;">
						  			<img class="card-img-top" src="img/mnr1.png" alt="Card image cap">
						  			<div class="card-body">
						   				<h5 class="card-title">Iniciação Científica é aprovada pela 2° vez na MNR</h5>
						   				<a href="#" class="btn btn-primary">Ler Mais</a>
						 			</div>
								</div>
							</div>
						</div>

						<div class="col">
							<div class="card1">
								<div class="card" style="width: 18rem;">
						  			<img class="card-img-top" src="img/conict1.png" alt="Card image cap">
						  			<div class="card-body">
						   				<h5 class="card-title">Robótica Aplicada a Medicina no CONICT 2020</h5>
						    			<p class="card-text"></p>
						   				<a href="#" class="btn btn-primary">Ler Mais</a>
						 			</div>
								</div>
							</div>	
						</div>
						
						<div class="col order-last">
							<div class="card1">				
								<div class="card" style="width: 18rem;">
						  			<img class="card-img-top" src="img/enict.png" alt="Card image cap">
						  			<div class="card-body">
						   				<h5 class="card-title">Robótica Aplicada a Medicina no ENICT 2020</h5>
						    			<p class="card-text"></p>
						   				<a href="#" class="btn btn-primary">Ler Mais</a>
						 			</div>
								</div>
							</div>	
						</div>	
					</div>	
				</div>
				<div class="row">
							<div class="col order-first">
							<div class="card1">
								<div class="card" style="width: 18rem;">
						  			<img class="card-img-top" src="img/mnr1.png" alt="Card image cap">
						  			<div class="card-body">
						   				<h5 class="card-title">Iniciação Científica é aprovada para bolsa na MNR</h5>
						   				<a href="#" class="btn btn-primary">Ler Mais</a>
						 			</div>
								</div>
							</div>
						</div>

						<div class="col">
							<div class="card1">
								<div class="card" style="width: 18rem;">
						  			<img class="card-img-top" src="img/conict2.png" alt="Card image cap">
						  			<div class="card-body">
						   				<h5 class="card-title">Robótica Aplicada a Medicina no CONICT 2019</h5><br>
						    			<p class="card-text"></p>
						   				<a href="#" class="btn btn-primary">Ler Mais</a>
						 			</div>
								</div>
							</div>	
						</div>
						
						<div class="col order-last">
							<div class="card1">				
								<div class="card" style="width: 18rem;">
						  			<img class="card-img-top" src="img/robo.png" alt="Card image cap">
						  			<div class="card-body">
						   				<h5 class="card-title">Robótica Aplicada a Medicina na IV Mostra de Iniciação Científica do IFSP</h5>
						    			<p class="card-text"></p>
						   				<a href="#" class="btn btn-primary">Ler Mais</a>
						 			</div>
								</div>
							</div>	
						</div>	
					</div>	
				</div>
			</div>
		</div>			
		<div class="grid-item"></div>		
	</body>	
</html>    
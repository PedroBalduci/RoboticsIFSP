<?php
    session_start();
    
    $logado = $_COOKIE['login'];

    if ($logado != null) {
    	$logado = mb_strtoupper($_COOKIE['login'],"utf-8");
    }

    else {
    	echo"<script language='javascript' type='text/javascript'>
        window.location.href='index.php';</script>";    	
    }

    if((isset($_SESSION["login"]) == true) and (!isset($_SESSION["senha"]) == true)){
        unset($_SESSION['login']);
        unset($_SESSION['senha']);
        header('location: index.php');
    }
?>

<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="icon" href="SPUTNIK.png" type="image/x-icon"/>
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Robótica - <?php echo $logado; ?></title>
		<meta name="viewport" content="width=device-width,initial-scale=1, user-scalable=no">
		<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    	<!-- Bootstrap CSS -->
    	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    	<style type="text/css">
    		a:link, a:visited, a:active {
				text-decoration: none;
			}

			a:hover {
				text-decoration: none;
			}

			a:active {
				text-decoration: none;
			}

    		.bg-light {
    			background-color: #262626!important;
			}

			.navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .show>.nav-link, .navbar-light .navbar-nav .nav-link {
    			color: rgb(255 255 255);
			}

			.dropdown-menu {
				top: 110%;
			}

			#navbarDropdown:hover {
				color: #b3b3b3;
			}

			.nav-link:hover {
				color: #b3b3b3;
			}

			.navbar-light .navbar-toggler {
    			background-color: #fff;
    		}

			.btn-outline-success {
    			color: #fff;
    			background-color: #198754;
   				border-color: #198754;
			}

			#btn_sair {
				background-color: red;
				border-color: red;
			}
    	</style>
    </head>
    <body>
    	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    	<!-- Option 1: Bootstrap Bundle with Popper -->
    	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    	<!-- Option 2: Separate Popper and Bootstrap JS -->
    	
    	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

		<nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light">
		  	<div class="container-fluid">
		  		<a href="#" class="navbar-brand">
					<img src="./img/IFSP.png" style="width: 280px; height: 80px; top: 0;">
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			  		<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
			  		<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
				  			<a  aria-current="page" href="#">Home</a>
						</li>
						<li class="nav-item">
				  			<a  href="#">Link</a>
						</li>
						<li class="nav-item dropdown">
				  			<a  href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
					  		<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="#">Action</a></li>
								<li><a class="dropdown-item" href="#">Another action</a></li>
								<li><hr class="dropdown-divider"></li>
								<li><a class="dropdown-item" href="#">Something else here</a></li>
					  		</ul>
						</li>
			  		</ul>
			  			<label style="color: #fff;"><b>Olá <?php echo $logado; ?></b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			  		<form class="d-flex">
						<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
						<button class="btn btn-outline-success" type="submit">Pesquisar</button>&nbsp;&nbsp;
						<button class="btn btn-outline-success" id="btn_sair"><a href="logout.php" style="color: #FFF;">SAIR</a></button>
			  		</form>
				</div>
		  	</div>
		</nav>
	</body>
</html>
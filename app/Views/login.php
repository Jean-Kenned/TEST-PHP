<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<?php
if (!isset($_SESSION)) {
	session_start();
}
?>

<!DOCTYPE html>
<html class="bg-light">

<head>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<title>Sistema de teste</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>

<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100 ">
			<div class="user_card">
				<?php
				if (isset($_SESSION['nao_autenticado'])) :
				?>
					<div class="alert alert-primary boxWarning center">
						<p class="textWarning">ERRO: Usuário ou senha inválidos!</p>
					</div>
				<?php
				endif;
				unset($_SESSION['nao_autenticado']);
				?>
				<?php
				if (isset($_SESSION['mensagemCadastroSuccess'])) :
				?>
					<div class="alert alert-success" style="background-color:green;" role="alert">
						<p class="textWarning"> <?php echo $_SESSION['mensagemCadastroSuccess'] ?></p>
					</div>
				<?php
				endif;
				unset($_SESSION['mensagemCadastroSuccess']);
				?>
				<div class="d-flex justify-content-center form_container">
					<form action="/login" method="POST">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="email" class="form-control input_user" value="" placeholder="Email" required>
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="senha" class="form-control input_pass" value="" placeholder="Senha" required>
						</div>
						<div class="d-flex justify-content-center mt-3 login_container">
							<button type="submit" name="button" class="btn login_btn">Login</button>
						</div>
					</form>
				</div>
				<a style="display:inline-block;" href="/cadastrar">Cadastrar</a>
			</div>
		</div>
	</div>
</body>

</html>
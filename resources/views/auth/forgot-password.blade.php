<!doctype html>
<html lang="es_CO">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Perdi la clave &raquo; Repositorio</title>
<link rel="shortcut icon" type="image/x-icon" href="http://localhost/RepoTriara/favicon.ico" />
<link rel="icon" type="image/png" href="http://localhost/RepoTriara/img/favicon/favicon-32.png" sizes="32x32">
<link rel="apple-touch-icon" href="http://localhost/RepoTriara/img/favicon/favicon-152.png" sizes="152x152">
<script src="http://localhost/RepoTriara/includes/js/jquery.1.12.4.min.js"></script>

	<!--[if lt IE 9]>
<script src="http://localhost/RepoTriara/includes/js/html5shiv.min.js"></script>
<script src="http://localhost/RepoTriara/includes/js/respond.min.js"></script>
<![endif]-->

				<link rel="stylesheet" media="all" type="text/css" href="http://localhost/RepoTriara/assets/font-awesome/css/font-awesome.min.css" />
<link rel="stylesheet" media="all" type="text/css" href="http://localhost/RepoTriara/css/social-login.css" />
<link rel="stylesheet" media="all" type="text/css" href="http://localhost/RepoTriara/includes/js/chosen/chosen.min.css" />
<link rel="stylesheet" media="all" type="text/css" href="http://localhost/RepoTriara/includes/js/chosen/chosen.bootstrap.css" />
<link rel="stylesheet" media="all" type="text/css" href="http://localhost/RepoTriara/assets/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" media="all" type="text/css" href="http://localhost/RepoTriara/css/main.min.css" />
<link rel="stylesheet" media="all" type="text/css" href="http://localhost/RepoTriara/css/mobile.min.css" />
</head>

<body class="reset-password backend">
<div class="container-custom">
    @include('layouts.navigation')

		<div class="main_content_unlogged">
<div class="container-fluid">
<div class="row">
<div class="col-xs-12 col-sm-12 col-lg-4 col-lg-offset-4">

	<div class="row">
<div class="col-xs-12 branding_unlogged">
<img src="http://localhost/RepoTriara/img/custom/logo/logo-claro.png" alt="Repositorio" />
</div>
</div>
<div class="white-box">
<div class="white-box-interior">
<script type="text/javascript">
							$(document).ready(function() {
								$("form").submit(function() {
									clean_form(this);
									is_complete(this.reset_password_email,'Llene el correo electrónico');
									is_email(this.reset_password_email,'Correo electrónico no válido');
									// show the errors or continue if everything is ok
									if (show_form_errors() == false) { return false; }
								});
							});
</script>
<form action="forgot-password" name="resetpassword" method="post" role="form">
<fieldset>
<input type="hidden" name="form_type" id="form_type" value="new_request" />

								<div class="form-group">
<label for="reset_password_email">E-Mail</label>
<input type="text" name="reset_password_email" id="reset_password_email" class="form-control" />
</div>

								<p>Por favor ingrese su cuenta de E-mail. Usted recibira un link para continuar el proceso</p>

								<div class="inside_form_buttons">
<button type="submit" name="submit" class="btn btn-wide btn-primary">Solicite una nueva contraseña</button>
</div>
</fieldset>
</form>
<div class="login_form_links">
<p><a href="{{ route('login') }}" target="_self">Regresar a la pagina de inicio.</a></p>
</div>
</div>
</div> <!-- container-custom -->
</div>

					</div> <!-- row -->
</div> <!-- container-fluid -->

					<footer>
<div id="footer">
			Claro Colombia 2024		</div>
</footer>
<script src="http://localhost/RepoTriara/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="http://localhost/RepoTriara/includes/js/jquery.validations.js"></script>
<script src="http://localhost/RepoTriara/includes/js/jquery.psendmodal.js"></script>
<script src="http://localhost/RepoTriara/includes/js/jen/jen.js"></script>
<script src="http://localhost/RepoTriara/includes/js/js.cookie.js"></script>
<script src="http://localhost/RepoTriara/includes/js/main.js"></script>
<script src="http://localhost/RepoTriara/includes/js/js.functions.php"></script>
<script src="http://localhost/RepoTriara/includes/js/chosen/chosen.jquery.min.js"></script>
</div> <!-- main_content -->
</div> <!-- container-custom -->

	</body>
</html>

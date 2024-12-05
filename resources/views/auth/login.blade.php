<!doctype html>
<html lang="es_CO">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Inicie Sesi&oacute;n &raquo; Repositorio</title>
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
 
<body class="body login backend">
<div class="container-custom">
<header id="header" class="navbar navbar-static-top navbar-fixed-top header_unlogged">
<div class="navbar-header text-center">
<span class="navbar-brand">
					Repositorio				</span>
</div>
</header>
 
		<div class="main_content_unlogged">
<div class="container-fluid">
<div class="row"><div class="col-xs-12 col-sm-12 col-lg-4 col-lg-offset-4">
 
	<div class="row">
<div class="col-xs-12 branding_unlogged">
<img src="http://localhost/RepoTriara/img/custom/logo/logo-claro.png" alt="Repositorio" />
</div>
</div>
<div class="white-box">
<div class="white-box-interior">
<div class="ajax_response alert">
</div>
<script type="text/javascript">
				$(document).ready(function() {
					$("#login_form").submit(function(e) {
						e.preventDefault();
						e.stopImmediatePropagation();
						$('.ajax_response').html();
						clean_form(this);
						is_complete(this.username, "Complete el usuario");
						is_complete(this.password, "Complete la contraseña");
						// show the errors or continue if everything is ok
						if (show_form_errors() == false) {
							return false;
						}
						else {
							var url = $(this).attr('action');
							$('.ajax_response').html('').removeClass('alert-danger alert-success').slideUp();
							$('#submit').html('<i class="fa fa-cog fa-spin fa-fw"></i><span class="sr-only"></span> Ingreso...');
							$.ajax({
									cache: false,
									type: "post",
									url: url,
									data: $(this).serialize(), // serializes the form's elements.
									success: function(response)
									{
										var json = jQuery.parseJSON(response);
										if ( json.status == 'success' ) {
											// $('.ajax_response').html(json.message);
                                            // $('.ajax_response').addClass('alert-success');
											$('#submit').html('<i class="fa fa-check"></i><span class="sr-only"></span> Redireccioando...');
											$('#submit').removeClass('btn-primary').addClass('btn-success');
											setTimeout('window.location.href = "'+json.location+'"', 1000);
										}
										else {
                                            $('.ajax_response').addClass('alert-danger').slideDown().html(json.message);
											$('#submit').html('Ingresar');
										}
									}
							});
							return false;
						}
					});
				});
</script>
<form action="process.php?do=login" name="login_admin" role="form" id="login_form">
<input type="hidden" name="do" value="login">
<fieldset>
<div class="form-group">
<label for="username">Nombre de usuario Prueba / E-Mail</label>
<input type="text" name="username" id="username" value="" class="form-control" autofocus />
</div>
 
					<div class="form-group">
<label for="password">Contraseña</label>
<input type="password" name="password" id="password" class="form-control"/>
</div>
 
					<div class="form-group">
<label for="language">Idioma</label>
<!--input name="language" id="language" class="form-control" value="es_CO"-->
<input name="language" id="language" class="form-control" value="Spanish (Colombia)" readonly>
<!--select name="language" id="language" class="form-control">						
<option value="en" >
										English									</option>
<option value="es_CO" selected>
										Spanish (Colombia) [Defecto]									</option>
</select-->
</div>
<div class="inside_form_buttons">
<button type="submit" id="submit" class="btn btn-wide btn-primary">Ingresar</button>
</div>
 
					<div class="social-login">
</div>
</fieldset>
</form>
 
			<div class="login_form_links">
<p id="reset_pass_link">Olvidó su contraseña? <a href="{{ route('forgot-password') }}">Cámbiela aquí.</a></p>
<p id="register_link"><?php_e("Don't have an account yet?",'cftp_admin'); ?> <a href="{{ route('register') }}">Ingrese como un nuevo cliente</a></p>
</div>
 
		</div>
</div>
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
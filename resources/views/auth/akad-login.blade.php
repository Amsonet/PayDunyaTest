<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>AKADPRO - Logiciel de digitalisation des processus de JNP.</title>

  <!-- Favicons -->
  <link href="{{ asset('template/Dashio/img/favicon.jpg') }}" rel="icon">
  <link href="{{ asset('template/Dashio/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('template/Dashio/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <!--external css-->
  <link href="{{ asset('template/Dashio/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="{{ asset('template/Dashio/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('template/Dashio/css/style-responsive.css') }}" rel="stylesheet">



 <!-- =======================================================
   
	Template Name: AKADPRO
	Template URL: https://jnp.groupeakad.com
	Author: Groupe AKAD
	License: https://jnp.groupeakad.com 

  ======================================================= -->
</head>

<body>
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div id="login-page">
    <div class="container">
      <form class="form-login" action="index.html">
        <h2 class="form-login-heading">Connectez-Vous</h2>
        <div class="login-wrap">
          <input type="text" class="form-control" placeholder="Email" autofocus>
          <br>
          <input type="password" class="form-control" placeholder="Mot de Passe">
          <label class="checkbox">
              <input type="checkbox" value="remember-me"> Se souvenir de moi
            <span class="pull-right">
            <a data-toggle="modal" href="login.html#myModal">Mot de passe Oublie?</a>
            </span>
            </label> <br/>
          <button class="btn btn-theme btn-block" href="index.html" type="submit"><i class="fa fa-lock"></i> SE CONNECTER</button>              
         
        </div>
		</form>
        <!-- Modal -->
       
	   <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
			
			<form>
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Vous avez oublie votre Mot de passe?</h4>
              </div>
              <div class="modal-body">
                <p>Etrez votre addresse mail de connexion et vous recevrez un lien de reinitialisation.</p>
                <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
              </div>
              <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                <button class="btn btn-theme" type="button">Submit</button>
              </div>
			  
			</form>  
            </div>
          </div>
        </div>
        <!-- modal -->
      
    </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="{{ asset('template/Dashio/lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('template/Dashio/lib/bootstrap/js/bootstrap.min.js') }}"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="{{ asset('template/Dashio/lib/jquery.backstretch.min.js') }}"></script>
  <script>
    $.backstretch("{{ asset('template/Dashio/img/login-bg.jpg') }}", {
      speed: 500
    });
  </script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Test Paydunya - Transfert de Fonds.</title>

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




</head>

<body>
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div id="login-page">
    <div class="container" style="opacity:0.7">
      
      <form class="form-login" method="POST" action="{{ route('login') }}">
                        @csrf
        <h2 class="form-login-heading">Connectez-Vous</h2>
        <div class="login-wrap">

        <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

          <br>

          <input id="password" placeholder="Mot de Passe" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">


                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
          <label class="checkbox">
              <input type="checkbox" value="remember-me"> Se souvenir de moi
            <span class="pull-right">
            <a data-toggle="modal" href="login.html#myModal">Créer un compte?</a>
            </span>
            </label> <br/>
          <button class="btn btn-theme btn-block" href="index.html" type="submit"><i class="fa fa-lock"></i> SE CONNECTER</button>              
         
        </div>
		</form>
        <!-- Modal -->
       
	   <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
			
            @include('auth.register-paydunya')   


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

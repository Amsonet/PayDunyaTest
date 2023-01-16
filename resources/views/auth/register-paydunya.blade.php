
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


  <div class="card" style="margin:2em; height:550px !important;">     

  <div class="card-header"></div>

<div class="card-body">
    <form method="POST" action="{{ route('register') }}" class="form-horizontal style-form">
        @csrf

        <div class="mb-3">
        <div class="form-group">
            <label for="name" class="col-md-4 col-form-label text-md-end">Nom</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
          </div>

        </div>

        <div class="mb-3">
        <div class="form-group">
            <label for="tel" class="col-md-4 col-form-label text-md-end">Telephone</label>

            <div class="col-md-6">
                <input id="tel" type="tel" class="form-control @error('tel') is-invalid @enderror" name="tel" value="{{ old('tel') }}" required autocomplete="tel" autofocus>

                @error('tel')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
          </div>

        </div>
        
        
        <div class="mb-3">
        <div class="form-group">
            <label for="address" class="col-md-4 col-form-label text-md-end">Addresse</label>

            <div class="col-md-6">
                
                <textarea class="form-control @error('address') is-invalid @enderror" name="address" id="address" autocomplete="address" placeholder="" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validate"></div>

                @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
          </div>

        </div>

        


        <div class="mb-3">
        <div class="form-group">

            <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        </div>

        <div class="mb-3">

        <div class="form-group">

            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
          </div>
        </div>

        <div class="mb-3">

        <div class="form-group">

            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>

          </div>  
        </div>

        <div class="mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    S'Enregistrer
                </button><br/> <br/>
            </div>
        </div>
    </form>

    
</div>
</div>

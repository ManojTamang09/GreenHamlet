<!doctype html>
<html lang="en" class="light-theme">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- loader-->
  <link href="{{asset('loginpage/assets/css/pace.min.css')}}" rel="stylesheet" />
  <script src="{{asset('loginpage/assets/js/pace.min.js')}}"></script>

  <!--plugins-->
  <link href="{{asset('loginpage/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />

  <!-- CSS Files -->
  <link href="{{asset('loginpage/assets/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('loginpage/assets/css/bootstrap-extended.css')}}" rel="stylesheet">
  <link href="{{asset('loginpage/assets/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('loginpage/assets/css/icons.css')}}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

  <title>Snow White Retreat Admin Login</title>
</head>

<body>

  <!--start wrapper-->
  <div class="wrapper">

    <div class="container">
      <div class="row">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto mt-5">
          <div class="card radius-10">
            <div class="card-body p-4">
              <div class="text-center">
                <h4>  <img src="{{asset('user/img/logos/logo4.png')}}" height="90px"></h4>
                <p>Sign In to your account</p>
              </div>
              <form method="POST" action="{{ route('login') }}" >
                @csrf

                <div class="col-12">
                  <label for="inputEmail" class="form-label">Email</label>
                  <input type="email" class="form-control   @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                  required id="inputEmail">
                  @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
                </div>
                <div class="col-12">
                  <label for="inputPassword" class="form-label">Password</label>
                  <input type="password" class="form-control  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"
                  id="exampleInputPassword" placeholder="Password" required id="inputPassword">
                  @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
                </div>
                <div class="col-12 col-lg-6">
                    <div class="form-check form-switch">
                      {{-- <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckRemember"> --}}
                      {{-- <label class="form-check-label" for="flexSwitchCheckRemember">Remember Me</label> --}}
                    </div>
                  </div>
                <div class="col-12 col-lg-6">
                  {{-- <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckRemember">
                    <label class="form-check-label" for="flexSwitchCheckRemember">Remember Me</label>
                  </div> --}}
                </div>
                {{-- <div class="col-12 col-lg-6 text-end">
                  <a href="authentication-reset-password-simple.html">Forgot Password?</a>
                </div> --}}
                <div class="col-12 col-lg-12">
                  <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Sign In</button>
                  </div>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!--end wrapper-->


</body>

</html>

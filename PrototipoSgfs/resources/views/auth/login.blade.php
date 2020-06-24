<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iniciar Sesion</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">

</head>
<body  id="cuerpoInicio">
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-4">
            </div>
            <div class="col-4 text-center">
                <form id="cuadro1" method="POST" action="{{ route('login') }}">
                    @csrf
                    <img id="logo1" src="https://scontent-mia3-2.xx.fbcdn.net/v/t31.0-8/p960x960/17546812_1382683441782447_74691683942291193_o.png?_nc_cat=107&_nc_sid=85a577&_nc_ohc=SFX1rMxpu48AX-KnfCx&_nc_ht=scontent-mia3-2.xx&oh=fd7c48088f5948a0883c15d0f914f29a&oe=5EEE7774"  alt="">
                    <br>
                    <div class="form-group">
                      <label for="exampleInputEmail1">{{__('Correo Electronico')}}</label>
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    </div>
                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    <div class="form-group">
                      <label for="exampleInputPassword1">{{__('Contraseña')}}</label>
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                      @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Recordarme aqui') }}
                                </label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-outline-dark btn-block">{{__('Iniciar Sesion')}}</button>
                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                    @endif
                    <br>
                                <a href="{{route('register')}}"><h6 class="text-dark">{{__('Registrarse')}}</h6></a>
                        <a href="/">Volver a la pagina principal</a>
                </form>
            </div>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Musicali</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <!--external css-->
    <link href="{{ URL::asset('assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/style-responsive.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

      <div id="login-page">
        <div class="container">
        
              <form class="form-login" role="form" method="POST" action="{{ url('login') }}">
                {{ csrf_field() }}
                <h2 class="form-login-heading">entre</h2>
                <div class="login-wrap form-group">
                    <label>E-mail:</label>
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                    <br>
                    <label>Senha:</label>
                    <input id="password" type="password" class="form-control" name="password" required>
                    <label class="checkbox">
                        <label>
                                        <input type="checkbox" name="remember"> Salvar Senha
                                    </label>
                        <span class="pull-right">
                            <a data-toggle="modal" href="{{ url('/aluno/password/reset') }}"> Esqueceu sua senha?</a>
                        </span>
                    </label>
                    <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> ENTRAR</button>
                </div>
              </form>       
        
        </div>
      </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{ URL::asset('assets/js/jquery.js') }}"></script>
    <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="{{ URL::asset('assets/js/jquery.backstretch.min.js') }}"></script>
    <script>
        $.backstretch("{{ URL::asset('assets/img/login-bg.jpg') }}", {speed: 500});
    </script>


  </body>
</html>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Musicali</title>

    <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
    <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>

    <!-- Bootstrap Core CSS -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ URL::asset('https://fonts.googleapis.com/css?family=Lato') }}" rel="stylesheet">
    <link href="{{ URL::asset('https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900') }}" rel="stylesheet">
    <link href="{{ URL::asset('https://fonts.googleapis.com/css?family=Muli') }}" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/device-mockups.min.css') }}">

    <!-- Theme CSS -->
    <link href="{{ URL::asset('css/new-age.min.css') }}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header col-sm-3">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top">
                        <img id="logo" class="logo" src="img/logo.png" alt="Musicali"></a>
            </div>
            <div class="col-sm-9">
                
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="row">
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                        <ul class="social-network social-circle">
                            <li><a href="#" class="icoFacebook social" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <!--<li><a href="#" class="icoTwitter social" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="icoGoogle social" title="Google +"><i class="fa fa-google-plus"></i></a></li>-->
                            <li><a href="#" class="icoLinkedin social" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="{{ url('login') }}">Login</a></li>
                        </ul>  

                        <br>

                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a class="page-scroll" href="wwww.musicali.com.br">Home</a>
                            </li>
                            <li>
                                <a class="page-scroll" href="#about">Sobre</a>
                            </li>
                            <li>
                                <a class="page-scroll" href="#courses">Cursos</a>
                            </li>
                            <!--<li>
                                <a class="page-scroll" href="#events">Eventos</a>
                            </li>-->
                            <li>
                                <a class="page-scroll" href="#contact">Contato</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        <!-- /.container-fluid -->
        </div>
    </nav>

<!-- BEGIN # MODAL LOGIN -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="content">
                
                
                <!-- Begin # DIV Form -->
                <div id="div-forms">
                
                    <!-- Begin # Login Form -->
                    <form class="form-login" method="POST" action="{{ url('login') }}">
                            {{ csrf_field() }}
                        <h2 class="form-login-heading">entre agora</h2>
                        <div class="login-wrap">


                            <div>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <br>

                            <div>
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Lembrar
                                    </label>
                                </div>
                            </div>

                            <label class="checkbox">
                                <span class="pull-right">
                                    <a data-toggle="modal" data-toggle="login.html#myModal"> Esqueceu sua senha?</a>
                
                                </span>
                            </label>
                            <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> entrar</button>
                            <hr>
                            
                            <!-- <div class="login-social-link centered">
                            <p>ou você pode fazer o login através de uma rede social</p>
                                <button class="btn btn-facebook" type="submit"><i class="fa fa-facebook"></i> Facebook</button>
                            </div>-->

                            <div class="registration">
                                Ainda não tem uma conta?<br/>
                                <a class="" href="{{ url('/register') }}">
                                    Criar uma conta
                                </a>
                            </div>
            
                        </div>
            
                      <!-- Modal -->
                          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                          <h4 class="modal-title">Forgot Password ?</h4>
                                      </div>
                                      <div class="modal-body">
                                          <p>Enter your e-mail address below to reset your password.</p>
                                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
                
                                      </div>
                                      <div class="modal-footer">
                                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                                          <button class="btn btn-theme" type="button">Submit</button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      <!-- modal -->
        
                </form>
                    <!-- End # Login Form -->
                    
                    
                    
                </div>
                <!-- End # DIV Form -->
                
            </div>
        </div>
    </div>
    <!-- END # MODAL LOGIN -->

    <header>
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <div class="header-content">
                        <div class="header-content-inner">
                            <br><br><br><br><br><br><br><br><br><h1>A música conecta as pessoas, e nós vamos conectar você à música.</h1>
                            <a href="/aluno/login" class="btn btn-outline btn-xl page-scroll">Saiba Mais</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </header>

    <section id="brands" class="brand-carousel">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="brand-carousel"> 
                        <div class="item"><img src="img/brands/emdb.png" class="center-block" alt="Escola de Música Daniel Bahia"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        <h2>Sobre</h2>
                        <h4 class="text-muted">Conheça mais sobre o novo ambiente virtual de educação musical.</h4>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="container-fluid">

                        <img class="port-image" src="img/musicali.png"/>
                        <p class="text-muted">Somos uma escola de música de ensino online com aulas direcionadas para cada perfil. Estude onde e quando quiser com aulas de qualidade dadas por profissionais da música.</p>

                    </div>
                </div>
                <div class="col-md-8">
                    <div class="container-fluid"><br><br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <i class="fa faIcons fa-video-camera" aria-hidden="true"></i>
                                    <h3>Vídeo Aulas</h3>
                                    <p class="text-muted">Aulas dinâmicas e detalhadas.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <i class="fa faIcons fa-file-text" aria-hidden="true"></i>
                                    <h3>Exercícios</h3>
                                    <p class="text-muted">A cada aula responda quizzes para fixar o conteúdo.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <i class="fa faIcons fa-music" aria-hidden="true"></i>
                                    <h3>Cifras</h3>
                                    <p class="text-muted">Banco de músicas cifradas direcionadas ao seu nível.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <i class="fa faIcons fa-users" aria-hidden="true"></i>
                                    <h3>Acompanhamento com Profissional</h3>
                                    <p class="text-muted">Tire suas dúvidas com os professores através de chats.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section id="courses" class="courses">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        <h2>Cursos</h2>
                        <h4 class="text-muted">Conheça nossos cursos disponíveis.</h4>
                        <hr>
                    </div>
                </div>
            </div>
            
            <div>
                <button class="btn btn-primary filter-button" data-filter="all">Todos</button>
                <button class="btn btn-default filter-button" data-filter="cordas">Cordas</button>
                <button class="btn btn-default filter-button" data-filter="teclas">Teclas</button>
                <button class="btn btn-default filter-button" data-filter="vocal">Vocal</button>
                <button class="btn btn-default filter-button" data-filter="teoria">Teoria</button>
                <button class="btn btn-default filter-button" data-filter="musica">Musicalização</button>
                <button class="btn btn-default filter-button" data-filter="percussao">Percussão</button>
            </div>
            <br/>
            
            <div class="row">
                <div class="col-md-3 filter cordas">
                    <div class="each-item">
                        <img class="port-image" src="img/cursos/violao.png"/>
                        <div class="cap1">
                            <p>Aprenda a tocar várias músicas no violão em pouco tempo e compreender questões técnicas que irão te ajudar tocar melhor.</p>
                        </div>
                        <div class="cap2">
                            <p class="text-center">Violão</p>
                        </div>
                        
                    </div>
                    
                </div>
                
                <div class="col-md-3 filter cordas">
                    <div class="each-item">
                        <img class="port-image" src="img/cursos/guitarra.png"/>
                        <div class="cap1">
                            <p>Este é um curso completo para iniciantes, intermediário e avançado com aulas práticas e modernas.</p>
                        </div>
                        <div class="cap2">
                            <p class="text-center">Guitarra</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 filter teclas">
                    <div class="each-item">
                        <img class="port-image" src="img/cursos/teclado.png"/>
                        <div class="cap1">
                            <p>Curso para iniciante, intermediários e avançados onde você encontrará uma base teórica e práticas com aulas dinâmicas.</p>
                        </div>
                        <div class="cap2">
                            <p class="text-center">Teclado</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 filter vocal">
                    <div class="each-item">
                        <img class="port-image" src="img/cursos/canto.png"/>
                        <div class="cap1">
                            <p>Curso de voz é recomendado para as pessoas que desejam melhorar seu preparo vocal, aprendendo técnicas para que o canto seja mais aprimorado.</p>
                        </div>
                        <div class="cap2">
                            <p class="text-center">Canto</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 filter teoria">
                    <div class="each-item">
                        <img class="port-image" src="img/cursos/teoria.png"/>
                        <div class="cap1">
                            <p>É o estudo de toda a estrutura e processo de formação da música.</p>
                        </div>
                        <div class="cap2">
                            <p class="text-center">Teoria Geral</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 filter teoria">
                    <div class="each-item">
                        <img class="port-image" src="img/cursos/harmonia.png"/>
                        <div class="cap1">
                            <p>Este curso é ideal para quem quer aprender um pouco mais sobre harmonia funcional.</p>
                        </div>
                        <div class="cap2">
                            <p class="text-center">Harmonia</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 filter musica">
                    <div class="each-item">
                        <img class="port-image" src="img/cursos/musicalizacaoInfantil.png"/>
                        <div class="cap1">
                            <p>O curso é voltado para crianças com atividades rítmicas com o corpo e instrumentos, canções de roda, jogo teatral e histórias cantadas – dentre outras.</p>
                        </div>
                        <div class="cap2">
                            <p class="text-center">Musicalização Infantil</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 filter musica">
                    <div class="each-item">
                        <img class="port-image" src="img/cursos/musicalizacaoAdulta.png"/>
                        <div class="cap1">
                            <p>O curso tem o papel de construir, despertar, desenvolver e estimular o conhecimento musical a assim contribuir com a formação do ser humano.</p>
                        </div>
                        <div class="cap2">
                            <p class="text-center">Musicalização Adulta</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 filter percussao">
                    <div class="each-item">
                        <img class="port-image" src="img/cursos/percussaoGeral.png"/>
                        <div class="cap1">
                            <p>O curso capacita estudantes iniciantes e avançados a tocar e coordenar os mais variados ritmos de percussão.</p>
                        </div>
                        <div class="cap2">
                            <p class="text-center">Percussão Geral</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 filter percussao">
                    <div class="each-item">
                        <img class="port-image" src="img/cursos/bateria.png"/>
                        <div class="cap1">
                            <p>O curso dá ao aluno grande precisão rítmica, boa fluência na leitura musical e execução de alta performance.</p>
                        </div>
                        <div class="cap2">
                            <p class="text-center">Bateria</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="cta-content">
            <div class="container">
                <h2>Faça já o seu teste de nivelamento.</h2>
                <a href="#contact" class="btn btn-outline btn-xl page-scroll">Teste</a>
            </div>
        </div>
        <div class="overlay"></div>
    </section>

    <!--<section id="events" class="events text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="section-heading">Eventos</h2>
                    <p>Texto</p>
                    
                </div>
            </div>
        </div>
    </section>-->

    <section id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        <h2>Contato</h2>
                        <h4 class="text-muted">Entre em contato conosco e tire suas dúvidas.</h4>
                        <hr>
                              
                            <div class="col-md-offset-4 col-md-4" id="box">
                                <hr>
                                <form class="form-horizontal" action="form.php" method="post" id="contact_form">
                                    <fieldset>
                                        <!-- Form Name -->


                                        <!-- Text input-->

                                        <div class="form-group">

                                            <div class="col-md-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                        <input name="first_name" placeholder="Nome" class="form-control" type="text" required>
                                                    </div>
                                            </div>
                                        </div>


                                  
                                        <!-- Text input-->
                                        <div class="form-group">

                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                                    <input name="email" placeholder="E-mail" class="form-control" type="email" required>
                                                </div>
                                            </div>
                                        </div>


                                        <!-- Text input-->

                                        <div class="form-group">

                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                                    <input name="phone" placeholder="Telefone" class="form-control" type="tel">
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Text input-->

                                        <div class="form-group">

                                            <div class="col-md-12 inputGroupContainer">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                                    <textarea class="form-control" name="comment" placeholder="Mensagem"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">

                                            <div class="col-md-12">
                                                <button type="submit" value="submit" class="btn btn-warning">Enviar</button>
                                            </div>
                                        </div>

                                    </fieldset>
                                </form> 
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <h6>&copy; 2017 Musicali. Todos os direitos reservados.</h6>
            <ul class="list-inline">
                <li>
                    <a href="#">Privacy</a>
                </li>
                <li>
                    <a href="#">Terms</a>
                </li>
                <li>
                    <a href="#">FAQ</a>
                </li>
                <li>
                    <a href="{{ url('login') }}">Área Restrita</a>
                </li>
            </ul>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="{{ URL::asset('vendor/jquery/jquery.min.js') }}"></script>

    <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js') }}"></script>

    <!-- Theme JavaScript -->
    <script src="{{ URL::asset('js/new-age.min.js') }}"></script>

</body>

</html>

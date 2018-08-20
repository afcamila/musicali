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
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/zabuto_calendar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/js/gritter/css/jquery.gritter.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/lineicons/style.css') }}">    
    
    <!-- Custom styles for this template -->
    <link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/style-responsive.css') }}" rel="stylesheet">

    <script src="{{ URL::asset('assets/js/chart-master/Chart.js') }}"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >

      <!-- Header -->
      @include('partials.header')

      <!-- Sidebar -->
      @include('partials.sidebar')


    <section id="main-content">
      <section class="wrapper">

        <div class="row">

          <!-- Your Page Content Here -->
          @yield('content')

          @include('partials.sidebar2')
        

        </div><! --/row -->
          </section>
    </section>

      <!-- Footer -->
      @include('partials.footer')

  </section>

     <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{ URL::asset('assets/js/jquery.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery-1.8.3.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
    <script class="include" type="text/javascript" src="{{ URL::asset('assets/js/jquery.dcjqaccordion.2.7.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.scrollTo.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.nicescroll.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/js/jquery.sparkline.js') }}"></script>


    <!--common script for all pages-->
    <script src="{{ URL::asset('assets/js/common-scripts.js') }}"></script>
    
    <script type="text/javascript" src="{{ URL::asset('assets/js/gritter/js/jquery.gritter.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/gritter-conf.js') }}"></script>

    <!--script for this page-->
    <script src="{{ URL::asset('assets/js/sparkline-chart.js') }}"></script>    
  <script src="{{ URL::asset('assets/js/zabuto_calendar.js') }}"></script>  
 
@if (Request::is('home*')) 
  
  @if(Auth::user()->hasRole('professor'))
                  <?php
                    $id = Auth::user()->id;
                    $nome = Auth::user()->name;
                  ?>

  <script type="text/javascript">
        $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Bem vindo ao Musicali!',
            // (string | mandatory) the text inside the notification
            text: 'Olá professor {{ $nome }}! <br>Seus alunos estão aguardando novas aulas.',
            // (string | optional) the image to display on the left
            image: '/uploads/avatars/{{ Auth::user()->avatar }}',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
        });
  </script>

  @endif

  @if(Auth::user()->hasRole('operador'))
                  <?php
                    $id = Auth::user()->id;
                    $nome = Auth::user()->name;
                  ?>

  <script type="text/javascript">
        $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Bem vindo ao Musicali!',
            // (string | mandatory) the text inside the notification
            text: 'Olá {{ $nome }}! <br>Veja no seu painel de notificações os novos alunos que querem aprender música.',
            // (string | optional) the image to display on the left
            image: '/uploads/avatars/{{ Auth::user()->avatar }}',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
        });
  </script>

  @endif

  @if(Auth::user()->hasRole('aluno'))
                  <?php
                    $id = Auth::user()->id;
                    $nome = Auth::user()->name;
                  ?>

  <script type="text/javascript">
        $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Olá {{$nome}}!',
            // (string | mandatory) the text inside the notification
            text: 'Aqui você encontra as melhores aulas para você aprender a tocar um instrumento sem sair de casa!',
            // (string | optional) the image to display on the left
            image: '/uploads/avatars/{{ Auth::user()->avatar }}',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
        });
  </script>

  @endif

  @if(Auth::user()->hasRole('administrador'))
                  <?php
                    $id = Auth::user()->id;
                    $nome = Auth::user()->name;
                  ?>

  <script type="text/javascript">
        $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Bem vindo ao Musicali!',
            // (string | mandatory) the text inside the notification
            text: 'Aqui você encontrará as melhores aulas para você aprender a tocar um instrumento sem sair de casa!',
            // (string | optional) the image to display on the left
            image: '/uploads/avatars/{{ Auth::user()->avatar }}',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
        });
  </script>

  @endif

@endif
  

  

  </body>
</html>

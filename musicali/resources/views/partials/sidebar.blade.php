      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">

                <!-- ALUNO -->
                  @if(Auth::user()->hasRole('aluno'))
                  <?php
                    $id = Auth::user()->id;
                    $nome = Auth::user()->name;
                    //$cursos = Curso::with('users')->findOrFail($id)->get();
                  ?>
              

                    <p class="centered"><a href="{{ url('/profile') }}"><img src="/uploads/avatars/{{ Auth::user()->avatar }}" class="img-circle" width="60"></a></p>                
                    <h5 class="centered">{{ $nome }}</h5>
                    <p class="centered" style="font-size:x-small;"><a href="{{ url('/profile') }}">Editar Perfil</a></p>
                  
                    <li class="mt ">
                        <a href="{{ url('/home') }}" class="{{ Request::is('home*') ? 'active' : '' }}">
                            <i class="fa fa-dashboard"></i>
                            <span>Home</span>
                        </a>
                    </li>

                    <li class="mt ">
                        <a href="{{ route('cursosalunos') }}" class="{{ Request::is('alunos/cursos/*')  ? 'active' : '' }}">
                            <i class="fa fa-book"></i>
                            <span>Meus Cursos</span>
                        </a>
                    </li>

                    <!--<li class="mt">
                        <a href="{{ url('/certificados') }}" class="{{ Request::is('certificados*') ? 'active' : '' }}">
                            <i class="fa fa-dashboard"></i>
                            <span>Meus Certificados</span>
                        </a>
                    </li>-->

                    <li class="mt">
                        <a href="{{ url('/quiz/') }}" class="{{ Request::is('quiz*') ? 'active' : '' }}">
                            <i class="fa fa-question-circle"></i>
                            <span>Quiz</span>
                        </a>
                    </li>

                    <li class="mt">
                        <a href="{{ url('/premios/  ') }}" class="{{ Request::is('premios*') ? 'active' : '' }}">
                            <i class="fa fa-star"></i>
                            <span>Prêmios</span>
                        </a>
                    </li>

                    <li class="mt">
                        <a href="{{ url('/certificados/') }}" class="{{ Request::is('certificados*') ? 'active' : '' }}">
                            <i class="fa fa-star"></i>
                            <span>Certificados</span>
                        </a>
                    </li>

                @endif
                  @if(Auth::user()->hasRole('administrador'))
              	  <?php
                    $id = Auth::user()->id;
                    $nome = Auth::user()->name;
                  ?>

                    <!-- ADMINISTRADOR -->

                    <p class="centered"><a href="{{ url('/profile') }}"><img src="/uploads/avatars/{{ Auth::user()->avatar }}" class="img-circle" width="60"></a></p>                
                    <h5 class="centered">{{ $nome }}</h5>
                    <p class="centered" style="font-size:x-small;"><a href="{{ url('/profile') }}">Editar Perfil</a></p>

                    <li class="mt">
                        <a href="{{ url('/home') }}" class="{{ Request::is('home*') ? 'active' : '' }}">
                            <i class="fa fa-dashboard"></i>
                            <span>Home</span>
                        </a>
                    </li>

                    <li class="sub-menu ">
                        <a href="{{ url('/alunos') }}" class="{{ Request::is('alunos*') ? 'active' : '' }}">
                            <i class="fa fa-users"></i>
                            <span>Alunos</span>
                        </a>
                    </li>


                    <li class="sub-menu">
                        <a href="{{ url('/professores') }}" class="{{ Request::is('professores*') ? 'active' : '' }}">
                            <i class="fa fa-mortar-board"></i>
                            <span>Professores</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                        <a href="{{ url('/operadores') }}" class="{{ Request::is('operadores*') ? 'active' : '' }}">
                            <i class="fa fa-wrench"></i>
                            <span>Operadores</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                        <a href="{{ url('/cursos') }}" class="{{ Request::is('cursos*') ? 'active' : '' }}">
                            <i class="fa fa-book"></i>
                            <span>Cursos</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                        <a href="{{ url('/tests') }}" class="{{ Request::is('tests*') ? 'active' : '' }}">
                            <i class="fa fa-question-circle"></i>
                            <span>Quizzes</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                        <a href="{{ url('/tests/premios') }}" class="{{ Request::is('/tests/premios*') ? 'active' : '' }}">
                            <i class="fa fa-star"></i>
                            <span>Prêmios</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                        <a href="{{ url('/relatorios') }}" class="{{ Request::is('relatorios*') ? 'active' : '' }}">
                            <i class="fa fa-signal"></i>
                            <span>Relatórios</span>
                        </a>
                    </li>


                    <!--<li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-cog"></i>
                            <span>Alunos e Cursos</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="{{ url('/alunocursos/create') }}">Novo Aluno Curso</a></li>
                            <li><a  href="{{ url('/alunocursos') }}">Listar Alunos e Cursos</a></li>
                        </ul>
                    </li>


                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-cog"></i>
                            <span>Módulos e Cursos</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="{{ url('/modulocursos/create') }}">Novo Módulo Curso</a></li>
                            <li><a  href="{{ url('/modulocursos') }}">Listar Módulos e Cursos</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-cog"></i>
                            <span>Professores e Cursos</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="{{ url('/professorcursos/create') }}">Novo Professor Curso</a></li>
                            <li><a  href="{{ url('/professorcursos') }}">Listar Professores e Cursos</a></li>
                        </ul>
                    </li>-->

                    <!--<li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-music"></i>
                            <span>Cifras</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="{{ url('/cifras/create') }}">Nova Cifra</a></li>
                            <li><a  href="{{ url('/cifras') }}">Listar Cifras</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-star"></i>
                            <span>Banco de Talentos</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="{{ url('/talentos/create') }}">Novo Talento</a></li>
                            <li><a  href="{{ url('/talentos') }}">Listar Talentos</a></li>
                        </ul>
                    </li>-->

                @endif
                  @if(Auth::user()->hasRole('operador'))
                  <?php
                    $id = Auth::user()->id;
                    $nome = Auth::user()->name;
                  ?>

                    <!-- OPERADOR -->

                    <p class="centered"><a href="{{ url('/profile') }}"><img src="/uploads/avatars/{{ Auth::user()->avatar }}" class="img-circle" width="60"></a></p>                
                    <h5 class="centered">{{ $nome }}</h5>
                    <p class="centered" style="font-size:x-small;"><a href="{{ url('/profile') }}">Editar Perfil</a></p>

                    <li class="mt">
                        <a href="{{ url('/home') }}" class="{{ Request::is('home*') ? 'active' : '' }}">
                            <i class="fa fa-dashboard"></i>
                            <span>Home</span>
                        </a>
                    </li>

                    <li class="sub-menu ">
                        <a href="{{ url('/alunos') }}" class="{{ Request::is('alunos*') ? 'active' : '' }}">
                            <i class="fa fa-users"></i>
                            <span>Alunos</span>
                        </a>
                    </li>


                    <li class="sub-menu">
                        <a href="{{ url('/professores') }}" class="{{ Request::is('professores*') ? 'active' : '' }}">
                            <i class="fa fa-mortar-board"></i>
                            <span>Professores</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                        <a href="{{ url('/operadores') }}" class="{{ Request::is('operadores*') ? 'active' : '' }}">
                            <i class="fa fa-wrench"></i>
                            <span>Operadores</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                        <a href="{{ url('/cursos') }}" class="{{ Request::is('cursos*') ? 'active' : '' }}">
                            <i class="fa fa-book"></i>
                            <span>Cursos</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                        <a href="{{ url('/tests') }}" class="{{ Request::is('tests*') ? 'active' : '' }}">
                            <i class="fa fa-question-circle"></i>
                            <span>Quizzes</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                        <a href="{{ url('/tests/premios') }}" class="{{ Request::is('/tests/premios*') ? 'active' : '' }}">
                            <i class="fa fa-star"></i>
                            <span>Prêmios</span>
                        </a>
                    </li>

                    
                @endif
                  @if(Auth::user()->hasRole('professor'))
                  <?php
                    $id = Auth::user()->id;
                    $nome = Auth::user()->name;
                  ?>

                    <!-- PROFESSOR -->

                    

                    <p class="centered"><a href="{{ url('/profile') }}"><img src="/uploads/avatars/{{ Auth::user()->avatar }}" class="img-circle" width="60"></a></p>                
                    <h5 class="centered">{{ $nome }}</h5>
                    <p class="centered" style="font-size:x-small;"><a href="{{ url('/profile') }}">Editar Perfil</a></p>

                    <li class="mt">
                        <a href="{{ url('/home') }}" class="{{ Request::is('home*') ? 'active' : '' }}">
                            <i class="fa fa-dashboard"></i>
                            <span>Home</span>
                        </a>
                    </li>

                    <li class="mt">
                        <a href="{{ route('cursosprofessores') }}" class="{{ Request::is('professores/cursos*') ? 'active' : '' }}">
                            <i class="fa fa-book"></i>
                            <span>Meus Cursos</span>
                        </a>
                    </li>

                  @endif

                

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
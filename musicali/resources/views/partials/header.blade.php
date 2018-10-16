 
      <!--header start-->
      <header class="header black-bg" >
              <div class="sidebar-toggle-box" id="header">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a class="navbar-brand page-scroll" href="{{ url('/home') }}">
                        <img id="logo" class="logo" src="{{ URL::asset('img/logo.png') }}" alt="Musicali"></a>
            <!--logo end-->
            <div class="top-menu">
              <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Sair</a></li>

                                                     <form  id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
              </ul>
            </div>
        
            
        </header>
      <!--header end-->
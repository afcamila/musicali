@extends('layouts.dashboard')

@section('content')

        <div class="col-lg-9 main-chart ">

            @if($modulos->isEmpty())
            <div class="alert alert-warning"><b>Ops!</b> O curso ainda não tem nenhum módulo cadastrado.</div>
            @endif

                <div class="col-lg-12 ds" style="margin-bottom:10px; background-color:transparent; margin-top: -20px;">                 
                    <h3>{{ $curso->name }}</h3>  
                </div>

            @foreach($modulos as $modulo)


              <div class="col-lg-12">

              <div class="content-panel pn">
                <div class="col-lg-4">
                  <div id="spotify">
                    <div class="sp-title">
                      <h3>{{ $modulo->name }}</h3>
                    </div>
                    <div class="play">
                      <a class="btn btn-theme" href="/professores/cursos/modulos/{{ $modulo->id }}">Entrar <i class="fa fa-sign-in"></i></a>
                    </div>
                  </div>
                </div>

                <div class="col-lg-8">

                          <form class="form-horizontal style-form">

                              <div class="form-group">
                                  <label class="col-sm-2 col-sm-2 control-label">Módulo</label>
                                  <div class="col-sm-10">
                                      <p class="form-control-static">{{ $modulo->name }}</p>
                                  </div>
                              </div>

                              <div class="form-group">
                                  <label class="col-sm-2 col-sm-2 control-label">Descrição</label>
                                  <div class="col-sm-10">
                                      <p class="form-control-static">{{ $modulo->description }}</p>
                                  </div>
                              </div>

                              <div class="form-group">
                                  <label class="col-sm-2 col-sm-2 control-label">Nível</label>
                                  <div class="col-sm-10">
                                          @if ($modulo->level === 'FÁCIL')
                                               <p class="label label-success">FÁCIL</p>
                                          @elseif ($modulo->level === 'MÉDIO')
                                               <p class="label label-warning">MÉDIO</p>
                                          @elseif ($modulo->level === 'DIFÍCIL')
                                               <p class="label label-primary">DIFÍCIL</p>
                                          @endif
                                  </div>
                              </div>                          
                              
                          </form>
                </div>
              </div>
            </div>            
                  

            @endforeach
        </div>



@endsection
@extends('layouts.dashboard')

@section('content')

        <div class="col-lg-9 main-chart ">

        @if($premios->isEmpty())
            <div class="alert alert-warning"><b>Ops!</b> Você ainda não está estudando música :(</div>
            @endif
          

            @foreach($premios as $premio)


                  <div class="col-lg-12">

              <div class="content-panel pn">
                      <div class="col-lg-4">
                  <div id="spotify">
                    <div class="sp-title">
                      <h3>{{ $premio->name }}</h3>
                    </div>
                    <div class="play">
                    @if($progresso >= $premio->pontuacao)
                      <a class="btn btn-theme" href="/uploads/premios/{{ $premio->file }}" download>Download<i class="fa fa-sign-in"></i></a>
                    @else
                      <a class="btn btn-theme" href="/uploads/premios/{{ $premio->file }}"" download style="pointer-events: none; opacity: 0.6;">Download<i class="fa fa-sign-in"></i></a>
                      @endif
                    </div>
                  </div>
                </div>

                      <div class="col-lg-8">

                                <form class="form-horizontal style-form">

                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Curso</label>
                                        <div class="col-sm-10">
                                            <p class="form-control-static">{{ $premio->name }}</p>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Descrição</label>
                                        <div class="col-sm-10">
                                            <p class="form-control-static">{{ $premio->description }}</p>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Inscrito</label>
                                        <div class="col-sm-10">
                                            <p class="form-control-static">{{ $premio->created_at }}</p>
                                        </div>
                                    </div>                 
                                    
                                </form>
                </div>
              </div>
            </div>            
                  

            @endforeach
        </div>



@endsection
@extends('layouts.dashboard')

@section('content')

        <div class="col-lg-9 main-chart ">

                  <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i>Prêmio</h4>
                      <a class="btn btn-theme" href="/premios/{{$premio->id}}/edit" role="button"><i class="fa fa-edit"></i></a>

                      <form class="form-horizontal style-form">

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Curso</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static">{{ $premio->cursos->name }}</p>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Arquivo</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static">{{ $premio->file }}</p>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Pontuação</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static">{{ $premio->pontuacao }}</p>
                              </div>
                          </div>

                      </form>
                  </div>


        </div>


        

        
@endsection
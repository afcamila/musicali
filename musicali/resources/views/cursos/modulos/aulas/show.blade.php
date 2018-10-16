@extends('layouts.dashboard')

@section('content')

        <div class="col-lg-9 main-chart ">

                  <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i>Aula</h4>
                      <a class="btn btn-theme" href="/cursos/modulos/aulas/{{$aula->id}}/edit" role="button"><i class="fa fa-edit"></i></a>

                      <form class="form-horizontal style-form">

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nome</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static">{{ $aula->name }}</p>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Descrição</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static">{{ $aula->description }}</p>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Status</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static">{{ $aula->status }}</p>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Data de Registro</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static">{{ $aula->created_at }}</p>
                              </div>
                          </div>

                      </form>
                  </div>


        </div>

        
@endsection
@extends('layouts.dashboard')

@section('content')

        <div class="col-lg-9 main-chart ">

                  <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i>Módulo</h4>
                      <a class="btn btn-theme" href="/cursos/modulos/{{$modulo->id}}/edit" role="button"><i class="fa fa-edit"></i></a>

                      <form class="form-horizontal style-form">

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nome</label>
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
                              <label class="col-sm-2 col-sm-2 control-label">Status</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static">{{ $modulo->status }}</p>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Data de Registro</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static">{{ $modulo->created_at }}</p>
                              </div>
                          </div>

                      </form>
                  </div>


            <div class="form-panel">

                <h4 class="mb"><i class="fa fa-angle-right"></i>Aulas</h4>
                <a class="btn btn-theme" href="/cursos/modulos/aulas/create/{{ $modulo->id }}" role="button"><i class="fa fa-plus"></i></a>

                <div class="panel-body">
                    <table class="table table-striped table-advance table-hover">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Data de Registro</th>
                        <th>Status</th>
                        <th>Visualizar</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($aulas as $a)

                      <tr>
                        <td>{{$a->id}}</td>
                        <td>{{$a->name}}</td>
                        <td>{{$a->created_at}}</td>
                        <td>
                          @if ($a->status === 'ATIVO')
                              <span class="label label-primary">ATIVO</span>
                          @elseif ($a->status === 'INATIVO')
                              <span class="label label-default">INATIVO</span>
                          @endif
                        </td>
                        <td>
                          <a href="/cursos/modulos/aulas/{{$a->id}}"><button class="btn btn-theme btn-xs"><i class=" fa fa-eye"></i></button></a>
                        </td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
            </div>
        </div>

        
@endsection
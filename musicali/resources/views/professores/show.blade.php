@extends('layouts.dashboard')

@section('content')

        <div class="col-lg-9 main-chart ">

                  <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i>Professor</h4>
                      <a class="btn btn-theme" href="/professores/{{$professor->id}}/edit" role="button"><i class="fa fa-edit"></i></a>

                      <form class="form-horizontal style-form">

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nome</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static">{{ $professor->name }}</p>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">E-mail</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static">{{ $professor->email }}</p>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Data de Registro</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static">{{ $professor->created_at }}</p>
                              </div>
                          </div>

                      </form>
                  </div>


                    <div class="form-panel">


                      <h4 class="mb"><i class="fa fa-angle-right"></i>Meus Cursos</h4>
                      <a class="btn btn-theme" href="/professores/cursos/addCurso/{{$professor->id}}" " role="button"><i class="fa fa-plus"></i></a>

                      
                      <table class="table table-striped table-advance table-hover">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($cursos as $c)

                          <tr>
                            <td>{{$c->id}}</td>
                            <td>{{$c->name}}</td>
                            <td>
                              @if ($c->status === 'ATIVO')
                                  <span class="label label-primary">ATIVO</span>
                              @elseif ($c->status === 'INATIVO')
                                  <span class="label label-default">INATIVO</span>
                              @endif
                            </td>
                          </tr>

                        @endforeach
                        </tbody>
                      </table>
                </div>

        </div>

        
@endsection
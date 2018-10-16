@extends('layouts.dashboard')

@section('content')

        <div class="col-lg-9 main-chart ">

                  <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i>Aluno</h4>
                      <a class="btn btn-theme" href="/alunos/{{$aluno->id}}/edit" role="button"><i class="fa fa-edit"></i></a>

                      <form class="form-horizontal style-form" action="/alunos/{{$aluno->id}}" method="post">
                       {{ csrf_field() }}
                          {{method_field('DELETE')}}

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nome</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static">{{ $aluno->name }}</p>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">E-mail</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static">{{ $aluno->email }}</p>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Data de Registro</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static">{{ $aluno->created_at }}</p>
                              </div>
                          </div>
                            
                            <!--<input type="submit" class="btn btn-theme02" value="Excluir"/>
                            <a class="btn btn-theme" href="/alunos/{{$aluno->id}}/edit" role="button">Editar</i></a>-->
                            
                          
                      </form>
                  </div>

                  <div class="form-panel">

                      <h4 class="mb"><i class="fa fa-angle-right"></i>Cursos do Aluno</h4>
                      <a class="btn btn-theme" href="/alunos/cursos/addCurso/{{$aluno->id}}" role="button"><i class="fa fa-plus"></i></a>

                      <table class="table table-striped table-advance table-hover">
                        <thead>
                          <tr>
                            <th>Nome</th>
                            <th>Data Matrícula</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($cursos as $c)

                          <tr>
                            <td>{{$c->name}}</td>
                            <td>{{$c->created_at}}</td>
                            <td>{{$c->status}}</td>
                          </tr>

                        @endforeach
                        </tbody>
                      </table>
                </div>


        </div>

        
@endsection
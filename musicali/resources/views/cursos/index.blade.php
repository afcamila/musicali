@extends('layouts.dashboard')

@section('content')

        <div class="col-lg-9 main-chart ">
            <div class="form-panel">

                <h4 class="mb"><i class="fa fa-angle-right"></i>Cursos</h4>
                <a class="btn btn-theme" href="/cursos/create" role="button"><i class="fa fa-plus"></i></a>

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
                    @foreach ($cursos as $c)

                      <tr>
                        <td>{{$c->id}}</td>
                        <td>{{$c->name}}</td>
                        <td>{{$c->created_at}}</td>
                        <td>
                          @if ($c->status === 'ATIVO')
                              <span class="label label-primary">ATIVO</span>
                          @elseif ($c->status === 'INATIVO')
                              <span class="label label-default">INATIVO</span>
                          @endif
                        </td>
                        <td>
                          <a href="/cursos/{{$c->id}}"><button class="btn btn-theme btn-xs"><i class=" fa fa-eye"></i></button></a>
                          
                        </td>

                        
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
            </div>
        </div>

        



@endsection
@extends('layouts.dashboard')

@section('content')

        <div class="col-lg-9 main-chart ">
            <div class="form-panel">

                <h4 class="mb"><i class="fa fa-angle-right"></i>Alunos</h4>
                <a class="btn btn-theme" href="/alunos/create" role="button"><i class="fa fa-plus"></i></a>

                <div class="panel-body">
                    <table class="table table-striped table-advance table-hover">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Status</th>
                        <th>Visualizar</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($alunos as $a)

                      <tr>
                        <td>{{$a->id}}</td>
                        <td>{{$a->name}}</td>
                        <td>{{$a->email}}</td>
                        <td>
                          @if ($a->status === 'ATIVO')
                              <span class="label label-primary">ATIVO</span>
                          @elseif ($a->status === 'INATIVO')
                              <span class="label label-default">INATIVO</span>
                          @endif
                        </td>
                        <td>
                          <a href="/alunos/{{$a->id}}"><button class="btn btn-theme btn-xs"><i class=" fa fa-eye"></i></button></a>
                          <!--<a class="btn btn-theme" href="/alunos/{{$a->id}}" 
                          role="button"><i class="fa fa-eye"></i></a>                    -->
                        </td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
            </div>
        </div>



@endsection
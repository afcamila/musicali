@extends('layouts.dashboard')

@section('content')

        <div class="col-lg-9 main-chart ">
            <div class="form-panel">

                <h4 class="mb"><i class="fa fa-angle-right"></i>Prêmios</h4>
                <a class="btn btn-theme" href="/premios/create" role="button"><i class="fa fa-plus"></i></a>

                <div class="panel-body">
                    <table class="table table-striped table-advance table-hover">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Data de Registro</th>
                        <th>Visualizar</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($premios as $p)

                      <tr>
                        <td>{{$p->id}}</td>
                        <td>{{$p->cursos->name}}</td>
                        <td>{{$p->created_at}}</td>
                        <td>
                          <a class="btn btn-theme btn-xs" href="/premios/{{$p->id}}" 
                          role="button"><i class="fa fa-eye"></i></a>                    
                        </td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
            </div>
        </div>



@endsection
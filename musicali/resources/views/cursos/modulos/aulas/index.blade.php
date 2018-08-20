@extends('layouts.dashboard')

@section('content')

        <div class="col-lg-9 main-chart ">
            <div class="form-panel">

                <h4 class="mb"><i class="fa fa-angle-right"></i>Aulas</h4>
                <a class="btn btn-theme" href="/aulas/create" role="button"><i class="fa fa-plus"></i></a>

                <div class="panel-body">
                    <table class="table table-striped table-advance table-hover">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Status</th>
                        <th>Data de Registro</th>
                        <th>Visualizar</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($aulas as $a)

                      <tr>
                        <td>{{$a->id}}</td>
                        <td>{{$a->name}}</td>
                        <td>{{$a->status}}</td>
                        <td>{{$a->created_at}}</td>
                        <td>
                          <a class="btn btn-theme" href="/aulas/{{$a->id}}" 
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
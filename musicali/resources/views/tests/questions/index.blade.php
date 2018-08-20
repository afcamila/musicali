@extends('layouts.dashboard')

@section('content')

        <div class="col-lg-9 main-chart ">
            <div class="form-panel">

                <h4 class="mb"><i class="fa fa-angle-right"></i>Questões</h4>
                <a class="btn btn-theme" href="/tests/questions/create" role="button"><i class="fa fa-plus"></i></a>

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
                    @foreach ($questions as $q)

                      <tr>
                        <td>{{$q->id}}</td>
                        <td>{{$q->name}}</td>
                        <td>{{$q->status}}</td>
                        <td>{{$q->created_at}}</td>
                        <td>
                          <a class="btn btn-theme" href="/tests/questions/{{$q->id}}" 
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
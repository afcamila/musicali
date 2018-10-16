@extends('layouts.dashboard')

@section('content')

        <div class="col-lg-9 main-chart ">
            <div class="form-panel">

                <h4 class="mb"><i class="fa fa-angle-right"></i>Quizzes</h4>
                <a class="btn btn-theme" href="/tests/create" role="button"><i class="fa fa-plus"></i></a>

                <div class="panel-body">
                    <table class="table table-striped table-advance table-hover">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Curso</th>
                        <th>Visualizar</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($tests as $t)

                      <tr>
                        <td>{{$t->id}}</td>
                          <td>{{$t->cursos->name}}</td>
                        <td>
                          <a href="/tests/{{$t->id}}"><button class="btn btn-theme btn-xs"><i class=" fa fa-eye"></i></button></a>
                          
                        </td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
            </div>
        </div>

        



@endsection
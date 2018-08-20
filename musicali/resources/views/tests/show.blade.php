@extends('layouts.dashboard')

@section('content')

        <div class="col-lg-9 main-chart ">

                  <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i>Quiz</h4>
                      <!--<a class="btn btn-theme" href="/tests/{{$test->id}}/edit" role="button"><i class="fa fa-edit"></i></a>-->

                      <form class="form-horizontal style-form">

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Curso</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static">{{ $test->cursos->name }}</p>
                              </div>
                          </div>

                      </form>
                  </div>


        </div>

        <div class="col-lg-9 main-chart ">
            <div class="form-panel">

                <h4 class="mb"><i class="fa fa-angle-right"></i>Questões</h4>
                <a class="btn btn-theme" href="/tests/questions/create/{{ $test->id }}" role="button"><i class="fa fa-plus"></i></a>

                <div class="panel-body">
                    <table class="table table-striped table-advance table-hover">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Título</th>
                        <th>Nível</th>
                        <th>Visualizar</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($questions as $t)

                      <tr>
                        <td>{{$t->id}}</td>
                        <td>{{$t->title}}</td>
                        <td>
                          @if ($t->level === 'FÁCIL')
                              <span class="label label-success">FÁCIL</span>
                          @elseif ($t->level === 'MÉDIO')
                              <span class="label label-warning">MÉDIO</span>
                          @elseif ($t->level === 'DIFÍCIL')
                              <span class="label label-primary">DIFÍCIL</span>
                          @endif
                        </td>
                        <td>
                        <a href="/tests/questions/{{$t->id}}"><button class="btn btn-theme btn-xs"><i class=" fa fa-eye"></i></button></a>
                                            
                        </td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
            </div>
        </div>

        

        
@endsection
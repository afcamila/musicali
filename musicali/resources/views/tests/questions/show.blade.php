@extends('layouts.dashboard')

@section('content')

        <div class="col-lg-9 main-chart ">

                  <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i>Questão</h4>
                      

                      <form class="form-horizontal style-form">

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Título</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static">{{ $question->title }}</p>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nível</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static">{{ $question->level }}</p>
                              </div>
                          </div>

                      </form>
                  </div>


        </div>

        <div class="col-lg-9 main-chart ">
            <div class="form-panel">

                <h4 class="mb"><i class="fa fa-angle-right"></i>Opções de Respostas</h4>

                

                <div class="panel-body">
                    <table class="table table-striped table-advance table-hover">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Opção</th>
                        <th>Correta</th>
                      </tr>
                    </thead>
                    <tbody>

                      <tr>
                        <td>A</td>
                        <td>{{$question->a}}</td>
                        <td>
                          @if ($question->is_correct === 'a')
                              <span class="label label-primary">VERDADEIRO</span>
                          @else
                              <span class="label label-default">FALSO</span>
                          @endif
                        </td>
                      </tr>
                      <tr>
                        <td>B</td>
                        <td>{{$question->b}}</td>
                        <td>
                          @if ($question->is_correct === 'b')
                              <span class="label label-primary">VERDADEIRO</span>
                          @else
                              <span class="label label-default">FALSO</span>
                          @endif
                        </td>
                      </tr>
                      <tr>
                        <td>C</td>
                        <td>{{$question->c}}</td>
                        <td>
                          @if ($question->is_correct === 'c')
                              <span class="label label-primary">VERDADEIRO</span>
                          @else
                              <span class="label label-default">FALSO</span>
                          @endif
                        </td>
                      </tr>

                    </tbody>
                  </table>
                </div>
            </div>
        </div>

        

        
@endsection
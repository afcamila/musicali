@extends('layouts.dashboard')

@section('content')

        <div class="col-lg-9 main-chart ">

            <!-- ALUNO -->
                  @if(Auth::user()->hasRole('aluno'))
                  <?php
                    $id = Auth::user()->id;
                    $nome = Auth::user()->name;
                  ?>



                  @endif

            <!-- ADMINISTRADOR -->
                  @if(Auth::user()->hasRole('administrador'))
                  <?php
                    $id = Auth::user()->id;
                    $nome = Auth::user()->name;
                  ?>

                  <div class="row mtbox">
                        <div class="col-md-2 col-sm-2 col-md-offset-1 box0">
                            <div class="box1">
                                <span class="fa fa-users"></span>
                                <h3>{{ $alunos }}</h3>
                            </div>
                                <p>{{ $alunos }} pessoas estão estudando música!</p>
                        </div>
                        <div class="col-md-2 col-sm-2 box0">
                            <div class="box1">
                                <span class="fa fa-book"></span>
                                <h3>{{ $cursos }}</h3>
                            </div>
                                <p>{{ $cursos }} cursos de música são ensinados!</p>
                        </div>
                        <div class="col-md-2 col-sm-2 box0">
                            <div class="box1">
                                <span class="fa fa-mortar-board"></span>
                                <h3>{{ $professores }}</h3>
                            </div>
                                <p>Você tem {{ $professores }} profissionais da música!</p>
                        </div>
                        <div class="col-md-2 col-sm-2 box0">
                            <div class="box1">
                                <span class="fa fa-video-camera"></span>
                                <h3>{{ $aulas }}</h3>
                            </div>
                                <p>Você tem {{ $aulas }} aulas cadastradas!</p>
                        </div>
                        <div class="col-md-2 col-sm-2 box0">
                            <div class="box1">
                                <span class="fa fa-question-circle"></span>
                                <h3>{{ $questions }}</h3>
                            </div>
                                <p>{{ $questions }} testes já foram feitos!</p>
                        </div>
                    
                    </div><!-- /row mt -->


                  @endif

            <!-- OPERADOR -->
                  @if(Auth::user()->hasRole('operador'))
                  <?php
                    $id = Auth::user()->id;
                    $nome = Auth::user()->name;
                  ?>

                  <div class="row mtbox">
                        <div class="col-md-2 col-sm-2 col-md-offset-1 box0">
                            <div class="box1">
                                <span class="fa fa-users"></span>
                                <h3>{{ $alunos }}</h3>
                            </div>
                                <p>{{ $alunos }} pessoas estão estudando música!</p>
                        </div>
                        <div class="col-md-2 col-sm-2 box0">
                            <div class="box1">
                                <span class="fa fa-book"></span>
                                <h3>{{ $cursos }}</h3>
                            </div>
                                <p>{{ $cursos }} cursos de música são ensinados!</p>
                        </div>
                        <div class="col-md-2 col-sm-2 box0">
                            <div class="box1">
                                <span class="fa fa-mortar-board"></span>
                                <h3>{{ $professores }}</h3>
                            </div>
                                <p>Você tem {{ $professores }} profissionais da música!</p>
                        </div>
                        <div class="col-md-2 col-sm-2 box0">
                            <div class="box1">
                                <span class="fa fa-video-camera"></span>
                                <h3>{{ $aulas }}</h3>
                            </div>
                                <p>Você tem {{ $aulas }} aulas cadastradas!</p>
                        </div>
                        <div class="col-md-2 col-sm-2 box0">
                            <div class="box1">
                                <span class="fa fa-question-circle"></span>
                                <h3>{{ $questions }}</h3>
                            </div>
                                <p>{{ $questions }} testes já foram feitos!</p>
                        </div>
                    
                    </div><!-- /row mt -->



                  @endif

            <!-- PROFESSOR -->
                  @if(Auth::user()->hasRole('professor'))
                  <?php
                    $id = Auth::user()->id;
                    $nome = Auth::user()->name;
                  ?>

                  <div class="row mtbox">
                        <div class="col-md-2 col-sm-2 col-md-offset-1 box0">
                            <div class="box1">
                                <span class="fa fa-users"></span>
                                <h3>{{ $alunos }}</h3>
                            </div>
                                <p>{{ $alunos }} pessoas estão estudando música!</p>
                        </div>
                        <div class="col-md-2 col-sm-2 box0">
                            <div class="box1">
                                <span class="fa fa-book"></span>
                                <h3>{{ $cursos }}</h3>
                            </div>
                                <p>{{ $cursos }} cursos de música são ensinados!</p>
                        </div>
                        <div class="col-md-2 col-sm-2 box0">
                            <div class="box1">
                                <span class="fa fa-mortar-board"></span>
                                <h3>{{ $professores }}</h3>
                            </div>
                                <p>Você tem {{ $professores }} profissionais da música!</p>
                        </div>
                        <div class="col-md-2 col-sm-2 box0">
                            <div class="box1">
                                <span class="fa fa-video-camera"></span>
                                <h3>{{ $aulas }}</h3>
                            </div>
                                <p>Você tem {{ $aulas }} aulas cadastradas!</p>
                        </div>
                        <div class="col-md-2 col-sm-2 box0">
                            <div class="box1">
                                <span class="fa fa-question-circle"></span>
                                <h3>{{ $questions }}</h3>
                            </div>
                                <p>{{ $questions }} testes já foram feitos!</p>
                        </div>
                    
                    </div><!-- /row mt -->

                    



                  @endif


        </div>

@endsection

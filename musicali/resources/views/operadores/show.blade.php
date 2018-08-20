@extends('layouts.dashboard')

@section('content')

        <div class="col-lg-9 main-chart ">

                  <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i>Operador</h4>
                      <a class="btn btn-theme" href="/operadores/{{$operador->id}}/edit" role="button"><i class="fa fa-edit"></i></a>

                      <form class="form-horizontal style-form">

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nome</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static">{{ $operador->name }}</p>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">E-mail</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static">{{ $operador->email }}</p>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Data de Registro</label>
                              <div class="col-sm-10">
                                  <p class="form-control-static">{{ $operador->created_at }}</p>
                              </div>
                          </div>

                      </form>
                  </div>


                    <!--<div class="form-panel">


                      <h4 class="mb"><i class="fa fa-angle-right"></i>Meus Cursos</h4>
                      <a class="btn btn-theme" href="/operadores/{{$operador->id}}/cursos" role="button"><i class="fa fa-plus"></i></a>

                      
                      <table class="table table-striped table-advance table-hover">
                        <thead>
                          <tr>
                            <th>Nome</th>
                            <th>Data Matrícula</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                        </tbody>
                      </table>
                </div>-->

        </div>

        
@endsection
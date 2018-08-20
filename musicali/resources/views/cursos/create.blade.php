@extends('layouts.dashboard')

@section('content')

      <div class="col-lg-9 main-chart ">
            

                  <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i>Novo Curso</h4>
                      <form class="form-horizontal style-form" action="/cursos" method="post">
                         {{csrf_field()}}
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nome</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" id="name" name="name">
                              </div>
                          </div>
                          
                          <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Descrição</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="description" name="description">
                            </div>
                          </div>

                          <div class="form-group">
                            <!--<label class="col-sm-2 col-sm-2 control-label">Status</label>-->
                            <div class="col-sm-10">
                              <input type="hidden" class="form-control" id="status" name="status" value="ATIVO">
                            </div>
                          </div>
                          
                          <div class="form-group">
                            <div class="col-sm-10">
                              <a href="javascript:history.back()" class="btn btn-theme02">Cancelar</a>
                              <button type="submit" class="btn btn-theme">Salvar</button>
                            </div>
                          </div>

                    </form>
                  </div>

        </div>

          
@endsection
@extends('layouts.dashboard')

@section('content')

      <div class="col-lg-9 main-chart ">
            

                  <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i>Nova Questão</h4>
                      <form class="form-horizontal style-form" action="/tests/{{ $test->id }}" method="post">
                         {{csrf_field()}}

                         <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Título</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" id="title" name="title">
                              </div>
                          </div>
                          
                          <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Nível</label>
                            <div class="col-sm-10">
                              <select name="level">
                                <option value="FÁCIL">FÁCIL</option>
                                <option value="INTERMEDIÁRIO">INTERMEDIÁRIO</option>
                                <option value="DIFÍCIL">DIFÍCIL</option>
                              </select>
                            </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Opção A</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" id="a" name="a">
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Opção B</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" id="b" name="b">
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Opção C</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" id="c" name="c">
                              </div>
                          </div>
                          
                          <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Opção Correta</label>
                            <div class="col-sm-10">
                              <select name="is_correct">
                                <option value="a">Opção A</option>
                                <option value="b">Opção B</option>
                                <option value="c">Opção C</option>
                              </select>
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
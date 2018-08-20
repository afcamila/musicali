@extends('layouts.dashboard')

@section('content')

      <div class="col-lg-9 main-chart ">
            

                  <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i>Novo Prêmio</h4>
                      <form class="form-horizontal style-form" action="/premios" enctype="multipart/form-data" method="post">
                         {{csrf_field()}}


                          <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Curso</label>
                            <div class="col-sm-10">
                              <select class="form-control" name="curso_id">
                                @foreach ($cursos as $c)
                                <option value="{{ $c->id }}">{{ $c->name }}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Nome</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="name" name="name">
                            </div>
                          </div>
                          
                          <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Arquivo</label>
                            <div class="col-sm-10">
                              <input type="file" class="form-control" id="file" name="file">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Pontuação</label>
                            <div class="col-sm-10">
                              <select class="form-control" name="pontuacao">
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="15">15</option>
                                <option value="20">20</option>
                                <option value="25">25</option>
                                <option value="30">30</option>
                                
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
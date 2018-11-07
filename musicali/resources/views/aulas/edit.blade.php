@extends('layouts.dashboard')

@section('content')

      <div class="col-lg-9 main-chart ">

      @if (count($errors) > 0)
      <div class="alert alert-danger">

          <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>

    @endif
            

                  <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i>Editar Aula</h4>
                      <form class="form-horizontal style-form" action="/aulas" method="patch">
                         {{csrf_field()}}
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nome</label>
                              <div class="col-sm-10">
                                  <input type="text" value="{{ $aula->name }}" class="form-control" id="nome" name="nome">
                              </div>
                          </div>
                          
                          <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Description</label>
                            <div class="col-sm-10">
                              <input type="text" value="{{ $aula->description }}"  class="form-control" id="description" name="description">
                            </div>
                          </div>                          
                          
                          <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Status</label>
                            <div class="col-sm-10">
                              <input type="text" value="{{ $aula->status }}"  class="form-control" id="status" name="status">
                            </div>
                          </div>
                          
                          <div class="form-group">
                            <div class="col-sm-10">
                              <a href="javascript:history.back()" class="btn btn-theme">Voltar</a>
                              <button type="submit" class="btn btn-theme">Salvar</button>
                            </div>
                          </div>

                    </form>
                  </div>

        </div>

          
@endsection
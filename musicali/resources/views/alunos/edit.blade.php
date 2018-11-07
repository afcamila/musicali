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
                      <h4 class="mb"><i class="fa fa-angle-right"></i>Editar Aluno</h4>
                      <form class="form-horizontal style-form" action="/alunos/{{ $aluno->id }}" method="post">
                         {{csrf_field()}}
                         <input name="_method" type="hidden" value="PATCH">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nome</label>
                              <div class="col-sm-10">
                                  <input type="text" value="{{ $aluno->name }}" class="form-control" id="name" name="name">
                              </div>
                          </div>
                          
                          <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Login</label>
                            <div class="col-sm-10">
                              <input type="email" value="{{ $aluno->email }}"  class="form-control" id="email" name="email">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label ">Status</label>
                            <div class="col-sm-10">
                              <select name="status" class="form-control">
                                  <option value="ATIVO">ATIVO</option>
                                  <option value="INATIVO">INATIVO</option>
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
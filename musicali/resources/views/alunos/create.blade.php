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
                      <h4 class="mb"><i class="fa fa-angle-right"></i>Novo Aluno</h4>
                      <form class="form-horizontal style-form" action="/alunos" method="post">
                         {{csrf_field()}}
                          <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                              <label class="col-sm-2 col-sm-2 control-label">Nome</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" id="name" name="name">
                                  @if ($errors->has('name'))
                                      <span class="text-danger">{{ $errors->first('name') }}</span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                            <label class="col-sm-2 col-sm-2 control-label">E-mail</label>
                            <div class="col-sm-10">
                              <input type="email" class="form-control" id="email" name="email">
                                  @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
                            </div>
                          </div>

                          
                          <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                            <label class="col-sm-2 col-sm-2 control-label">Senha</label>
                            <div class="col-sm-10">
                              <input type="password" class="form-control" id="password" name="password">
                                  @if ($errors->has('password'))
                                      <span class="text-danger">{{ $errors->first('password') }}</span>
                                  @endif
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
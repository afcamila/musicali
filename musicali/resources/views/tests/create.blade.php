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
                      <h4 class="mb"><i class="fa fa-angle-right"></i>Novo Quiz</h4>
                      <form class="form-horizontal style-form" action="/tests" method="post">
                         {{csrf_field()}}
                          
                          <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Cursos</label>
                            <div class="col-sm-10">
                              <select name="curso_id">
                                @foreach ($cursos as $c)
                                <option value="{{ $c->id }}">{{ $c->name }}</option>
                                @endforeach
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
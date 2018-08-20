@extends('layouts.dashboard')

@section('content')

      <div class="col-lg-9 main-chart ">

          @if($cursos->isEmpty())
          <div class="alert alert-warning"><b>Ops!</b> Você ainda não tem nenhum curso cadastrado.</div>
          @endif
            
            <div class="col-lg-12 ds" style="margin-bottom:10px; background-color:transparent; margin-top: -20px;">                 
                <h3>nome</h3>  
            </div>

            <div class="col-lg-12">
            @foreach($questions as $question)
            <div class="content-panel pn">
              <h4 class="mb"><i class="fa fa-angle-right"></i>{{ $question->title }}</h4>
              <div class="col-lg-10 col-lg-offset-1">
              <form class="form-horizontal style-form" action="/alunos/quiz/" method="post">
                 {{csrf_field()}}
                  
	              <div class="form-group">
                    <div class="radio">
            					  <label>
            					    <input name="is_correct" id="a" value="a"  type="radio">
            					    {{ $question->a }}
            					  </label>
            					</div>
                    </div>

                  <div class="form-group">
                    <div class="radio">
          					  <label>
          					    <input name="is_correct" id="b" value="b"  type="radio">
          					    {{ $question->b }}
          					  </label>
          					</div>
                  </div>

                  <div class="form-group">
                    <div class="radio">
          					  <label>
          					    <input name="is_correct" id="c" value="c"  type="radio">
          					    {{ $question->c }}
          					  </label>
          					</div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-theme">Salvar</button>
                    </div>
                  </div>

                </form>
              </div>
         	</div>
			@endforeach
			</div>

    </div>

          
@endsection
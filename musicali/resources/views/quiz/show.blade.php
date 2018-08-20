@extends('layouts.dashboard')

@section('content')

      <div class="col-lg-9 main-chart ">
            
            <div class="col-lg-12 ds" style="margin-bottom:10px; background-color:transparent; margin-top: -20px;">                 
                <h3>nome</h3>  
            </div>

            <div class="col-lg-12">
            @foreach($questions as $question)
            <div class="content-panel pn">
              <h4 class="mb"><i class="fa fa-angle-right"></i>{{ $question->title }}</h4>
              <div class="col-lg-12 ">
              <form class="form-horizontal style-form" action="/quiz/{{ $question->id }}" method="post">
                 {{csrf_field()}}
                  
	              <div class="form-group">
                      <div class="radio">
            					  <label>
            					    <input name="is_correct" id="a" value="a"  type="radio">
            					    {{ $question->a }}
            					  </label>
            					</div>
                      <div class="radio">
                        <label>
                          <input name="is_correct" id="b" value="b"  type="radio">
                          {{ $question->b }}
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input name="is_correct" id="c" value="c"  type="radio">
                          {{ $question->c }}
                        </label>
                      </div>
                  </div>

                  <input type="hidden" name="curso_id" value="{{ $test }}">

                  

                    <div class="col-sm-12">
                      <button type="submit" class="btn btn-theme pull-right">Salvar</button>
                    </div>

                </form>
              </div>
         	</div>
			@endforeach
			</div>

    </div>

          
@endsection
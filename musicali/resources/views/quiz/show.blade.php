@extends('layouts.dashboard')

@section('content')

      <div class="col-lg-9 main-chart ">
            
            <div class="col-lg-12 ds" style="margin-bottom:10px; background-color:transparent; margin-top: -20px;">                 
                <h3>{{$curso->name}}</h3>  
            </div>



                      <div class="col-lg-12">

            
                                      <div class="col-lg-12 ds" style="margin-bottom:10px; margin-top: -20px;">
                                        <label class="col-sm-2 col-sm-2 control-label">Progresso</label>
                                        <div class="col-sm-10">
                                            <div class="progress progress-striped">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{ $progresso }}" aria-valuemin="0" aria-valuemax="{{ $total }}" style="width: {{ $progresso }}%">
                                                  <span class="sr-only">{{ $progresso }}% completo</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                      </div>
                      <div class="col-lg-12">


                                <form class="form-horizontal style-form" >

                                  @if($progresso == 0)
                                      <div class="alert alert-danger"><b>Ops!</b> Você ainda não acertou nenhum quiz.</div>
                                  @endif
                                  @if($progresso > 0 && $progresso < 5)
                                    <div class="alert alert-warning"><b>Quase!</b> Mais {{ 5-$progresso }} pontos e você receberá um prêmio.</div>
                                  @endif
                                  @if($progresso == 5)
                                    <div class="alert alert-success"><b>Oba!</b> Você atingiu 5 pontos e ganhará um prêmio.</div>
                                  @endif
                                  @if($progresso > 5 && $progresso < 10)
                                    <div class="alert alert-warning"><b>Quase!</b> Mais {{ 10-$progresso }} pontos e você receberá um prêmio.</div>
                                  @endif
                                  @if($progresso == 10)
                                    <div class="alert alert-success"><b>Oba!</b> Você atingiu 20 pontos e ganhará um prêmio.</div>
                                  @endif
                                  @if($progresso > 10 && $progresso < 15)
                                    <div class="alert alert-warning"><b>Quase!</b> Mais {{ 15-$progresso }} pontos e você receberá um prêmio.</div>
                                  @endif
                                  @if($progresso == 15)
                                    <div class="alert alert-success"><b>Oba!</b> Você atingiu 25 pontos e ganhará um prêmio.</div>
                                  @endif
                                  @if($progresso > 15 && $progresso < 20)
                                    <div class="alert alert-warning"><b>Quase!</b> Mais {{ 20-$progresso }} pontos e você receberá um prêmio.</div>
                                  @endif
                                  @if($progresso == 20)
                                    <div class="alert alert-success"><b>Oba!</b> Você atingiu 20 pontos e ganhará um prêmio.</div>
                                  @endif
                                  @if($progresso > 20 && $progresso < 25)
                                    <div class="alert alert-warning"><b>Quase!</b> Mais {{ 25-$progresso }} pontos e você receberá um prêmio.</div>
                                  @endif
                                  @if($progresso == 25)
                                    <div class="alert alert-success"><b>Oba!</b> Você atingiu 25 pontos e ganhará um prêmio.</div>
                                  @endif
                                  @if($progresso > 25 && $progresso < 30)
                                    <div class="alert alert-warning"><b>Quase!</b> Mais {{ 30-$progresso }} pontos e você receberá um prêmio.</div>
                                  @endif
                                  @if($progresso == 30)
                                    <div class="alert alert-success"><b>Oba!</b> Você atingiu 30 pontos já está fera em Violão.</div>
                                  @endif

                                                           
                                    
                                </form>
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
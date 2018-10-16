@extends('layouts.dashboard')

@section('content')

        <div class="col-lg-9 main-chart ">

        	@if($cursos->isEmpty())
			    <div class="alert alert-warning"><b>Ops!</b> Você ainda não tem nenhum curso cadastrado.</div>
        	@endif

            @foreach($cursos as $curso)

            			<div class="col-lg-12">

							<div class="content-panel pn">
	            				<div class="col-lg-4">
									<div id="spotify">
										<div class="sp-title">
											<h3>{{ $curso->name }}</h3>
										</div>
										<div class="play">
											<a class="btn btn-theme" href="/quiz/{{ $curso->id }}">Responder <i class="fa fa-sign-in"></i></a>
										</div>
									</div>
								</div>

	            				<div class="col-lg-8">

			                          <form class="form-horizontal style-form">

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
			                            	<div class="alert alert-warning"><b>Quase!</b> Mais {{ 5-$progresso }} pontos e você receberá um prêmio.</div>
			                            @endif
			                            @if($progresso == 10)
			                            	<div class="alert alert-success"><b>Oba!</b> Você atingiu 20 pontos e ganhará um prêmio.</div>
			                            @endif
			                            @if($progresso > 10 && $progresso < 15)
			                            	<div class="alert alert-warning"><b>Quase!</b> Mais {{ 5-$progresso }} pontos e você receberá um prêmio.</div>
			                            @endif
			                            @if($progresso == 15)
			                            	<div class="alert alert-success"><b>Oba!</b> Você atingiu 25 pontos e ganhará um prêmio.</div>
			                            @endif
			                            @if($progresso > 15 && $progresso < 20)
			                            	<div class="alert alert-warning"><b>Quase!</b> Mais {{ 5-$progresso }} pontos e você receberá um prêmio.</div>
			                            @endif
			                            @if($progresso == 20)
			                            	<div class="alert alert-success"><b>Oba!</b> Você atingiu 20 pontos e ganhará um prêmio.</div>
			                            @endif
			                            @if($progresso > 20 && $progresso < 25)
			                            	<div class="alert alert-warning"><b>Quase!</b> Mais {{ 5-$progresso }} pontos e você receberá um prêmio.</div>
			                            @endif
			                            @if($progresso == 25)
			                            	<div class="alert alert-success"><b>Oba!</b> Você atingiu 25 pontos e ganhará um prêmio.</div>
			                            @endif
			                            @if($progresso > 25 && $progresso < 30)
			                            	<div class="alert alert-warning"><b>Quase!</b> Mais {{ 5-$progresso }} pontos e você receberá um prêmio.</div>
			                            @endif
			                            @if($progresso == 30)
			                            	<div class="alert alert-success"><b>Oba!</b> Você atingiu 30 pontos já está fera em Violão.</div>
			                            @endif

			                              <div class="form-group">
			                                  <label class="col-sm-2 col-sm-2 control-label">Progresso</label>
			                                  <div class="col-sm-10">
			                                   		<div class="progress progress-striped">
											  			<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{ $progresso }}" aria-valuemin="0" aria-valuemax="{{ $total }}" style="width: {{ $progresso }}%">
											    		<span class="sr-only">{{ $progresso }}% completo</span>
											  			</div>
													</div>
			                                  </div>
			                              </div>

			                              	                     
			                              
			                          </form>
								</div>
							</div>
						</div>						
                  

            @endforeach
        </div>



@endsection
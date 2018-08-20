@extends('layouts.dashboard')

@section('content')

        <div class="col-lg-9 main-chart ">

            @foreach($cursos as $curso)


            			<div class="col-lg-12">

							<div class="content-panel pn">
	            				<div class="col-lg-4">
									<div id="spotify">
										<div class="sp-title">
											<h3>{{ $curso->name }}</h3>
										</div>
										<div class="play">
											<a href="/alunos/cursos/{{ $curso->id }}"><i class="fa fa-sign-in"></i></a>
										</div>
									</div>
								</div>

	            				<div class="col-lg-8">

										<div class="sp-title">
											<h4>Desde: {{ $curso->created_at }}</h4>
										</div>

										<div class="form-group">
			                                  <label class="col-sm-2 col-sm-2 control-label">Progresso</label>
			                                  <div class="col-sm-10">
			                                      <div class="progress progress-striped">
											  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{ $progresso }}" aria-valuemin="0" aria-valuemax="{{ $total }}" style="width: {{ $progresso }}%">
											    <span class="sr-only">{{ $progresso }}% Complete (success)</span>
											  </div>
											</div> 
			                            </div>
								</div>
							</div>
						</div>						
                  

            @endforeach
        </div>



@endsection
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
							</div>
						</div>						
                  

            @endforeach
        </div>



@endsection
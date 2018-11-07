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
											<a class="btn btn-theme" href="/alunos/cursos/{{ $curso->id }}">Entrar <i class="fa fa-sign-in"></i></a>
										</div>
									</div>
								</div>

	            				<div class="col-lg-8">

			                          <form class="form-horizontal style-form">

			                              <div class="form-group">
			                                  <label class="col-sm-2 col-sm-2 control-label">Curso</label>
			                                  <div class="col-sm-10">
			                                      <p class="form-control-static">{{ $curso->name }}</p>
			                                  </div>
			                              </div>	                              	                     
			                              
			                          </form>
								</div>
							</div>
						</div>						
                  

            @endforeach
        </div>



@endsection
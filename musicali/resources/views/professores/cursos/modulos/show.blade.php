@extends('layouts.dashboard')

@section('content')

        <div class="col-lg-9 main-chart ">

              
                <div class="col-lg-12 ds" style="margin-bottom:10px; background-color:transparent; margin-top: -20px;">                 
                    <h3>{{ $modulo->name }}</h3>  
                </div>

            @foreach($aulas as $aula)


            <div class="col-lg-12">

              <div class="content-panel pn">
                      <div class="col-lg-5">
                            <iframe width="300" height="200" src="{{ $aula->video }}" allowfullscreen>
                            </iframe>
                      </div>

                      <div class="col-lg-7">

                          <form class="form-horizontal style-form">

                              <div class="form-group">
                                  <label class="col-sm-2 col-sm-2 control-label">Aula</label>
                                  <div class="col-sm-10">
                                      <p class="form-control-static">{{ $aula->name }}</p>
                                  </div>
                              </div>

                              <div class="form-group">
                                  <label class="col-sm-2 col-sm-2 control-label">Descrição</label>
                                  <div class="col-sm-10">
                                      <p class="form-control-static">{{ $aula->description }}</p>
                                  </div>
                              </div>

                              <!--<div class="form-group">
                                  <label class="col-sm-2 col-sm-2 control-label">Apostila</label>
                                  <div class="col-sm-10">
                                      <a href="./abcf32x.pdf" download="How-to-download-file.pdf">
                                          <button class="btn btn-theme">Download</button>
                                      </a>
                                  </div>
                              </div>-->                      
                              
                          </form>
                       
                      </div>
              </div>
            </div>            
                  

            @endforeach
        </div>



@endsection

@extends('layouts.dashboard')

@section('content')

        <div class="col-lg-9 main-chart ">
            <div class="form-panel">

                <div class="panel-body">

                    <div class="col-md-10 col-md-offset-1">
                        <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                        <h2>{{ $user->name }}</h2>
                        <form enctype="multipart/form-data" action="/profile" method="POST">
                            <label>Atualize sua foto de perfil</label>
                            
                            <div>
                                <label for="files" class="btn btn-theme02">Selecione a imagem</label>
                                <input type="file" id="files" name="avatar" style="visibility:hidden;">  
                            </div>
                            
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="submit" class="pull-right btn btn-theme" value="Salvar">
                        </form>
                    </div>

                </div>
            </div>

        
        </div>

        
@endsection
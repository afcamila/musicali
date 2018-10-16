<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Título Opcional</title>
 
        <!--Custon CSS (está em /public/assets/site/css/certificate.css)-->
        <link rel="stylesheet" href="{{ url('assets/curso/css/certificate.css') }}">
    </head>
    <body>
         
 
 
<h1>Produtos</h1>
 
 
        <ul>
            @forelse($cursos as $curso)
                 
 
 
            <li>{{ $curso->name }}</li>
             
             
             
                        @empty
                             
             
             
            <li>Nenhum Produto Cadastrado.</li>
 
 
 
            @endforelse
        </ul>
 
 
 
    </body>
</html>
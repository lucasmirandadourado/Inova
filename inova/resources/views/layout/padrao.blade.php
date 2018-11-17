<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">    
    <title>Inova - @yield('titulo')</title>
    <link rel="stylesheet" href="/materialize/css/materialize.css">
    <link rel="stylesheet" href="/css/inova.css">
</head>

<body>
    <header>
        @section('navbar')
            @include('layout._includes._header')    
        @show
        
        
    </header>

    <main>

            <div class="row">
      
                    <div class="col s1">
                        
                    </div>
                    
                    <div class="col s10">
                            @yield('conteudo')
                    </div>
                    <div class="col s1">
                        
                        </div>
            </div>
    </main>

    <footer>
          @section('footer')
            @include('layout._includes._footer')      
          @show            
    </footer>
</body>
</html>
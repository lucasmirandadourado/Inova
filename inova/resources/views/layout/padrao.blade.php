@section('navbar')
    @include('layout._includes._header')    
@show

<title>Inova - @yield('titulo')</title>


@yield('conteudo')
  

@section('footer')
    @include('layout._includes._footer')      
@show                
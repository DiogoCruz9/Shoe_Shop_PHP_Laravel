<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="{{URL::to("src/css/app.css")}}">

    <!--
         usamos isto para importar sempre esse file
         URL é uma facade
         facades sao usadas para aceder mais facilmente a diferentes helpers do laravel
         to = pega no path que tem dentro e procura-o dentro do web.php e faz com que funcione em todas as routes e nao só na main
    -->

    @yield('styles')
</head>
<body>
@include("partials.header")

<div class="container">
    @yield('content') <!--  /* é herdado, baiscamente chamo os layouts que eu quiser e digo para meter nesta parte da pagina. -->
</div> <!--cada conteudo, ou seja, cada produto criado estará dentro de um container-->

<!--jquery-->
  <script   src="https://code.jquery.com/jquery-1.12.3.min.js"   integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ="   crossorigin="anonymous"></script>
<!--bootstrap-->

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>


  @yield('scripts')
</body>
</html>

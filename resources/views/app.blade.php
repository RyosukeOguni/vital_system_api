<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSRF Token -->
  {{--
  <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
  <link type="text/css" rel="stylesheet" href="//unpkg.com/bootstrap/dist/css/bootstrap.min.css" />
  <link type="text/css" rel="stylesheet" href="//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.css" />

  {{--
  <link rel="stylesheet" href="{{ mix('/css/app.css') }}"> --}}
  <title>Document</title>
</head>

<body>
  <div id="app">
    <app-component></app-component>
  </div>

  <!-- body タグの最後に足す-->
  {{-- <script src=" {{ mix('js/app.js') }} "></script> --}}
  <script src="//unpkg.com/vue@latest/dist/vue.min.js"></script>
  <script src="spectrum.js"></script>
  <link rel="stylesheet" href="spectrum.css">
  <script src="//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.js"></script>
  <script src="//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue-icons.min.js"></script>
</body>

</html>
<style>
  html {
    min-height: 100%;
    position: relative;
  }

  html,
  body {
    height: 100%;
    margin-bottom: 3rem;
  }

  body,
  #app {
    width: 100%;
    height: 100%;
  }

</style>

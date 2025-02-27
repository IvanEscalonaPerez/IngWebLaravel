<!DOCTYPE html>

 <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <meta http-equiv="Expires" content="0">
   <meta http-equiv="Last-Modified" content="0">
   <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
   <meta http-equiv="Pragma" content="no-cache">

   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <title>{{ config('app.name', 'Ejemplo') }}</title>
   <!-- Scripts -->
   <script src="{{ mix('js/app.js') }}" defer></script>
   <!-- Fonts -->
   <link rel="dns-prefetch" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
   <!-- Styles -->
   <link href="{{ mix('css/app.css') }}" rel="stylesheet">
 </head>

 <body>
   <div id="app"></div>
 </body>

 </html>
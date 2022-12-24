<html>
<head>
  @vite('resources/js/app.js')
</head>
<body>
    <!-- Preloader Start -->
  <div class="preloader">
   <div class="rounder"></div>
    </div>
    <!-- Preloader End -->
  <div id="main">
      <div class="container">
          <div class="row" id="app">

                        {{-- <App></App> --}}



 
</div>
</div>
</div>


<!-- All Javascript Plugins  -->

</body>
<script>

  window.Global = @json( 
    ["setting" => $setting,"comments" => $comments,"categories" => $categories ]
   );

  </script>
</html>   
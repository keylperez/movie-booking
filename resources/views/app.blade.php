<!DOCTYPE html>
<html>
  <head>
    @routes
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
    <script src="{{ mix('js/manifest.js') }}" defer></script>
    <script src="{{ mix('js/vendor.js') }}" defer></script>
    <script src="{{ mix('/js/app.js') }}" defer></script>
  </head>
  <body>
    
      @inertia
    
  </body>

</html>
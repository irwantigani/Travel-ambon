<html>
  <head>
    <title>Add a Map using HTML</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

    <link rel="stylesheet" type="text/css" href="./style.css" />
    <script type="module" src="./index.js"></script>
  </head>
  <body>
    <gmp-map
      center="37.4220656,-122.0840897"
      zoom="10"
      map-id="DEMO_MAP_ID"
      style="height: 400px"></gmp-map>
   
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15927.403710704895!2d128.2818200328452!3d-3.6215249266415888!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d6cece6e8bfa427%3A0x4f23bfbc3a9673f2!2sNatsepa%20Beach!5e0!3m2!1sen!2sid!4v1720277370086!5m2!1sen!2sid" width="1680" height="800" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
           
        
        <!-- 
      The `defer` attribute causes the callback to execute after the full HTML
      document has been parsed. For non-blocking uses, avoiding race conditions,
      and consistent behavior across browsers, consider loading using Promises.
      See https://developers.google.com/maps/documentation/javascript/load-maps-js-api
      for more information.
      -->
    <script
      src="https://www.google.com/maps/@-3.6765696,128.1916928,13z?authuser=0&entry=ttu"
      defer
    ></script>
    
  </body>
</html>
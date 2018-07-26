<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Daily Gym and Food Tracker | </title>
    <link rel="stylesheet" href="/css/app.css">
    <script src="https://cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>


  </head>
  <body>
    @include('inc.navbar')

    <div class="container">
      @if(Request::is('/'))
      @include('inc.showcase')
      @endif
      <div class="row">
          <div class="col-md-8 col-lg-8">
            @include('inc.messages')
            @yield('content')
          </div>
          <div class="col-md-4 col-lg-4">
            @if(!request::is('view'))
            @include('inc.sidebar')
            @endif
          </div>
      </div>
      <div class="push"></div>

    </div>
    <br />

      <footer id="footer">
        <p>&copy; Gym & Food Tracker 2018-2019</p>
      </footer>

  </body>
</html>

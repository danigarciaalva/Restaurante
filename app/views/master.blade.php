<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Restaurant</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	{{ HTML::style('css/bootstrap.min.css')}}
  <style>
      .list-group {
          height: 60%;
          overflow-y: auto;   
      }
  </style>
</head>

<body>
	 <div class="container">
      <div class="header">
        <ul class="nav nav-pills pull-right">
        	@yield('nav-bar-items')
        </ul>
        <h3 class="text-muted">Restaurante</h3>
      </div>
      <hr>
      @yield('body-content')
      <hr>
      <div class="footer">
        <p>&copy; Dragonfly Labs</p>
      </div>

    </div> <!-- /container -->
</body>
{{ HTML::script('js/jquery-2.0.3.min.js')}}
{{ HTML::script('js/bootstrap.min.js')}}
@yield('extra-scripts')
</html>


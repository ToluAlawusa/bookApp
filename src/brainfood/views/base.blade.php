<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="/styles/user_styles.css">
    <title>@yield('pagetitle')</title>
</head>
<body id="home">
  <!-- top bar starts here -->
    @include('topnav')
  <!-- main content starts here -->
  <div class="main">
    @yield('content')
  </div>
  <!-- footer starts here-->
  <div class="footer">
    <p class="copyright">&copy; copyright 2016</p>
  </div>
</body>
</html>

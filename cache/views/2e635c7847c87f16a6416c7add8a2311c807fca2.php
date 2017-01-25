<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="/styles/user_styles.css">
    <title><?php echo $__env->yieldContent('pagetitle'); ?></title>
</head>
<body id="home">
  <!-- top bar starts here -->
    <?php echo $__env->make('topnav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <!-- main content starts here -->
  <div class="main">
    <?php echo $__env->yieldContent('content'); ?>
  </div>
  <!-- footer starts here-->
  <div class="footer">
    <p class="copyright">&copy; copyright 2016</p>
  </div>
</body>
</html>

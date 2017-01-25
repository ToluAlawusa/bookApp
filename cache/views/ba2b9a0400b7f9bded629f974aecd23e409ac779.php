<?php $__env->startSection('browsertitle'); ?>userlogin <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

  <div class="login-form">
      <form class="def-modal-form" action="/userlogin" method="POST">
        
        <label for="login-form" class="header"><h3>Login</h3></label>

        <?php if(isset($msg)): ?> <span class="err"><?php echo $msg; ?></span> <?php endif; ?>

	      <?php if(isset($errors['email'])): ?> <span class="err"><?php echo $errors['email']; ?></span> <?php endif; ?>

        <input type="text" class="text-field email" name="email" placeholder="Email">
        
        <?php if(isset($msg)): ?> <span class="err"><?php echo $msg; ?></span> <?php endif; ?>

	      <?php if(isset($errors['pass'])): ?> <span class="err"><?php echo $errors['pass']; ?></span> <?php endif; ?>

        <input type="password" class="text-field password" name="pass" placeholder="Password">
        <!--clear the error and use it later just to show you how it works -->
        
        <input type="submit" class="def-button login" name="login" value="Login">
      </form>
    
  </div>

 <?php $__env->stopSection(); ?>

<?php echo $__env->make('base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
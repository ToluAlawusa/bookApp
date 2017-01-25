<?php $__env->startSection('browsertitle'); ?>userregistration <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="registration-form">
      <form class="def-modal-form" action="/userregistration" method="POST">
        <div class="cancel-icon close-form"></div>

        <label for="registration-from" class="header"><h3>User Registration</h3></label>

   		<?php if(isset($errors['fn'])): ?> <span class="err"><?php echo $errors['fn']; ?></span> <?php endif; ?>
        <input type="text" class="text-field first-name" name="fn" placeholder="Firstname">
        
        <?php if(isset($errors['ln'])): ?> <span class="err"><?php echo $errors['ln']; ?></span> <?php endif; ?>
        <input type="text" class="text-field last-name" name="ln" placeholder="Lastname">
        
        <?php if(isset($errors['em'])): ?> <span class="err"><?php echo $errors['em']; ?></span> <?php endif; ?>
        <input type="email" class="text-field email" name="em" placeholder="Email">
       
        <?php if(isset($errors['un'])): ?> <span class="err"><?php echo $errors['un']; ?></span> <?php endif; ?>
        <input type="text" class="text-field username" name="un" placeholder="Username">
        
        <?php if(isset($errors['pass'])): ?> <span class="err"><?php echo $errors['pass']; ?></span> <?php endif; ?>
        <input type="password" class="text-field password" name="pass" placeholder="Password">
        
        <?php if(isset($errors['cpass'])): ?> <span class="err"><?php echo $errors['cpass']; ?></span> <?php endif; ?>
        <input type="password" class="text-field confirm-password" name="cpass" placeholder="Confirm Password">
        
        <input type="submit" class="def-button" name="reg" value="Register">

        <p class="login-option"><a href="/userlogin"> Have an account already? Login</a></p>
      </form>
</div>



















<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('browsertitle'); ?>usercheckout <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


<div class="checkout-form">
  <form class="def-modal-form" action="/usercheckout/<?php echo $id; ?>/" method="POST">
    <div class="total-cost">
      <h3> TOTAL : $<?php echo $totalPrice; ?></h3>
    </div>
    <div class="cancel-icon close-form"></div>
    <label for="login-form" class="header"><h3>Checkout</h3></label>

    <?php if(isset($errors['phone'])): ?> <span class="err"><?php echo $errors['phone']; ?></span> <?php endif; ?>
    <input type="text" class="text-field phone" name="phone" placeholder="Phone Number">

    <?php if(isset($errors['add'])): ?> <span class="err"><?php echo $errors['add']; ?></span> <?php endif; ?>
    <input type="text" class="text-field address" name="add" placeholder="Address">

    <?php if(isset($errors['pcode'])): ?> <span class="err"><?php echo $errors['pcode']; ?></span> <?php endif; ?>
    <input type="text" class="text-field post-code" name="pcode" placeholder="Post Code">
    <input type="submit" class="def-button checkout" value="Checkout">
  </form>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
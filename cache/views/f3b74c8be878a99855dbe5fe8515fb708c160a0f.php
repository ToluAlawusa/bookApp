<?php $__env->startSection('browsertitle'); ?>usercart <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="main">
    <table class="cart-table">
      <thead>
        <tr>
          <th><h3>Item</h3></th>
          <th><h3>Price</h3></th>
          <th><h3>Quantity</h3></th>
          <th><h3>Total</h3></th>
          <th><h3>Update</h3></th>
          <th><h3>Remove</h3></th>
        </tr>
      </thead>
      <tbody>
       <?php $__currentLoopData = $cartlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cartlist): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tr>

          <td><a href="/userbookpreview/<?php echo $cartlist->product_id; ?>/"><div class="book-cover b1" style="background: url(<?php echo $cartlist->image; ?>) 
           no-repeat center; background-size: cover; width: 81px;
           height: 100px;"></div></a></td>
          <td><p class="book-price"><?php echo $cartlist->price; ?></p></td>
          <td><p class="quantity"><?php echo $cartlist->quantity; ?></p></td>
          <td><p class="total"><?php echo $cartlist->quantity * $cartlist->price; ?></p></td>
          <td>
            <form class="update" action="/userupdatecart/<?php echo $id; ?>/" method="POST">
            <input type="number" name="quant" class="text-field qty">
            <input type="hidden" value="<?php echo $cartlist->cart_id; ?>" name="hid">
            <input type="submit" name="cquan" class="def-button change-qty" value="Change Qty">
            </form>
          </td>
          <td>
            <form action="/userdeletecart/<?php echo $id; ?>/" method="POST">
            <input type="hidden" value="<?php echo $cartlist->cart_id; ?>" name="delhid">
            <a href="/deletecart/<?php echo $cartlist->product_id; ?>/"><button class="def-button remove-item">Remove Item</button></a>
            </form>
          </td>
             
        </tr>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
      </tbody>
    </table>
    <div class="cart-table-actions">
      <button class="def-button previous">previous</button>
      <button class="def-button next">next</button>
      <div class="index">
        <a href="#"><p>1</p></a>
        <a href="#"><p>2</p></a>
        <a href="#"><p>3</p></a>
      </div>
      <a href="/usercheckout/<?php echo $_SESSION['user_id']; ?>/"><button class="def-button checkout">Checkout</button></a>
    </div>
  </div>

  <?php $__env->stopSection(); ?>

<?php echo $__env->make('base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
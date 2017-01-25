<?php $__env->startSection('browsertitle'); ?>userbookpreview <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    
    <?php if(isset($errors['quan'])): ?> <span class="err"><?php echo $errors['quan']; ?></span> <?php endif; ?>
    <div class="book-display">
     <div class="display-book" style="background: url(<?php echo $prodid->image; ?>) 
       no-repeat center; background-size: cover; width: 168px;
       height: 218px;"></div>
        <div class="info">

         <h2 class="book-title"><?php echo $prodid->product_name; ?></h2>
         <h3 class="book-author"><?php echo $prodid->author_name; ?></h3>
         <h3 class="book-price"><?php echo $prodid->price; ?></h3>

         <form action="/usercart/<?php echo $id; ?>/" method="POST">
         <label for="book-amout">Quantity</label>
         <input type="number" name="quan" class="book-amount text-field">
         <input type="submit" class="def-button add-to-cart" name="addto" value="Add to Cart">
         </form>

        </div>   
    </div>
    <div class="book-reviews">
        <h3 class="header">Reviews</h3>
        <?php $__currentLoopData = $review; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
          <ul class="review-list">
             <li class="review">
               <div class="avatar-def user-image">
               <h4 class="user-init"><?php echo substr($review->firstname, 0, 1).substr($review->lastname, 0, 1); ?></h4>
               </div>
               <div class="info">
               <h4 class="username"><?php echo $review->firstname; ?> - <?php echo $review->lastname; ?></h4>
               <p class="comment"><?php echo $review->comments; ?></p>
               </div>
             </li>                
          </ul>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
     
      <div class="add-comment">
        <h3 class="header">Add your comment</h3>
        <form class="comment" action="/userbookpreview/<?php echo $id; ?>/" method="POST">
          <textarea class="text-field" name="comm" placeholder="write something"></textarea>
          <input type="submit" class="def-button post-comment" name="upl" value="Upload comment"/>
        </form>
      </div>
    </div>  
<?php $__env->stopSection(); ?>

    

<?php echo $__env->make('base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
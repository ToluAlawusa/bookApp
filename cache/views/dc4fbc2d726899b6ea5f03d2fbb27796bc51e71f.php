<?php $__env->startSection('browsertitle'); ?>usercatalogue <?php $__env->stopSection(); ?>

      
    <div class="side-bar">
      <div class="categories">
        <h3 class="header">Categories</h3>
          <ul class="category-list">
          <?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
          <a href="/usercatalogue/<?php echo $cat->category_id; ?>/">
          <li class="category"><?php echo $cat->category_name; ?></li></a>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
          </ul>
      </div>
    </div>

    <?php $__env->startSection('content'); ?>

    <div class="main-book-list horizontal-book-list">
      <ul class="book-list">
       <?php $__currentLoopData = $prod; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prod): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
       <a href="/userbookpreview/<?php echo $prod->product_id; ?>/">
         <li class="book">
           <div class="book-cover" style="background: url(<?php echo $prod->image; ?>) 
           no-repeat center; background-size: cover; width: 168px;
           height: 218px;"></div>
           <div class="book-price"><p>$<?php echo $prod->price; ?></p></div>
         </li></a>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>                
      </ul>
      <div class="actions">
        <button class="def-button previous">Previous</button>
        <button class="def-button next">Next</button>
      </div>
    </div>

    <div class="recently-viewed-books horizontal-book-list">
      <h3 class="header">Recently Viewed</h3>
      <ul class="book-list">
        <div class="scroll-back"></div>
        <div class="scroll-front"></div>
        <li class="book">
          <div class="book-cover"></div>
          <div class="book-price"><p>$250</p></div>
        </li>
        <li class="book">
          <div class="book-cover"></div>
          <div class="book-price"><p>$50</p></div>
        </li>
        <li class="book">
          <div class="book-cover"></div>
          <div class="book-price"><p>$125</p></div>
        </li>
        <li class="book">
          <div class="book-cover"></div>
          <div class="book-price"><p>$90</p></div>
        </li>
      </ul>
    </div>
<?php $__env->stopSection(); ?>

 

    

<?php echo $__env->make('base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('browsertitle'); ?>userhomepage <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="book-display">
      <?php $__currentLoopData = $splash; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $splash): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <a href="/userbookpreview/<?php echo $splash->product_id; ?>/">
          <div class="display-book" style="background: url(<?php echo $splash->image; ?>) 
          no-repeat center; background-size: cover; width: 190px;
          height: 270px;"></div>
      <div class="info">
        <h2 class="book-title"><?php echo $splash->product_name; ?></h2>
          <h3 class="book-author"><?php echo $splash->author_name; ?></h3>
            <h3 class="book-price">$<?php echo $splash->price; ?></h3></a>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>          
    </div>                 
    <div class="trending-books horizontal-book-list">
      <h3 class="header">Trending</h3>
      <ul class="book-list">
        <?php $__currentLoopData = $trending; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trending): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
          <li class="book">          
            <a href="/userbookpreview/<?php echo $trending->product_id; ?>/">
            <div class="book-cover" style="background: url(<?php echo $trending->image; ?>) 
            no-repeat center; background-size: cover; width: 168px;
            height: 218px;"></div>
            <div class="book-price"><p>$<?php echo $trending->price; ?></p></div>
            </a>
          </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>                 
      </ul>
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
<?php if(Session::has('message')): ?>
      <div class="alert alert-info"><?php echo e(Session::get('message')); ?></div>
	<?php endif; ?>
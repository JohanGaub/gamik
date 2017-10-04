<?php $__env->startSection('content'); ?>


    <h3 class="text-center search-title">Search games</h3>
<div class="row justify-content-md-center search-bar">
<input class="form-control col-sm-2" type="text" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</div>
    <h3 class="text-center">Last games reviewed</h3>










<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('admin.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
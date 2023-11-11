<?php $__env->startSection('title'); ?>
    Employee DashBoard
<?php $__env->stopSection(); ?>


<body>
    
    
      <?php $__env->startSection('content'); ?>
      <div class="container-fluid">
        <h1> Welcome <?php echo e(Auth::user()->name); ?></h1>
      </div>
              
      <?php $__env->stopSection(); ?>
  
    
</body>
</html>

<?php echo $__env->make('master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\crud\example-app\resources\views/dashboard.blade.php ENDPATH**/ ?>
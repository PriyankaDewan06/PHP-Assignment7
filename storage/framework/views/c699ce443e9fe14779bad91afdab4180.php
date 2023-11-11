
<?php $__env->startSection('title'); ?>
    User List
<?php $__env->stopSection(); ?>
<body>
    <?php $__env->startSection('content'); ?>
    <div class="row">
        
        <div class="col-sm-6  offset-3 p-3  ">
            <div class="card-body">
                           
                <table class="table table-stripped">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>

                       </tr>
                       <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($user->id); ?></td>
                            <td><?php echo e($user->name); ?></td>
                            <td><?php echo e($user->email); ?></td>
                            <td><?php echo e($user->role); ?></td>
                          
                            <td>
                                <a href="<?php echo e(route('userlist.edit',$user->id)); ?>" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                <a href="<?php echo e(route('userlist.destroy',$user->id)); ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                           </td>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tr>
                </table>
              </div>
        </div>
        
      </div>

              
      
  
      <?php $__env->stopSection(); ?>  
</html>

<?php echo $__env->make('master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\crud\example-app\resources\views/userlist/view.blade.php ENDPATH**/ ?>
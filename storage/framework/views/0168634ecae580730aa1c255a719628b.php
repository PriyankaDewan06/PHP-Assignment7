
<?php $__env->startSection('title'); ?>
    Edit Post
<?php $__env->stopSection(); ?>

<body>
    <?php $__env->startSection('content'); ?>
    <div class="row">
        
        <div class="col-sm-6 offset-3 p-3  ">
            <div class="container-fluid">
                <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Update User</h1>

                <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
            </div>
            <div class="col-xl-12 col-lg-10">
                <div class="card-body">
               
                    <form action="<?php echo e(route('userlist.update', $users->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="inputState">Name</label>
                            <input type="text" class="form-control" name="name" value="<?php echo e($users->name); ?>">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" value="<?php echo e($users->email); ?>">
                        </div>
                        
                        <div class="form-group">
                            <label for="inputState">Role</label>
                            <select id="inputState" class="form-control" name="role">
                                    <option <?php echo e($users->role == '1' ? 'selected' : ''); ?> value="1">Admin</option>
                                    <option <?php echo e($users->role == '2' ? 'selected' : ''); ?> value="2">Manager</option>
                                    <option <?php echo e($users->role == '3' ? 'selected' : ''); ?> value="3">Employee</option>
                              
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" value="<?php echo e($users->password); ?>">
                        </div>
                        
                       
                        <button type="submmit" class="btn btn-primary">Update</button>
                    </form>
                    
                  </div>
            </div>
        </div>
        </div>
        <?php $__env->stopSection(); ?>
  
    
    </body>
    </html>

<?php echo $__env->make('master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\crud\example-app\resources\views/userlist/edit.blade.php ENDPATH**/ ?>
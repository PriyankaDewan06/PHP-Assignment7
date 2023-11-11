
<?php $__env->startSection('title'); ?>
  All Posts
<?php $__env->stopSection(); ?>
<body>
  <?php $__env->startSection('content'); ?>
<div class="main-content mt-5">
    <div class="card">
        <div class="card-header">
          <div class="row">

            <div class="col-md-6">
              <h4>All Posts</h4>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
               <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create', \App\Models\Post::class)): ?> 
              <a class="btn btn-success mx-1" href="<?php echo e(route('posts.create')); ?>">Create</a>
              <a class="btn btn-warning mx-1" href="<?php echo e(route('posts.trashed')); ?>">Trashed</a>
              <?php endif; ?> 
            </div>

          </div>


        </div>
    
        <div class="card-body">
            <table class="table table-striped table-bordered border-dark">
                <thead style="background: #f2f2f2">
                  <tr>
                    <th scope="col">#</th>
                   
                    <th scope="col" style="width: 20%">Title</th>
                    <th scope="col" style="width: 30%">Description</th>
                    <th scope="col" style="width: 10%">Category</th>
                    <th scope="col" style="width: 10%">Publish Date</th>
                    <th scope="col" style="width: 20%">Action</th>


                  </tr>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>          
                  <tr>
                    <th scope="row"><?php echo e($post->id); ?></th>
                   
                    <td><?php echo e($post->title); ?></td>
                    <td><?php echo e($post->description); ?></td>
                    <td><?php echo e($post->category->name); ?></td>
                    <td><?php echo e(date('d-m-Y', strtotime($post->created_at))); ?></td>
                    <td>
                        <div class="d-flex">
                          

                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $post)): ?>
                          
                        <a class="btn-sm btn-primary btn mx-2" href="<?php echo e(route('posts.edit', $post->id)); ?>">Edit</a> 
                        <?php endif; ?>
                        
                          <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete', $post)): ?>
                            
                          <form action="<?php echo e(route('posts.destroy', $post->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="btn-sm btn-danger btn">Delete</button>
                          </form> 
                          <?php endif; ?>

                        </div>

                    </td>

                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  
                </tbody>

              </table>
              <?php echo e($posts->links()); ?>

              
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
<?php echo $__env->make('master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\crud\example-app\resources\views/index.blade.php ENDPATH**/ ?>
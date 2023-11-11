
<?php $__env->startSection('title'); ?>
    Edit Post
<?php $__env->stopSection(); ?>


<body>
    
    
      <?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
      <div class="row">

        <div class="col-md-6">
          <h4>Edit Post</h4>
        </div>
        <div class="col-md-6 d-flex justify-content-end">
          <a class="btn btn-success mx-1" href="<?php echo e(route('posts.index')); ?>">Back</a>
        </div>

      </div>


    </div>

    <div class="card-body">
        <form action="<?php echo e(route('posts.update', $post->id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-group">
               
            <div class="form-group">
                <label for="" class="form-label">Title</label>
                <input name="title" type="text" class="form-control" value="<?php echo e($post->title); ?>">
            </div>
            <div class="form-group">
                <label for="" class="form-label">Category</label>
                <select name="category_id" id="" class="form-control">
                    <option value="">Select</option>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option <?php echo e($category->id == $post->category_id ? 'selected' : ''); ?> value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label for="" class="form-label">Description</label>
                <textarea name="description" id="" cols="30" rows="10" class="form-control"><?php echo e($post->description); ?></textarea>
            </div>

            <div class="form-group mt-3">
                <button class="btn btn-primary">Submit</button>
            </div>


        </form>
          
    </div>
</div>
<?php $__env->stopSection(); ?>
  
    
</body>
</html>
<?php echo $__env->make('master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\crud\example-app\resources\views/edit.blade.php ENDPATH**/ ?>
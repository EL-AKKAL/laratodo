

<?php $__env->startSection('body'); ?>
<form class="input_text w-full flex items-center justify-center flex-col my-6" action="/todo/<?php echo e($task->id); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <input type="text" name="title" value="<?php echo e($task->title); ?>" placeholder="edit title" class="text-md w-full my-4 mb-2 outline-none py-3 px-2 border border-solid border-blue-400 rounded-lg">
    <textarea name="body" id="" placeholder="edit description" cols="30" rows="7" class="text-md w-full my-4 mb-2 outline-none py-3 px-2 border border-solid border-blue-400 rounded-lg"><?php echo e($task->body); ?></textarea>
    <input type="date" name="dueDate" value="<?php echo e($task->dueDate); ?>" min="2018-01-01" max="2099-01-01" class="my-3 text-gray-500 flex items-center justify-center px-2 border border-solid border-blue-400 rounded-lg">
    <div class="flex justify-between items-center">
        <input type="submit" value="Save changes" class="mx-2 add_task text-sm transition-all hover:bg-blue-700 cursor-pointer text-white bg-blue-400 rounded-lg py-2 px-5 font-bold">
        <a href="/todo" class="add_task text-sm transition-all mx-2 hover:bg-red-700 cursor-pointer text-white bg-red-400 rounded-lg py-2 px-5 font-bold">Cancel</a>    
    </div>
    
</form>   
<?php echo $__env->make('includes.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laratodo\laratodo\resources\views/edit.blade.php ENDPATH**/ ?>
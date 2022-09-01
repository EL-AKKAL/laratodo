

<?php $__env->startSection('body'); ?>
    <div class="w-full flex text-sm flex-col text-left justify-center ">
        <div class="w-full flex text-sm items-center justify-between ">
            <p class="font-semibold py-2 px-3 bg-red-100 w-1/4 rounded-md text-lime-700 my-2">task number : <?php echo e($task->id); ?></p>
            <p class="font-semibold py-2 px-3 bg-red-100 w-1/4 rounded-md text-lime-700 my-2">Due : <?php echo e($task->dueDate); ?></p>
        </div>
        <h2 class="text-2xl font-bold text-gray-800 py-2 ml-4"><?php echo e($task->title); ?></h2>
        <p class="text-semibold font-semibold text-gray-700 mb-10 ml-4"><?php echo e($task->body); ?></p>
        <div class="flex justify-center items-center">

            <form class="flex items-center justify-center text-sm transition-all mx-2 hover:bg-red-700 cursor-pointer text-white bg-red-400 rounded-lg py-2 px-5 font-bold" action="/todo/<?php echo e($task->id); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" onclick="return confirm('do you really want to delete this item?')" >Delete</button>
            </form> 
            <a href="/todo/<?php echo e($task->id); ?>/edit" class="text-sm transition-all mx-2 hover:bg-blue-700 cursor-pointer text-white bg-blue-400 rounded-lg py-2 px-5 font-bold">Edit</a>
            <a href="/todo" class="text-sm transition-all mx-2 hover:bg-yellow-700 cursor-pointer text-white bg-yellow-400 rounded-lg py-2 px-5 font-bold">Cancel</a>    
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laratodo\laratodo\resources\views/show.blade.php ENDPATH**/ ?>
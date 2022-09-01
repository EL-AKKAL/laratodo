

<?php $__env->startSection('body'); ?>
<div class="input_text w-full flex items-center justify-center">
    <a href="todo/create" class="add_task text-sm transition-all hover:bg-blue-700 cursor-pointer text-white bg-blue-400 rounded-lg py-2 px-5 font-bold">
        Add task
    </a> 
</div>    
<div class="flex items-center justify-center">
    
<ul class="my-4 w-10/12">
    <?php $__empty_1 = true; $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <li class="mt-4" id="<?php echo e($task->id); ?>">
            <div class="flex gap-2">
                <div class="w-9/12 h-12 bg-[#e0ebff] rounded-[7px] flex justify-start items-center px-3">
                    <span id="check1" class=" w-7 h-7 bg-white rounded-full border border-white transition-all cursor-pointer hover:border-[#36d344] flex justify-center items-center" onclick="checked(1)"><i class="text-white fa fa-check"></i></span>
                    <a href="/todo/<?php echo e($task->id); ?>"><strike id="strike1" class="strike_none text-sm ml-4 text-[#5b7a9d] font-semibold"><?php echo e($task->title); ?></strike></a>
                </div>
                <span class="w-1/4 h-12 bg-[#e0ebff] rounded-[7px] flex justify-center text-sm text-[#5b7a9d] font-semibold items-center "><?php echo e($task->dueDate); ?></span>
            </div>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <li>
            <div class="w-full mb-2 rounded-md py-2 flex items-center justify-center bg-gray-300  flex-col">
                <p class="text-gray-600">No tasks added yet.</p>
            </div>
        </li>        
    <?php endif; ?>
</ul>
<ul class="w-2/12 ml-2">
    <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="mt-4 flex" id="<?php echo e($task->id); ?>">
            <div class="flex gap-2">
                <div class=" h-12 bg-[#e0ebff] rounded-[7px] flex justify-start items-center px-3">
                    <a href="/todo/<?php echo e($task->id); ?>/edit"><i class="fa-solid fa-pen-to-square text-slate-500 hover:text-blue-400 cursor-pointer"></i></a>
                </div>
            </div>

            <form class="input_text w-full flex items-center justify-center flex-col" action="/todo/<?php echo e($task->id); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <div class="flex gap-2 mx-1">
                    <div class=" h-12 bg-[#e0ebff] rounded-[7px] flex justify-start items-center px-3">
                        <button type="submit" onclick="return confirm('do you really want to delete this item?')" ><i class="fa-solid fa-trash-can text-slate-500 hover:text-red-400 cursor-pointer"></i></button>
                    </div>
                </div>
            </form>  
           
        </li>  
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
</div>
<?php echo $__env->make('includes.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laratodo\laratodo\resources\views/home.blade.php ENDPATH**/ ?>
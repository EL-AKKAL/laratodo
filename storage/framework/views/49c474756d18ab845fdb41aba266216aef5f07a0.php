
<?php if(session()->has('message')): ?>
    <div class="w-full mb-2 rounded-md py-2 flex items-center justify-center bg-green-300  flex-col">
        <p class="text-green-600"><?php echo e(session()->get('message')); ?></p>
    </div>
<?php endif; ?><?php /**PATH E:\laratodo\laratodo\resources\views/includes/messages.blade.php ENDPATH**/ ?>
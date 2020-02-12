<!-- TODO Etendre le layout "app" -->
;
<!-- TODO Dans la section "content", ajouter un container, et dans ce container faire une liste des users et de leur nombre de contacts-->


<?php $__env->startSection('content'); ?>
    <div class="container">

        <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <p>L'utilisateur <?php echo e($user->name); ?> à <?php echo e($user->contacts->count()); ?> contact</p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <p>Il n'y a pas encore d'utilisateur</p>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\renduLaravel\resources\views/home.blade.php ENDPATH**/ ?>
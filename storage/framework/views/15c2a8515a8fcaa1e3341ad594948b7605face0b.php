<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>المقالات </title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/artical.css')); ?>">
</head>
<body>
    <div class="container">
        <h1 class="title">مقالاتنا العلمية</h1>

        <?php if($articals->count() > 0): ?>
            <div class="services">
                <?php $__currentLoopData = $articals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $artical): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="service-card">
                        <p class="service-tittle"><?php echo e($artical->tittle); ?></p>
                        <p class="service-disc"> <?php echo e($artical->dics); ?> </p>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php else: ?>
            <p class="no-services">لا توجد مقالات متاحة حاليًا.</p>
        <?php endif; ?>
    </div>
</body>
</html>



<?php /**PATH C:\Users\emad.j\Desktop\prog\cmder\clinc\resources\views/articals.blade.php ENDPATH**/ ?>
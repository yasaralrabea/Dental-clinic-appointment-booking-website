<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>خدمات العيادة</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/serves.css')); ?>">
</head>
<body>
    <div class="container">
        <h1 class="title">خدمات العيادة</h1>

        <?php if($serves->count() > 0): ?>
            <div class="services">
                <?php $__currentLoopData = $serves; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $serve): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="service-card">
                        <h2 class="service-title"><?php echo e($serve->name); ?></h2>
                        <p class="service-description"><?php echo e($serve->tittle); ?></p>
                        <p class="service-price"> <?php echo e($serve->dics); ?> </p>
                        <p class="service-description"><?php echo e($serve->price); ?></p>

                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php else: ?>
            <p class="no-services">لا توجد خدمات متاحة حاليًا.</p>
        <?php endif; ?>
    </div>
</body>
</html>
<?php /**PATH C:\Users\emad.j\Desktop\prog\cmder\clinc\resources\views/serves.blade.php ENDPATH**/ ?>
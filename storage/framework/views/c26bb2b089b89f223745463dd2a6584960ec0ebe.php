<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عرض التقييمات</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/rate.css')); ?>">
</head>
<body>
    <div class="container">
        <h1>التقييمات</h1>
        
        <!-- فورم إضافة التقييم -->
        <form action="<?php echo e(route('rates.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <input type="text" name="name" placeholder="اسمك" class="form-input" required>
            </div>
            <div class="form-group">
                <textarea name="comment" placeholder="اكتب تقييمك" class="form-input" required></textarea>
            </div>
            <button type="submit" class="submit-btn">إضافة التقييم</button>
        </form>
        
        <?php if($rates->isEmpty()): ?>
            <p class="no-rates">لا توجد تقييمات حالياً.</p>
        <?php else: ?>
            <div class="rates-grid">
                <?php $__currentLoopData = $rates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="rate-card">
                        <h3 class="user-name"><?php echo e($rate->name); ?></h3>
                        <p class="comment"><?php echo e($rate->comment); ?></p>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
<?php /**PATH C:\Users\emad.j\Desktop\prog\cmder\clinc\resources\views/rates.blade.php ENDPATH**/ ?>
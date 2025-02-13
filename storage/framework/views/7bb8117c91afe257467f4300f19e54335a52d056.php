<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>المقالات</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/add_artical.css')); ?>">
</head>
<body>
    <div class="container">
        <h1 class="title">إضافة مقالة</h1>
        
        <!-- فورم إضافة المقالة -->
        <form action="<?php echo e(route('artical.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <input type="text" name="tittle" placeholder="عنوان المقالة" class="form-input" required>
            <textarea name="dics" placeholder="نص المقالة" class="form-input" required></textarea>
            <button type="submit" class="submit-btn">إضافة المقالة</button>
        </form>

        <h2>المقالات المنشورة</h2>

        <?php if($articals->count() > 0): ?>
            <div class="services">
                <?php $__currentLoopData = $articals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $artical): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="service-card">
                        <p class="service-tittle"><?php echo e($artical->tittle); ?></p>
                        <p class="service-disc"> <?php echo e($artical->dics); ?> </p>
                        
                        <!-- زر الحذف -->
                        <form action="<?php echo e(route('artical.destroy', $artical->id)); ?>" method="POST" class="delete-form">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="delete-btn">حذف</button>
                        </form>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php else: ?>
            <p class="no-services">لا توجد مقالات متاحة حاليًا.</p>
        <?php endif; ?>
    </div>
</body>
</html>
<?php /**PATH C:\Users\emad.j\Desktop\prog\cmder\clinc\resources\views/add_artical.blade.php ENDPATH**/ ?>
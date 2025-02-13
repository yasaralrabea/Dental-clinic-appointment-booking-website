<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إدارة المواعيد</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/shows.css')); ?>">
    <!-- إضافة رابط Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container">
        <h1>إدارة مواعيد الطبيب</h1>

        <!-- عرض رسالة النجاح -->
        <?php if(session('success')): ?>
            <div class="alert-success">
                <i class="fas fa-check-circle"></i> تم الإلغاء 
            </div>
        <?php endif; ?>

        <!-- جدول المواعيد -->
        <table class="appointments-table">
            <thead>
                <tr>
                    <th>التاريخ</th>
                    <th>الاسم</th>
                    <th>الحالة</th>
                    <th>الوقت</th>
                    <th>اجراء</th>

                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($appointment->date); ?></td>
                        <td><?php echo e($appointment->name); ?></td>
                        <td><?php echo e($appointment->medical_condition); ?></td>
                        <td><?php echo e($appointment->time); ?></td>

                        <!-- إضافة زر إلغاء و تم الموعد -->
                        <td>
                            <!-- نموذج حذف الموعد -->
                            <form action="<?php echo e(route('apps.destroy', $appointment->id)); ?>" method="POST" style="display:inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="delete-button">إلغاء</button>
                            </form>
                            
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</body>
</html>
<?php /**PATH C:\Users\emad.j\Desktop\prog\cmder\clinc\resources\views/shows.blade.php ENDPATH**/ ?>
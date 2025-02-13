<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إدارة المواعيد</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/doctorapps.css')); ?>">
</head>
<body>
    <div class="container">
        <h1>إدارة مواعيد الطبيب</h1>

        <!-- عرض رسالة النجاح -->
        <?php if(session('success')): ?>
            <div class="alert-success"><?php echo e(session('success')); ?></div>
        <?php endif; ?>

        <!-- نموذج إضافة موعد جديد -->
        <form action="<?php echo e(route('appointments.store')); ?>" method="POST" class="add-appointment-form">
            <?php echo csrf_field(); ?>
            <label for="appointment_date">تاريخ الموعد:</label>
            <input type="date" name="appointment_date" id="appointment_date" required>
            <label for="appointment_time">تاريخ الموعد:</label>
            <input type="time" name="appointment_time" id="appointment_time" required>

            <button type="submit" class="add-button">إضافة موعد</button>
        </form>

        <!-- جدول المواعيد -->
        <table class="appointments-table">
            <thead>
                <tr>
                    <th>التاريخ</th>
                    <th>الوقت</th>
                    <th>الإجراءات</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($appointment->date); ?></td>
                        <td><?php echo e($appointment->time); ?></td>

                        <td>
                            <!-- نموذج حذف الموعد -->
                            <form action="<?php echo e(route('appointments.destroy', $appointment->id)); ?>" method="POST" style="display:inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="delete-button">حذف</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</body>
</html>
<?php /**PATH C:\Users\emad.j\Desktop\prog\cmder\clinc\resources\views/doctorapps.blade.php ENDPATH**/ ?>
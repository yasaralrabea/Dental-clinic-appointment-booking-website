<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مواعيدي القادمة</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/my.css')); ?>">
</head>
<body>
    <div class="container">
        <h1>مواعيدي القادمة</h1>

        <table class="appointments-table">
            <thead>
                <tr>
                    <th>التاريخ</th>
                    <th>الوقت</th>
                    <th>سعر الكشف المبدئي</th>
                    <th>الإجراء</th> <!-- العمود الجديد -->
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($user->date); ?></td>
                        <td><?php echo e($user->time); ?></td>
                        <td><?php echo e($user->price); ?></td>
                        <td>
                            <!-- زر "ادفع الآن" -->
                            <form action="<?php echo e(route('payment', ['id' => $user->id])); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <button type="submit">ادفع الآن</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</body>
</html>
<?php /**PATH C:\Users\emad.j\Desktop\prog\cmder\clinc\resources\views/my.blade.php ENDPATH**/ ?>
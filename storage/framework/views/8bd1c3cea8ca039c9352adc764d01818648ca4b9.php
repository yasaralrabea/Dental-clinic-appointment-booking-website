<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>أطباء العيادة</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/doctor.css')); ?>">
</head>
<body>
    <div class="container">
        <h1>أطباء العيادة</h1>
        <div class="doctors-list">
            <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="doctor-card">
                    <h3><?php echo e($doctor->name); ?></h3>
                    <p>التخصص: <?php echo e($doctor->specialty); ?></p>
                    <p>الهاتف: <a href="tel:<?php echo e($doctor->phone); ?>"><?php echo e($doctor->phone); ?></a></p>
                    <a href="mailto:<?php echo e($doctor->email); ?>" class="contact-btn">تواصل مع الطبيب</a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\Users\emad.j\Desktop\prog\cmder\clinc\resources\views/doctors.blade.php ENDPATH**/ ?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>أطباء العيادة</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/serve_cont.css')); ?>">
</head>
<body>
    <div class="container">
        <h1 class="title">أطباء العيادة</h1>

        <?php if($doctors->count() > 0): ?>
            <div class="services">
                <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="service-card">
                        <h2 class="service-title"><?php echo e($doctor->name); ?></h2>
                        <form action="<?php echo e(route('doctor.destroy', $doctor->id)); ?>" method="POST" class="delete-form">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="delete-button">حذف</button>
                        </form>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php else: ?>
            <p class="no-services">لا يوجد أطباء </p>
        <?php endif; ?>

        <!-- فورم إضافة خدمة جديدة -->
        <div class="add-service-form">
            <h2>إضافة خدمة جديدة</h2>
            <form action="<?php echo e(route('doctor.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
               
                <div class="form-group">
                    <label for="name">اسم الطبيب </label>
                    <input type="text" id="name" name="name" required>
                </div>
           
                  
                <div class="form-group">
                    <label for="cv">سيرة </label>
                    <input type="text" id="cv" name="cv" required>
                </div>

                   
                <div class="form-group">
                    <label for="phone">رقم الهاتف </label>
                    <input type="text" id="phone" name="phone" required>
                </div>
                       
              
               
                <button type="submit" class="submit-button">إضافة</button>
            </form>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\Users\emad.j\Desktop\prog\cmder\clinc\resources\views/doctor_cont.blade.php ENDPATH**/ ?>
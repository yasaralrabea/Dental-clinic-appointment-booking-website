<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عرض الأسئلة</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/show_Q.css')); ?>"> 
</head>
<body>

    <div class="container">
        <h2>الأسئلة المطروحة</h2>

        <?php $__currentLoopData = $quistions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="question-box">
                <h3><?php echo e($question->subject); ?></h3>
                <p><strong>السؤال:</strong> <?php echo e($question->message); ?></p>
                <p><strong>السائل:</strong> <?php echo e($question->name); ?></p>

                <!-- نموذج الرد -->
                <form action="<?php echo e(route('answer.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="question_id" value="<?php echo e($question->id); ?>">
                    
                    <label for="doctor_name">اسم الطبيب:</label>
                    <input type="text" name="doctor_name" required>
                    
                    <label for="answer">الرد:</label>
                    <textarea name="answer" rows="3" required></textarea>

                    <button type="submit">إرسال الرد</button>
                </form>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>

</body>
</html>
<?php /**PATH C:\Users\emad.j\Desktop\prog\cmder\clinc\resources\views/show_Q.blade.php ENDPATH**/ ?>
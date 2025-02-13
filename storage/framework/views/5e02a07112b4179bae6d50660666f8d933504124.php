<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحة الدخول</title>
    <!-- ربط ملف CSS باستخدام asset() -->
    <link rel="stylesheet" href="<?php echo e(asset('css/login.css')); ?>">
</head>
<body>
    <div class="form-container">
        <form action="/login_check" method="POST">
            <?php echo csrf_field(); ?>
            <h2>أدخل كلمة المرور للوصول إلى لوحة التحكم:</h2>
            <input type="password" id="password" name="password" required placeholder="كلمة المرور">
            <button type="submit">دخول</button>
        </form>
        <!-- زر الرجوع للقائمة الرئيسية -->
        <a href="/" class="back-button">الرجوع إلى الصفحة الرئيسية</a>
    </div>
</body>
</html>
<?php /**PATH C:\Users\emad.j\Desktop\prog\cmder\clinc\resources\views/login.blade.php ENDPATH**/ ?>
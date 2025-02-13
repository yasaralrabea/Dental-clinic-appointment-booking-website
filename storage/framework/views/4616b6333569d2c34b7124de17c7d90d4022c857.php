<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yasar Clinic - حجز مواعيد</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/home.css')); ?>">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>لوحة التحكم بالموقع - Yasar Clinic</h1>
            <!-- إضافة زر تسجيل الخروج -->
            <form action="<?php echo e(route('logout')); ?>" method="POST" style="display: inline;">
    <?php echo csrf_field(); ?>
    <button type="submit" class="header-button" id="logout-button">تسجيل الخروج</button>
</form>

        </div>

        <div class="main-content">
            <div class="button-container">
                <a href="/controll" class="button" id="new-appointment"> التحكم بالمواعيد </a>
                <a href="/patient_appointments" class="button" id="our-doctors">حجوزات المرضى القادمة</a>
                <a href="/serves_controll" class="button" id="new-appointment"> التحكم بالخدمات </a>
                <a href="/show_Q" class="button" id="new-appointment"> الأسئلة الواردة  </a>
                <a href="/add_artical_view" class="button" id="new-appointment"> نشر مقالات  </a>
                <a href="/doctor_controll" class="button" id="new-appointment"> التحكم بالأطباء   </a>
                <a href="/update_pass" class="button" id="new-appointment"> تحديث كلمة السر   </a>

            </div>
        </div>

        <div class="footer">
            <div class="footer-item">
                <h3>تواصل معنا</h3>
                <p>هاتف: +123 456 789</p>
                <p>البريد الإلكتروني: info@yasarclinic.com</p>
            </div>
            <div class="footer-item">
                <h3>نبذة عنا</h3>
                <p>Yasar Clinic تقدم خدمات طبية متميزة وبأحدث التقنيات الطبية.</p>
            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\Users\emad.j\Desktop\prog\cmder\clinc\resources\views/admin_home.blade.php ENDPATH**/ ?>
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
    <!-- رأس الصفحة -->
    <div class="header">
        <div class="header-content">
            <div class="header-buttons">
            <h1>Yasar Clinic</h1>
            </div>
        </div>
    </div>

    <!-- محتوى الصفحة الرئيسي -->
    <div class="container">
        <div class="main-content">
            <h1>عيادتك المفضلة  </h1>

            <!-- مربعات الحجز -->
            <div class="button-container">
                <a href="/new_appointment" class="button" id="new-appointment">حجز موعد جديد</a>
                <a href="/my_appointments" class="button" id="my-appointments">مواعيدي</a>
                <a href="/doctors" class="button" id="our-doctors">أطبائنا</a>
            </div>

            <!-- خيارات إضافية -->
            <div class="extra-options">
                <a href="/serves" class="extra-option">
                    خدماتنا
                    <span class="arrow">➔</span>
                </a>
                <a href="/rates" class="extra-option">
                    تقييمات
                    <span class="arrow">➔</span>
                </a>
                <a href="/articals" class="extra-option">
                    مقالات
                    <span class="arrow">➔</span>
                </a>
                <a href="/send" class="extra-option">
                    اسأل طبيب
                    <span class="arrow">➔</span>
                </a>
            </div>

            <!-- سيرة العيادة -->
            <div class="clinic-bio">
                <h2>عن عيادتنا</h2>
                <p>عيادة ياسر هي واحدة من العيادات الرائدة في تقديم الرعاية الصحية بأعلى معايير الجودة. نحن نقدم خدمات طبية متكاملة باستخدام أحدث التقنيات الطبية.</p>
                <p><strong>أوقات العمل</strong></p>
<p><strong>يوميا عدا الجمعة</strong></p>
<p><strong>9:30 - 4:30</strong></p>



            </div>
        </div>

        <!-- تذييل الصفحة -->
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
            <div class="footer-item">
                <h3> رؤيتنا</h3>
                <p>تجربة ممتعة وصحية للمريص</p>
                <p>الخيار الأول للمريض دائما</p>
            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\Users\emad.j\Desktop\prog\cmder\clinc\resources\views/home.blade.php ENDPATH**/ ?>
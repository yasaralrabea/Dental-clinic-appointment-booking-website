<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>حجز موعد جديد</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/new_appointment.css')); ?>">
</head>
<body>

    <div class="container">
        <div class="header">
            <h1>حجز موعد جديد</h1>
        </div>

        <div class="main-content">
            <!-- نموذج حجز الموعد -->
            <form action="<?php echo e(route('new.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="name">الاسم الكامل:</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="gender">الجنس:</label>
                    <select id="gender" name="gender" required>
                        <option value="ذكر">ذكر</option>
                        <option value="أنثى">أنثى</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="age">العمر:</label>
                    <input type="number" id="age" name="age" required>
                </div>

                <div class="form-group">
                    <label for="n_id">الرقم الوطني :</label>
                    <input type="number" id="n_id" name="n_id" required>
                </div>

                <div class="form-group">
                    <label for="medical_condition">الحالة المرضية :</label>
                    <input type="text" id="medical_condition" name="medical_condition" required>
                </div>
          <!-- قائمة المواعيد -->
<div class="form-group">
    <label for="appointment_date">الموعد:</label>
    <select id="appointment_date" name="appointment_date" required>
        <?php $__currentLoopData = $all_dates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $date): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($date->date); ?>"><?php echo e($date->date); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>

<!-- قائمة الأوقات -->
<div class="form-group">
    <label for="appointment_time">الوقت:</label>
    <select id="appointment_time" name="appointment_time" required>
        <!-- الأوقات سيتم تحميلها بناءً على التاريخ المختار -->
    </select>
</div>
<div class="form-group">
        <label for="price">سعر الكشف :</label>
        <input type="text" id="price" name="price" value="10 jd " readonly>
    </div>
<!-- تأكد من أن تضع الرابط المخصص لجلب الأوقات عبر AJAX -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // عندما يختار المستخدم تاريخًا
        $('#appointment_date').change(function() {
            var selectedDate = $(this).val(); // الحصول على التاريخ المختار
            // إرسال الطلب عبر AJAX لجلب الأوقات الخاصة بهذا التاريخ
            $.ajax({
                url: '<?php echo e(route('getTimesForDate')); ?>', // الرابط الذي ستقوم بإرساله إليه
                method: 'GET',
                data: { date: selectedDate }, // تمرير التاريخ المختار
                success: function(response) {
                    // مسح الأوقات القديمة
                    $('#appointment_time').empty();
                    // إضافة الأوقات الجديدة
                    response.times.forEach(function(time) {
                        $('#appointment_time').append('<option value="'+ time +'">'+ time +'</option>');
                    });
                }
            });
        });
    });
</script>


                <div class="form-group">
                    <button type="submit">حجز الموعد</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\Users\emad.j\Desktop\prog\cmder\clinc\resources\views/avillable_oppintments.blade.php ENDPATH**/ ?>
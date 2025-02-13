<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مواعيدي القادمة</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/my_appointments.css')); ?>">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>مواعيدي القادمة</h1>
        
        <!-- نموذج البحث عن طريق الرقم الوطني -->
        <form id="search-form">
            <input type="text" id="national_id" name="national_id" placeholder="أدخل الرقم الوطني" required>
            <button type="submit">بحث</button>
        </form>
        
        <!-- جدول عرض المواعيد -->
        <table class="appointments-table">
            <thead>
                <tr>

                <th>الاسم</th>
                    <th>التاريخ</th>
                    <th>الوقت</th>
                    <th>سعر الكشف المبدئي</th>
                    <th>الإجراء</th>
                </tr>
            </thead>
            <tbody id="appointments-body">
                <!-- سيتم تحميل البيانات هنا عبر AJAX -->
            </tbody>
        </table>
    </div>
    <script>
    $(document).ready(function() {
        $('#search-form').submit(function(event) {
            event.preventDefault(); // منع إعادة تحميل الصفحة
            var nationalId = $('#national_id').val();

            $.ajax({
                url: '<?php echo e(route("getAppointmentsByNationalId")); ?>', // تأكد من تعديل المسار حسب الراوت المناسب
                method: 'GET',
                data: { n_id: nationalId },
                success: function(response) {
                    $('#appointments-body').empty(); // مسح الجدول القديم
                    
                    if(response.appointments.length > 0) {
                        response.appointments.forEach(function(appointment) {
                            $('#appointments-body').append(
                                '<tr>' +
                                '<td>' + appointment.name + '</td>' +
                                '<td>' + appointment.date + '</td>' +
                                '<td>' + appointment.time + '</td>' +
                                '<td>' + appointment.price + ' JD</td>' +
                                '<td>' +
                                '<form action="<?php echo e(route("payment")); ?>" method="POST">' +
                                '<?php echo csrf_field(); ?>' +
                                '<input type="hidden" name="id" value="' + appointment.n_id + '">' +
                                '<button type="submit">ادفع الآن</button>' +
                                '</form>' +
                                '</td>' +
                                '</tr>'
                            );
                        });
                    } else {
                        $('#appointments-body').append('<tr><td colspan="5">لا توجد مواعيد متاحة لهذا الرقم الوطني</td></tr>');
                    }
                }
            });
        });
    });
</script>

</body>
</html><?php /**PATH C:\Users\emad.j\Desktop\prog\cmder\clinc\resources\views/my_appointments.blade.php ENDPATH**/ ?>
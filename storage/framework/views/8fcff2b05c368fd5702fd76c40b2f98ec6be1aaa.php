<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إرسال استشارة</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/send.css')); ?>">
</head>
<body>

    <div class="container">
        <h2>إرسال استشارة</h2>

        <form action="<?php echo e(route('send.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label for="name">الاسم:</label>
            <input type="text" id="name" name="name" required placeholder="أدخل اسمك">

            <label for="subject">العنوان:</label>
            <input type="text" id="subject" name="subject" required placeholder="أدخل عنوان الاستشارة">

            <label for="message">نص الاستشارة:</label>
            <textarea id="message" name="message" rows="5" required placeholder="اكتب استشارتك هنا"></textarea>

            <button type="submit">إرسال الاستشارة</button>
        </form>
    </div>

</body>
</html>
<?php /**PATH C:\Users\emad.j\Desktop\prog\cmder\clinc\resources\views/send.blade.php ENDPATH**/ ?>
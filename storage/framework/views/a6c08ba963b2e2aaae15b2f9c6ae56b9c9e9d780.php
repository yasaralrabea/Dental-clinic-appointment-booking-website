<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تحديث كلمة المرور</title>
    
    <!-- ربط ملف CSS باستخدام asset -->
    <link rel="stylesheet" href="<?php echo e(asset('css/update_pass.css')); ?>">
</head>
<body>

<div class="container">
    <h2>تحديث كلمة المرور</h2>

    <form method="POST" action="<?php echo e(route('pass.store')); ?>">
        <?php echo csrf_field(); ?>

        <!-- حقل كلمة المرور القديمة -->
        <div class="form-group">
            <label for="current_password">كلمة المرور الحالية</label>
            <input type="password" name="current_password" id="current_password" class="form-control" required>
            <?php $__errorArgs = ['current_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <!-- حقل كلمة المرور الجديدة -->
        <div class="form-group">
            <label for="new_password">كلمة المرور الجديدة</label>
            <input type="password" name="new_password" id="new_password" class="form-control" required>
            <?php $__errorArgs = ['new_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <!-- حقل تأكيد كلمة المرور الجديدة -->
        <div class="form-group">
            <label for="new_password_confirmation">تأكيد كلمة المرور الجديدة</label>
            <input type="password" name="new_password_confirmation" id="new_password_confirmation" class="form-control" required>
            <?php $__errorArgs = ['new_password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <button type="submit" class="btn btn-primary">تحديث كلمة المرور</button>
    </form>
</div>

</body>
</html>
<?php /**PATH C:\Users\emad.j\Desktop\prog\cmder\clinc\resources\views/update_pass.blade.php ENDPATH**/ ?>
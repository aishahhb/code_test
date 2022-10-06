<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TEST</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>
<body>
      <!-- ======= Main ======= -->
      <section id="hero">
        <div class="hero-container">
          <a class="navbar-brand" style="padding:10px 0 20px" href="<?php echo e(url('/')); ?>"><h1>Coding Test - Tyrell Systems Sdn Bhd </h1></a>
          
          <?php if(Route::has('login')): ?>
              <?php if(auth()->guard()->check()): ?>
                 <h2>Hi, nice to meet you.</h2>
                 <a href="<?php echo e(route('home')); ?>" class="btn btn-primary">Go to Test</a>
              <?php else: ?>
                <h2>Hi, nice to meet you. <br /> <br />Please login to check my answer.</h2>
                 <form action="<?php echo e(route('login')); ?>" method="POST" role="form" class="php-email-form">
                    <?php echo csrf_field(); ?>
                    <div class="row no-gutters">
                      <div class="col-md-6 form-group pr-md-1">
                        <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus placeholder="Username">
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                      </div>
                      <div class="col-md-6 form-group pl-md-1">
                        <input type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" id="password" placeholder="Password" required>
                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                      </div>
                    </div>
                    <div class="text-center">
                        <button type="submit">
                            <?php echo e(__('Login')); ?>

                        </button>
                    </div>
                  </form>
                  <div style="text-align: left; margin-top: 150px;">
                      NOTE:<br /> 
                      Username: <b>admin@admin.com</b><br />
                      Password: <b>password</b>
                  </div>
                </div>
              <?php endif; ?>
          <?php endif; ?>
      </section><!-- /main -->
    
    <!-- ======= Footer ======= -->
    <footer id="footer">
    <div class="container">
        <div class="credits">aishahhashimbaki@gmail.com | +6013-3201019 </div>
        <div class="copyright">
        Laravel v<?php echo e(Illuminate\Foundation\Application::VERSION); ?> (PHP v<?php echo e(PHP_VERSION); ?>)
        </div>
    </div>
    </footer><!-- /footer -->

</body>
</html>
<?php /**PATH D:\www\tutorial\laravel8-card\resources\views/welcome.blade.php ENDPATH**/ ?>
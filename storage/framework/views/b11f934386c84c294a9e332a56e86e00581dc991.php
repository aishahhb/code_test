<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    <!-- ======= Main ======= -->
    <section id="hero">
        <div class="hero-container">
            <a class="navbar-brand" style="padding:10px 0 20px" href="<?php echo e(url('/')); ?>"><h1>Coding Test - Tyrell Systems Sdn Bhd </h1></a>
            <?php if(auth()->guard()->check()): ?>
                <div class="container">
                    <a href="<?php echo e(route('home')); ?>" class="btn btn-success btn-flat"><i class="bx bx-user"></i> <?php echo e(Auth::user()->name); ?> - A) Programming Test</a>
                    <a href="<?php echo e(route('question_b')); ?>" class="btn btn-info btn-flat"><i class="bx bx-file"></i> Question B) SQL Improvement Logic Test </a>
                    <div class="btn btn-danger btn-flat">
                        <i class="bx bx-lock"></i>
                        <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="color: white;">
                            <?php echo e(__('Logout')); ?>

                        </a>
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                            <?php echo csrf_field(); ?>
                        </form>
                    </div>
                </div>
            <?php endif; ?>
            <main class="py-4">
                <?php echo $__env->yieldContent('content'); ?>
            </main>
        </div>
    </section>
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
<?php /**PATH D:\www\tutorial\laravel8-card\resources\views/layouts/app.blade.php ENDPATH**/ ?>
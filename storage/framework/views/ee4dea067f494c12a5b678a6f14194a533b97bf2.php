<?php $__env->startSection('content'); ?>
<?php if(session('status')): ?>
    <div class="alert alert-success" role="alert">
        <?php echo e(session('status')); ?>

    </div>
<?php endif; ?>

<div class="container">
    <div class="row">
        <h3>Card Distributor</h3>
    </div>
    <div class="row">
        <form action="<?php echo e(route('card_submit')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php if($errors->any()): ?>
                <div class="alert alert-danger" role="alert">
                    Input value does not exist or value is invalid
                </div>
            <?php endif; ?>
            <div class="form-group">
                <label for="player">Fill number of player</label>
                <input type="text" class="form-control <?php $__errorArgs = ['player'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> mt-2" id="player" name="player" placeholder="Number of Player" value="<?php echo e(old('player')); ?>">
                <?php $__errorArgs = ['player'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <button type="submit" class="btn btn-primary btn-flat mt-3">Submit</button>
            <a href="<?php echo e(route('home')); ?>" class="btn btn-secondary btn-flat mt-3">Refresh</a>
        </form>
    </div>
</div>

<div class="row" id="result">
        <h2>Result: </h2>
        <?php echo $result ?? ''; ?>

</div>
 <br /><br />

<div class="row" style="background: white;padding: 20px 10px;">
       
       <h5 class="mt-10">Question 1.7(9): Spent time around 8 hours</h5>
</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\www\tutorial\laravel8-card\resources\views/home.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>
<?php if(session('status')): ?>
    <div class="alert alert-success" role="alert">
        <?php echo e(session('status')); ?>

    </div>
<?php endif; ?>

<div class="container" id="result" style="padding: 20px 10px;">
     <h3><b>Question B-3.b.i):  Explanation of the logical improvement:</b></h3>
        <ol class="upper-roman">
            <li>Creating indexes can often make repeated queries more efficient. But there are many other approaches as well.It also can help to optimize the query execution duration and increase overall database performance. </li>
            <li>Create all primary and foreign keys and relationships among tables.</li>
            <li>Identify what queries you want to tune, which you can figure out by looking at which of your database calls are taking the longest or using the most resources, like with a SQL profiler</li>
            <li>Use/create temporary tables and table variables.</li>
            <li>Instead of NULLS use string values such as N/A</li>
            <li>Create joins with INNER JOIN (not WHERE)</li>
            <li>
                Avoid using multiple OR in the FILTER predicate. If we split this query into two SELECT queries and combine them by using the UNION operator, SQL Server will be able to make use of the indexes, and the query will be optimized.
            </li>
        </ul>
        <br /><br />
       <h5 class="mt-10">Question B-3.c): Spent time around 4 hours</h5>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\www\tutorial\laravel8-card\resources\views/question_b.blade.php ENDPATH**/ ?>
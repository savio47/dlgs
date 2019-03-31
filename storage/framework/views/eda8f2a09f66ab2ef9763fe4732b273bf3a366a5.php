<?php $__env->startSection('content'); ?>
<div class="container">   
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">User Dashboard</div>
                <div class="panel-body">
                    <h3 style="color:black;">License Records</h3>
                    <?php if(count($posts)>0): ?>
    <table class="table table-striped">
        <tr>
            <th style="color:black;">Users License Form</th>
            <th></th>
            
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><img src="storage\_images\images2.jpg" class="img-fluid" alt="Responsive image" width="70%" height="70%">
        </td>
        <td><div class="well">
            <h3><a href="/posts/<?php echo e($post->id); ?>">  <?php echo $post->firstname; ?> <?php echo $post->lastname; ?></a></h3>
            <h4>License No : 20180000<?php echo e($post->id); ?><h4>
            <small>Entered on <?php echo e($post->created_at); ?></small>
        </div>
    </td>
    
    
    


    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
</table>
<?php else: ?>
<br>
    <p style="color:black;">No License record found</p>
    <a href="/posts/create" class="btn btn-primary btn-lg btn-block">Apply and Register for License</a>
<?php endif; ?>
<br>

<a href="/services">Documents Required To Be Submitted For Learner's License (LL) and Driving Licence (DL)</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?> 


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
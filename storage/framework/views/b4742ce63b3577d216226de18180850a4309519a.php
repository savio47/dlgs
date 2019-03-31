<?php $__env->startSection('content'); ?>
    <div>
    <a href="/admin" class="btn btn-primary ">Go Back </a>
    </div>   
<h1>License Records</h1>
<?php if(count($posts)>0): ?>
    <table class="table table-striped">
        <tr>
            <th>Users License Form</th>
            <th></th>
            <th></th>
            
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><div class="well">
            <h3><a href="/posts/<?php echo e($post->id); ?>">  <?php echo $post->firstname; ?> <?php echo $post->lastname; ?></a></h3>
            <h5>License No : 20180000<?php echo e($post->id); ?><h5>
            <small>Entered on <?php echo e($post->created_at); ?></small>
            
        </div>
    </td>
    
    
    <td>
            <?php echo Form::open(['action' => ['PostsController@destroy',$post->id], 'method' => 'POST', 'class'=> 'pull-right']); ?>

            <?php echo e(Form::hidden('_method', 'DELETE')); ?>

            <?php echo e(Form::submit('Delete', ['class' =>'btn btn-danger'])); ?>

            <?php echo Form::close(); ?> 
    </td>

     <td><!-- Large modal -->
        <button type="button" class="btn btn-warning " data-toggle="modal" data-target=".bd-example-modal-lg">Renew</button>

        <div class="modal fade bd-example-modal-lg" tabindex="1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="p-3 mb-2 bg-warning text-dark">
            <br>
            <h3> User's Driving License has been renewed! Sending email to user.</h3>
        </br> 
    </div>
        </div>
        </div>
        </div>
    </td> 

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
</table>
<?php else: ?>
<br>
    <p>No License record found</p>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
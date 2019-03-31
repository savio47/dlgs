<?php $__env->startSection('content'); ?>
    

     <?php if(!Auth::guest()): ?>
     <?php if(Auth::user()->id == $post->user_id): ?>
        <table class="table table-striped">
                <tr>
                    <th style="color:black;">Users License Form</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <div>
                        <tr>
                        <td>
                        Form action   
                        </td>
            <td><a href="/posts/<?php echo e($post->id); ?>/edit" class="btn btn-success">Edit</a>
            </td>
            <td>
            <?php echo Form::open(['action' => ['PostsController@destroy',$post->id], 'method' => 'POST', 'class'=> 'pull-right']); ?>

            <?php echo e(Form::hidden('_method', 'DELETE')); ?>

            <?php echo e(Form::submit('Delete', ['class' =>'btn btn-danger'])); ?>

            <?php echo Form::close(); ?>    
            </td>
            <td>
                                <!-- Large modal -->
                                <button type="button" class="btn btn-warning " data-toggle="modal" data-target=".bd-example-modal-lg">Request Renewal </button>
                                <div class="modal fade bd-example-modal-lg" tabindex="1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                 <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <br>
                                    <h3 class="text-success"> Your Request for Renewal of Your Driving License has been sent! You will receive an email when renewed.</h3>
                                </br> 
                                </div>
                                </div>
                                </div>
            </td>
        </table>
        <?php endif; ?>
        <?php endif; ?>
        </br>
        <div class="well">
            <small>Entered on <?php echo e($post->created_at); ?></small>
            </br>
            <h2>License No : 20180000<?php echo e($post->id); ?><h2>
            <h2>Name : <?php echo $post->firstname; ?> <?php echo $post->lastname; ?></a></h2>
            <h4>Date of Birth : <?php echo $post->dob; ?></h4>   
            <h4>Blood Group : <?php echo $post->bloodgroup; ?></h4>
            <h4>Father Name: <?php echo $post->fathername; ?></h4>
            <h4>Phone : <?php echo $post->phone; ?></h4>
            <h4>Address : <?php echo $post->address; ?></h4>
            <h4>State : <?php echo $post->state; ?></h4>
            <h4>Pincode  : <?php echo $post->pincode; ?></h4>
            </br>
            <h3> License Types of vehical</h3>
            <h4>MotorCycle WITHOUT Gear : <?php echo $post->mcwog; ?></h4>
            <h4>MotorCycle WITH Gear : <?php echo $post->mcwg; ?></h4>
            <h4>Light MotorVehical : <?php echo $post->lmv; ?></h4>
    </div>
    
    
    
    
 <?php $__env->stopSection(); ?>

 
 


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
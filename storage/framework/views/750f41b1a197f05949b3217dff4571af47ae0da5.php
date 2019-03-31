<?php $__env->startSection('content'); ?>
        
        
    <h1 style="color:black;">Edit License Record</h1>
    <?php echo Form::open(['action' => ['PostsController@update', $post->id],'method' => 'POST']); ?>

    <br>
    

    </br>
    <h3> Personal details</h3>
        <div class="form-group">
            <?php echo e(Form::label('firstname', 'First Name:')); ?>

            <?php echo e(Form::text('firstname', $post->firstname,['class' => 'form-control'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('lastname', 'Last Name :')); ?>

            <?php echo e(Form::text('lastname', $post->lastname,['class' => 'form-control'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('dob', 'Date of Birth : (Year - Month - Date)')); ?>

            <?php echo e(Form::date('dob', $post->dob,['class' => 'form-control'])); ?> 
        </div>
        <div class="form-group">
            <?php echo e(Form::label('bloodgroup', 'Blood Group :')); ?>

            <?php echo e(Form::select('bloodgroup', ['A+' => 'A+', 'A-' => 'A-', 'B+' => 'B+', 'B-' => 'B-', 'AB+' => 'AB+', 'AB-' => 'AB-', 'O+' => 'O+', 'O-' => 'O-'], $post->bloodgroup,['class' => 'form-control'])); ?>

       </div>
        <div class="form-group">
            <?php echo e(Form::label('fathername', 'Father Name:')); ?>

            <?php echo e(Form::text('fathername', $post->fathername,['class' => 'form-control'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('phone', 'Phone :')); ?>

            <?php echo e(Form::number('phone', $post->phone,['class' => 'form-control'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('address', 'Address :')); ?>

            <?php echo e(Form::text('address', $post->address,['class' => 'form-control'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('state', 'State :')); ?>

            <?php echo e(Form::select('state', ['Goa' => 'Goa', 'Karnataka' => 'Karnataka'], $post->state,['class' => 'form-control'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('pincode', 'Pincode (6-digit):')); ?>

            <?php echo e(Form::number('pincode', $post->pincode,['class' => 'form-control'])); ?>

        </div>
    </br>
</br>
<h3> License Types of vehical</h3>
<div class="form-group">
    <?php echo e(Form::label('mcwog', 'MotorCycle WITHOUT Gear :')); ?>

    <?php echo e(Form::select('mcwog', ['Yes' => 'Yes', 'No' => 'No'], $post->mcwog, ['class' => 'form-control'])); ?>

</div>
<div class="form-group">
    <?php echo e(Form::label('mcwg', 'MotorCycle WITH Gear :')); ?>

    <?php echo e(Form::select('mcwg', ['Yes' => 'Yes', 'No' => 'No'], $post->mcwg, ['class' => 'form-control'])); ?>

</div>
<div class="form-group">
    <?php echo e(Form::label('lmv', 'Light MotorVehical :')); ?>

    <?php echo e(Form::select('lmv', ['Yes' => 'Yes', 'No' => 'No'], $post->lmv, ['class' => 'form-control'])); ?>

</div>
    <br> 
        <?php echo e(Form::hidden('_method', 'PUT')); ?>

        <?php echo e(Form::submit('Submit', ['class'=>'btn btn-primary'])); ?> 
    </br>
        <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>





<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
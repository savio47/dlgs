<?php $__env->startSection('content'); ?>
<div>
    <br>
    <a href="/dashboard" class="btn btn-dark">Go Back</a>
    </div>
   
<h1 style="color:black;">Create License</h1>
</br>

<?php echo Form::open(['action' => 'PostsController@store','method' => 'POST']); ?>

<h3> Personal details</h3>   
    

<div class="form-group">
    <?php echo e(Form::label('firstname', 'First Name :')); ?>

    <?php echo e(Form::text('firstname', '',['class' => 'form-control', 'placeholder' =>'First Name of Applicant'])); ?>

</div>
<div class="form-group">
    <?php echo e(Form::label('lastname', 'Last Name :')); ?>

    <?php echo e(Form::text('lastname', '',['class' => 'form-control', 'placeholder' =>'Last Name / Surname'])); ?>

</div>
<div class="form-group">
    <?php echo e(Form::label('dob', 'Date of Birth : (Year - Month - Date)')); ?>

    <?php echo e(Form::date('dob', \Carbon\Carbon::now(),['class' => 'form-control', 'placeholder' =>'Your Date of Birth'])); ?>

    
</div>

<div class="form-group">
     <?php echo e(Form::label('bloodgroup', 'Blood Group ')); ?>

     <?php echo e(Form::select('bloodgroup', ['A+' => 'A+', 'A-' => 'A-', 'B+' => 'B+','B-' => 'B-', 'AB+' => 'AB+', 'AB-' => 'AB-', 'O+' => 'O+', 'O-' => 'O-'], null,['class' => 'form-control', 'placeholder' =>'Select your Blood Group'])); ?>

</div> 
<div class="form-group">
    <?php echo e(Form::label('fathername', 'Father Name :')); ?>

    <?php echo e(Form::text('fathername', '',['class' => 'form-control', 'placeholder' =>'Father Name / Guardian Name'])); ?>

</div> 
<div class="form-group">
    <?php echo e(Form::label('phone', 'Phone :')); ?>

    <?php echo e(Form::number('phone', '',['class' => 'form-control', 'placeholder' =>'Landline / Mobile number:'])); ?>

</div>
<div class="form-group">
    <?php echo e(Form::label('address', 'Address :')); ?>

    <?php echo e(Form::text('address', '',['class' => 'form-control', 'placeholder' =>'Village / City'])); ?>

</div>
<div class="form-group">
    <?php echo e(Form::label('state', 'State :')); ?>

    <?php echo e(Form::select('state', ['Goa' => 'Goa', 'Karnataka' => 'Karnataka'], null,['class' => 'form-control', 'placeholder' =>'Select your State'])); ?>

</div>
<div class="form-group">
    <?php echo e(Form::label('pincode', 'Pincode (6 digit):')); ?>

    <?php echo e(Form::number('pincode', '',['class' => 'form-control', 'placeholder' =>'6-digit Pincode of your City/Village'])); ?>

</div>

</br>
</br>
<h3> License Types of vehical</h3>
<div class="form-group">
    <?php echo e(Form::label('mcwog', 'MotorCycle WITHOUT Gear :')); ?>

    <?php echo e(Form::select('mcwog', ['Yes' => 'Yes', 'No' => 'No'], 'Yes', ['class' => 'form-control'])); ?>

</div>
<div class="form-group">
    <?php echo e(Form::label('mcwg', 'MotorCycle WITH Gear :')); ?>

    <?php echo e(Form::select('mcwg', ['Yes' => 'Yes', 'No' => 'No'], 'No', ['class' => 'form-control'])); ?>

</div>
<div class="form-group">
    <?php echo e(Form::label('lmv', 'Light MotorVehical :')); ?>

    <?php echo e(Form::select('lmv', ['Yes' => 'Yes', 'No' => 'No'], 'No', ['class' => 'form-control'])); ?>

</div>

</br>
<?php echo e(Form::submit('Submit', ['class'=>'btn btn-primary'])); ?> 
</br>
    <?php echo Form::close(); ?> 
    <?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
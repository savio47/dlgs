@extends('layouts.app')

@section('content')
<div>
    <br>
    <a href="/dashboard" class="btn btn-dark">Go Back</a>
    </div>
   
<h1 style="color:black;">Create License</h1>
</br>

{!! Form::open(['action' => 'PostsController@store','method' => 'POST']) !!}
<h3> Personal details</h3>   
    {{-- <div class="form-group">
    {{Form::label('lno', 'License Number :')}}
    {{Form::number('lno', '20180000'.$user->id,['class' => 'form-control'])}}
    </div> --}}

<div class="form-group">
    {{Form::label('firstname', 'First Name :')}}
    {{Form::text('firstname', '',['class' => 'form-control', 'placeholder' =>'First Name of Applicant'])}}
</div>
<div class="form-group">
    {{Form::label('lastname', 'Last Name :')}}
    {{Form::text('lastname', '',['class' => 'form-control', 'placeholder' =>'Last Name / Surname'])}}
</div>
<div class="form-group">
    {{Form::label('dob', 'Date of Birth : (Year - Month - Date)')}}
    {{Form::date('dob', \Carbon\Carbon::now(),['class' => 'form-control', 'placeholder' =>'Your Date of Birth'])}}
    {{-- echo Form::date('dob', \Carbon\Carbon::now()); --}}
</div>

<div class="form-group">
     {{Form::label('bloodgroup', 'Blood Group ')}}
     {{Form::select('bloodgroup', ['A+' => 'A+', 'A-' => 'A-', 'B+' => 'B+','B-' => 'B-', 'AB+' => 'AB+', 'AB-' => 'AB-', 'O+' => 'O+', 'O-' => 'O-'], null,['class' => 'form-control', 'placeholder' =>'Select your Blood Group'])}}
</div> 
<div class="form-group">
    {{Form::label('fathername', 'Father Name :')}}
    {{Form::text('fathername', '',['class' => 'form-control', 'placeholder' =>'Father Name / Guardian Name'])}}
</div> 
<div class="form-group">
    {{Form::label('phone', 'Phone :')}}
    {{Form::number('phone', '',['class' => 'form-control', 'placeholder' =>'Landline / Mobile number:'])}}
</div>
<div class="form-group">
    {{Form::label('address', 'Address :')}}
    {{Form::text('address', '',['class' => 'form-control', 'placeholder' =>'Village / City'])}}
</div>
<div class="form-group">
    {{Form::label('state', 'State :')}}
    {{Form::select('state', ['Goa' => 'Goa', 'Karnataka' => 'Karnataka'], null,['class' => 'form-control', 'placeholder' =>'Select your State'])}}
</div>
<div class="form-group">
    {{Form::label('pincode', 'Pincode (6 digit):')}}
    {{Form::number('pincode', '',['class' => 'form-control', 'placeholder' =>'6-digit Pincode of your City/Village'])}}
</div>

</br>
</br>
<h3> License Types of vehical</h3>
<div class="form-group">
    {{Form::label('mcwog', 'MotorCycle WITHOUT Gear :')}}
    {{Form::select('mcwog', ['Yes' => 'Yes', 'No' => 'No'], 'Yes', ['class' => 'form-control'])}}
</div>
<div class="form-group">
    {{Form::label('mcwg', 'MotorCycle WITH Gear :')}}
    {{Form::select('mcwg', ['Yes' => 'Yes', 'No' => 'No'], 'No', ['class' => 'form-control'])}}
</div>
<div class="form-group">
    {{Form::label('lmv', 'Light MotorVehical :')}}
    {{Form::select('lmv', ['Yes' => 'Yes', 'No' => 'No'], 'No', ['class' => 'form-control'])}}
</div>

</br>
{{ Form::submit('Submit', ['class'=>'btn btn-primary'])}} 
</br>
    {!! Form::close() !!} 
    @endsection 
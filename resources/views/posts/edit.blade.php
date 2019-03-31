@extends('layouts.app')

@section('content')
        {{-- <div>
        <br>
        <a href="/home" class="btn btn-outline-dark">Go Back</a>
        </div>
        </br> --}}
        
    <h1 style="color:black;">Edit License Record</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id],'method' => 'POST']) !!}
    <br>
    {{-- <div class="form-group">
    {{Form::label('lno', 'License Number :')}}
    {{Form::number('lno', '20180000' $user->id,['class' => 'form-control'])}}
    </div>  --}}

    </br>
    <h3> Personal details</h3>
        <div class="form-group">
            {{Form::label('firstname', 'First Name:')}}
            {{Form::text('firstname', $post->firstname,['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('lastname', 'Last Name :')}}
            {{Form::text('lastname', $post->lastname,['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('dob', 'Date of Birth : (Year - Month - Date)')}}
            {{Form::date('dob', $post->dob,['class' => 'form-control'])}} 
        </div>
        <div class="form-group">
            {{Form::label('bloodgroup', 'Blood Group :')}}
            {{Form::select('bloodgroup', ['A+' => 'A+', 'A-' => 'A-', 'B+' => 'B+', 'B-' => 'B-', 'AB+' => 'AB+', 'AB-' => 'AB-', 'O+' => 'O+', 'O-' => 'O-'], $post->bloodgroup,['class' => 'form-control'])}}
       </div>
        <div class="form-group">
            {{Form::label('fathername', 'Father Name:')}}
            {{Form::text('fathername', $post->fathername,['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('phone', 'Phone :')}}
            {{Form::number('phone', $post->phone,['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('address', 'Address :')}}
            {{Form::text('address', $post->address,['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('state', 'State :')}}
            {{Form::select('state', ['Goa' => 'Goa', 'Karnataka' => 'Karnataka'], $post->state,['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('pincode', 'Pincode (6-digit):')}}
            {{Form::number('pincode', $post->pincode,['class' => 'form-control'])}}
        </div>
    </br>
</br>
<h3> License Types of vehical</h3>
<div class="form-group">
    {{Form::label('mcwog', 'MotorCycle WITHOUT Gear :')}}
    {{Form::select('mcwog', ['Yes' => 'Yes', 'No' => 'No'], $post->mcwog, ['class' => 'form-control'])}}
</div>
<div class="form-group">
    {{Form::label('mcwg', 'MotorCycle WITH Gear :')}}
    {{Form::select('mcwg', ['Yes' => 'Yes', 'No' => 'No'], $post->mcwg, ['class' => 'form-control'])}}
</div>
<div class="form-group">
    {{Form::label('lmv', 'Light MotorVehical :')}}
    {{Form::select('lmv', ['Yes' => 'Yes', 'No' => 'No'], $post->lmv, ['class' => 'form-control'])}}
</div>
    <br> 
        {{Form::hidden('_method', 'PUT')}}
        {{ Form::submit('Submit', ['class'=>'btn btn-primary'])}} 
    </br>
        {!! Form::close() !!}
@endsection





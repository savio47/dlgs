@extends('layouts.app')

@section('content')
    {{-- <div>
    <br>
    <a href="/posts" class="btn btn-outline-dark">Go Back</a>
    </div>
    </br> --}}

     @if(!Auth::guest())
     @if(Auth::user()->id == $post->user_id)
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
            <td><a href="/posts/{{$post->id}}/edit" class="btn btn-success">Edit</a>
            </td>
            <td>
            {!!Form::open(['action' => ['PostsController@destroy',$post->id], 'method' => 'POST', 'class'=> 'pull-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' =>'btn btn-danger'])}}
            {!!Form::close()!!}    
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
        @endif
        @endif
        </br>
        <div class="well">
            <small>Entered on {{$post->created_at}}</small>
            </br>
            <h2>License No : 20180000{{$post->id}}<h2>
            <h2>Name : {!!$post->firstname!!} {!!$post->lastname!!}</a></h2>
            <h4>Date of Birth : {!!$post->dob!!}</h4>   
            <h4>Blood Group : {!!$post->bloodgroup!!}</h4>
            <h4>Father Name: {!!$post->fathername!!}</h4>
            <h4>Phone : {!!$post->phone!!}</h4>
            <h4>Address : {!!$post->address!!}</h4>
            <h4>State : {!!$post->state!!}</h4>
            <h4>Pincode  : {!!$post->pincode!!}</h4>
            </br>
            <h3> License Types of vehical</h3>
            <h4>MotorCycle WITHOUT Gear : {!!$post->mcwog!!}</h4>
            <h4>MotorCycle WITH Gear : {!!$post->mcwg!!}</h4>
            <h4>Light MotorVehical : {!!$post->lmv!!}</h4>
    </div>
    
    {{-- @if(!Auth::guest())
    @if(!Auth::user()->id==$post->user_id)  --}}
    
    {{-- @endif
    @endif --}}
 @endsection

 
 

{{-- @extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Go Back</a>
    <h1>{{$post->title}}</h1>
    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
    <br><br>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif
@endsection --}}
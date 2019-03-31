@extends('layouts.app')
@section('content')
<div class="container">   
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">User Dashboard</div>
                <div class="panel-body">
                    <h3 style="color:black;">License Records</h3>
                    @if(count($posts)>0)
    <table class="table table-striped">
        <tr>
            <th style="color:black;">Users License Form</th>
            <th></th>
            {{-- <th></th>
            <th></th> --}}
    @foreach($posts as $post)
    <tr>
        <td><img src="storage\_images\images2.jpg" class="img-fluid" alt="Responsive image" width="70%" height="70%">
        </td>
        <td><div class="well">
            <h3><a href="/posts/{{$post->id}}">  {!!$post->firstname!!} {!!$post->lastname!!}</a></h3>
            <h4>License No : 20180000{{$post->id}}<h4>
            <small>Entered on {{$post->created_at}}</small>
        </div>
    </td>
    
    
    {{-- <td><a href="/posts/{{$post->id}}/edit" class="btn btn-success">Edit</a>
    </td>
    <td>
            {!!Form::open(['action' => ['PostsController@destroy',$post->id], 'method' => 'POST', 'class'=> 'pull-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' =>'btn btn-danger'])}}
            {!!Form::close()!!} 
    </td> --}}

{{--      <td><!-- Large modal -->
        <button type="button" class="btn btn-warning " data-toggle="modal" data-target=".bd-example-modal-lg">Request Renewal</button>

        <div class="modal fade bd-example-modal-lg" tabindex="1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="p-3 mb-2 bg-warning text-dark">
            <br>
            <h3>Your Request for Renewal of Your Driving License has been sent! You will receive an email when renewed.</h3>
        </br> 
    </div>
        </div>
        </div>
        </div>
    </td> 
 --}}
    @endforeach
    
</table>
@else
<br>
    <p style="color:black;">No License record found</p>
    <a href="/posts/create" class="btn btn-primary btn-lg btn-block">Apply and Register for License</a>
@endif
<br>
{{-- <a href="/services" class="btn btn-secondary btn-lg btn-block">Documents Required To Be Submitted For Learner's License (LL) and Driving Licence (DL)</a> --}}
<a href="/services">Documents Required To Be Submitted For Learner's License (LL) and Driving Licence (DL)</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 


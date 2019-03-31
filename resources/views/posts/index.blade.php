@extends('layouts.app')

@section('content')
    <div>
    <a href="/admin" class="btn btn-primary ">Go Back </a>
    </div>   
<h1>License Records</h1>
@if(count($posts)>0)
    <table class="table table-striped">
        <tr>
            <th>Users License Form</th>
            <th></th>
            <th></th>
            {{-- <th></th> --}}
    @foreach($posts as $post)
    <tr>
        <td><div class="well">
            <h3><a href="/posts/{{$post->id}}">  {!!$post->firstname!!} {!!$post->lastname!!}</a></h3>
            <h5>License No : 20180000{{$post->id}}<h5>
            <small>Entered on {{$post->created_at}}</small>
            
        </div>
    </td>
    {{-- @if(!Auth::guest()) --}}
    {{-- <td><a href="/posts/{{$post->id}}/edit" class="btn btn-success">Edit</a>
    </td> --}}
    <td>
            {!!Form::open(['action' => ['PostsController@destroy',$post->id], 'method' => 'POST', 'class'=> 'pull-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' =>'btn btn-danger'])}}
            {!!Form::close()!!} 
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

    @endforeach
    {{-- {{$posts->links()}} --}}
</table>
@else
<br>
    <p>No License record found</p>
@endif

@endsection
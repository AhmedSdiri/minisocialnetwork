@extends('layouts.app')



@section('content')


<div class="row">
     <div class="col-md-6 col-md-offset-3">  
        <div class="panel panel-default">
            <div class="panel-heading">
            
               <span>
                  Article by me
                   <small>
                       <a href="/articles/{{ $post->id}}/edit">  Edit</a>
                   </small>
                </span>
                <span class="pull-right">
                {{ $post->created_at->diffForHumans() }}
                </span>
               </div>
                <div class="panel-body">
				{{ $post->content }}
                </div>
     </div>
    </div>






</div>
@endsection
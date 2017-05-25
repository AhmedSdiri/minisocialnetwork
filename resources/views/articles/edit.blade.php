@extends('layouts.app')



@section('content')


<div class="row">
     <div class="col-md-6 col-md-offset-3">  
        <div class="panel panel-default">
            <div class="panel-heading">
            
            Edit Articles
            </div>
                <div class="panel-body">
				<div class="form-group">
                    <form action="/articles/{{ $post->id }}" method="POST">
                        {{ method_field('PUT') }}
                  {{csrf_field()}}
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
				<label for="content">Content</label>
				<textarea name="content" class="form-control">
                        {{$post->content }}</textarea>
				</div>
            
                     <div class="checkbox"> 
                         <label>
                          <input type="checkbox" name="live" {{ $post->live == 1 ? 'checked' : ''}}>
                                live
                         </label>
                     </div>
                
				<div class="form-group">
				<label for="post_on">Post on</label>
				<input name="post_on" type="datetime-local" value="{{$post->post_on->format('Y-m-d\TH:i:s')}}" class="form-control"></input>
				</div>
                <input type="submit" class="btn btn-success pull-right" value="Submit">
                    </form>
            </div>
        </div>
     </div>
    </div>







@endsection
@extends('layouts.app')



@section('content')


<div class="row">
    @forelse($posts as $post)
     <div class="col-md-5 col-md-offset-4">  
        <div class="panel panel-default">
            <div class="panel-heading">
            <span>XX</span>
               <span class="pull-right">{{ $post->created_at }}</span>
            </div>
            <div class="panel-body">
                {{ $post->shortContent}}
                <a href="/articles/{{ $post->id}}">Read more</a>
            </div>
                <div class="panel-body clearfix">
			<div class="panel-footer" style="background-color: white">
                <i class="fa fa-heart pull-right"></i>
                    </div>	
        </div>
     </div>
         
    </div>
    @empty
     No Articles
     @endforelse
</div>
<div class="row">
  <div class="col-md-4 col-md-offset-4">
    {{ $posts->links()}}
  </div>
</div>
@endsection
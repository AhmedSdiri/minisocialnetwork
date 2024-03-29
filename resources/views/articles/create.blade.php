@extends('layouts.app')



@section('content')


<div class="row">
     <div class="col-md-6 col-md-offset-3">  
        <div class="panel panel-default">
            <div class="panel-heading">
            
            Create Articles
            </div>
                <div class="panel-body">
				<div class="form-group">
                    <form action="/articles" method="POST">
                  {{csrf_field()}}
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
				<label for="content">Content</label>
				<textarea name="content" class="form-control"></textarea>
				</div>
            
                     <div class="checkbox"> 
                         <label>
                          <input type="checkbox" name="live">
                                live
                         </label>
                     </div>
                
				<div class="form-group">
				<label for="post_on">Post on</label>
				<input name="post_on" type="datetime-local"  class="form-control"></input>
				</div>
                <input type="submit" class="btn btn-success pull-right" value="Submit">
                    </form>
            </div>
        </div>
     </div>
    </div>







@endsection
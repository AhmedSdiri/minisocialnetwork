@extends('layouts.app')



@section('content')


<div class="row">
     <div class="col-md-6 col-md-offset-3">  
        <div class="panel panel-default">
            <div class="panel-heading">
            
            Create Articles
            </div>
                <div class="panel-body"></div>
				<div class="form-group">
				<label for="content">Content</label>
				<textarea name="content" class="form-control"></textarea>
				</div>
				<div class="form-group">
				<label for="post_on">Content</label>
				<input name="post_on" type="datetime-local"  class="form-control"></input>
				</div>
                <input type="submit" class="btn btn-success pull-right" value="Submit">
            
        </div>
     </div>
</div>







@endsection
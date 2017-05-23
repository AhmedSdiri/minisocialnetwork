
@extends('layouts.app')


<style type="text/css">
.profile-img{
    max-width:150px;
    border: 5px solid #fff;
    border-radius: 100%;
    box-shadow: 0 2px 2px rgba(0,0,0,0.3);
    }
</style>

@section('content')

<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-body text-center">
               <img class="profile-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRe2n0dQjseCRehcrwOlUBRRWUoi3jk1lcsLmYKOZcg3t3iQUPoyw">
               
               <h1>{{ Auth::user()->username}}</h1>
                <h5>{{ Auth::user()->email}}</h5>
            <!--  vid 28 -->
                
                <h5>{{ Auth::user()->dob->Format('l j F Y')}}({{Auth::user()->dob->age}}years old)</h5> 
                
                
            
               <button class="btn btn-success">Follow</button>
                
             
            </div>
        </div>
    </div>
</div>

@endsection
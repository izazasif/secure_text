@extends('layouts.app')

@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
<link href="{{ asset('/css/pop.css') }}" rel="stylesheet">
</head>
<style>

</style>
<body>
<!--Trigger-->


<a class="login-trigger" href="#" data-target="#login" data-toggle="modal">Get Massage</a>

<div id="login" class="modal fade" role="dialog">
  <div class="modal-dialog">
    
    <div class="modal-content">
      <div class="modal-body">
        <button data-dismiss="modal" class="close">&times;</button>
        <h4>Need Password That Sender Gives you</h4>
        <form method="post" action="/{massage}">
        @csrf
          <input type="password" name="password" class="password form-control" placeholder="password"/>
          <input class="btn login" type="submit" value="Login" />
        </form>
      </div>
    </div>
  </div>  
</div>
</body>
</html>

@endsection

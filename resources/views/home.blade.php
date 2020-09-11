@extends('layouts.app')

@section('content')


<!DOCTYPE html>


<head>
<link href="{{ asset('/css/style.css') }}" rel="stylesheet">
<script type="" src="/js/file.js"></script>
</head>
<body>
<section class="large-cta-section skrollable skrollable-between">
  <div class="medium-large-wrapper skrollable skrollable-after">
    <div class="medium-text-wrapper">
      <h2 class="h2 large white">Get started <span class="yellow">today</span>.</h2>
      <h3 class="h3 white">Material Design delivers a cleaner and flatter user interface</h3>
      <a class="cta-link footer-cta-link" href="https://app.neverbounce.com/register" alt="Try NeverBounce for free">Try It Free</a>
    </div>
  </div>
  <img class="cta-purple-email skrollable skrollable-after" src="https://neverbounce.com/images/background-images/cta-purple-email.png" alt="email illustration">
  <img src="https://neverbounce.com/images/background-images/cta-left-line.svg" class="cta-left-line" alt="graphic line element">
  <img src="https://neverbounce.com/images/background-images/teal-airplane.png" class="cta-teal-airplane" alt="paper airplane">
  <img class="cta-blue-email skrollable skrollable-between" src="https://neverbounce.com/images/background-images/cta-blue-email.png" alt="email illustration">
</section>
@if (session()->has('message'))
    <div class="alert alert-info">
        {{ session('message') }}
    </div>
@endif
<section class="contact-wrap">
    <form action="/home" method="post" class="contact-form">
    @csrf
        <div class="col-sm-6">
            <div class="input-block">
                <!-- <label for="">Title</label> -->
                <input id="title" placeholder="Title" class="form-control" name="title" type="text">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="input-block">
                <!-- <label for="">Password</label> -->
                <input placeholder="Password" id="password" class="form-control" name="password" type="text">
            </div>
        </div>
        <div class="col-sm-12">
            <div class="input-block textarea">
                <!-- <label for="">Drop your message here</label> -->
                <textarea placeholder="Drop your message here" rows="3" id="text" type="text" name="text" class="form-control"></textarea>
            </div>
        </div>
        <div class="col-sm-12">
            <button class="square-button">Send</button>
        </div>
    </form>
</section>

<!-- follow me template -->
<div class="made-with-love">
    Made with
    <i>♥</i> by
    <a target="_blank" href="https://codepen.io/leo-bian">Leo Bian</a>
</div>
           </body>
           <html>
@endsection

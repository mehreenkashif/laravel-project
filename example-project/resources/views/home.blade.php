@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>[Your School Management System Name] | Landing Page</title>
  <link rel="stylesheet" href="styles.css">
</head>
{{-- <body>


      <img src="images/hero.jpg" class="bg-img" alt="">


</body> --}}
<body>
    <div class="hero-container">
        <img src="images/hero-image.webp" class="bg-img" alt="">
        <div class="text-container">
            <h1>Welcome To Mangement System </h1>
        </div>
    </div>
</body>
</html>

@endsection
@section('css')
<style>

body, html {
    margin: 0;
    padding: 0;
    height: 100%;
}

.hero-container {
    position: relative;
    height: 100vh;
    text-align: center;
}

.bg-img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Maintain image aspect ratio and cover the entire container */
}

/* .text-container {
    position: absolute;
    top: 50%;
    left: 50%;
    /* transform: translate(-50%, -50%); */
    /* color:white; /* Set the text color */

.text-container {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);  /* Uncomment this line if you want to center the text within its container

  color: white;               /* Text color */
  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black; /* Black outline */
  font-weight: bold;
  font-size:100%          /* Bold formatting */
}




</style>
@endsection


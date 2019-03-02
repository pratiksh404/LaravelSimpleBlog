  @extends('layouts.app')

  @section('content')

  <div class="jumbotron text-center" style="margin:auto;">
   
      <h1 class="display-4">Welcome to Doctype Blog</h1>


      <img src="/storage/site_images/doctypelogo.png" alt="" style="height:auto;width:20vw;">


      <p class="lead">This is a simple blog website with simple user interface. Feel free to share your thoughts...Blog it.</p>
      <hr class="my-4">
      <p>If a member please login....Not registered yet? then register</p>
      <p class="lead">
        <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
        <a class="btn btn-primary btn-lg" href="/register" role="button">Register</a>
      </p>
    </div> 
    <hr>
     
  @endsection



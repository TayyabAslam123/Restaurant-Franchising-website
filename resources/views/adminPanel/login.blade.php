<!DOCTYPE html>
<html lang="en">
<head>
  <title>PLAG-X</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>

            <div class="col-lg-8" style="background-color:#001f3f;">  
              <!--SHOW ERROR MSG-->
              @if(Session::has('message')) 
              <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
              @endif     
              <!--END-->
              <h1 style="text-align: center;color: hsla(210, 100%, 75%, 1.0);">PLAG-X</h1>     
            <form class="text-center border border-light p-5" action="{{url('/login')}}" method="POST">
   
    <input type="email" id="defaultSubscriptionFormPassword" class="form-control mb-4" placeholder="E-mail" name="email" required>
    <input type="password" id="defaultSubscriptionFormEmail" class="form-control mb-4" placeholder="Password" name="password" required>

    <!-- Sign in button -->
    <button class="btn btn-secondary btn-block" type="submit">Sign in</button>


</form>
            </div>
<div class="col-lg-2"></div>

<!--SUCCESS/FAILURE MESSAGES-->

</body>
</html>
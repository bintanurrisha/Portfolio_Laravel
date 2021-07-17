<!DOCTYPE html>
<html lang="en.US">

<head>
	<meta charset="UTF-8" />
	<title>Covid 19 Website</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<link rel="shortcut icon" type="image/x-icon" href="images/coronafaviconico.jpg"> 
 <link href="{{asset('assets/css/service.css')}}" rel="stylesheet" />

</head>

<body>
   
<section  class="section" >
 <!--header section-->
 <div id="aboutHead">
	 <div class="about text-center py-5 ">
    <h1 style="color:white;" class=" display-4 font-weight-bold ">{{$service->Title}}</h1>
    <p style="color:white;" class="lead ">{{$service->description}}</p>
  </div>
</div>
<div class="container">
 <div class="card my-5 py-5"> 
      <div class="card-body">
        <p class="lead text-dark  text-center">{{$service->description}}</p>
        <p class="description">{!!$service->long_description!!}</p>
         <a class="btn btn-success"style="float:right;" href="{{route('index')}}">Back</a>
    </div>
  </div>
  
</div>

</section>

 <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
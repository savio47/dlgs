@extends('layouts.app')
@section('content') 

<body>
<div class="jumbotron text-center" > 
 <img src="storage\_images\Driver1.jpg" class="img-fluid" alt="Responsive image" width="90%" height="250"> 
    <div class="container">
        {{-- <div style="img:storage\_images\Driver1.jpg;"> --}}
     <h1 style="color:black;">Welcome to Driving License Generation Software!</h1>
    <p style="color:blue;">This is the software to apply for a driving license.</p>
    {{-- @guest --}}
    {{-- @if (Auth::guest()) --}}
    <p><a class="btn btn-primary btn-lg" href="/login" role=="button">Login</a>  <a class="btn btn-success btn-lg" href="/register" role="button">Register and Apply!</a></p> 
    {{-- @else --}}
    </br>

</div>

<div class="container">
    <br><br>
    <h2 style="color:purple;"><strong>Why Should You Apply for Driving Licence (DL) online?</strong></h2><br>
    <p style="color:black;">It is ideal to apply for your DL online, as it is more convenient and takes lesser amount of time than going through the entire process manually.
         You can simply download the license application form from the internet and furnish it with all the necessary documents after filling up the form duly. Once this process is conducted smoothly, 
         you need to sit for a written test and interview, and clear it to successfully obtain the licence.</p><br>
    <p style="color:black;">Please note that online registration for Learner's License (LL) is only for vehicles which are used for personal use and not for commercially transport purposes. 
        In a single online application form the applicant can apply for LL for more than one category of vehicle. 
        The preliminary test is common for all vehicles irrespective of the category of vehicle for which the LL is applied.</p><br>
        <p style="color:black;">
        <a href="/services">More Information</a></p>

</div>
</div>
</body>

{{-- <aside>
		<p class="ad">Avail<br/>50% off<br/>today!!!</p>
			<a href="https://www.myntra.com/" target="_blank">BUY NOW</a>
        </aside> --}}
        <br>
<footer class="mastfoot mt-auto">
  <div class="inner">
      <p>Copywrited &copy; 2018 Company, Inc.</p>
  </div>
</footer>
@endsection 

{{-- 
@extends('layouts.app')
@section('content') 
{{-- @include('layouts.indexhome.html')  

<body>
<div class="jumbotron text-center" > 
<img src="storage\_images\Driver1.jpg" class="img-fluid" alt="Responsive image" width="90%" height="250"> 
    <div class="container">
     <h1 style="color:black;">Welcome to Driving License Generation Software!</h1>
    <p style="color:blue;">This is the software to apply for a driving license.</p>
    {{-- @guest 
    {{-- @if (Auth::guest()) 
    <p><a class="btn btn-primary btn-lg" href="/login" role=="button">Login</a>  <a class="btn btn-success btn-lg" href="/register" role="button">Register and Apply!</a></p> 
    {{-- @else 
    </br>
</div>
<div class="container">
    <br><br>
    <h2 style="color:purple;"><strong>Why Should You Apply for Driving Licence (DL) online?</strong></h2><br>
    <p style="color:black;">It is ideal to apply for your DL online, as it is more convenient and takes lesser amount of time than going through the entire process manually.
         You can simply download the license application form from the internet and furnish it with all the necessary documents after filling up the form duly. Once this process is conducted smoothly, 
         you need to sit for a written test and interview, and clear it to successfully obtain the licence.</p><br>
    <p style="color:black;">Please note that online registration for Learner's License (LL) is only for vehicles which are used for personal use and not for commercially transport purposes. 
        In a single online application form the applicant can apply for LL for more than one category of vehicle. 
        The preliminary test is common for all vehicles irrespective of the category of vehicle for which the LL is applied.</p><br>
        <p style="color:black;">
        <a href="/services">More Information</a></p>

</div>
</div>

</body>

{{-- <aside>
		<p class="ad">Avail<br/>50% off<br/>today!!!</p>
			<a href="https://www.myntra.com/" target="_blank">BUY NOW</a>
		</aside> 
<footer class="mastfoot mt-auto">
  <div class="inner">
      <p>Copywrited &copy; 2018 Company, Inc.</p>
  </div>
</footer>
@endsection 
 --}}
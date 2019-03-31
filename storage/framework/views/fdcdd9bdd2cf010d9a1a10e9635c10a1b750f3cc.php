<?php $__env->startSection('content'); ?> 

<body>
<div class="jumbotron text-center" > 
 <img src="storage\_images\Driver1.jpg" class="img-fluid" alt="Responsive image" width="90%" height="250"> 
    <div class="container">
        
     <h1 style="color:black;">Welcome to Driving License Generation Software!</h1>
    <p style="color:blue;">This is the software to apply for a driving license.</p>
    
    
    <p><a class="btn btn-primary btn-lg" href="/login" role=="button">Login</a>  <a class="btn btn-success btn-lg" href="/register" role="button">Register and Apply!</a></p> 
    
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


        <br>
<footer class="mastfoot mt-auto">
  <div class="inner">
      <p>Copywrited &copy; 2018 Company, Inc.</p>
  </div>
</footer>
<?php $__env->stopSection(); ?> 


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
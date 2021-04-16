<div style="clear: both; margin-top: 130px;" class="panel panel-default" >
  <footer class="footer" style="background-color: rgb(135, 141, 141)" >
    <div class="container">
        <div class="row">             
            <div class="col-5 offset-1 col-sm-2">
                <h5>Links</h5>
                <ul class="list-unstyled">
                    <li><a href="/" style="color: bisque" >Home</a></li>
                    @if(Session::has('user'))
                    <li><a href="/myorder" style="color: bisque" >Orders</a></li>
                    <li><a href="/cartlist" style="color: bisque" >Cart</a></li>
                    @endif
                    
                   
                </ul>
            </div>
            <div class="col-6 col-sm-5"> 
                <h5>Our Address</h5>
                <address style="color: bisque" >
                  E-commerce<br>
                  No. 3, RMZ Infinity-Tower E<br>
                  Old Madras Road
                  3rd Floors <br>
                  Bangalore, 560 016 India<br>
                  <i class="fa fa-phone fa-lg"></i>: +91 12343 56782<br>
                 <i class="fa fa-fax fa-lg"></i>: +91 87653 43212<br>
                  <i class="fa fa-envelope fa-lg"></i>: 
                  <a href="mailto:ecommerce@online.org"style="color: bisque" >ecommerce@online.org</a>
           </address>
            </div>
            <div class="col col-sm-4 align-self-center">
                <div style="text-align:center">
                    <a style="color: bisque" class="btn btn-social-icon btn-google-plus" href="http://google.com/+"><i class="fa fa-google-plus fa-lg"></i></a>
                    <a  style="color: bisque" class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook fa-lg"></i></a>
                    <a style="color: bisque"  class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin fa-lg"></i></a>
                    <a style="color: bisque"  class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter fa-lg"></i></a>
                    <a style="color: bisque"  class="btn btn-social-icon btn-youtube" href="http://youtube.com/"><i class="fa fa-youtube fa-lg"></i></a>
                    <a style="color: bisque"  class="btn btn-social-icon" href="mailto:"><i class="fa fa-envelope-o fa-lg"></i></a>
                </div>
                <div class="map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.6571758815767!2d77.65848861433437!3d12.99376531790839!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1136218ea079%3A0xc6bf20ea89abad92!2sGoogle%20RMZ%20Infinity!5e0!3m2!1sen!2sin!4v1618368043863!5m2!1sen!2sin" 
                  width="400" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
       </div>
       <div class="row justify-content-center">             
            <div class="col-auto" >
              <p style="color: bisque; margin-left: 430px;" >© Copyright 2021 ecommerce</p>
            </div>
       </div>
    </div>
</footer>
  </div>
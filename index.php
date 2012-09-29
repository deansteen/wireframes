  <?php include 'inc/header.php'; ?>
  
  <div class="container">
    <div class="row-fluid">
      <div id="accordion2" class="accordion alert-pane">
        <div class="accordion-group">
          <div class="accordion-heading">
            <div class="alert-item"><a href="http://transit.511.org/accessible/announcements/expired.aspx"><strong>Service Advisory:</strong> SF Muni Metro Delays</a></div>
            <a href="#collapseOne" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle pull-right">

              View <strong>2</strong> more advisories
            </a>
          </div>
          <div class="accordion-body collapse" id="collapseOne">
            <div class="accordion-inner">
              <div class="alert-item"><strong>Traffic Advisory:</strong> Another Immediate Alert</div>
              <div class="alert-item"><strong>Service Advisory:</strong> Another Immediate Alert</div>
            </div>
          </div>
        </div>
      </div>
    </div>  
      
  
	<div class="row-fluid no-bottom-margin">
      <div class="span8">
        <div id="myCarousel" class="carousel slide">
            <!-- Carousel items -->
            <div class="carousel-inner">
            <div class="active item">
            	<div class="fpo">Promo</div>
            	<div class="carousel-caption">
                <h3>First Slide label</h3>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </div>
            </div>
            <div class="item">
            	<div class="fpo"></div>
            	<div class="carousel-caption">
                <h3>Second Slide label</h3>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </div>
            </div>
            <div class="item">
            	<div class="fpo"></div>
            	<div class="carousel-caption">
                <h3>Third Slide label</h3>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </div>
            </div>
            </div>
            <!-- Carousel nav -->
            <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
            <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
        </div>
      </div>
      <div class="span4">
	  <?php include 'inc/trip-planner.php'; ?>
      </div>
    </div>
    
    <div class="row-fluid">
       <div class="span8">
         <div class="row-fluid">
           <div class="span4">
       		<h3>Transit</h3>
            <ul class="unstyled">
              <li><a href="services/muni/">Muni</a></li>
              <li><a href="#">Cable Cars</a></li>
              <li><a href="#">Accessibility</a></li>
              <li><a href="#">Special Event Transit</a></li>
              <li><a href="#">Transit Citation Information</a></li>
              <li><a href="services/transit.php">View all</a></li>
            </ul>
            
          </div>
           <div class="span4">
       		<h3>Bike &amp; Walk</h3>
            <ul class="unstyled">
              <li><a href="#">Bike SF Map</a></li>
              <li><a href="#">Walk SF Map</a></li>
              <li><a href="#">Bicycles Parking</a></li>
              <li><a href="#">Bicycle Rules &amp; Safety</a></li>
              <li><a href="#">Bicycle Sharing</a></li>
              <li><a href="#">View all</a></li>
            </ul>
          </div>
          
          <div class="span4">
            <h3>Parking</h3>
            <ul class="unstyled">
              <li><a href="#">Pay parking tickets</a></li>
              <li><a href="#">Buy parking cards</a></li>
              <li><a href="#">Parking Permits</a></li>
              <li><a href="#">Holiday Enforcement</a></li>
              <li><a href="#">Booted Vehicles</a></li>
              <li><a href="#">View all</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="span4">
        <?php include 'inc/real-time-departures.php'; ?>  
      </div>
    </div>
    
   
    <hr>
    <div class="row-fluid block-header">
      <div class="span8">
        <h3>News &amp; Updates</h3>
      </div>
      <div class="span4">
        <a href="news-updates/index.php" class="pull-right">View all news &amp; updates</a>
      </div>
    </div>
    <div class="row-fluid">
      <div class="span12">
        <ul class="unstyled">
         <li class="span3"><a href="#">Weekend Transit and Traffic Advisory</a></li>
         <li class="span3"><a href="#">Statement from Chairman of the SFMTA Board of Directors and SFMTA Director of Transportation on Advertisement</a></li>
         <li class="span3"><a href="#">SFMTA Board Chairman and Director of Transportation Issue Statements on Civil Grand Jury Report</a></li>
         <li class="span3"><a href="#">Central Subway Project: Utility relocation starting in North Beach on August 13 </a></li>
        </ul>  
      </div>
    </div>
    
  </div>


  <?php include 'inc/footer.php'; ?>
 
    




  </body>
</html>

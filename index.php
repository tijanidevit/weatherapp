<?php
  if (isset( $_SESSION['weather_user'])) {
    $code = $_SESSION['weather_user']['location_code'];
  }
  else{
    $code = '';
  }

?>


<!doctype html>
<html lang="en">
  <head>
    <?php include_once 'components/head.php' ?>
  </head>

<body
  <?php if (isset( $_SESSION['weather_user'])) :?>
    onload=getIndexTodayForecast(<?php echo $code ?>)
  <?php else: ?>
    onload=getIndexTodayForecast()
  <?php endif ?>  
>
  
<?php include_once 'components/header.php' ?>
<section class="float-start w-100 banner-part1">
      <div class="container">
        
      <div class="text-center my-3">
                <div class="spinner" id="spinner">
                    <span
                        class="spinner-grow spinner-grow-lg"
                        role="status"
                        aria-hidden="true"
                    ></span>
                    <span
                        class="spinner-grow spinner-grow-lg"
                        role="status"
                        aria-hidden="true"
                    ></span>
                    <span
                        class="spinner-grow spinner-grow-lg"
                        role="status"
                        aria-hidden="true"
                    ></span>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 top-part-banner1">
                <div class="col">
                  <div class="partly_cloudy mainIcon">
                  <img src="https://v5i.tutiempo.net/wi/02/90/2.png"  alt="">
                  </div>
                  <h1 class="mb-2"> <span class="currentTemp">34</span>
                  </h1>
                </div>
                <div class="col">
                    <div class="date-m ms-lg-auto d-table">
                      <h3>  
                        <i class="fas fa-map-marker-alt"></i> 
                        <span class="location">Lagos</span> 
                        <span class="d-block dateToday"> September 18, 2022</span>
                      </h3>
                    </div>
                    
                    <figure class="m-0">
                       <img src="images/banne-img-right.png" alt="bnm"/>
                    </figure>
                </div>
            </div>

            <div class="hours-div">
                <h2> 24 Hours Forecast </h2>
                <!-- <div class="weather-sild1 owl-carousel owl-theme" id="hourly">
                </div> -->

                
                <div class="row" id="hourly">
                </div>
            </div>
      </div>

</section>

<section class="body-part float-start w-100">
    <div class="daily-wather night-moon">
        <div class="container">
           <div class="content-sec-wh">
           <h1> Daily Weather Forecast </h1>
           <div class="row weekly-div mt-4 gy-3 gy-lg-0" id="daily">
              

          </div>

          <div class="all-forcuset mt-5">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"></button>
              </li>
              
            </ul>
            
            
            <div class="tab-content" id="myTabContent">
                <div
                  class="tab-pane fade show active"
                  id="home"
                  role="tabpanel"
                  aria-labelledby="home-tab"
                >
                  <div class="comon-report-divbn">
                    <h2 class="today-hilights1 mt-4">Today's Highlights</h2>
                    <div class="row mt-4 gy-5 gx-lg-5">
                      <div class="col-lg-4">
                        <div class="left-sec-d1">
                          <div class="mainIcon"></div>
                          <h2 class="currentTemp"></h2>
                          <div class="d-flex justify-content-between">
                            
                        <span class="location">Lagos</span> 
                        <span class="dateToday"> September 18, 2022</span>
                          </div>
                          <hr />
                          <ul class="list-unstyled mt-3 mb-0">
                            <li>
                              <i class="fas fa-cloud"></i> <span id="condition">Patchy Culdy Day</span>
                            </li>
                          </ul>
                        </div>
                      </div>

                      <div class="col-lg-8">
                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                          <div class="col-md-6">
                            <div class="comon-report uv">
                              <h5>Wind Direction</h5>
                              
                              <h2 id="windDirection"></h2>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="comon-report uv">
                              <h5>Wind Staus</h5>
                              <h2 id="wind"></h2>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="comon-report sun-set-div">
                              <h5>Sunrise & Sunset</h5>
                              <div class="sum">
                                <h6><i class="fas fa-moon"></i> <span id="sunset">06:30 AM</span></h6>
                              </div>
                              <div class="sum">
                                <h6><i class="fas fa-sun"></i> <span id="sunrise">06:30 AM</span></h6>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="comon-report uv">
                              <h5>Humidity</h5>
                              <h2 id="humidity">20 <sup> % </sup></h2>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          
             
          </div>
        </div>

        
      
       <figure class="bg-wath">
        <img src="images/pexels-tom-fisk-2739666.jpg" alt="gb"/>
      </figure>
        
    </div>
</section>

<?php include_once 'components/footer.php' ?>
<?php include_once 'components/modal.php' ?>
<?php include_once 'components/scripts.php' ?>

</body>

</html>

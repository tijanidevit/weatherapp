<!doctype html>
<html lang="en">
  <head>
    <?php include_once 'components/head.php' ?>
  </head>

<body>
  
<?php include_once 'components/header.php' ?>
<section class="float-start w-100 banner-part1">


      <div class="container">
            <div class="row row-cols-1 row-cols-md-2 top-part-banner1">
                <div class="col">
                  <div class="partly_cloudy">
                    <div class="partly_cloudy__sun"></div>
                    <div class="partly_cloudy__cloud"></div>
                  </div>
                  <h1 class="mb-2"> <span id="currentTemp">34</span> <sup>0 </sup>C
                  </h1>
                </div>
                <div class="col">
                    <div class="date-m ms-lg-auto d-table">
                      <h3>  
                        <i class="fas fa-map-marker-alt"></i> 
                        <span id="location"> Lagos</span> 
                        <span class="d-block" id="dateToday"> September 18, 2022</span>
                      </h3>
                    </div>
                    
                    <figure class="m-0">
                       <img src="images/banne-img-right.png" alt="bnm"/>
                    </figure>
                </div>
            </div>

            <div class="hours-div">
                <h2> Hourly </h2>
                <div class="weather-sild1 owl-carousel owl-theme">
                    <div class="live-weather text-center">
                        <h5> Now </h5>
                        <div class="partly_cloudy">
                          <div class="partly_cloudy__sun"></div>
                          <div class="partly_cloudy__cloud"></div>
                        </div>
                        <h4> 30 <sup>0</sup>C </h4>
                    </div>

                    <div class="live-weather text-center">
                      <h5> 11am </h5>
                      <div class="partly_cloudy">
                        <div class="partly_cloudy__sun"></div>
                        <div class="partly_cloudy__cloud"></div>
                      </div>
                      <h4> 31 <sup>0</sup>C </h4>
                    </div>

                    <div class="live-weather text-center">
                      <h5> 12pm </h5>
                      <div class="partly_cloudy">
                        <div class="partly_cloudy__sun"></div>
                        <div class="partly_cloudy__cloud"></div>
                      </div>
                      <h4> 32 <sup>0</sup>C </h4>
                    </div>

                    <div class="live-weather text-center">
                      <h5> 1pm </h5>
                      <div class="rainy mx-auto">
                        <div class="rainy__cloud"></div>
                        <div class="rainy__rain"></div>
                      </div>
                      <h4> 33 <sup>0</sup>C </h4>
                    </div>

                    <div class="live-weather text-center">
                      <h5> 2pm </h5>
                      <div class="partly_cloudy">
                        <div class="partly_cloudy__sun"></div>
                        <div class="partly_cloudy__cloud"></div>
                      </div>
                      <h4> 33 <sup>0</sup>C </h4>
                    </div>

                    <div class="live-weather text-center">
                      <h5> 3pm </h5>
                      <div class="cloudy mx-auto"></div>
                      <h4> 33 <sup>0</sup>C </h4>
                    </div>

                    <div class="live-weather text-center">
                      <h5> 4pm </h5>
                      <div class="partly_cloudy">
                        <div class="partly_cloudy__sun"></div>
                        <div class="partly_cloudy__cloud"></div>
                      </div>
                      <h4> 33 <sup>0</sup>C </h4>
                    </div>


                </div>
            </div>
           
            
           
      </div>

</section>

<section class="body-part float-start w-100">
    <div class="daily-wather night-moon">
        <div class="container">
           <div class="content-sec-wh">
           <h1> Weekly Weather Forecast </h1>
           <div class="row weekly-div mt-4 gy-3 gy-lg-0">
              <div class="col">
                <div class="comon-days">
                    <h4> Mon </h4>
                    <div class="partly_cloudy">
                      <div class="partly_cloudy__sun"></div>
                      <div class="partly_cloudy__cloud"></div>
                    </div>
                    <h6> 12° / <span class="ms-1"> 2°</span> </h6>
                </div>
              </div>

              <div class="col">
                <div class="comon-days">
                    <h4> Tue </h4>
                    <div class="cloudy"></div>
                    <h6> 12° / <span class="ms-1"> 2°</span> </h6>
                </div>
              </div>

              <div class="col">
                <div class="comon-days">
                    <h4> Wen </h4>
                    <div class="partly_cloudy">
                      <div class="partly_cloudy__sun"></div>
                      <div class="partly_cloudy__cloud"></div>
                    </div>
                    <h6> 30° / <span class="ms-1"> 25°</span> </h6>
                </div>
              </div>

              <div class="col">
                <div class="comon-days">
                    <h4> Thu </h4>
                    <div class="sunny"></div>
                    <h6> 12° / <span class="ms-1"> 2°</span> </h6>
                </div>
              </div>

              <div class="col">
                <div class="comon-days">
                    <h4> Fri </h4>
                    <div class="partly_cloudy">
                      <div class="partly_cloudy__sun"></div>
                      <div class="partly_cloudy__cloud"></div>
                    </div>
                    <h6> 25° / <span class="ms-1"> 20°</span> </h6>
                </div>
              </div>

              <div class="col">
                <div class="comon-days">
                    <h4> Sat </h4>
                    <div class="thundery">
                      <div class="thundery__cloud"></div>
                      <div class="thundery__rain"></div>
                    </div>
                    <h6> 24° / <span class="ms-1"> 12°</span> </h6>
                </div>
              </div>

              <div class="col">
                <div class="comon-days">
                    <h4> Sun </h4>
                    <div class="rainy">
                      <div class="rainy__cloud"></div>
                      <div class="rainy__rain"></div>
                    </div>
                    <h6> 30° / <span class="ms-1"> 22°</span> </h6>
                </div>
              </div>
          </div>

          <div class="all-forcuset mt-5">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Today</button>
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
                          <div class="sunny"></div>
                          <h2>12 <sup> °C</sup></h2>
                          <div class="d-flex justify-content-between">
                            <span>
                              <i class="fas fa-map-marker-alt"></i> Paris
                            </span>
                            <span> Monday, May 3 </span>
                          </div>
                          <hr />
                          <ul class="list-unstyled mt-3 mb-0">
                            <li>
                              <i class="fas fa-cloud"></i> Patchy Culdy Day
                            </li>
                            <li><i class="fas fa-moon"></i> 19:30</li>
                          </ul>
                        </div>
                      </div>

                      <div class="col-lg-8">
                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                          <div class="col">
                            <div class="comon-report uv">
                              <h5>UV Index</h5>
                              <figure>
                                <img src="images/5643142.png" alt="pn" />
                              </figure>
                              <ul
                                class="list-unstyled d-flex justify-content-center"
                              >
                                <li>2</li>
                                <li>3</li>
                                <li>4</li>
                                <li>5</li>
                                <li>6</li>
                              </ul>
                            </div>
                          </div>

                          <div class="col">
                            <div class="comon-report uv">
                              <h5>Wind Staus</h5>
                              <h2>7.70 <sub> km/h </sub></h2>
                            </div>
                          </div>

                          <div class="col">
                            <div class="comon-report sun-set-div">
                              <h5>Sunrise & Sunset</h5>
                              <div class="sum">
                                <h6><i class="fas fa-moon"></i> 06:30 AM</h6>
                              </div>
                              <div class="sum">
                                <h6><i class="fas fa-sun"></i> 06:30 AM</h6>
                              </div>
                            </div>
                          </div>

                          <div class="col">
                            <div class="comon-report uv">
                              <h5>Humidity</h5>
                              <h2>20 <sup> % </sup></h2>
                            </div>
                          </div>

                          <div class="col">
                            <div class="comon-report uv">
                              <h5>Visibility</h5>
                              <h2>8.9 <sup> KM </sup></h2>
                            </div>
                          </div>

                          <div class="col">
                            <div class="comon-report uv">
                              <h5>Air Quality</h5>
                              <h2>105</h2>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="tab-pane fade"
                  id="profile"
                  role="tabpanel"
                  aria-labelledby="profile-tab"
                >
                  <div class="comon-report-divbn">
                    <h2 class="today-hilights1 mt-5">Tomorrow's Highlights</h2>
                    <div class="row mt-4 gx-lg-5">
                      <div class="col-lg-4">
                        <div class="left-sec-d1">
                          <div class="sunny"></div>
                          <h2>12 <sup> °C</sup></h2>
                          <div class="d-flex justify-content-between">
                            <span>
                              <i class="fas fa-map-marker-alt"></i> Paris
                            </span>
                            <span> Monday, May 3 </span>
                          </div>
                          <hr />
                          <ul class="list-unstyled mt-3 mb-0">
                            <li>
                              <i class="fas fa-cloud"></i> Patchy Culdy Day
                            </li>
                            <li><i class="fas fa-moon"></i> 19:30</li>
                          </ul>
                        </div>
                      </div>

                      <div class="col-lg-8">
                        <div class="row row-cols-1 row-cols-lg-3">
                          <div class="col">
                            <div class="comon-report uv">
                              <h5>UV Index</h5>
                              <figure>
                                <img src="images/5643142.png" alt="pn" />
                              </figure>
                              <ul
                                class="list-unstyled d-flex justify-content-center"
                              >
                                <li>2</li>
                                <li>3</li>
                                <li>4</li>
                                <li>5</li>
                                <li>6</li>
                              </ul>
                            </div>
                          </div>

                          <div class="col">
                            <div class="comon-report uv">
                              <h5>Wind Staus</h5>
                              <h2>7.70 <sub> km/h </sub></h2>
                            </div>
                          </div>

                          <div class="col">
                            <div class="comon-report sun-set-div">
                              <h5>Sunrise & Sunset</h5>
                              <div class="sum">
                                <h6><i class="fas fa-moon"></i> 06:30 AM</h6>
                              </div>
                              <div class="sum">
                                <h6><i class="fas fa-sun"></i> 06:30 AM</h6>
                              </div>
                            </div>
                          </div>

                          <div class="col">
                            <div class="comon-report uv">
                              <h5>Humidity</h5>
                              <h2>20 <sup> % </sup></h2>
                            </div>
                          </div>

                          <div class="col">
                            <div class="comon-report uv">
                              <h5>Visibility</h5>
                              <h2>8.9 <sup> KM </sup></h2>
                            </div>
                          </div>

                          <div class="col">
                            <div class="comon-report uv">
                              <h5>Air Quality</h5>
                              <h2>105</h2>
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

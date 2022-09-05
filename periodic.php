<?php
  session_start();
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

<section class="float-start w-100 banner-part1 sub-page-banner">

      <div class="container">
           <div class="d-md-flex align-items-center justify-content-between">
                <h1 class="m-0"> Location Historic Forecast
                </h1>
                <nav aria-label="breadcrumb m-0">
                    <p>Select a city/town to get their historic days forecasts</p>
                </nav>
           </div>
      </div>

</section>

<section class="body-part float-start w-100">
   
      <div class="new-page-toal map-page-total">
          <div class="container">
             
            <form method="post" id="selector">                
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Please enter a city/town in Nigeria</label>
                            <input class="form-control" type="text" name="city" id="city" />
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Please enter start date</label>
                            <input
                                class="form-control"
                                type="date"
                                name="startdate"
                                id="startdate"
                            />
                        </div>
                    </div>

                    
                    <div class="col-md-4">
                        <div class="form-group">
                        <label for="">Please enter end date</label>
                        <input
                            class="form-control"
                            type="date"
                            name="enddate"
                            id="enddate"
                        />
                        </div>
                    </div>

                    <div class="col-md-12 my-3">
                        <button type="button" id="forcastBtn" class="btn btn-dark">
                        Get Forcast
                        </button>
                    </div>
                </div>
            </form>
            

            <div class="d-non mt-5" id="result">
                <div class="content-sec-wh">
                    <h1> Daily Forecast </h1>
                    <div class="row weekly-div mt-4" id="dailyPeriodic">
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once 'components/footer.php' ?>
<?php include_once 'components/modal.php' ?>
<?php include_once 'components/scripts.php' ?>

</body>

</html>

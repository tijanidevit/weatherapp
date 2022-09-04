const CURRENT_URL =
  "https://api.tutiempo.net/json/?lan=en&apid=aCDq4aX4zaXv2un&lid=";

const getCurrentWeatherData = async (code) => {
  let url = `${CURRENT_URL}${code}`;

  data = $.ajax({
    url: url,
    type: "get",
    data: {},
    beforeSend: function () {
      $("#spinner").removeClass("d-none");
    },
    success: function (data) {
      return data;
    },
    complete: function () {
      $("#spinner").addClass("d-none");
    },
  });

  return data;
};

function getDate(date) {
  var days = [
    "Sunday",
    "Monday",
    "Tuesday",
    "Wednesday",
    "Thursday",
    "Friday",
    "Saturday",
  ];
  var months = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December",
  ];
  let dc = new Date(date);
  var day = days[dc.getDay()];
  var month = months[dc.getMonth()];
  var year = dc.getFullYear();
  var todayDate = dc.getDate();
  return `${day} ${month} ${todayDate}, ${year} `;
}

function getShortDay(date) {
  var days = ["Sun", "Mon", "Tue", "Wed", "Thurs", "Fri", "Sat"];
  let dc = new Date(date);
  var day = days[dc.getDay()];
  return `${day}`;
}

function tConvert(time) {
  // Check correct time format and split into components
  time = time.toString().match(/^([01]\d|2[0-3])(:)([0-5]\d)(:[0-5]\d)?$/) || [
    time,
  ];

  if (time.length > 1) {
    // If time format correct
    time = time.slice(1); // Remove full string match value
    time[5] = +time[0] < 12 ? " AM" : " PM"; // Set AM/PM
    time[0] = +time[0] % 12 || 12; // Adjust hours
  }
  return time.join(""); // return adjusted time or original string
}

async function getIndexTodayForecast(code = 101170) {
  if (code == "" || code == null) {
    data = await getCurrentWeatherData(101170);
  } else {
    data = await getCurrentWeatherData(code);
  }

  let today = data.day1;
  let locality = data.locality;
  let temperatureUnit = data.information.temperature;
  let humidityUnit = data.information.humidity;
  let windUnit = data.information.wind;

  $("#condition").text(today.text);
  $(".mainIcon").html(
    `<img src="https://v5i.tutiempo.net/wi/02/90/${today.icon}.png"  alt="">`
  );
  $(".currentTemp").text(`${today.temperature_max}${temperatureUnit}`);
  $("#sunset").text(tConvert(today.sunset));
  $("#sunrise").text(`${tConvert(today.sunrise)} AM`);
  $(".dateToday").text(getDate(today.date));
  $("#humidity").text(`${today.humidity}${humidityUnit}`);
  $("#wind").text(`${today.wind}${windUnit}`);
  $("#windDirection").text(`${today.wind_direction}`);

  $(".location").text(`${locality.name}, ${locality.country} `);

  getHourlyData(data.hour_hour);

  days = [data.day2, data.day3, data.day4, data.day5, data.day6, data.day7];
  getDailyData(days);
}

function getHourlyData(hours) {
  hours = Object.entries(hours);
  hours.shift();

  var sn = 0;
  var result = "";
  $("#hourly").empty();
  hours.map((hour) => {
    hour = hour[1];
    $("#hourly").append(
      `<div class="col-md-3 col-4">
          <div class="live-weather  text-center">
          <h5> ${hour.hour_data} </h5>
          <div class="partly_cloudy">
          <img src="https://v5i.tutiempo.net/wi/02/90/${hour.icon}.png"  alt="">
          </div>
          <h4> ${hour.temperature} &deg; c </h4>
        </div>
      </div>
    `
    );

    sn += 1;
  });
}

function getDailyData(days) {
  $("#daily").empty();
  days.map((day) => {
    $("#daily").append(
      `<div class="col">
        <div class="comon-days">
            <h4> ${getShortDay(tConvert(day.date))} </h4>
            <div class="partly_cloudy">
              <img src="https://v5i.tutiempo.net/wi/02/90/${
                day.icon
              }.png"  alt="">
            </div>
            <h6> ${day.temperature_max} &deg; c </h6>
        </div>
      </div>`
    );
  });
}

$(".SelectLoc").change(function () {
  var code = $(this).val();
  $("#spinner").show();
  $("#resultArea").hide();
  setTimeout(() => {
    getIndexTodayForecast(code);
    $("#resultArea").show();
  }, 0000);

  // $("#spinner").addClass("d-none");
});

const getHistoryWeatherData = async (city, startdate, enddate) => {
  let url = `https://weather.visualcrossing.com/VisualCrossingWebServices/rest/services/timeline/${city},ng/${startdate}/${enddate}?key=YBR5N9W7TVSMR37ZXF8LRNQLB`;

  data = $.ajax({
    url: url,
    type: "get",
    data: {},
    beforeSend: function () {
      $("#result").addClass("d-none");
    },
    success: function (data) {
      return data;
    },
    complete: function () {
      $("#result").removeClass("d-none");
    },
  });

  return data;
};

function convertFtoC(f) {
  return Math.ceil((f - 32) / 1.8);
}

function getOtherData(data) {
  $("#resolvedAddress").text(data.resolvedAddress);
  $("#description").text(data.description);
}

async function getIndexHistoryForecast() {
  var startdate = $("#startdate").val();
  var enddate = $("#enddate").val();
  var city = $("#city").val();
  data = await getHistoryWeatherData(city, startdate, enddate);

  $("#nextDays").remove();
  $("#nextDaysArea").append('<canvas id="nextDays" height="100"><canvas>');
  days = data.days;
  chartDays = [];
  chartTemperatures = [];
  days.map((day) => {
    chartDays.push(day.datetime);
    chartTemperatures.push(convertFtoC(day.tempmax));
  });

  getOtherData(data);

  const nextDay = document.getElementById("nextDays");
  const nextDayV = new Chart(nextDay, {
    type: "line",
    data: {
      labels: chartDays,
      datasets: [
        {
          label: "Days Temperature",
          data: chartTemperatures,
          borderColor: ["red"],
          borderWidth: 3,
        },
      ],
    },
    options: {
      scales: {
        y: {
          beginAtZero: true,
        },
      },
    },
  });
}

$("#forcastBtn").click(function () {
  getIndexHistoryForecast();
});

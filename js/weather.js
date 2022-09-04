const CURRENT_URL =
  "https://api.tutiempo.net/json/?lan=en&apid=aCDq4aX4zaXv2un&lid=";

const getCurrentWeatherData = async (code) => {
  let url = `${CURRENT_URL}${code}`;

  data = $.ajax({
    url: url,
    type: "get",
    data: {},
    success: function (data) {
      return data;
    },
  });

  return data;
};

async function getIndexTodayForecast(code = 101170) {
  data = await getCurrentWeatherData(code);

  let today = data.day1;
  let locality = data.locality;
  let temperatureUnit = data.information.temperature;
  let humidityUnit = data.information.humidity;
  let windUnit = data.information.wind;
  $("#location").text(`${locality.name}, ${locality.country} (${today.text})`);

  $("#icon").attr("src", `https://v5i.tutiempo.net/wi/02/90/${today.icon}.png`);
  $("#temp").text(`${today.temperature_max}${temperatureUnit}`);
  $("#sunset").text(`${today.sunset}`);
  $("#sunrise").text(`${today.sunrise}`);
  $("#dateToday").text(`${today.dateToday}`);
  $("#humidity").text(`${today.humidity}${humidityUnit}`);
  $("#wind").text(`${today.wind}${windUnit}`);
}

getIndexTodayForecast();

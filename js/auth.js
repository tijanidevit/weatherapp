$("#registerForm").submit(function (e) {
  e.preventDefault();

  $.ajax({
    url: url,
    type: "get",
    data: $(this).serialze(),
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
});

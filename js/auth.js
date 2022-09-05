$("#registerForm").submit(function (e) {
  e.preventDefault();
  $("#regSpinner").show();

  $.ajax({
    url: "ajax/register",
    type: "post",
    data: $(this).serialize(),
    beforeSend: function () {
      $("#regResult").addClass("d-none");
      $("#regSpinner").removeClass("d-none");
    },
    success: function (data) {
      if (data == 1) {
        location.reload();
      } else {
        $("#regResult").html(data);
      }
    },
    complete: function () {
      $("#regSpinner").addClass("d-none");
      $("#regResult").removeClass("d-none");
    },
  });

  $("#regSpinner").hide();
});

$("#loginForm").submit(function (e) {
  e.preventDefault();
  $("#logSpinner").show();

  $.ajax({
    url: "ajax/login",
    type: "post",
    data: $(this).serialize(),
    beforeSend: function () {
      $("#logResult").addClass("d-none");
      $("#logSpinner").removeClass("d-none");
    },
    success: function (data) {
      if (data == 1) {
        location.reload();
      } else {
        $("#logResult").html(data);
      }
    },
    complete: function () {
      $("#logSpinner").addClass("d-none");
      $("#logResult").removeClass("d-none");
    },
  });

  $("#logSpinner").hide();
});

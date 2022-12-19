$(document).ready(function () {
  //register
  $("#reg-form").submit(function (event) {
    var sent_data = {
      nama: $("#reg-nama").val(),
      bd: $("#reg-bd").val(),
      jk: $("#reg-jk").val(),
      email: $("#reg-email").val(),
      pw: $("#reg-pw").val(),
    };

    $.ajax({
      type: "POST",
      url: "reg.php",
      data: sent_data,
    }).done(function (response) {
      window.alert(response);
    });
    event.preventDefault();
  });

  $("#login-form").submit(function (event) {
    var sent_data = {
      email: $("#log-email").val(),
      pw: $("#log-pw").val(),
    };

    $.ajax({
      type: "POST",
      url: "log-act.php",
      data: sent_data,
    }).done(function (response) {
      window.alert(response);
      if (response == "Login berhasil!") window.location.replace("./index.php");
    });

    event.preventDefault();
  });
});

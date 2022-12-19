$(function () {
  $("#reg-form").on("submit", function () {
    e.preventDefault();
    $.ajax({
      type: "POST",
      url: "./reg.php",
      data: {
        nama: $(this).nama.value,
        bd: $(this).bd.value,
        jk: $(this).jk.value,
        email: $(this).email.value,
        pw: $(this).pw.value,
      },
    });
    return true;
  });
});

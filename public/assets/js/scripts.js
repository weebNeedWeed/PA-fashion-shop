$("#logout-button").on("click", function () {
  $("#logout-modal").show();

  $(".logout-modal-close").click(() => {
    $("#logout-modal").hide();
  });

  $("#logout-modal-confirmation").click(() => {
    $("#logout-form").submit();
  });
});

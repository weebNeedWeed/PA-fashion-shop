$(".closeBtn").click(() => {
  $("#cancel-modal").hide();
});

$(".cancel-order-btn").click(function () {
  const button = $(this);
  const orderId = button.data("order-id");

  $("#cancel-modal").show();

  $("#cancel-btn").click(function () {
    $(`#cancel-form-${orderId}`).submit();
  });
});

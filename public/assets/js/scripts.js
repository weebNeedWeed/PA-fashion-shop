const formatVND = (number) => {
  const formatted = Intl.NumberFormat("vi-VN", {
    style: "currency",
    currency: "VND",
  }).format(number);

  return formatted.substring(-1, formatted.length - 2);
};

$("#logout-button").on("click", function () {
  $("#logout-modal").show();

  $(".logout-modal-close").click(() => {
    $("#logout-modal").hide();
  });

  $("#logout-modal-confirmation").click(() => {
    $("#logout-form").submit();
  });
});

$(".format-vnd").each(function () {
  const raw = parseInt($(this).text());
  $(this).text(formatVND(raw));
});

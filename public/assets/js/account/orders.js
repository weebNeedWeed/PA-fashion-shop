$(".closeBtn").click(() => {
  $("#cancel-modal").hide();
});

$(".cancel-order-btn").click(function () {
  const button = $(this);
  const orderId = button.data("order-id");

  Swal.fire({
    title: "Thông báo",
    text: "Bạn có muốn huỷ đơn ?",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#d33",
    cancelButtonColor: "#3085d6",
    cancelButtonText: "Đóng",
    confirmButtonText: "Huỷ đơn",
    reverseButtons: true,
  }).then((result) => {
    if (result.isConfirmed) {
      $(`#cancel-form-${orderId}`).submit();
    }
  });
});

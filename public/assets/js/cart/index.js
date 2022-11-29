$(".add, .minus").click(function () {
  const button = $(this);

  const csrfToken = $("meta[name='csrf-token']").attr("content");
  const cartItemId = button.data("cart-item-id");

  const url =
    button[0].className === "add"
      ? "/cart/increaseQuantity"
      : "/cart/decreaseQuantity";

  $.ajax({
    url,
    method: "POST",
    data: {
      cart_item_id: cartItemId,
    },
    headers: {
      "X-CSRF-TOKEN": csrfToken,
    },
    success: (res) => {
      const { message, data, status } = res;

      if (message === "success" && status === 200) {
        const {
          quantity,
          product: { price },
        } = data.cart_item;

        $(`input[data-cart-item-id='${cartItemId}']`).val(quantity);
        $(`span[data-cart-item-id='${cartItemId}']`).text(
          formatVND(price * quantity)
        );

        $(".total-price .format-vnd").text(formatVND(data.total_price));
      }
    },
    error: (err) => {
      console.log(err);
      Swal.fire({
        icon: "error",
        title: "Lỗi",
        text: "Có lỗi xảy ra, vui lòng thử lại",
      });
    },
  });
});

$(".order-button").click(() => {
  Swal.fire({
    title: "Thông báo",
    text: "Bạn có chắc muốn đặt hàng ?",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#d33",
    cancelButtonColor: "#3085d6",
    cancelButtonText: "Đóng",
    confirmButtonText: "Đặt hàng",
    reverseButtons: true,
  }).then((result) => {
    if (result.isConfirmed) {
      $("#order-form").submit();
    }
  });
});

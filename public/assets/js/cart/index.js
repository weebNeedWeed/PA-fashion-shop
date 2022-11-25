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
      toastr.error("Có lỗi xảy ra, vui lòng thử lại");
    },
  });
});

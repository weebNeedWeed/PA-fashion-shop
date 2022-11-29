const formatVND = (number) => {
  const formatted = Intl.NumberFormat("vi-VN", {
    style: "currency",
    currency: "VND",
  }).format(number);

  return formatted.substring(-1, formatted.length - 2);
};

$("#logout-button").on("click", function () {
  Swal.fire({
    title: "Thông báo",
    text: "Bạn có chắc muốn đăng xuất ?",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#d33",
    cancelButtonColor: "#3085d6",
    cancelButtonText: "Đóng",
    confirmButtonText: "Đăng xuất",
    reverseButtons: true,
  }).then((result) => {
    if (result.isConfirmed) {
      $("#logout-form").submit();
    }
  });
});

$(".format-vnd").each(function () {
  const raw = parseInt($(this).text());
  $(this).text(formatVND(raw));
});

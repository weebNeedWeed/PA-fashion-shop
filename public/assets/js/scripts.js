if ($(".toast").length === 1) {
  $(".toast").show();

  const timeOut = setTimeout(() => {
    $(".toast").hide();
  }, 10000);

  $(".toast button").click(() => {
    if (timeOut) {
      clearTimeout(timeOut);
    }

    $(".toast").hide();
  });
}

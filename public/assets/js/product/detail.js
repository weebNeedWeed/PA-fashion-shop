$("#add").click(() => {
  const curr = parseInt($("#quantity").val());

  if (curr === 100) {
    return;
  }

  $("#quantity").val(curr + 1);
});

$("#minus").click(() => {
  const curr = parseInt($("#quantity").val());

  if (curr === 1) {
    return;
  }

  $("#quantity").val(curr - 1);
});

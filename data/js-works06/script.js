$(function() {
  const MSG_TEXT_MAX = "20文字以内で入力してください。";
  const MSG_EMPTY = "入力必須です。";
  const MSG_EMIL_TYPE = "emailの形式ではありません。";
  const MSG_TEXTAREA_MAX = "100文字以内で入力してください。";

  $(".valid-text").keyup(function() {
    let form_g = $(this).closest(".form-group");

    if ($(this).val().length > 20) {
      form_g.removeClass("has-success").addClass("has-error");
      form_g.find(".help-block").text(MSG_TEXT_MAX);
    } else {
      form_g.removeClass("has-error").addClass("has-success");
      form_g.find(".help-block").text("");
    }
  });
});

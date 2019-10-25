$(function() {
  $(".tab_btn li").click(function() {
    let index = $(".tab_btn li").index(this);
    $(".tab_btn li").removeClass("active");
    $(this).addClass("active");
    $(".tab_box")
      .removeClass("show")
      .eq(index)
      .addClass("show");
  });
});

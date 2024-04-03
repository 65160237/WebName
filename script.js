$(".menu > ul > li").click(function (e) {
  // remove active from already active
  $(this).siblings().removeClass("active");

  // add active to Clicked
  $(this).toggleClass("active");

  //if has sub menu open it
  if ($(this).find("ul").length > 0) {
    $(this).find("ul").slideToggle();
  }

  //open
});
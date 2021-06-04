window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    $(".web-content").addClass("onScrollColor")

  } else {
    $(".web-content").removeClass("onScrollColor")

  }
}

// Hide .header on scroll down
var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $(".header").outerHeight();

$(window).scroll(function (event) {
  didScroll = true;
});

setInterval(function () {
  if (didScroll) {
    hasScrolled();
    didScroll = false;
  }
}, 250);

function hasScrolled() {
  var st = $(this).scrollTop();

  // Make scroll more than delta
  if (Math.abs(lastScrollTop - st) <= delta) return;

  // If scrolled down and past the navbar, add class .nav-up.
  if (st > lastScrollTop && st > navbarHeight) {
    // Scroll Down
    $(".header").removeClass("nav-down").addClass("nav-up");
  } else {
    // Scroll Up
    if (st + $(window).height() < $(document).height()) {
      $(".header").removeClass("nav-up").addClass("nav-down");
    }
  }

  lastScrollTop = st;
}

$(document).ready(function () {
  $("#right-menu").sidr({
    side: "right",
    speed: 800,
    timing: "ease",
    body: ".sidr-wrap",
  });
  $("#right-menu").on("click touchstart", function () {
    $(".hamburger-menu").toggleClass("animate");
  });
});

$(window).load(function () {
  $("#right-menu").css("opacity", "1");
  $("#sidr").css("opacity", "1");

  $(".single-tribe_events .tribe-events-event-cost")
    .after(
      "<p class='cost-desc'>No one turned away for lack of money. To reserve your space with sliding scale, contact us at: <a href='mailto:info@dasgongbad.com'>info@dasgongbad.com</a></p>"
    )
    .show();
  $("#tribe-tickets").insertAfter(".cpm-tickets-section");
  $(".single-tribe_events .tribe-events-cal-links").insertAfter(
    "#tribe-events .tribe-events-event-image img"
  );
});

// console.log("muttattttttititssssssss");

document.addEventListener("DOMContentLoaded", function () {
  const iframe = document.querySelector("#popmake-18600 iframe");
  console.log("iframte", iframe);
  if (!iframe) return;

  iframe.addEventListener("load", function () {
    try {
      console.log("trying to access iframe content");
      // Access iframe content
      const iframeDoc = iframe.contentDocument || iframe.contentWindow.document;

      // Observe changes inside iframe
      const observer = new MutationObserver(() => {
        const successMsg = iframeDoc.querySelector("body");
        if (successMsg && successMsg.textContent.includes("successful")) {
          // Close popup
          PUM.close(18600); // Popup Maker function
          observer.disconnect();
        }
      });

      observer.observe(iframeDoc.body, { childList: true, subtree: true });
    } catch (e) {
      console.log(
        "Cannot access iframe content due to cross-domain restrictions."
      );
    }
  });
});

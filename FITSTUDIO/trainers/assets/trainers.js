$(document).ready(function () {
  let trCard = document.querySelectorAll(".box");
  let panelInfo = document.querySelectorAll(".panel__info");
  let more = document.querySelectorAll(".more");
  let btn = document.querySelectorAll(".panel a");
  for (let i = 0; i < trCard.length; i++) {
    btn[i].addEventListener("click", function (e) {
      e.preventDefault();
      $(panelInfo[i]).slideUp(500);
      $(more[i]).slideDown(500);
    });

    $(trCard[i]).mouseleave(function () {
      $(panelInfo[i]).slideDown(0);
      $(more[i]).slideUp(0);
    });
  }

  var swiper = new Swiper(".trainersSwiper", {
    
    spaceBetween: 30,
    slidesPerGroup: 1,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
        spaceBetween: 20
      },
      640: {
        slidesPerView: 2
      },
      991: {
        slidesPerView: 2
      },
      1000: {
        slidesPerView: 2
      },
      
    }
  });
});

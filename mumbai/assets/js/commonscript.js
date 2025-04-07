 new Swiper(".placedStudentSwiper", {
    loop: true,
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    mousewheel: true,
    slidesPerView: "auto",
    autoplay: {
      delay: 2000,
      disableOnInteraction: false
    },
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 150,
      modifier: 1,
      slideShadows: true,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBultets: true
    },
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
  //placedStudent end 
  //Student Review start 
  new Swiper('.slider-wrapper', {
      loop: true,
      gapCursor: true,
      spaceBetween: 20,
      autoplay: {
        delay: 2000,
        disableOnInteraction: false
      },
      // If we need pagination
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamicBultets: true
      },
      // Navigation arrows
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
        0: {
          slidesPerView: 1
        },
        680: {
          slidesPerView:2 
        },
        768: {
          slidesPerView: 2
        },
        992: {
          slidesPerView: 3
        },
        1024: {
          slidesPerView: 3
        },
      }
    });
    // Student Review start end

     //   Popup form
 const popupScreen = document.querySelector(".popup-screen")
 const popBox = document.querySelector(".popup")
 const close = document.querySelector("#close")

 window.addEventListener("load", () => {
     setTimeout(() => {
         popupScreen.classList.add("active");
     }, 5000
     );
     setInterval(() => {
         popupScreen.classList.add("active");
     }, 35000
     )
 });
 function enquiry() {
     popupScreen.classList.add("active")
     // popBox.style.display = "none";
 };
 close.addEventListener("click", function () {
     popupScreen.classList.remove("active")
     // popBox.style.display = "none";
 });
 //   Popup form
  
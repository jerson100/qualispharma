(function () {
  if (document.querySelector("#main")) {
    new Splide("#main", {
      type: "loop",
      perPage: 1,
      autoplay: true,
      interval: 5000,
      pauseOnHover: false,
      pauseOnFocus: false,
      arrows: false,
      pagination: true,
    }).mount();
  }

  if (document.querySelector("#similares")) {
    new Splide("#similares", {
      type: "loop",
      perPage: 3,
      perMove: 1,
      autoplay: true,
      gap: "1.8rem",
      interval: 5000,
      pauseOnHover: false,
      pauseOnFocus: false,
      arrows: false,
      pagination: false,
      breakpoints: {
        1024: {
          perPage: 2,
        },
        768: {
          perPage: 1,
        },
      },
    }).mount();
  }

  if (document.querySelector("#productos")) {
    new Splide("#productos", {
      type: "loop",
      perPage: 2,
      perMove: 1,
      autoplay: true,
      interval: 5000,
      pauseOnHover: false,
      pauseOnFocus: false,
      arrows: false,
      gap: "2rem",
      pagination: true,
    }).mount();
  }

  if (document.querySelector("#partners")) {
    new Splide("#partners", {
      type: "loop",
      perPage: 4,
      perMove: 1,
      autoplay: true,
      interval: 5000,
      pauseOnHover: false,
      pauseOnFocus: false,
      arrows: false,
      gap: "1.2rem",
      pagination: true,
    }).mount(window.splide.Extensions);
  }

  if (document.querySelector(".nuestras-plantas__splide")) {
    new Splide(".nuestras-plantas__splide", {
      type: "slider",
      perPage: 1,
      perMove: 1,
      autoplay: false,
      pauseOnHover: false,
      pauseOnFocus: false,
      arrows: false,
      gap: "1.2rem",
      pagination: true,
    }).mount();
  }

  if (document.querySelector(".splide_partners")) {
    new Splide(".splide_partners", {
      type: "loop",
      perPage: 4,
      perMove: 1,
      autoplay: true,
      pauseOnHover: false,
      pauseOnFocus: false,
      arrows: false,
      gap: "1.2rem",
      pagination: false,
      breakpoints: {
        1024: {
          perPage: 3,
        },
        768: {
          perPage: 2,
        },
      },
    }).mount(window.splide.Extensions);
  }
  if (document.querySelector(".why-line-we-handle__splide")) {
    new Splide(".why-line-we-handle__splide", {
      type: "slider",
      perPage: 1,
      perMove: 1,
      autoplay: true,
      pauseOnHover: false,
      pauseOnFocus: false,
      arrows: false,
      gap: "1.2rem",
      pagination: true,
    }).mount();
  }
})();

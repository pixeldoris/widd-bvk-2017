import $ from 'jquery';
import 'slick-carousel';

function slickCarousel() {
  $('.cert-carousel').slick({
    dots: false,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 0,
    speed: 5000,
    slidesToShow: 1,
    centerMode: true,
    variableWidth: true,
  });

  $('.carousel').slick({
    rows: 2,
    slidesPerRow: 3,
    dots: true,
    speed: 1000,
    autoplay: true,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          rows: 2,
          slidesPerRow: 3,
        },
      },
      {
        breakpoint: 960,
        settings: {
          rows: 2,
          slidesPerRow: 2,
        },
      },
      {
        breakpoint: 560,
        settings: {
          rows: 2,
          slidesPerRow: 1,
        },
      },
    ],
  });

  $('.gallery-carousel').slick({
    rows: 4,
    slidesPerRow: 3,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          rows: 4,
          slidesPerRow: 3,
        },
      },
      {
        breakpoint: 960,
        settings: {
          rows: 4,
          slidesPerRow: 2,
        },
      },
      {
        breakpoint: 560,
        settings: {
          rows: 4,
          slidesPerRow: 1,
        },
      },
    ],
  });
}

export default slickCarousel();

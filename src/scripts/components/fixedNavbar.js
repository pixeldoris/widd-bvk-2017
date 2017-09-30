import $ from 'jquery';

function fixedNavbar() {
  const navOffset = $('.navbar').offset().top;

  $(window).scroll(() => {
    const scrollPos = $(window).scrollTop();

    if (scrollPos >= navOffset) {
      $('.navbar').addClass('-fixed');
      $('.navbar').addClass('-fluid');
    } else {
      $('.navbar').removeClass('-fixed');
      $('.navbar').removeClass('-fluid');
    }
  });
}

export default fixedNavbar();

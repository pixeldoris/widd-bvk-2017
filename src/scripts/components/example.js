import $ from 'jquery';
import { viewport, events, cookie, url } from '../utils';

function example() {
  // Get viewport example
  console.log(viewport);

  // Get url params example
  console.log('params', url.getParams());

  // Set cookie example
  cookie.set('cookieName', 'cookieValue', 1);

  // Events subscription example
  events.on('viewportUpdate', (data) => {
    console.log(data);
  });

  const navOffset = $('.nav-bg').offset().top;

  $('.nav-bg').wrap('<div class="nav-placeholder"></div>');

  $('.nav-placeholder').height($('.navbar-inverse').outerHeight());

  $(window).scroll(() => {
    const scrollPos = $(window).scrollTop();

    if (scrollPos >= navOffset) {
      $('.nav-bg').addClass('fixed');
    } else {
      $('.nav-bg').removeClass('fixed');
    }
  });

  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, header a[href='#about'], footer a[href='#myPage']").on('click', (event) => {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== '') {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      const hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds
      // it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top,
      }, 900, () => {
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });

  $(window).scroll(() => {
    $('.slideanim').each(() => {
      const pos = $(this).offset().top;

      const winTop = $(window).scrollTop();
      if (pos < winTop + 600) {
        $(this).addClass('slide');
      }
    });
  });
}

export default example();

import $ from 'jquery';

function viewTab() {
  $('.link').on('click', (event) => {
    event.preventDefault();

    const id = ($(event.target).data('banan'));

    $('.link').removeClass('-active');
    $('.infobox').removeClass('-active');

    $(event.target).addClass('-active');
    $(`.${id}`).addClass('-active');
  });
}

export default viewTab();

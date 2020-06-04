export default function toggleMenu() {
    const $toggle = $('#js-toggle-menu'),
          $menu = $('#js-menu');

    $toggle.on('click', (e) => {
        $('html, body').toggleClass('is-locked');
        $(e.currentTarget).toggleClass('is-open');
        $menu.toggleClass('is-shown');
    });
}
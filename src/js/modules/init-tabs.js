export default function initTabs() {
    const ACTIVE_CLASS = 'is-active';

    $('.js-tab-trigger').click((e) => {
        e.preventDefault();

        let $el = $(e.currentTarget),
            $tab = $($el.find('.js-tab-answer')),
            self = false;

        if($el.parent().hasClass(ACTIVE_CLASS)) {
            self = true;
        }

        // reset all
        $('.js-tab-item').removeClass(ACTIVE_CLASS);
        $('.js-tab-answer:visible').toggle();

        // slide down selected tab if not self
        if(!self) {
            $el.parent().toggleClass(ACTIVE_CLASS);
            $tab.toggle();
        }
    });
}
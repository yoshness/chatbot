export default function storeFormValues() {
    $('input[name="company"]').val(localStorage.getItem('company'));
    $('input[name="person"]').val(localStorage.getItem('person'));
    $('input[name="email"]').val(localStorage.getItem('email'));
    $('textarea[name="message"]').val(localStorage.getItem('message'));

    $('#js-submit-form').click((e) => {
        localStorage.setItem('company', $('input[name="company"]').val());
        localStorage.setItem('person', $('input[name="person"]').val());
        localStorage.setItem('email', $('input[name="email"]').val());
        localStorage.setItem('message', $('textarea[name="message"]').val());
    });
}
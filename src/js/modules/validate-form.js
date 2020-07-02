export default function validateForm() {
    $('#js-validate-checkbox').click((e) => {
        if ($(e.currentTarget).is(':checked')) {
            $('#js-submit-form').prop('disabled', false);
        }
        else {
            $('#js-submit-form').prop('disabled', true);
        }
    });
}
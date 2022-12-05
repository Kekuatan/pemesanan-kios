
$(document).ready(function() {
    console.log('jamet ')
    // Activate tooltip
    // $('[data-toggle="tooltip"]').tooltip();

    window.addEventListener('alert-success', event => {
        alertify.success( event.detail.message);
    })

    window.addEventListener('alert-error', event => {
        alertify.error( event.detail.message);
    })
})

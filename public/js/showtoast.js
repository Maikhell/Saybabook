document.addEventListener('DOMContentLoaded', function () {   
    const toastElement = document.getElementById('popToast');
    if (toastElement && toastElement.dataset.message) {
        showCustomToast(toastElement.dataset.message, toastElement.dataset.status);
    }
});

function showCustomToast(message, status) {
    const toastElement = document.getElementById('popToast');
    if (!toastElement) return;

    const toastBody = toastElement.querySelector('.toast-body');
    const toastHeader = toastElement.querySelector('.toast-header');

    // 1. Update Message
    if (toastBody) {
        // Find the username span (or remove it if you only want the dynamic message)
        let staticPrefix = toastBody.textContent.includes('Hey!') ? 'Hey! ' : '';

        // Temporarily remove static content and insert the new message
        toastBody.innerHTML = message;
    }

    // 2. Optional: Update styling for visual status feedback
    toastHeader.classList.remove('bg-success', 'bg-danger');
    toastHeader.style.color = '#fff'; // Reset text color

    if (status === 'success') {
        toastHeader.classList.add('bg-success');
        // Optionally update the small text/icon for success
    } else if (status === 'error') {
        toastHeader.classList.add('bg-danger');
        // update the small text/icon for error
    } else {
        // Default style if status is neither success nor error
        toastHeader.classList.add('bg-secondary');
    }

    // 3. Show the toast using Bootstrap's JS
    const toast = new bootstrap.Toast(toastElement);
    toast.show();
}


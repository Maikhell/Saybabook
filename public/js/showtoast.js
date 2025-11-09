document.addEventListener('DOMContentLoaded', () => {

    const toastElement = document.getElementsByClassName('toast')[0];

    const toastPop = new bootstrap.Toast(toastElement);

    toastPop.show();
    console.log("toast-showed");
});
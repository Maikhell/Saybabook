function selectCategory(categoryText, event) {
    if (event) {

        event.preventDefault();

        event.stopPropagation();
    }
    const selectorButton = document.getElementById('category-selector-text');

    if (!selectorButton) {

        console.error("Error: Could not find the category selector button with ID 'category-selector-text'.");
        return;
    }
    selectorButton.textContent = categoryText;

    const mainDropdown = selectorButton.closest('.input-group').querySelector('.dropdown-menu');

    if (mainDropdown && !mainDropdown.classList.contains('showing')) {

        selectorButton.click();
    }
}
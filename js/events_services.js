document.addEventListener('DOMContentLoaded', function () {
	// Select all elements with the class 'showMoreBtn'
    const showMoreBtns = document.querySelectorAll('.showMoreBtn');
	// Select all elements with the class 'hideContentBtn'
    const hideContentBtns = document.querySelectorAll('.hideContentBtn');
	// Select all elements with the class 'moreContent'
    const moreContents = document.querySelectorAll('.moreContent');

	// Loop through each 'showMoreBtn' and add a click event listener
    showMoreBtns.forEach((btn, index) => {
        btn.addEventListener('click', function () {
			// Remove the 'hidden' class from the corresponding 'moreContent' element
            moreContents[index].classList.remove('hidden');
			// Hide the 'Show More' button after clicking
            btn.style.display = 'none';
        });
    });

	// Loop through each 'hideContentBtn' and add a click event listener
    hideContentBtns.forEach((btn, index) => {
        btn.addEventListener('click', function () {
			// Add the 'hidden' class to the corresponding 'moreContent' element
            moreContents[index].classList.add('hidden');
			// Show the 'Show More' button after hiding content
            showMoreBtns[index].style.display = 'inline';
        });
    });
});

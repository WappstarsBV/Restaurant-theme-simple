// import App from './modules/app.js';
// const app = new App();

/**
 * // Parallax for "Afhalen & bezorgen" section
 */
window.addEventListener('scroll', (event) => {
    // Get vertical scroll offset in variable
    let scrolled = window.pageYOffset;

    // Get parallax elements in constant[s] 
    const imageOne = document.getElementById('image_1');
    const imageTwo = document.getElementById('image_2');
    const cateringSpices = document.getElementById('catering-spices');

    let calcBottomSpices = 'calc(-350px + ' + (scrolled * 0.155) + 'px)';

    // Apply parallax to elements
    imageOne.style.bottom = (scrolled * 0.18) + 'px';
    imageTwo.style.top = (scrolled * 0.1) + 'px';
    cateringSpices.style.bottom = calcBottomSpices;
});
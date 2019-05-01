// import App from './modules/app.js';
// const app = new App();

/**
 * Functions
 */
function isScrolledIntoView(el) {
    let rect = el.getBoundingClientRect();
    let elemTop = rect.top;
    let elemBottom = rect.bottom;

    // Only completely visible elements return true:
    let isVisible = (elemTop >= 0) && (elemBottom <= window.innerHeight);
    // Partially visible elements return true:
    //isVisible = elemTop < window.innerHeight && elemBottom >= 0;
    return isVisible;
}


/**
 * // Parallax for "Afhalen & bezorgen" section
 */
window.addEventListener('scroll', (event) => {
    // Get vertical scroll offset in variable
    let scrolled = window.pageYOffset;
    let calcBottomSpices = 'calc(-350px + ' + (scrolled * 0.155) + 'px)';

    // Get parallax elements in constant[s] 
    const imageOne = document.getElementById('image_1');
    const imageTwo = document.getElementById('image_2');
    const cateringSpices = document.getElementById('catering-spices');
    const topNewsImage = document.querySelector('.na-top-image');
    const bottomNewsImage = document.querySelector('.na-bottom-image');

    // Get all services/diensten
    const diensten = document.querySelectorAll('.dienst');

    //Get parallax images
    const dienstImageTop = document.getElementById('dienst-top');
    const dienstImageBottom = document.getElementById('dienst-bottom');
    

    // Apply parallax to elements
    if( imageOne != null || imageTwo != null || cateringSpices != null) {
        imageOne.style.bottom = (scrolled * 0.18) + 'px';
        imageTwo.style.top = (scrolled * 0.1) + 'px';
        cateringSpices.style.bottom = calcBottomSpices;
    }

    if(topNewsImage != null || bottomNewsImage != null) {
        if(isScrolledIntoView(topNewsImage)) {
            topNewsImage.classList.add('na-top-image-visible');
        }
    
        if(isScrolledIntoView(bottomNewsImage)) {
            bottomNewsImage.classList.add('na-bottom-image-visible');
        }
    }

    // Add class to each of services/diensten if it is scrolled into view
    if(diensten.length > 0) {
        diensten.forEach((dienst) => {
            if(isScrolledIntoView(dienst)) {
                dienst.classList.add('dienst-w-shadow');
            }
        });
    }

    if(dienstImageTop != null || dienstImageBottom != null) {
        dienstImageTop.style.top = (scrolled * 0.15) + 'px';
        dienstImageBottom.style.bottom = (scrolled * 0.1) + 'px';  
    }

}); //end of scroll event listener
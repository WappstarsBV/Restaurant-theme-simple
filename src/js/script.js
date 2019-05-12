// import App from './modules/app.js';
// const app = new App();

/**
 * Functions
 */
function isScrolledIntoView(el) {
    let rect = el.getBoundingClientRect();
    let elemTop = rect.top;
    let elemBottom = rect.bottom;

    // partially visible elements return true:
    let isVisible = (elemTop >= 0 && window.innerHeight >= elemBottom);
    
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
    const postContent = document.querySelector('.post-content');

    // Get all services/diensten
    const diensten = document.querySelectorAll('.dienst');

    //Get parallax images
    const dienstImageTop = document.getElementById('dienst-top');
    const dienstImageBottom = document.getElementById('dienst-bottom');

    // Get all contact shadow elements
    const contact = document.querySelectorAll('div.contact-form, div.openingstijden, div.contactgegevens');
    

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

    if(contact != null) {
        contact.forEach((item) => {
            if(isScrolledIntoView(item)) {
                item.classList.add('form-el-shadow');
            }
        });
    }

    if(postContent != null && isScrolledIntoView(postContent)) {
        postContent.classList.add('post-content-w-shadow');
    }

}); //end of scroll event listener

// Map title positioning
const mapTitle = document.querySelector('.map-title');
if(mapTitle != null) {
    let mapTitleWidth = mapTitle.offsetWidth;
    mapTitle.style.left ='calc(50% - ' + mapTitleWidth / 2 + 'px)';
}

// share buttons
let shareBtn = document.querySelector('.share-btn');
//console.log(shareBtn.childNodes);
document.addEventListener('click', (event) => {
    if(shareBtn != null) {
        if(event.target === shareBtn || event.target === shareBtn.childNodes[5]) {
            shareBtn.classList.toggle('active');
            shareBtn.nextElementSibling.classList.toggle('sharing-is-visible');
        } else {
            shareBtn.classList.remove('active');
            shareBtn.nextElementSibling.classList.remove('sharing-is-visible');
        }
    }
});


const hamburger = document.querySelector('.hamburger');
const menu = document.querySelector('.menu-and-contact');
const closeMenu = document.querySelector('.close-nav');
document.addEventListener('click', (event) => {
    if(event.target === hamburger || event.target === hamburger.firstElementChild) {
        menu.classList.add('menu-and-contact-visible');
        hamburger.parentElement.classList.add('clicked');
        document.getElementsByTagName('html')[0].style.overflowY = "hidden";
    } else if (event.target === closeMenu) {
        menu.classList.remove('menu-and-contact-visible');
        hamburger.parentElement.classList.remove('clicked');
        document.getElementsByTagName('html')[0].style.overflowY = "scroll";
    }
});


window.addEventListener('load', () => {
    // get screen width
    const width = screen.width;

    // get elements
    const dienstImage = document.querySelector('.diensten-header-image');

    // add classes on load
    if(width <= 992 && dienstImage != null) {
        dienstImage.classList.add('diensten-header-image-visible');
    }
});
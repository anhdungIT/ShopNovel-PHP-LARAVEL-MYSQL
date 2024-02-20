// list-product category

let foodMenuList = document.querySelector('.product-item-wrap')

let foodCategory = document.querySelector('.list-category')

let categories = foodCategory.querySelectorAll('button')

Array.from(categories).forEach((item, index) => {
    item.onclick = (e) => {
        let currCat = foodCategory.querySelector('button.active')
        currCat.classList.remove('active')
        e.target.classList.add('active')
        foodMenuList.classList ='product-item-wrap '+ e.target.getAttribute('data-list-type')
    }
})

// on scroll animation

let scroll = window.requestAnimationFrame || function(callback) {window.setTimeout(callback, 1000/60)}

let elToShow = document.querySelectorAll('.play-on-scroll')

isElInViewPort = (el) => {
    let rect = el.getBoundingClientRect()

    return (
        (rect.top <= 0 && rect.bottom >= 0)
        ||
        (rect.bottom >= (window.innerHeight || document.documentElement.clientHeight) && rect.top <= (window.innerHeight || document.documentElement.clientHeight))
        ||
        (rect.top >= 0 && rect.bottom <= (window.innerHeight || document.documentElement.clientHeight))
    )
}

loop = () => {
    elToShow.forEach((item, index) => {
        if (isElInViewPort(item)) {
            item.classList.add('start')
        } else {
            item.classList.remove('start')
        }
    })

    scroll(loop)
}

loop()


// play-pause video
let videos = document.getElementsByTagName("video")[0];
let plays = document.getElementsByClassName("play")[0];
let pauses = document.getElementsByClassName("pause")[0];
let screens = document.getElementsByClassName("screen")[0];

plays.addEventListener('click', () => {
    videos.play();
    plays.style.display = "none";
    screens.style.display = "none";
    pauses.style.display = "flex";
    
})

pauses.addEventListener('click', () => {
    videos.pause();
    plays.style.display = "flex";
    screens.style.display = "flex";
    pauses.style.display = "none";
})

videos.addEventListener('ended', () => {
    plays.style.display = "flex";
    screens.style.display = "flex";
    pauses.style.display = "none";
})

// click image
const imgs = document.querySelectorAll('.img-select a');
const imgBtns = [...imgs];
let imgId = 1;

imgBtns.forEach((imgItem) => {
    imgItem.addEventListener('click', (event) => {
        event.preventDefault();
        imgId = imgItem.dataset.id;
        slideImage();
    });
});

function slideImage(){
    const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

    document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
}

window.addEventListener('resize', slideImage);


document.addEventListener("DOMContentLoaded", function() {
    // SlideShow banner
    let list = document.querySelector('.slider .list');
    let item = document.querySelectorAll('.slider .list .item');
    let dots = document.querySelectorAll('.slider .dots li');
    let pre = document.getElementById('pre');
    let next = document.getElementById('next');
  
    // Chuyển động slider
    let active = 0;
    let lengthItems = item.length - 1;
  
    // Nhấn chuột vào next thì chuyển ảnh sang phải
    next.addEventListener('click', function () {
        if (active + 1 > lengthItems) {
            active = 0;
        } else {
            active = active + 1;
        }
        reloadSlider();
    });
  
    pre.addEventListener('click', function () {
        if (active - 1 < 0) {
            active = lengthItems;
        } else {
            active = active - 1;
        }
        reloadSlider();
    });
  
    function reloadSlider() {
        let checkLeft = item[active].offsetLeft;
        list.style.left = -checkLeft + 'px';
  
        let lastActiveDot = document.querySelector('.slider .dots li.active');
        lastActiveDot.classList.remove('active');
        dots[active].classList.add('active');
    }
  
    dots.forEach(function (li, key) {
        li.addEventListener('click', function () {
            active = key;
            reloadSlider();
        });
    });
  
    // Tự động
    let refreshSlider = setInterval(function () {
        if (active + 1 > lengthItems) {
            active = 0;
        } else {
            active = active + 1;
        }
        reloadSlider();
    }, 5000);
  });

// Slide Show
currentSlideID = 1;
sliderElement = document.getElementById('slider')
totalSlides = sliderElement.childElementCount
function next() {
  if (totalSlides < currentSlideID) {
        currentSlideID++
        ShowSlide()
  }
}

function prev() {
  if (currentSlideID > 2) {
    currentSlideID--
    ShowSlide()
  }
}

function ShowSlide() {
    slides = document.getElementById('slider').getElementsByTagName('li')
    for (let i = 0; i < totalSlides; i++) {
        const element = slides[i];
        if (currentSlideID == i+1) {
            element.classList.remove('hidden')
        }{
            element.classList.add('hidden')
        }
    }
}
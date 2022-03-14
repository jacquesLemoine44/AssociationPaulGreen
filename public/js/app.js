// // ============= Caroulse Boostrap
// var myCarousel = document.querySelector('#myCarousel')
// var carousel = new bootstrap.Carousel(myCarousel)

var myCarousel = document.querySelector('#myCarouselPartners')
var carousel = new bootstrap.Carousel(myCarousel, {
    interval: 2000,
    wrap: true,
    ride: true,
    cycle: right
})

// ============= Modal

var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function() {
    myInput.focus()
})

// ================================

// ============= Bouton Remonter
const btn = document.querySelector('.flecheHaut');
btn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            left: 0,
            behavior: "smooth"
        })
    })
    // ================================
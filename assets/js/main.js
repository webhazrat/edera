
// top navigation search form
const navContent = document.querySelector('.top-nav-content');
const searchFrom = document.querySelector('.search-form');
const search = document.getElementById('search');
searchFrom.addEventListener('mouseover', function(e){
    navContent.classList.add('search');
})
search.addEventListener('mouseover', function(e){
    navContent.classList.add('search');
})
search.addEventListener('mouseleave', function(e){
    navContent.classList.remove('search');
})

// main navigation scroll
const mainNavigation = document.querySelector('.main-navigation');
window.onscroll = function(){
    if(document.documentElement.scrollTop > 50){
        mainNavigation.classList.add('scroll-menu');
    }else{
        mainNavigation.classList.remove('scroll-menu')
    }
}

const team = document.querySelectorAll('.team-item');
team.forEach(item => {
    item.addEventListener('click', function(e){
        e.preventDefault();
        let overlay = item.querySelector('.overlay-pop');
        if (!overlay.contains(e.target)){
            item.classList.toggle('show');
        }
    })
})

const close = document.querySelectorAll('.close');
close.forEach(item => {
    item.addEventListener('click', function(e){
        e.preventDefault();
        item.closest('.team-item').classList.remove('show')
    })
})

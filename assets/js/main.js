
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
        const teamItem = document.querySelectorAll('.team-item');
        teamItem.forEach(item2 => {
            if (item2.classList.contains('show')) {
                item2.classList.remove('show');
            }
        })
        const overlay = item.querySelector('.overlay-pop');

        
        isElementInViewport(overlay);
        if (!overlay.contains(e.target)){
            item.classList.toggle('show');
        }
        
    })
})

const close = document.querySelectorAll('.close');
close.forEach(item => {
    item.addEventListener('click', function(e){
        e.preventDefault();
        this.closest('.team-item').classList.remove('show')
    })
})


// What Makes Us Different
const howItemTitle = document.querySelectorAll('.how-item-title');
howItemTitle.forEach(item => {
    item.addEventListener('click', function(e){
        e.preventDefault();
        const howItem = document.querySelectorAll('.how-item');
        howItem.forEach(item2 => {
            if (item2.classList.contains('expand')) {
                item2.classList.remove('expand');
                item2.style.removeProperty('width');
            }
        })
        this.closest('.how-item').classList.add('expand');

        
        const siblingNum = document.querySelectorAll('.how-item.expand ~ .how-item').length;
        this.closest('.how-item').style.width=`calc(100% - ${siblingNum}*110px)`;
    })
})





// Removeable
const contactSubmit = document.getElementById('contactSubmit');
if(contactSubmit){
    contactSubmit.addEventListener('click', function(e){
        e.preventDefault();
        this.classList.add('active');
        this.textContent = 'Submitted';
    })
}


function isElementInViewport(el){
    let rect = el.getBoundingClientRect();
    console.log(rect);
}
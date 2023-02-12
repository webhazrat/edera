// video play once
const video = document.getElementById('video-banner');
if(video){
    video.addEventListener('timeupdate', function(){
        if(Math.ceil(this.currentTime) >= Math.floor(this.duration)){
            this.pause();
        }
    })
}

// header top search
const searchBtn = document.getElementById('searchBtn');
const searchInput = document.getElementById('search');
const searchClose = document.getElementById('searchClose');
const searchFrom = document.querySelector('.search-form-area');
searchBtn.addEventListener('click', function(e){
    if(!searchInput.value){
        e.preventDefault();
    }
    searchFrom.classList.add('show');
})
searchClose.addEventListener('click', function(e){
    e.preventDefault();
    searchFrom.classList.remove('show');
})

// banner navigation search
const insightSearchBtn = document.getElementById('insightSearchBtn');
const searchText = document.getElementById('searchText');
const insightSearchClose = document.getElementById('insightSearchClose');
const searchFromArea = document.querySelector('.insight-search-area');
if(insightSearchBtn){
    insightSearchBtn.addEventListener('click', function(e){
        if(!searchText.value){
            e.preventDefault();
        }
        searchFromArea.classList.add('show');
    })
}

if(insightSearchClose){
    insightSearchClose.addEventListener('click', function(e){
        e.preventDefault();
        searchFromArea.classList.remove('show');
    })
}

// main navigation scroll
const mainNavigation = document.querySelector('.main-navigation');
window.onscroll = function(){
    if(document.documentElement.scrollTop > 50){
        mainNavigation.classList.add('scroll-menu');
    }else{
        mainNavigation.classList.remove('scroll-menu')
    }
}


// team popup
function isElementInViewport (el) {
    var rect = el.getBoundingClientRect();
    return {
        'hV' : rect.bottom - window.innerHeight, 
        'wL' : rect.left - window.innerWidth,
        'wR' : rect.right - window.innerWidth
    };
}

const team = document.querySelectorAll('.team-item');
team.forEach(item => {
    item.addEventListener('click', function(e){

        const teamItem = document.querySelectorAll('.team-item');
        teamItem.forEach(item2 => {
            if (item2.classList.contains('show')) {
                item2.classList.remove('show');
            }
        })

        const overlay = item.querySelector('.overlay-pop');
        if (!overlay.contains(e.target)){
            item.classList.add('show');
        }

        if(isElementInViewport(overlay).hV > 0){
            document.documentElement.scrollTop += isElementInViewport(overlay).hV+10;
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
            item2.classList.add('closing');
            if (item2.classList.contains('expand')) {
                item2.classList.remove('expand');
                item2.style.removeProperty('width');
            }
        })
        this.closest('.how-item').classList.add('expand');
        this.closest('.how-item').classList.remove('closing');
        
        const siblingNum = document.querySelectorAll('.how-item.expand ~ .how-item').length;
        this.closest('.how-item').style.width=`calc(100% - ${siblingNum}*110px)`;
    })
})

// mobile dropdown
const dropdown = document.querySelectorAll('.main-navigation li.dropdown');
dropdown.forEach(item => {
    let link = item.children[0];
    link.insertAdjacentHTML('afterend', '<a href="#" data-bs-toggle="dropdown" role="button"><i class="bi bi-plus"></i></a>');
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

// tabs link active
function tabLink(target){
    const tabList = document.querySelectorAll('.nav button');
    tabList.forEach(triggerEl => {
        triggerEl.classList.remove('active');
        if(triggerEl.dataset.bsTarget == target){
            triggerEl.classList.add('active')
        }
    })    
}

const triggerTabList = document.querySelectorAll('.nav button')
triggerTabList.forEach(triggerEl => {
    triggerEl.addEventListener('shown.bs.tab', function(e){
        tabLink(triggerEl.dataset.bsTarget)
        
        const tabPane = document.querySelectorAll('.clinical-tabs .tab-pane');
        tabPane.forEach(pane => {
            pane.classList.remove('active');
            if('#'+pane.id == triggerEl.dataset.bsTarget){
                pane.classList.add('active');
            }            
        })
    })
})


// dom replace
const readMore = document.querySelector('.vehicles .read-more');
if(readMore){
    const html = readMore.outerHTML;
    readMore.remove();
    document.querySelector('.vehicles p').insertAdjacentHTML('beforebegin', html);
}


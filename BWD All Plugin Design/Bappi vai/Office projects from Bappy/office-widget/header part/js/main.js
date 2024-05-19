"use strict";
(function(){
    const toggleBtn = document.querySelector('.dates-header-1 .dates-mobile-menu');
    
    if( ! toggleBtn ){
        return;
    }

    const mainNavigation = document.querySelector('.dates-menu-area');
    if( ! mainNavigation ){
        return;
    }
    toggleBtn.addEventListener('click', () => {
    mainNavigation.classList.toggle('toggled');


    if(toggleBtn.getAttribute('aria-expanded') === 'true'){
        toggleBtn.setAttribute('aria-expanded', 'false');
        toggleBtn.querySelector('i').classList.remove('fa-times')
        toggleBtn.querySelector('i').classList.add('fa-bars')

         
    } else{
        toggleBtn.setAttribute('aria-expanded', 'true');
        // toggleBtn.innerHTML = '<i class="fas fa-bars"></i>'
        toggleBtn.querySelector('i').classList.add('fa-times')
        toggleBtn.querySelector('i').classList.remove('fa-bars')

    }
    });

    document.addEventListener('click', event => {
        const isClickInside = mainNavigation.contains(event.target) || toggleBtn.contains(event.target);
        if(!isClickInside){
            mainNavigation.classList.remove('toggled');
            toggleBtn.setAttribute('aria-expanded', 'false');
        }
    });


    const childLinks = mainNavigation.querySelectorAll('.menu-item-has-children > a');
    for(let link of childLinks){
        link.addEventListener('click', function(event) {
            event.preventDefault();
            const subMenu = this.parentElement.querySelector('.sub-menu');
            subMenu.classList.toggle('toggled');
        });
    }


    
    let allListItem = mainNavigation.querySelectorAll('.menu-part-item > li')
    for(let listItem of  allListItem){
        listItem.addEventListener('click',(e)=>{
            e.preventDefault();
            let nextSubMenuSibling = e.target.nextElementSibling
            let targetElemParent = e.target.parentElement.parentElement.querySelectorAll('li');
            if(!nextSubMenuSibling){
                for(let item of targetElemParent){
                    if(item.querySelector('.sub-menu')){
                        let hasToggleClass = item.querySelector('.sub-menu');
                        if(hasToggleClass.classList.contains('toggled') ){
                            hasToggleClass.classList.remove('toggled');
                        }
                    }
                    
                }
                
            }
        })
    }

})();


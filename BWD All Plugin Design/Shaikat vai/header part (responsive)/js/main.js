"use strict";
(function(){
    const menuItem = document.querySelector('.dates-header-1');
    const toggleBtn = document.querySelector('.dates-header-1 .dates-mobile-menu');
    let allSubMenu = menuItem.querySelectorAll('.sub-menu');
    
    if( ! toggleBtn ){
        return;
    }

    const mainNavigation = document.querySelector('.dates-header-1 .dates-menu-area');
    if( ! mainNavigation ){
        return;
    }
    toggleBtn.addEventListener('click', () => {
    mainNavigation.classList.toggle('toggled');


    if(toggleBtn.getAttribute('aria-expanded') === 'true'){
        toggleBtn.setAttribute('aria-expanded', 'false');
        toggleBtn.querySelector('i').classList.replace('fa-times','fa-bars')
        allSubMenu.forEach(sMenu => {
            if(sMenu.classList.contains('toggled')){
                sMenu.classList.remove('toggled')
            }
        });

         
    } else{
        toggleBtn.setAttribute('aria-expanded', 'true');
        toggleBtn.querySelector('i').classList.replace('fa-bars','fa-times')
    }
    });

  

    document.addEventListener('click', event => {
        const isClickInside = mainNavigation.contains(event.target) || toggleBtn.contains(event.target);
        if(!isClickInside){
            mainNavigation.classList.remove('toggled');
            toggleBtn.setAttribute('aria-expanded', 'false');
            toggleBtn.querySelector('i').classList.replace('fa-times','fa-bars');
            allSubMenu.forEach(sMenu => {
                if(sMenu.classList.contains('toggled')){
                    sMenu.classList.remove('toggled')
                }
            });
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


// menu 2

(function(){
    const menuItem = document.querySelector('.dates-header-2');
    const toggleBtn = document.querySelector('.dates-header-2 .dates-mobile-menu');
    let allSubMenu = menuItem.querySelectorAll('.sub-menu');
    
    if( ! toggleBtn ){
        return;
    }

    const mainNavigation = document.querySelector('.dates-header-2 .dates-menu-area');
    if( ! mainNavigation ){
        return;
    }
    toggleBtn.addEventListener('click', () => {
    mainNavigation.classList.toggle('toggled');


    if(toggleBtn.getAttribute('aria-expanded') === 'true'){
        toggleBtn.setAttribute('aria-expanded', 'false');
        toggleBtn.querySelector('i').classList.replace('fa-times','fa-bars')
        allSubMenu.forEach(sMenu => {
            if(sMenu.classList.contains('toggled')){
                sMenu.classList.remove('toggled')
            }
        });

         
    } else{
        toggleBtn.setAttribute('aria-expanded', 'true');
        toggleBtn.querySelector('i').classList.replace('fa-bars','fa-times')
    }
    });

  

    document.addEventListener('click', event => {
        const isClickInside = mainNavigation.contains(event.target) || toggleBtn.contains(event.target);
        if(!isClickInside){
            mainNavigation.classList.remove('toggled');
            toggleBtn.setAttribute('aria-expanded', 'false');
            toggleBtn.querySelector('i').classList.replace('fa-times','fa-bars');
            allSubMenu.forEach(sMenu => {
                if(sMenu.classList.contains('toggled')){
                    sMenu.classList.remove('toggled')
                }
            });
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


// menu 3

(function(){
    const menuItem = document.querySelector('.dates-header-3');
    const toggleBtn = document.querySelector('.dates-header-3 .dates-mobile-menu');
    let allSubMenu = menuItem.querySelectorAll('.sub-menu');
    
    if( ! toggleBtn ){
        return;
    }

    const mainNavigation = document.querySelector('.dates-header-3 .dates-menu-area');
    if( ! mainNavigation ){
        return;
    }
    toggleBtn.addEventListener('click', () => {
    mainNavigation.classList.toggle('toggled');


    if(toggleBtn.getAttribute('aria-expanded') === 'true'){
        toggleBtn.setAttribute('aria-expanded', 'false');
        toggleBtn.querySelector('i').classList.replace('fa-times','fa-bars')
        allSubMenu.forEach(sMenu => {
            if(sMenu.classList.contains('toggled')){
                sMenu.classList.remove('toggled')
            }
        });

         
    } else{
        toggleBtn.setAttribute('aria-expanded', 'true');
        toggleBtn.querySelector('i').classList.replace('fa-bars','fa-times')
    }
    });

  

    document.addEventListener('click', event => {
        const isClickInside = mainNavigation.contains(event.target) || toggleBtn.contains(event.target);
        if(!isClickInside){
            mainNavigation.classList.remove('toggled');
            toggleBtn.setAttribute('aria-expanded', 'false');
            toggleBtn.querySelector('i').classList.replace('fa-times','fa-bars');
            allSubMenu.forEach(sMenu => {
                if(sMenu.classList.contains('toggled')){
                    sMenu.classList.remove('toggled')
                }
            });
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


// menu 4

(function(){
    const menuItem = document.querySelector('.dates-header-4');
    const toggleBtn = document.querySelector('.dates-header-4 .dates-mobile-menu');
    let allSubMenu = menuItem.querySelectorAll('.sub-menu');
    
    if( ! toggleBtn ){
        return;
    }

    const mainNavigation = document.querySelector('.dates-header-4 .dates-menu-area');
    if( ! mainNavigation ){
        return;
    }
    toggleBtn.addEventListener('click', () => {
    mainNavigation.classList.toggle('toggled');


    if(toggleBtn.getAttribute('aria-expanded') === 'true'){
        toggleBtn.setAttribute('aria-expanded', 'false');
        toggleBtn.querySelector('i').classList.replace('fa-times','fa-bars')
        allSubMenu.forEach(sMenu => {
            if(sMenu.classList.contains('toggled')){
                sMenu.classList.remove('toggled')
            }
        });

         
    } else{
        toggleBtn.setAttribute('aria-expanded', 'true');
        toggleBtn.querySelector('i').classList.replace('fa-bars','fa-times')
    }
    });

  

    document.addEventListener('click', event => {
        const isClickInside = mainNavigation.contains(event.target) || toggleBtn.contains(event.target);
        if(!isClickInside){
            mainNavigation.classList.remove('toggled');
            toggleBtn.setAttribute('aria-expanded', 'false');
            toggleBtn.querySelector('i').classList.replace('fa-times','fa-bars');
            allSubMenu.forEach(sMenu => {
                if(sMenu.classList.contains('toggled')){
                    sMenu.classList.remove('toggled')
                }
            });
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



// menu 5

(function(){
    const menuItem = document.querySelector('.dates-header-5');
    const toggleBtn = document.querySelector('.dates-header-5 .dates-mobile-menu');
    let allSubMenu = menuItem.querySelectorAll('.sub-menu');
    
    if( ! toggleBtn ){
        return;
    }

    const mainNavigation = document.querySelector('.dates-header-5 .dates-menu-area');
    if( ! mainNavigation ){
        return;
    }
    toggleBtn.addEventListener('click', () => {
    mainNavigation.classList.toggle('toggled');


    if(toggleBtn.getAttribute('aria-expanded') === 'true'){
        toggleBtn.setAttribute('aria-expanded', 'false');
        toggleBtn.querySelector('i').classList.replace('fa-times','fa-bars')
        allSubMenu.forEach(sMenu => {
            if(sMenu.classList.contains('toggled')){
                sMenu.classList.remove('toggled')
            }
        });

         
    } else{
        toggleBtn.setAttribute('aria-expanded', 'true');
        toggleBtn.querySelector('i').classList.replace('fa-bars','fa-times')
    }
    });

  

    document.addEventListener('click', event => {
        const isClickInside = mainNavigation.contains(event.target) || toggleBtn.contains(event.target);
        if(!isClickInside){
            mainNavigation.classList.remove('toggled');
            toggleBtn.setAttribute('aria-expanded', 'false');
            toggleBtn.querySelector('i').classList.replace('fa-times','fa-bars');
            allSubMenu.forEach(sMenu => {
                if(sMenu.classList.contains('toggled')){
                    sMenu.classList.remove('toggled')
                }
            });
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



// menu 6

(function(){
    const menuItem = document.querySelector('.dates-header-6');
    const toggleBtn = document.querySelector('.dates-header-6 .dates-mobile-menu');
    let allSubMenu = menuItem.querySelectorAll('.sub-menu');
    
    if( ! toggleBtn ){
        return;
    }

    const mainNavigation = document.querySelector('.dates-header-6 .dates-menu-area');
    if( ! mainNavigation ){
        return;
    }
    toggleBtn.addEventListener('click', () => {
    mainNavigation.classList.toggle('toggled');


    if(toggleBtn.getAttribute('aria-expanded') === 'true'){
        toggleBtn.setAttribute('aria-expanded', 'false');
        toggleBtn.querySelector('i').classList.replace('fa-times','fa-bars')
        allSubMenu.forEach(sMenu => {
            if(sMenu.classList.contains('toggled')){
                sMenu.classList.remove('toggled')
            }
        });

         
    } else{
        toggleBtn.setAttribute('aria-expanded', 'true');
        toggleBtn.querySelector('i').classList.replace('fa-bars','fa-times')
    }
    });

  

    document.addEventListener('click', event => {
        const isClickInside = mainNavigation.contains(event.target) || toggleBtn.contains(event.target);
        if(!isClickInside){
            mainNavigation.classList.remove('toggled');
            toggleBtn.setAttribute('aria-expanded', 'false');
            toggleBtn.querySelector('i').classList.replace('fa-times','fa-bars');
            allSubMenu.forEach(sMenu => {
                if(sMenu.classList.contains('toggled')){
                    sMenu.classList.remove('toggled')
                }
            });
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



// menu 7

(function(){
    const menuItem = document.querySelector('.dates-header-7');
    const toggleBtn = document.querySelector('.dates-header-7 .dates-mobile-menu');
    let allSubMenu = menuItem.querySelectorAll('.sub-menu');
    
    if( ! toggleBtn ){
        return;
    }

    const mainNavigation = document.querySelector('.dates-header-7 .dates-menu-area');
    if( ! mainNavigation ){
        return;
    }
    toggleBtn.addEventListener('click', () => {
    mainNavigation.classList.toggle('toggled');


    if(toggleBtn.getAttribute('aria-expanded') === 'true'){
        toggleBtn.setAttribute('aria-expanded', 'false');
        toggleBtn.querySelector('i').classList.replace('fa-times','fa-bars')
        allSubMenu.forEach(sMenu => {
            if(sMenu.classList.contains('toggled')){
                sMenu.classList.remove('toggled')
            }
        });

         
    } else{
        toggleBtn.setAttribute('aria-expanded', 'true');
        toggleBtn.querySelector('i').classList.replace('fa-bars','fa-times')
    }
    });

  

    document.addEventListener('click', event => {
        const isClickInside = mainNavigation.contains(event.target) || toggleBtn.contains(event.target);
        if(!isClickInside){
            mainNavigation.classList.remove('toggled');
            toggleBtn.setAttribute('aria-expanded', 'false');
            toggleBtn.querySelector('i').classList.replace('fa-times','fa-bars');
            allSubMenu.forEach(sMenu => {
                if(sMenu.classList.contains('toggled')){
                    sMenu.classList.remove('toggled')
                }
            });
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



// menu 8

(function(){
    const menuItem = document.querySelector('.dates-header-8');
    const toggleBtn = document.querySelector('.dates-header-8 .dates-mobile-menu');
    let allSubMenu = menuItem.querySelectorAll('.sub-menu');
    
    if( ! toggleBtn ){
        return;
    }

    const mainNavigation = document.querySelector('.dates-header-8 .dates-menu-area');
    if( ! mainNavigation ){
        return;
    }
    toggleBtn.addEventListener('click', () => {
    mainNavigation.classList.toggle('toggled');


    if(toggleBtn.getAttribute('aria-expanded') === 'true'){
        toggleBtn.setAttribute('aria-expanded', 'false');
        toggleBtn.querySelector('i').classList.replace('fa-times','fa-bars')
        allSubMenu.forEach(sMenu => {
            if(sMenu.classList.contains('toggled')){
                sMenu.classList.remove('toggled')
            }
        });

         
    } else{
        toggleBtn.setAttribute('aria-expanded', 'true');
        toggleBtn.querySelector('i').classList.replace('fa-bars','fa-times')
    }
    });

  

    document.addEventListener('click', event => {
        const isClickInside = mainNavigation.contains(event.target) || toggleBtn.contains(event.target);
        if(!isClickInside){
            mainNavigation.classList.remove('toggled');
            toggleBtn.setAttribute('aria-expanded', 'false');
            toggleBtn.querySelector('i').classList.replace('fa-times','fa-bars');
            allSubMenu.forEach(sMenu => {
                if(sMenu.classList.contains('toggled')){
                    sMenu.classList.remove('toggled')
                }
            });
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


// menu 9

(function(){
    const menuItem = document.querySelector('.dates-header-9');
    const toggleBtn = document.querySelector('.dates-header-9 .dates-mobile-menu');
    let allSubMenu = menuItem.querySelectorAll('.sub-menu');
    
    if( ! toggleBtn ){
        return;
    }

    const mainNavigation = document.querySelector('.dates-header-9 .dates-menu-area');
    if( ! mainNavigation ){
        return;
    }
    toggleBtn.addEventListener('click', () => {
    mainNavigation.classList.toggle('toggled');


    if(toggleBtn.getAttribute('aria-expanded') === 'true'){
        toggleBtn.setAttribute('aria-expanded', 'false');
        toggleBtn.querySelector('i').classList.replace('fa-times','fa-bars')
        allSubMenu.forEach(sMenu => {
            if(sMenu.classList.contains('toggled')){
                sMenu.classList.remove('toggled')
            }
        });

         
    } else{
        toggleBtn.setAttribute('aria-expanded', 'true');
        toggleBtn.querySelector('i').classList.replace('fa-bars','fa-times')
    }
    });

  

    document.addEventListener('click', event => {
        const isClickInside = mainNavigation.contains(event.target) || toggleBtn.contains(event.target);
        if(!isClickInside){
            mainNavigation.classList.remove('toggled');
            toggleBtn.setAttribute('aria-expanded', 'false');
            toggleBtn.querySelector('i').classList.replace('fa-times','fa-bars');
            allSubMenu.forEach(sMenu => {
                if(sMenu.classList.contains('toggled')){
                    sMenu.classList.remove('toggled')
                }
            });
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




// menu 10

(function(){
    const menuItem = document.querySelector('.dates-header-10');
    const toggleBtn = document.querySelector('.dates-header-10 .dates-mobile-menu');
    let allSubMenu = menuItem.querySelectorAll('.sub-menu');
    
    if( ! toggleBtn ){
        return;
    }

    const mainNavigation = document.querySelector('.dates-header-10 .dates-menu-area');
    if( ! mainNavigation ){
        return;
    }
    toggleBtn.addEventListener('click', () => {
    mainNavigation.classList.toggle('toggled');


    if(toggleBtn.getAttribute('aria-expanded') === 'true'){
        toggleBtn.setAttribute('aria-expanded', 'false');
        toggleBtn.querySelector('i').classList.replace('fa-times','fa-bars')
        allSubMenu.forEach(sMenu => {
            if(sMenu.classList.contains('toggled')){
                sMenu.classList.remove('toggled')
            }
        });

         
    } else{
        toggleBtn.setAttribute('aria-expanded', 'true');
        toggleBtn.querySelector('i').classList.replace('fa-bars','fa-times')
    }
    });

  

    document.addEventListener('click', event => {
        const isClickInside = mainNavigation.contains(event.target) || toggleBtn.contains(event.target);
        if(!isClickInside){
            mainNavigation.classList.remove('toggled');
            toggleBtn.setAttribute('aria-expanded', 'false');
            toggleBtn.querySelector('i').classList.replace('fa-times','fa-bars');
            allSubMenu.forEach(sMenu => {
                if(sMenu.classList.contains('toggled')){
                    sMenu.classList.remove('toggled')
                }
            });
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



// menu 11

(function(){
    const menuItem = document.querySelector('.dates-header-11');
    const toggleBtn = document.querySelector('.dates-header-11 .dates-mobile-menu');
    let allSubMenu = menuItem.querySelectorAll('.sub-menu');
    
    if( ! toggleBtn ){
        return;
    }

    const mainNavigation = document.querySelector('.dates-header-11 .dates-menu-area');
    if( ! mainNavigation ){
        return;
    }
    toggleBtn.addEventListener('click', () => {
    mainNavigation.classList.toggle('toggled');


    if(toggleBtn.getAttribute('aria-expanded') === 'true'){
        toggleBtn.setAttribute('aria-expanded', 'false');
        toggleBtn.querySelector('i').classList.replace('fa-times','fa-bars')
        allSubMenu.forEach(sMenu => {
            if(sMenu.classList.contains('toggled')){
                sMenu.classList.remove('toggled')
            }
        });

         
    } else{
        toggleBtn.setAttribute('aria-expanded', 'true');
        toggleBtn.querySelector('i').classList.replace('fa-bars','fa-times')
    }
    });

  

    document.addEventListener('click', event => {
        const isClickInside = mainNavigation.contains(event.target) || toggleBtn.contains(event.target);
        if(!isClickInside){
            mainNavigation.classList.remove('toggled');
            toggleBtn.setAttribute('aria-expanded', 'false');
            toggleBtn.querySelector('i').classList.replace('fa-times','fa-bars');
            allSubMenu.forEach(sMenu => {
                if(sMenu.classList.contains('toggled')){
                    sMenu.classList.remove('toggled')
                }
            });
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



// menu 12

(function(){
    const menuItem = document.querySelector('.dates-header-12');
    const toggleBtn = document.querySelector('.dates-header-12 .dates-mobile-menu');
    let allSubMenu = menuItem.querySelectorAll('.sub-menu');
    
    if( ! toggleBtn ){
        return;
    }

    const mainNavigation = document.querySelector('.dates-header-12 .dates-menu-area');
    if( ! mainNavigation ){
        return;
    }
    toggleBtn.addEventListener('click', () => {
    mainNavigation.classList.toggle('toggled');


    if(toggleBtn.getAttribute('aria-expanded') === 'true'){
        toggleBtn.setAttribute('aria-expanded', 'false');
        toggleBtn.querySelector('i').classList.replace('fa-times','fa-bars')
        allSubMenu.forEach(sMenu => {
            if(sMenu.classList.contains('toggled')){
                sMenu.classList.remove('toggled')
            }
        });

         
    } else{
        toggleBtn.setAttribute('aria-expanded', 'true');
        toggleBtn.querySelector('i').classList.replace('fa-bars','fa-times')
    }
    });

  

    document.addEventListener('click', event => {
        const isClickInside = mainNavigation.contains(event.target) || toggleBtn.contains(event.target);
        if(!isClickInside){
            mainNavigation.classList.remove('toggled');
            toggleBtn.setAttribute('aria-expanded', 'false');
            toggleBtn.querySelector('i').classList.replace('fa-times','fa-bars');
            allSubMenu.forEach(sMenu => {
                if(sMenu.classList.contains('toggled')){
                    sMenu.classList.remove('toggled')
                }
            });
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



// menu 13

(function(){
    const menuItem = document.querySelector('.dates-header-13');
    const toggleBtn = document.querySelector('.dates-header-13 .dates-mobile-menu');
    let allSubMenu = menuItem.querySelectorAll('.sub-menu');
    
    if( ! toggleBtn ){
        return;
    }

    const mainNavigation = document.querySelector('.dates-header-13 .dates-menu-area');
    if( ! mainNavigation ){
        return;
    }
    toggleBtn.addEventListener('click', () => {
    mainNavigation.classList.toggle('toggled');


    if(toggleBtn.getAttribute('aria-expanded') === 'true'){
        toggleBtn.setAttribute('aria-expanded', 'false');
        toggleBtn.querySelector('i').classList.replace('fa-times','fa-bars')
        allSubMenu.forEach(sMenu => {
            if(sMenu.classList.contains('toggled')){
                sMenu.classList.remove('toggled')
            }
        });

         
    } else{
        toggleBtn.setAttribute('aria-expanded', 'true');
        toggleBtn.querySelector('i').classList.replace('fa-bars','fa-times')
    }
    });

  

    document.addEventListener('click', event => {
        const isClickInside = mainNavigation.contains(event.target) || toggleBtn.contains(event.target);
        if(!isClickInside){
            mainNavigation.classList.remove('toggled');
            toggleBtn.setAttribute('aria-expanded', 'false');
            toggleBtn.querySelector('i').classList.replace('fa-times','fa-bars');
            allSubMenu.forEach(sMenu => {
                if(sMenu.classList.contains('toggled')){
                    sMenu.classList.remove('toggled')
                }
            });
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



// menu 14

(function(){
    const menuItem = document.querySelector('.dates-header-14');
    const toggleBtn = document.querySelector('.dates-header-14 .dates-mobile-menu');
    let allSubMenu = menuItem.querySelectorAll('.sub-menu');
    
    if( ! toggleBtn ){
        return;
    }

    const mainNavigation = document.querySelector('.dates-header-14 .dates-menu-area');
    if( ! mainNavigation ){
        return;
    }
    toggleBtn.addEventListener('click', () => {
    mainNavigation.classList.toggle('toggled');


    if(toggleBtn.getAttribute('aria-expanded') === 'true'){
        toggleBtn.setAttribute('aria-expanded', 'false');
        toggleBtn.querySelector('i').classList.replace('fa-times','fa-bars')
        allSubMenu.forEach(sMenu => {
            if(sMenu.classList.contains('toggled')){
                sMenu.classList.remove('toggled')
            }
        });

         
    } else{
        toggleBtn.setAttribute('aria-expanded', 'true');
        toggleBtn.querySelector('i').classList.replace('fa-bars','fa-times')
    }
    });

  

    document.addEventListener('click', event => {
        const isClickInside = mainNavigation.contains(event.target) || toggleBtn.contains(event.target);
        if(!isClickInside){
            mainNavigation.classList.remove('toggled');
            toggleBtn.setAttribute('aria-expanded', 'false');
            toggleBtn.querySelector('i').classList.replace('fa-times','fa-bars');
            allSubMenu.forEach(sMenu => {
                if(sMenu.classList.contains('toggled')){
                    sMenu.classList.remove('toggled')
                }
            });
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




// menu 15

(function(){
    const menuItem = document.querySelector('.dates-header-15');
    const toggleBtn = document.querySelector('.dates-header-15 .dates-mobile-menu');
    let allSubMenu = menuItem.querySelectorAll('.sub-menu');
    
    if( ! toggleBtn ){
        return;
    }

    const mainNavigation = document.querySelector('.dates-header-15 .dates-menu-area');
    if( ! mainNavigation ){
        return;
    }
    toggleBtn.addEventListener('click', () => {
    mainNavigation.classList.toggle('toggled');


    if(toggleBtn.getAttribute('aria-expanded') === 'true'){
        toggleBtn.setAttribute('aria-expanded', 'false');
        toggleBtn.querySelector('i').classList.replace('fa-times','fa-bars')
        allSubMenu.forEach(sMenu => {
            if(sMenu.classList.contains('toggled')){
                sMenu.classList.remove('toggled')
            }
        });

         
    } else{
        toggleBtn.setAttribute('aria-expanded', 'true');
        toggleBtn.querySelector('i').classList.replace('fa-bars','fa-times')
    }
    });

  

    document.addEventListener('click', event => {
        const isClickInside = mainNavigation.contains(event.target) || toggleBtn.contains(event.target);
        if(!isClickInside){
            mainNavigation.classList.remove('toggled');
            toggleBtn.setAttribute('aria-expanded', 'false');
            toggleBtn.querySelector('i').classList.replace('fa-times','fa-bars');
            allSubMenu.forEach(sMenu => {
                if(sMenu.classList.contains('toggled')){
                    sMenu.classList.remove('toggled')
                }
            });
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





// menu 16

(function(){
    const menuItem = document.querySelector('.dates-header-16');
    const toggleBtn = document.querySelector('.dates-header-16 .dates-mobile-menu');
    let allSubMenu = menuItem.querySelectorAll('.sub-menu');
    
    if( ! toggleBtn ){
        return;
    }

    const mainNavigation = document.querySelector('.dates-header-16 .dates-menu-area');
    if( ! mainNavigation ){
        return;
    }
    toggleBtn.addEventListener('click', () => {
    mainNavigation.classList.toggle('toggled');


    if(toggleBtn.getAttribute('aria-expanded') === 'true'){
        toggleBtn.setAttribute('aria-expanded', 'false');
        toggleBtn.querySelector('i').classList.replace('fa-times','fa-bars')
        allSubMenu.forEach(sMenu => {
            if(sMenu.classList.contains('toggled')){
                sMenu.classList.remove('toggled')
            }
        });

         
    } else{
        toggleBtn.setAttribute('aria-expanded', 'true');
        toggleBtn.querySelector('i').classList.replace('fa-bars','fa-times')
    }
    });

  

    document.addEventListener('click', event => {
        const isClickInside = mainNavigation.contains(event.target) || toggleBtn.contains(event.target);
        if(!isClickInside){
            mainNavigation.classList.remove('toggled');
            toggleBtn.setAttribute('aria-expanded', 'false');
            toggleBtn.querySelector('i').classList.replace('fa-times','fa-bars');
            allSubMenu.forEach(sMenu => {
                if(sMenu.classList.contains('toggled')){
                    sMenu.classList.remove('toggled')
                }
            });
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




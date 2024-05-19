"use strict";

/**
 * Off-Canvas Header
 * @param {Variable} header
 * @param {String} offCanvasMargin
*/

const offCanvasHeaderMain = function (header, offCanvasMargin){
    const allVars = {
        menuArea: header.querySelector('.dates-menu-area'),
        menuCloseBtn: header.querySelector('.dates-header-close'),
        menuOpenBtn:  header.querySelector('.dates-mobile-menu'),
        body: document.querySelector('body'),
    }
    function subMenuToggler(){
       const subMenUpperElem = header.querySelectorAll('.menu-item-has-children > a');
       subMenUpperElem.forEach( item => {
        item.addEventListener('click',(e)=>{ 
            e.preventDefault() 
            item.classList.toggle('deactivate-plus-icon');
           let subMenu =  item.nextElementSibling ;
           subMenu.classList.toggle('active-submenu');
        })
       });
    }
    function menuCloseToRemoveClasses(){
        const plusIcons = header.querySelectorAll('.deactivate-plus-icon');
        const activeSubmenus = header.querySelectorAll('.active-submenu');

        if(plusIcons){
            for(let icon of plusIcons){
                icon.classList.remove('deactivate-plus-icon');
            }
        }

        if(activeSubmenus){
            for(let submenu of activeSubmenus){
                submenu.classList.remove('active-submenu');
            }
        }

    }
    function openedSubmenuClose(){
        let allListItem = header.querySelectorAll('.menu-part-item > li')
        for(let listItem of  allListItem){
            listItem.addEventListener('click',(e)=>{
                e.preventDefault();
                let nextSubMenuSibling = e.target.nextElementSibling
                let targetElemParent = e.target.parentElement.parentElement.querySelectorAll('li');
                if(!nextSubMenuSibling){
                    for(let item of targetElemParent){
                        if(item.querySelector('.sub-menu')){
                            let hasToggleClass = item.querySelector('.sub-menu');
                            let toggleIconContainer = hasToggleClass.previousElementSibling;
                            if(hasToggleClass.classList.contains('active-submenu') ){
                                hasToggleClass.classList.remove('active-submenu');
                                toggleIconContainer.classList.remove('deactivate-plus-icon');
                            }
                        }
                    }
                }
            })
        }
    }
    function menuOpen(){
        allVars.menuOpenBtn.addEventListener('click',()=>{
            allVars.menuArea.classList.add('dates-menu-active')
            header.classList.add('expand-dates-header');
           
            if( header.classList.contains('off-canvas-dates-header-3')){
                allVars.menuOpenBtn.classList.add('hide-bar');
                allVars.body.style.marginRight = offCanvasMargin;
            }else {
                allVars.body.style.marginLeft = offCanvasMargin;
            }
        })
    }
    function menuClose(){
        allVars.menuCloseBtn.addEventListener('click',()=>{
            header.classList.remove('expand-dates-header');
            if( header.classList.contains('off-canvas-dates-header-3')){
                allVars.menuOpenBtn.classList.remove('hide-bar');
            }
            allVars.menuArea.classList.remove('dates-menu-active')
            allVars.body.style.margin = '0';
            menuCloseToRemoveClasses()
        })
    }
    function closeMenuByOffsideClick(){
        const headerMenu = header.querySelector('.dates-menu-area');
        console.log(headerMenu);
        
        document.addEventListener('click',(e)=>{
            let targetElem = e.target;
            if(!header.contains(targetElem) ){
                console.log( 'clicked offside of menu');
                header.classList.remove('expand-dates-header');
                if( header.classList.contains('off-canvas-dates-header-3')){
                    allVars.menuOpenBtn.classList.remove('hide-bar');
                }
                allVars.menuArea.classList.remove('dates-menu-active')
                menuCloseToRemoveClasses()
            }
        })
    }

    closeMenuByOffsideClick()

    menuClose()
    menuOpen()
    subMenuToggler()
    openedSubmenuClose()
}

const allOffCanvasHeader = document.querySelectorAll('.offcanvas-header-common');
console.log(allOffCanvasHeader);

for(let item of allOffCanvasHeader){
    if( item.classList.contains('off-canvas-dates-header-1') || item.classList.contains('off-canvas-dates-header-4') ){
        offCanvasHeaderMain(item, '100vw');
    }else {
        offCanvasHeaderMain(item, '350px');
    }
}

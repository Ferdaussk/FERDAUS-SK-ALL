"use strict";

// off canvas menu
(function ($) {
  $(window).on("elementor/frontend/init", function () {
    elementorFrontend.hooks.addAction(
      "frontend/element_ready/TheNavMenu.default",

      function () {
        // off - canvas menu
        /**
         * Off-Canvas Header
         * @param {Variable} header
         * @param {String} offCanvasMargin
         */

         const offCanvasHeaderMain = function (header, offCanvasMargin,desktopHeader, stickyHeader){
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
                  allVars.menuOpenBtn.classList.add('hide-bar');

                  if( header.classList.contains('off-canvas-dates-header-3')){
                      allVars.body.style.marginRight = offCanvasMargin;
                  }else {
                      allVars.body.style.marginLeft = offCanvasMargin;
                  }
              })
          }
          function menuClose(){
              allVars.menuCloseBtn.addEventListener('click',()=>{
                  header.classList.remove('expand-dates-header');
                  allVars.menuOpenBtn.classList.remove('hide-bar');
                  allVars.menuArea.classList.remove('dates-menu-active')
                  allVars.body.style.margin = '0';
                  menuCloseToRemoveClasses()
              })
          }
          function closeMenuByOffsideClick(){
              document.addEventListener('click',(e)=>{
                  let targetElem = e.target;
                  if(!header.contains(targetElem) ){
                      header.classList.remove('expand-dates-header');
                    allVars.menuOpenBtn.classList.remove('hide-bar');
                      allVars.body.style.margin ='0';
                      allVars.menuArea.classList.remove('dates-menu-active')
                      menuCloseToRemoveClasses()
                  }
              })
          }
          function activeMenuItems(menuItems){
            function removeMenuActiveClass(){
                for(let item of menuItems){
                    item.classList.remove('active-dates-menu-item');
                }
            }

            for(let item of menuItems){
               item.addEventListener('click',()=>{
                removeMenuActiveClass()
                item.classList.add('active-dates-menu-item');
               })
            }
          }
          function desktopActiveMenu(){
            let allMenuItem = desktopHeader.querySelectorAll('.menu-items > ul > li');
            activeMenuItems(allMenuItem)
            
          }
          function mobileActiveMenu(){
            let allMenuItem = header.querySelectorAll('.menu-items > ul > li');
            activeMenuItems(allMenuItem)
          }

          function stickyHeaderFun(){
            const scrollDsc = parseInt(stickyHeader);
            let headerTopDsc = desktopHeader.getBoundingClientRect().top;

            if(headerTopDsc > scrollDsc){
                desktopHeader.classList.add('thf-sticky-header')
            }

           document.addEventListener('scroll',()=>{
            if(window.scrollY > scrollDsc){
                desktopHeader.classList.add('thf-sticky-header')
            }else{
                desktopHeader.classList.remove('thf-sticky-header')
            }
           })
          }

          desktopActiveMenu()
          mobileActiveMenu()
          closeMenuByOffsideClick()
          menuClose()
          menuOpen()
          subMenuToggler()
          openedSubmenuClose()
          if(stickyHeader){
            stickyHeaderFun()
          }
        }
      
        // off canvas header calling
        const allOffCanvasHeader = document.querySelectorAll(".offcanvas-header-common");
        // all desktop header
        const allDesktopHeader = document.querySelectorAll(".thf_header_common");
          if (allOffCanvasHeader && allDesktopHeader) {
            for(let i = 0; i < allOffCanvasHeader.length; i++){
                if (
                    allOffCanvasHeader[i].classList.contains("off-canvas-dates-header-1") ||
                    allOffCanvasHeader[i].classList.contains("off-canvas-dates-header-4")
                  ) {
                    offCanvasHeaderMain(allOffCanvasHeader[i], "100vw",allDesktopHeader[i], 250);
                  } else {
                    offCanvasHeaderMain(allOffCanvasHeader[i], "350px",allDesktopHeader[i],250);
                  }
            }
          }
      }
    );
  });
})(jQuery);


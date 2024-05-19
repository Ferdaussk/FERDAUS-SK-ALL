// header one
const headerOne = document.querySelector('.dates-header-1');
const menuBar = document.querySelector('.dates-mobile-menu');
const hasSubmenu = document.querySelectorAll('.dates-has-submenu');

const navItems = document.querySelectorAll('.dates-menu-area nav ul li');

// menu bar toggle==============
menuBar.addEventListener('click', function() {
    headerOne.classList.toggle('dates-active-mobile-menu');
    if (headerOne.classList.contains('dates-active-mobile-menu')) {
        let crossIcon = menuBar.querySelector('i');
        menuBar.innerHTML = '<i class="fas fa-times"></i>';
    } else {
        menuBar.innerHTML = '<i class="fas fa-bars"></i>';
    }
    for (let subItem of hasSubmenu) {
        subItem.classList.remove('dates-active-submenu')
    }
})

//toggle submenu================
function toggleSubmenu() {
    if (this.classList.contains('dates-active-submenu')) {
        for (let subItem of hasSubmenu) {
            subItem.classList.remove('dates-active-submenu')
        }
        this.classList.remove('dates-active-submenu');
    } else {
        for (let subItem of hasSubmenu) {
            subItem.classList.remove('dates-active-submenu')
        }
        this.classList.add('dates-active-submenu')
    }
}
// toggle submenu add even Listner ================
for (let hasMenuItem of hasSubmenu) {
    hasMenuItem.addEventListener('click', toggleSubmenu)
}

//remove active function from any where
const nav = document.querySelector('.dates-menu-area nav ul');

function removeActiveFun(e) {

    let isMenuClick = document.querySelector('.dates-header-1').contains(e.target);
    for (let subItm of hasSubmenu) {
        if ((!isMenuClick && subItm.classList.contains('active-submenu'))) {
            subItm.classList.remove('active-submenu');
            headerOne.classList.remove('active-mobile-menu');
        }
    }

}
document.addEventListener('click', removeActiveFun, false)

//==========================================================================================

// header two start=========================================================
const toggleBarTwo = document.querySelector('.dates-header-2 .dates-header-bar');

const headerTwo = document.querySelector('.dates-header-2');

const headerMenuItems = document.querySelectorAll('.dates-header-menu ul li');
const headerTwoCrossBtn = document.querySelector('.dates-header-2 .dates-cross-btn');



//toggle submenu================
function toggleSubmenuTwo() {
    if (this.classList.contains('dates-active-submenu-two')) {
        for (let subItem of headerMenuItems) {
            subItem.classList.remove('dates-active-submenu-two')
        }
        this.classList.remove('dates-active-submenu-two');
    } else {
        for (let subItem of headerMenuItems) {
            subItem.classList.remove('dates-active-submenu-two')
        }
        this.classList.add('dates-active-submenu-two')
    }
}
// toggle submenu add even Listner ================
for (let hasMenuItem of headerMenuItems) {
    hasMenuItem.addEventListener('click', toggleSubmenuTwo)
    hasMenuItem.querySelector('a').addEventListener('click', (e) => { e.preventDefault() })
}

if (headerTwo.classList.contains('dates-active-header-two')) {
    headerTwoCrossBtn.style.display = 'block';
} else {
    headerTwoCrossBtn.style.display = 'none';
}



toggleBarTwo.addEventListener('click', function() {
    headerTwo.classList.toggle('dates-active-header-two');
    if (headerTwo.classList.contains('dates-active-header-two')) {
        toggleBarTwo.querySelector('a').innerHTML = '<i class="fas fa-times"></i>';
        headerTwoCrossBtn.style.display = 'block';
        headerTwoCrossBtn.addEventListener('click', function() {
            headerTwo.classList.remove('dates-active-header-two');

            if (headerTwo.classList.contains('dates-active-header-two')) {
                headerTwoCrossBtn.style.display = 'block';
            } else {
                headerTwoCrossBtn.style.display = 'none';
            }
        })

    } else {
        toggleBarTwo.querySelector('a').innerHTML = '<i class="fas fa-bars"></i>';
        headerTwoCrossBtn.style.display = 'none';
    }
})


// remove header 2


// remove active function from anywhere 
function removeActiveFunTwo(e) {
    // console.log(e.target);
    let isMenuClick = document.querySelector('.dates-header-2').contains(e.target);
    for (let subItm of headerMenuItems) {
        if ((!isMenuClick && subItm.classList.contains('dates-active-submenu-two'))) {
            subItm.classList.remove('dates-active-submenu-two');
            headerTwo.classList.remove('dates-active-header-two');
        }


    }

    if (!headerTwo.classList.contains('dates-active-header-two')) {
        toggleBarTwo.querySelector('a').innerHTML = '<i class="fas fa-bars"></i>';
    }

}

document.addEventListener('click', removeActiveFunTwo, false)

// ==========================================================================
// header three start==============================

const headerThree = document.querySelector('.dates-header-3');
const headerThreeBar = document.querySelector('.dates-header-3 .dates-header-bar');

const headerThreeList = document.querySelectorAll('.dates-header-3 .dates-header-menu ul li')

headerThreeBar.addEventListener('click', function() {
    headerThree.classList.toggle('dates-active-header-3');
})


for (let listItem of headerThreeList) {
    if (listItem.querySelector('.dates-submenu')) {
        listItem.classList.add('dates-list-toggle')
    }

    listItem.addEventListener('click', function() {

            if (this.classList.contains('dates-active-submenu-3')) {
                for (let subItem of headerMenuItems) {
                    subItem.classList.remove('dates-active-submenu-3')
                }
                this.classList.remove('dates-active-submenu-3');
            } else {
                for (let subItem of headerMenuItems) {
                    subItem.classList.remove('dates-active-submenu-3')
                }
                this.classList.add('dates-active-submenu-3')
            }

        })
        // a tag prevent default========
    let itemLink = listItem.querySelector('a');
    itemLink.addEventListener('click', function(e) {
        e.preventDefault();
    })

}

// remove active function from anywhere 
function removeActiveFunThree(e) {
    let isMenuClick = document.querySelector('.dates-header-3').contains(e.target);
    for (let subItm of headerThreeList) {
        if ((!isMenuClick && subItm.classList.contains('dates-active-submenu-3'))) {
            subItm.classList.remove('dates-active-submenu-3');
            headerThree.classList.remove('dates-active-header-3');
        }
    }

}
document.addEventListener('click', removeActiveFunThree, false)



//header four start===================

const headerFour = document.querySelector('.dates-header-4');
const headerFourBar = document.querySelector('.dates-header-4-bar');

const headerFourList = document.querySelectorAll('.dates-header-4 .dates-header-menu ul li')

headerFourBar.addEventListener('click', function() {
    headerFour.classList.toggle('dates-active-header-4');
})


for (let listItem of headerFourList) {
    listItem.addEventListener('click', function() {
        if (this.classList.contains('dates-active-submenu-4')) {
            for (let subItem of headerMenuItems) {
                subItem.classList.remove('dates-active-submenu-4')
            }
            this.classList.remove('dates-active-submenu-4');
        } else {
            for (let subItem of headerMenuItems) {
                subItem.classList.remove('dates-active-submenu-4')
            }
            this.classList.add('dates-active-submenu-4')
        }

    })

    let listLink = listItem.querySelector('a');
    listLink.addEventListener('click', function(e) {
        e.preventDefault();
    })
}

// remove active function from anywhere 
function removeActiveFunFour(e) {

    let isMenuClick = document.querySelector('.dates-header-4').contains(e.target);
    for (let subItm of headerFourList) {
        if ((!isMenuClick && subItm.classList.contains('dates-active-submenu-4'))) {
            subItm.classList.remove('dates-active-submenu-4');
            headerFour.classList.remove('dates-active-header-4');
        }
    }

}

document.addEventListener('click', removeActiveFunFour, false)

//====================================================================
// header five hamurger menu start=================


const headerBarFive = document.querySelector('.dates-header-5-bar');
const headerFive = document.querySelector('.dates-header-5');
const headerFiveListItems = document.querySelectorAll('.dates-header-5 .dates-header-menu ul li')


function toggleHumberMenu() {
    headerFive.classList.toggle('dates-active-hum-menu-5');
}

headerBarFive.addEventListener('click', toggleHumberMenu)

// list toggle 5=====================

for (let listItem of headerFiveListItems) {
    if (listItem.querySelector('.dates-submenu')) {
        listItem.classList.add('dates-list-toggle-5')
    }

}

//submenu active

for (let listItem of headerFiveListItems) {
    listItem.addEventListener('click', function() {
        if (this.classList.contains('dates-active-submenu-5')) {
            for (let subItem of headerFiveListItems) {
                subItem.classList.remove('dates-active-submenu-5')
            }
            this.classList.remove('dates-active-submenu-5');
        } else {
            for (let subItem of headerFiveListItems) {
                subItem.classList.remove('dates-active-submenu-5')
            }
            this.classList.add('dates-active-submenu-5')
        }

    })
}

// prevent default==================

for (let linkItem of headerFiveListItems) {
    let HeaderFiveLink = linkItem.querySelector('a');
    HeaderFiveLink.addEventListener('click', function(e) {
        e.preventDefault();
    })
}

// remove active function from anywhere 
function removeActiveFunFive(e) {

    let isMenuClick = document.querySelector('.dates-header-5').contains(e.target);
    for (let subItm of headerFiveListItems) {
        if ((!isMenuClick && subItm.classList.contains('dates-active-submenu-5'))) {
            subItm.classList.remove('dates-active-submenu-5');
            headerFive.classList.remove('dates-active-header-5');
        }
    }

}

document.addEventListener('click', removeActiveFunFive, false)

//=========================================================
// header six here===================
const headerBarSix = document.querySelector('.dates-header-6-bar');
const headerCrossBarSix = document.querySelector('.dates-header-6-cross-bar');
const headerSix = document.querySelector('.dates-header-6');
const headerSixListItems = document.querySelectorAll('.dates-header-6 .dates-header-menu ul li');

// header six add humburger menu

function addHumberMenuSix() {
    headerSix.classList.add('dates-active-header-6-hum');
}

headerBarSix.addEventListener('click', addHumberMenuSix)



// header six remove humburger menu
function removeHumberMenuSix() {
    headerSix.classList.remove('dates-active-header-6-hum');
}

headerCrossBarSix.addEventListener('click', removeHumberMenuSix)

//submenu active

for (let listItem of headerSixListItems) {
    listItem.addEventListener('click', function() {
        if (this.classList.contains('dates-active-submenu-six')) {
            for (let subItem of headerSixListItems) {
                subItem.classList.remove('dates-active-submenu-six')
            }
            this.classList.remove('dates-active-submenu-six');
        } else {
            for (let subItem of headerSixListItems) {
                subItem.classList.remove('dates-active-submenu-six')
            }
            this.classList.add('dates-active-submenu-six')
        }

    })
}

// prevent default==================

for (let linkItem of headerSixListItems) {
    let HeaderSixLink = linkItem.querySelector('a');
    HeaderSixLink.addEventListener('click', function(e) {
        e.preventDefault();
    })
}

// remove active function from anywhere 
function removeActiveFunSix(e) {

    let isMenuClick = document.querySelector('.dates-header-6').contains(e.target);
    for (let subItm of headerSixListItems) {
        if ((!isMenuClick && subItm.classList.contains('dates-active-submenu-six'))) {
            subItm.classList.remove('dates-active-submenu-six');
            headerSix.classList.remove('dates-active-header-6-hum');
        }
    }
}

document.addEventListener('click', removeActiveFunSix, false)

// ======================================================================================
// header seven humburger=================================================
const headerBarSeven = document.querySelector('.dates-header-7-bar');
const headerCrossBarSeven = document.querySelector('.dates-header-7-cross-bar');
const headerSeven = document.querySelector('.dates-header-7');
const headerSevenListItems = document.querySelectorAll('.dates-header-7 nav .dates-header-menu ul li');

// header seven add humburger menu

function addHumberMenuSeven() {
    headerSeven.classList.add('dates-active-hum-menu-7');
}

headerBarSeven.addEventListener('click', addHumberMenuSeven)

// header seven remove humburger menu
function removeHumberMenuSeven() {
    headerSeven.classList.remove('dates-active-hum-menu-7');
}

headerCrossBarSeven.addEventListener('click', removeHumberMenuSeven)

//submenu active
for (let listItem of headerSevenListItems) {
    listItem.addEventListener('click', function() {
        if (this.classList.contains('dates-active-submenu-7')) {
            for (let subItem of headerSevenListItems) {
                subItem.classList.remove('dates-active-submenu-7')
            }
            this.classList.remove('dates-active-submenu-7');
        } else {
            for (let subItem of headerSevenListItems) {
                subItem.classList.remove('dates-active-submenu-7')
            }
            this.classList.add('dates-active-submenu-7')
        }

    })
}

// prevent default==================
for (let linkItem of headerSevenListItems) {
    let HeaderSevenLink = linkItem.querySelector('a');
    HeaderSevenLink.addEventListener('click', function(e) {
        e.preventDefault();
    })
}
// remove active function from anywhere 
function removeActiveFunSeven(e) {

    let isMenuClick = document.querySelector('.dates-header-7').contains(e.target);
    for (let subItm of headerSevenListItems) {
        if ((!isMenuClick && subItm.classList.contains('dates-active-submenu-7'))) {
            subItm.classList.remove('dates-active-submenu-7');
            headerSeven.classList.remove('dates-active-hum-menu-7');
        }
    }
}

document.addEventListener('click', removeActiveFunSeven, false)




// ============================================================================
// header eight humburger=================================================
const headerBarEight = document.querySelector('.dates-header-8-bar');
const headerEight = document.querySelector('.dates-header-8');
const headerEightListItems = document.querySelectorAll('.dates-header-8 .dates-header-menu ul li');

// header eight add humburger menu

function addHumberMenuEight() {
    headerEight.classList.toggle('dates-active-hummenu-8');
    if (headerEight.classList.contains('dates-active-hummenu-8')) {
        headerBarEight.innerHTML = '<i class="fas fa-times"></i>'
    } else {
        headerBarEight.innerHTML = '<i class="fas fa-bars"></i>'
    }


}
headerBarEight.addEventListener('click', addHumberMenuEight)


//submenu active
for (let listItem of headerEightListItems) {
    listItem.addEventListener('click', function() {
        if (this.classList.contains('dates-active-submenu-8')) {
            for (let subItem of headerSevenListItems) {
                subItem.classList.remove('dates-active-submenu-8')
            }
            this.classList.remove('dates-active-submenu-8');
        } else {
            for (let subItem of headerEightListItems) {
                subItem.classList.remove('dates-active-submenu-8')
            }
            this.classList.add('dates-active-submenu-8')
        }

    })
}

// prevent default==================

for (let linkItem of headerEightListItems) {
    let HeaderEightLink = linkItem.querySelector('a');
    HeaderEightLink.addEventListener('click', function(e) {
        e.preventDefault();
    })
}

// remove active function from anywhere 
function removeActiveFunEight(e) {
    let isMenuClick = document.querySelector('.dates-header-8').contains(e.target);
    for (let subItm of headerEightListItems) {
        if ((!isMenuClick && subItm.classList.contains('dates-active-submenu-8'))) {
            subItm.classList.remove('dates-active-submenu-8');
            headerEight.classList.remove('dates-active-hummenu-8');
        }
    }

    if (!headerEight.classList.contains('dates-active-hummenu-8')) {
        headerBarEight.innerHTML = '<i class="fas fa-bars"></i>'
    }

}

document.addEventListener('click', removeActiveFunEight, false)
document.addEventListener('click', removeActiveFunEight, false)
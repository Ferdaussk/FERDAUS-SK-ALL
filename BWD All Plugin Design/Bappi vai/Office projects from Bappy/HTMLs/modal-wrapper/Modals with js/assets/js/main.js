"use strict";
//Modal one

const clickToShow = document.querySelector('.click-to-show');
const timeoutShowBtn = document.querySelector('.timeout');
const modalCrossBtn = document.querySelector('.modal-close-btn');
const overlay = document.querySelector('.overlay');

function modalOne() {
    clickToShow.addEventListener('click', function(e) {
        e.preventDefault();
        const modalOne = document.querySelector('.modal-one-wrapper');
        modalOne.classList.add('active-modal');

    })

    
    overlay.addEventListener('click', function(e) {
        e.preventDefault();
        const modalOne = document.querySelector('.modal-one-wrapper');
        modalOne.classList.remove('active-modal');

    })


    modalCrossBtn.addEventListener('click', function(e) {
        e.preventDefault();
        const modalOne = document.querySelector('.modal-one-wrapper');
        modalOne.classList.remove('active-modal');

    })
}

modalOne()



// Modal two

// function modalTwo() {
//     const modalTwo = document.querySelector('.modal-two-wrapper');
//     const overlayTwo = document.querySelector('.overlayTwo')
//     const modalCloseBtn2 = document.querySelector('.modal-close-btn-two');
//     window.addEventListener('load', function(e) {

//         let timeOut = setTimeout(function() {
//             modalTwo.classList.add('active-modal-timeOut');
//         }, 2000);
//     })

//     modalCloseBtn2.addEventListener('click', function() {

//         modalTwo.classList.remove('active-modal-timeOut');
//     })

//     overlayTwo.addEventListener('click', function() {

//         modalTwo.classList.remove('active-modal-timeOut');
//     })

// }


// modalTwo();

// Modal three //with scroll event


// function modalThree() {
//     window.addEventListener('scroll', function() {
//         const overlayThree = document.querySelector('.overlayThree');
//         const modalCrossBtnThree = document.querySelector('.modal-close-btn-three');
//         const modalThree = document.querySelector('.modal-three-wrapper')
//         let scrollXWindow = window.scrollY + 'px';

//         if (scrollXWindow >= '200px') {
//             modalThree.classList.add('active-modal-scroll');
//         }

//         modalCrossBtnThree.addEventListener('click', function() {
//             modalThree.classList.remove('active-modal-scroll');
//         })
//         overlayThree.addEventListener('click', function() {
//             modalThree.classList.remove('active-modal-scroll');
//         })


//     })
// }
// modalThree()


//Modal four

const clickToShowRight = document.querySelector('.click-to-show-right');
const modalCrossBtnFour = document.querySelector('.modal-close-btn-four');
const overlayFour = document.querySelector('.overlayFour');
const modalFourWrapper = document.querySelector('.modal-four-wrapper');



function modalFour() {
    clickToShowRight.addEventListener('click', function(e) {
        e.preventDefault();
        modalFourWrapper.classList.add('active-modal-four');

    })

    overlayFour.addEventListener('click', function(e) {
        e.preventDefault();
        modalFourWrapper.classList.remove('active-modal-four');

    })

    modalCrossBtnFour.addEventListener('click', function(e) {
        e.preventDefault();
        modalFourWrapper.classList.remove('active-modal-four');

    })
}

modalFour()

// modal five start

const clickToShowRotation = document.querySelector('.click-to-show-rotation');
const modalCrossBtnFive = document.querySelector('.modal-close-btn-five');
const closeArticleBtn = document.querySelector('.close-article-btn');
const overlayFive = document.querySelector('.overlayFive');
const modalFiveWrapper = document.querySelector('.modal-five-wrapper');


function modalFive() {
    clickToShowRotation.addEventListener('click', function(e) {
        e.preventDefault();
        modalFiveWrapper.classList.add('active-modal-five');

    })

    overlayFive.addEventListener('click', function(e) {
        e.preventDefault();
        modalFiveWrapper.classList.remove('active-modal-five');

    })

    modalCrossBtnFive.addEventListener('click', function(e) {
        e.preventDefault();
        modalFiveWrapper.classList.remove('active-modal-five');

    })

    closeArticleBtn.addEventListener('click', function(e) {
        e.preventDefault();
        modalFiveWrapper.classList.remove('active-modal-five');

    })
}

modalFive()





function inputAnimation() {
    const NameLabel = document.querySelector('.name-label');
    const nameInput = document.querySelector('.name-input');
    const emailLabel = document.querySelector('.email-label');
    const emailInput = document.querySelector('.email-input');


    //name input====================
    nameInput.addEventListener('focus', function(e) {
        NameLabel.classList.add('active-label');
    })
    nameInput.addEventListener('blur', function(e) {
        let nameValue = nameInput.value;
        NameValueCheck(nameValue)
    })


    //email input====================
    emailInput.addEventListener('focus', function(e) {
        emailLabel.classList.add('active-label');
    })
    emailInput.addEventListener('blur', function(e) {
        let emailValue = emailInput.value;
        EmailValueCheck(emailValue)
    })

    //remove input active class==================
    function NameValueCheck(namVal) {
        if (namVal == '') {
            NameLabel.classList.remove('active-label');
        }
    }

    function EmailValueCheck(emailVal) {
        if (emailVal == '') {
            emailLabel.classList.remove('active-label');
        }
    }
}
inputAnimation()


function ModalFunction(modalName, showBtn, crossBtn, overlay, ClassToActive, event, ...othersCloseBtn) {

    // modal name select
    let modal = document.querySelector(modalName);
    //class add function
    function addActiveClass() {
        modal.classList.add(ClassToActive);
    }

    //class remove function
    function removeActiveClass() {
        modal.classList.remove(ClassToActive);
    }


    // show modal button select

    var ModalShowBTn = document.querySelector(showBtn);


    // choseBTn select
    if (crossBtn != '') {
        let closeBtn = document.querySelector(crossBtn);
        closeBtn.addEventListener('click', removeActiveClass)
    }
    // overlay select
    let modalOverlay = document.querySelector(overlay);

    // click event==========
    ModalShowBTn.addEventListener('click', function() {
        // scroll event============
        if (event == 'click') {
            addActiveClass();
        }
        // scroll event==========
        if (event == 'scroll') {
            window.addEventListener('scroll', function() {
                let scrollYWindow = window.scrollY + 'px';
                if (scrollYWindow >= '200px') {
                    addActiveClass();
                }
            })
        }
        // timeout event==========
        if (event == 'load') {
            setTimeout(addActiveClass, 2000);
        }
    })

    modalOverlay.addEventListener('click', removeActiveClass)
    for (let extraCloseBtn of othersCloseBtn) {
        extraCloseBtn.addEventListener('click', removeActiveClass)
    }
}

//modal six
ModalFunction('.modal-six-wrapper', '.zoom-out-form', '.modal-close-btn-six', '.overlaySix', 'active-modal-six', 'click')


// modal seven
ModalFunction('.modal-seven-wrapper', '.yes-no', '.no-btn', '.overlaySeven', 'active-modal-seven', 'click')

// modal eight
let cartCloseBtn = document.querySelector('.close-cart-btn');
ModalFunction('.modal-eight-wrapper', '.rotate-middle', '.modal-close-btn-eight', '.overlayEight', 'active-modal-Eight', 'scroll', cartCloseBtn)


// count down timer here


function countDownTimer(D, H, M, S) {
    // console.log(D, H, M, S)
    let dayOutput = document.querySelector(D);
    let hourOutput = document.querySelector(H);
    let minOutput = document.querySelector(M);
    let secOutput = document.querySelector(S);

    let timeInterval = setInterval(() => {
        let targetDate = new Date('20 feb, 2022 5:20:30').getTime();
        let runningDate = new Date().getTime();

        let timeDistance = (targetDate - runningDate);

        let day = Math.floor(timeDistance / (1000 * 60 * 60 * 24));
        let hour = Math.floor(timeDistance / (1000 * 60 * 60) % 24)
        let mins = Math.floor(timeDistance / (1000 * 60) % 60)
        let sec = Math.floor(timeDistance / (1000) % 60)

        if (day <= 9) {
            day = '0' + day
        }

        if (hour <= 9) {
            hour = '0' + hour
        }

        if (mins <= 9) {
            mins = '0' + mins
        }

        if (sec <= 9) {
            sec = '0' + sec
        }


        dayOutput.innerHTML = day;
        hourOutput.innerHTML = hour;
        minOutput.innerHTML = mins;
        secOutput.innerHTML = sec;

        if (timeDistance <= 0) {
            clearTimer()
        }

    }, 1000);

    function clearTimer() {
        clearInterval(timeInterval);
    }
}
// counter call for modal nine
countDownTimer('.TS-number-day', '.TS-number-hour', '.TS-number-minutes', '.TS-number-seconds')

// counter call for modal ten
countDownTimer('.BS-number-day', '.BS-number-hour', '.BS-number-minutes', '.BS-number-seconds')


// modal Nine
ModalFunction('.modal-nine-wrapper', '.top-sticky', '', '.overlayNine', 'active-modal-nine', 'load')



// modal ten
ModalFunction('.modal-ten-wrapper', '.bottom-sticky', '', '.overlayTen', 'active-modal-ten', 'load')
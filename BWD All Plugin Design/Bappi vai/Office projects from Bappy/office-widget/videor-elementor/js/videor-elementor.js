/**
 * Videor for Elementor
 * Videor masks YouTube & Vimeo videos by creative & extra-ordinary custom shapes.
 * Exclusively on https://1.envato.market/videor-elementor
 *
 * @encoding        UTF-8
 * @version         1.1.0
 * @copyright       (C) 2018 - 2022 Merkulove ( https://merkulov.design/ ). All rights reserved.
 * @license         Envato License https://1.envato.market/KYbje
 * @contributors    Nemirovskiy Vitaliy (nemirovskiyvitaliy@gmail.com), Dmitry Merkulov (dmitry@merkulov.design)
 * @support         help@merkulov.design
 **/


/**
 * Crop the video width and height
 * @param id - Widget ID
 * @param customRatio - Custom ration from the admin panel
 */
function mdpVideorCrop( id, customRatio ) {

    if ( document.querySelector( '#mdp-videor-' + id + ' .mdp-videor-video' ) === null ) {
        return;
    }

    if ( customRatio === undefined ) {
        customRatio = 100;
    }

    const $videor = document.querySelector( `#mdp-videor-${ id }` );
    const $video = $videor.querySelector( 'video' );

    let ratio = 0.005625 * customRatio;  // 0.5625 equal to 9:16
    let wrap = $videor.querySelector( '.mdp-videor-video' );
    let video = wrap.querySelector( '.mdp-videor-wrap' );
    let wrapRect = wrap.getBoundingClientRect();

    // Make visible
    // wrap.classList.add( 'mdp-videor-visible' );

    // Cropping
    if ( wrapRect.height > wrapRect.width * ratio ) {

        // Cover by height
        video.style.height = wrapRect.height + 'px';
        video.style.width = wrapRect.height / ratio + 'px';

    } else {

        // Cover by width
        video.style.width = wrapRect.width + 'px';
        video.style.height = wrapRect.width * ratio + 'px';

    }

    // Play on hover
    if ( $video && $videor.getAttribute( 'data-play-over' ) === 'yes' ) {

        $videor.addEventListener( 'mouseenter', ( e ) => {

            $video.play();

        } );

    }

    // Stop on leave
    if ( $video && $videor.getAttribute( 'data-stop-leave' ) === 'yes' ) {

        $videor.addEventListener( 'mouseleave', ( e ) => {

            $video.pause();

        } );

    }

}

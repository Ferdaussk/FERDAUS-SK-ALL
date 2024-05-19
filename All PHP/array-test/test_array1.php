<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Array Test</title>
</head>
<body>
  <?php
$first_array = array(
    "https://bestwpdeveloper.com/meet-the-team/" => "bwdeb-check-meet-the-team-widget",
    "https://bestwpdeveloper.com/testimonial-addon-for-elementor/" => "bwdeb-plugin-testimonials",
    "https://bestwpdeveloper.com/creative-button/" => "bwdeb-plugin-creative-button",
    "https://bestwpdeveloper.com/accordion-addon-for-elementor/" => "bwdeb-plugin-accordion",
    "https://bwdplugins.com/bwd-masking-effect/" => "bwdeb-plugin-masking-effect",
    "https://bestwpdeveloper.com/service-addon-for-elementor/" => "bwdeb-plugin-service-showcase",
    "https://bestwpdeveloper.com/promo-box/" => "bwdeb-plugin-promo-box",
    "https://bestwpdeveloper.com/flip-box-addon-for-elementor/" => "bwdeb-plugin-service-flip-box",
    "https://bestwpdeveloper.com/flip-box-carousel/" => "bwdeb-plugin-bwd-flip-box-carousel",
    "https://bestwpdeveloper.com/flip-box-addon-for-elementor" => "bwdeb-plugin-step-flip-box",
    "https://bestwpdeveloper.com/flip-box-addon-for-elementor/" => "bwdeb-plugin-team-flip-box",
    "https://bwdplugins.com/bwd-map-masking/" => "bwdeb-plugin-map-masking",
	
    "https://bestwpdeveloper.com/creative-list-addon-for-elementor/" => "bwdeb-plugin-creative-list",
    "https://bestwpdeveloper.com/dual-heading-addon-for-elementor/" => "bwdeb-plugin-dual-heading",
    "https://bestwpdeveloper.com/back-to-top-addon-for-elementor/" => "bwdeb-plugin-back-to-top",
    "https://bestwpdeveloper.com/call-to-action-for-elementor/" => "bwdeb-plugin-call-to-action",
    "https://bestwpdeveloper.com/icon-box-addon-for-elementor/" => "bwdeb-plugin-icon-box",
    "https://bestwpdeveloper.com/dual-button-addon-for-elementor/" => "bwdeb-plugin-dual-button",
    "https://bestwpdeveloper.com/honeycombs" => "bwdeb-plugin-honeycombs", // Pro
    "https://bestwpdeveloper.com/step-addon-for-elementor/" => "bwdeb-plugin-awesome-step",
    "https://bestwpdeveloper.com/counter-addon-for-elementor/" => "bwdeb-plugin-counter",
    "https://bestwpdeveloper.com/image-hover-effect-addon-for-elementor/" => "bwdeb-plugin-image-hover-effect",
    "https://bestwpdeveloper.com/count-down-addon-for-elementor/" => "bwdeb-plugin-countdown",
    "https://bestwpdeveloper.com/animated-heading/" => "bwdeb-plugin-animated-heading",

    "https://bestwpdeveloper.com/filterable-gallery-for-elementor/" => "bwdeb-plugin-filterable-gallery",
    "https://bestwpdeveloper.com/pricing-table-addon-for-elementor/" => "bwdeb-plugin-pricing-table",
    "https://bestwpdeveloper.com/social-icon-addon-for-elementor/" => "bwdeb-plugin-social-icon",
    "https://bestwpdeveloper.com/creative-tabs-addon-for-elementor/" => "bwdeb-plugin-creative-tab",
    "https://bestwpdeveloper.com/author-bio-addon-for-elementor/" => "bwdeb-plugin-author-bio",
    "https://bestwpdeveloper.com/animated-link-plugin-for-elementor" => "bwdeb-plugin-animated-link",
    "https://bestwpdeveloper.com/business-hours-addon-for-elementor/" => "bwdeb-plugin-business-hours",
    "https://bwdplugins.com/bwd-image-shape/" => "bwdeb-plugin-image-shape",
    "https://bestwpdeveloper.com/fancy-heading-addon-for-elementor/" => "bwdeb-plugin-fancy-heading",
    "https://bestwpdeveloper.com/progress-bar-addon-for-elementor/" => "bwdeb-plugin-progress-bar",
    "https://bestwpdeveloper.com/image-accordion/" => "bwdeb-plugin-image-accordion",
    "https://bestwpdeveloper.com/image-compare/" => "bwdeb-plugin-image-compare",

    "https://bestwpdeveloper.com/timeline/" => "bwdeb-plugin-timeline",
    "https://bestwpdeveloper.com/blockquote/" => "bwdeb-plugin-blockquote",
    "https://bestwpdeveloper.com/video-popup/" => "bwdeb-plugin-video-popup",
    "https://bestwpdeveloper.com/image-stack-group/" => "bwdeb-plugin-image-stack-group",
    "https://bestwpdeveloper.com/masking-video-addon-for-elementor/" => "bwdeb-plugin-masking-video",
    "https://bestwpdeveloper.com/image-swap/" => "bwdeb-plugin-image-swap",
    "https://bestwpdeveloper.com/profile-card-addon-for-elementor/" => "bwdeb-plugin-profile-card",
    "https://bestwpdeveloper.com/photo-stack-plugin-for-elementor-page-builder" => "bwdeb-plugin-photo-stack",
    "https://bestwpdeveloper.com/image-scroll-elementor-addon" => "bwdeb-plugin-image-scroll",
    "https://bestwpdeveloper.com/ihover" => "bwdeb-plugin-ihover",
    "https://bestwpdeveloper.com/webinar-info-addon-for-elementor" => "bwdeb-plugin-webinar-info",
    "https://bestwpdeveloper.com/interactive-circle-infographic" => "bwdeb-plugin-circle-info",

    "https://bestwpdeveloper.com/elementor-coupon-code" => "bwdeb-plugin-coupon-code",
    "https://bestwpdeveloper.com/elementor-header" => "bwdeb-plugin-unique-headers",
    "https://bwdplugins.com/plugins/click-to-contact/" => "bwdeb-plugin-click-to-contact",
    "https://bestwpdeveloper.com/popup-elementor-addon" => "bwdeb-plugin-popup", // Pro
    "https://bestwpdeveloper.com/elementor-data-table" => "bwdeb-plugin-data-table",
    "https://bestwpdeveloper.com/advanced-slider" => "bwdeb-plugin-advanced-slider", // Pro
    "https://bestwpdeveloper.com/anything-slide" => "bwdeb-plugin-slide-anything", // Pro
    "https://bestwpdeveloper.com/contact-form-7-styler" => "bwdeb-plugin-contact-form-7-styler",
    "https://bestwpdeveloper.com/image-hotspot" => "bwdeb-plugin-image-hotspot", // Pro
    "https://bestwpdeveloper.com/brand-logo-showcase/" => "bwdeb-plugin-logo-carousel",
    "https://bestwpdeveloper.com/brand-logo-showcase" => "bwdeb-plugin-logo-grid",
    "https://bestwpdeveloper.com/brand-logo-showcase" => "bwdeb-plugin-logo-filter",

    "https://bestwpdeveloper.com/team-member-carousel" => "bwdeb-plugin-team-carousel",
    "https://bestwpdeveloper.com/unfold-content" => "bwdeb-plugin-unfold", // Pro
    "https://bestwpdeveloper.com/code-highlighter" => "bwdeb-plugin-code-highlighter",
    "https://bestwpdeveloper.com/effective-lottie-animation" => "bwdeb-plugin-lottie-animation", // Pro
    "https://bestwpdeveloper.com/breadcrumb" => "bwdeb-plugin-breadcrumb",
    "https://bestwpdeveloper.com/info-download-button" => "bwdeb-plugin-info-download-button",
    "https://bestwpdeveloper.com/pre-loader" => "bwdeb-plugin-effective-pre-loader",
    "https://bestwpdeveloper.com/bar-chart" => "bwdeb-plugin-bar-chart", // Pro
    "https://bestwpdeveloper.com/social-share" => "bwdeb-plugin-social-share",
    "https://bestwpdeveloper.com/background-switcher" => "bwdeb-plugin-background-switcher",
    "https://bestwpdeveloper.com/content-switcher/" => "bwdeb-plugin-content-switcher",
    "https://bestwpdeveloper.com/lord-icon" => "bwdeb-plugin-lord-icon", // Pro


    "https://bestwpdeveloper.com/card-flipper-pro" => "bwdeb-plugin-cart-flipper", // Pro
    "https://bestwpdeveloper.com/ajax-data-table/" => "bwdeb-plugin-ajax-data-table",
    "https://bestwpdeveloper.com/content-switcher-plus" => "bwdeb-plugin-con-swi-pls", // Pro
    "https://bestwpdeveloper.com/image-reveal-animation" => "bwdeb-plugin-img-rev-widg", // Pro
    "https://bestwpdeveloper.com/image-unfold-kit" => "bwdeb-plugin-img-unfold-kit", // Pro
    "https://bestwpdeveloper.com/modern-feature-list" => "bwdeb-plugin-modern-feature-list", // Pro
    "https://bestwpdeveloper.com/nft-artisty-pro" => "bwdeb-plugin-nft", // Pro
    "https://bestwpdeveloper.com/offcanvas-slide-magic" => "bwdeb-plugin-offcanvasmagic", // Pro
    "https://bestwpdeveloper.com/private-content-locker" => "bwdeb-plugin-privacy-content-locker", // Pro
    "https://bestwpdeveloper.com/clear-pdf-view" => "bwdeb-plugin-viewpdf", // Pro
    "https://bestwpdeveloper.com/progress-master-kit" => "bwdeb-plugin-progress-master-kit", // Pro
    "https://bestwpdeveloper.com/restaurant-price-menu" => "bwdeb-plugin-restaurant-price-menu", // Pro
    "https://bestwpdeveloper.com/sales-promotion-offer" => "bwdeb-plugin-sales-promotion-offer", // Pro
    "https://bestwpdeveloper.com/showcase-your-profile" => "bwdeb-plugin-profile-showcas", // Pro
    "https://bestwpdeveloper.com/tooltip-mastery" => "bwdeb-plugin-tooltip-mastery", // Pro
    "https://bestwpdeveloper.com/employee-profile-identity" => "bwdeb-employee-profile-identity", // Pro
    "https://bestwpdeveloper.com/horizontal-timeline-slider" => "bwdeb-horizontal-timeline-slider", // Pro
    "https://bestwpdeveloper.com/Showcase-Product-Features" => "bwdeb-product-features-w", // Pro
    "https://bestwpdeveloper.com/threesixty-rotation-view" => "bwdeb-threesixty-rotation-view", // Pro
    "https://bestwpdeveloper.com/bwd-faq/" => "bwdeb-widget-template", // Pro
    "https://bestwpdeveloper.com/pricing-scheme-switcher" => "bwdeb-pssx", // Pro
    "https://bestwpdeveloper.com/bio-link-maker" => "bwdeb-blmx1", // Pro
    "https://bestwpdeveloper.com/bio-link-maker" => "bwdeb-blmx2", // Pro
    "https://bestwpdeveloper.com/bio-link-maker" => "bwdeb-blmx3", // Pro
    "https://bestwpdeveloper.com/sticky-video-prime" => "bwdeb-svpx", // Pro
    "https://bestwpdeveloper.com/tabify-xpert-suite" => "bwdeb-txsx", // Pro
    "https://bestwpdeveloper.com/vertical-split-slideshow" => "bwdeb-vsix", // Pro
);



$num_elements = 0;
foreach ($first_array as $key => $value) {
    $num_elements++;
}
echo "The array has $num_elements elements.";
echo 'Out of 99';
?>

</body>
</html>
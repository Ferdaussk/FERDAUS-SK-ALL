// Wait for the DOM to fully load before executing JavaScript
document.addEventListener("DOMContentLoaded", function () {
    // Select the coupon code and copy button
    let coupon_code = document.querySelector(".bwdcd-coupon-code");
    let coupon_code_btn = document.querySelector(".bwdcd-coupon-code-btn");

    // Check if both elements are found in the DOM
    if (coupon_code && coupon_code_btn) {
        // Add a click event listener to the copy button
        coupon_code_btn.addEventListener('click', function () {
            // Copy the coupon code text to the clipboard
            navigator.clipboard.writeText(coupon_code.textContent.trim())
                .then(() => {
                    // Update button text to indicate successful copy
                    coupon_code_btn.textContent = "COPIED!";
                    // Reset button text after a short delay
                    setTimeout(() => {
                        coupon_code_btn.textContent = "COPY CODE";
                    }, 1500);
                })
                .catch(err => {
                    console.error('Failed to copy: ', err);
                });
        });
    }
});

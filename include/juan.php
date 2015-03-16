<?php

function pk_checkout() {
    // Show non-cart errors
    wc_print_notices();

    // Check cart has contents
    if (sizeof(WC()->cart->get_cart()) == 0) {
        return;
    }

    // Check cart contents for errors
    do_action('woocommerce_check_cart_items');

    // Calc totals
    WC()->cart->calculate_totals();

    // Get checkout object
    $checkout = WC()->checkout();

    if (empty($_POST) && wc_notice_count('error') > 0) {

        wc_get_template('checkout/cart-errors.php', array('checkout' => $checkout));
    } else {

        $non_js_checkout = !empty($_POST['woocommerce_checkout_update_totals']) ? true : false;

        if (wc_notice_count('error') == 0 && $non_js_checkout)
            wc_add_notice(__('The order totals have been updated. Please confirm your order by pressing the Place Order button at the bottom of the page.', 'woocommerce'));

//        wc_get_template('checkout/form-checkout.php', array('checkout' => $checkout));
        wc_get_template('../../../themes/amazona/include/pk-form-checout.php', array('checkout' => $checkout));
    }
}

<?php

class RedirectController
{
    public static function init(): void
    {
        add_action('template_redirect', [__CLASS__, 'redirectUserToCheckoutPage']);
    }

    /**
     * User must be redirected to /checkout page
     */
    public static function redirectUserToCheckoutPage(): void
    {
        if (is_cart()) {
            wp_safe_redirect(wc_get_checkout_url());
            exit();
        }
    }
}

RedirectController::init();

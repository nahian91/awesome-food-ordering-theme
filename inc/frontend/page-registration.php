<?php
if (is_user_logged_in()) {
    wp_redirect(home_url('/checkout'));
    exit;
}

$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['fd_register_nonce'])) {
    if (wp_verify_nonce($_POST['fd_register_nonce'], 'fd_user_register')) {
        
        $username   = sanitize_user($_POST['username']);
        $email      = sanitize_email($_POST['email']);
        $password   = $_POST['password'];
        $full_name  = sanitize_text_field($_POST['full_name']);
        
        // UK Phone Validation
        $phone_raw  = sanitize_text_field($_POST['phone']);
        $phone      = preg_replace('/[^0-9]/', '', $phone_raw);
        
        // Address Fields
        $flat_no    = sanitize_text_field($_POST['flat_no']);
        $building   = sanitize_text_field($_POST['building']);
        $door_no    = sanitize_text_field($_POST['door_no']);
        $road_name  = sanitize_text_field($_POST['road_name']);
        $address_gen = sanitize_textarea_field($_POST['address']);
        $postcode   = strtoupper(sanitize_text_field($_POST['postcode'])); // Force Uppercase

        // Basic Validation
        if (empty($username) || username_exists($username)) $errors[] = "Username is required and must be unique.";
        if (!is_email($email)) $errors[] = "Please enter a valid email.";
        if (email_exists($email)) $errors[] = "This email is already registered.";
        if (strlen($password) < 6) $errors[] = "Password must be at least 6 characters.";
        
        // UK Phone Validation Logic
        if (empty($phone)) {
            $errors[] = "Phone number is required.";
        } elseif (strlen($phone) !== 11 || substr($phone, 0, 1) !== '0') {
            $errors[] = "Please enter a valid 11-digit UK phone number starting with 0.";
        }

        if (empty($postcode)) $errors[] = "Postcode is required.";

        if (empty($errors)) {
            $user_id = wp_create_user($username, $password, $email);
            
            if (!is_wp_error($user_id)) {
                // Split name for WooCommerce compatibility
                $name_parts = explode(' ', $full_name, 2);
                $first_name = $name_parts[0];
                $last_name  = isset($name_parts[1]) ? $name_parts[1] : '';

                wp_update_user([
                    'ID'           => $user_id,
                    'display_name' => $full_name,
                    'first_name'   => $first_name,
                    'last_name'    => $last_name
                ]);
                
                // Store standard WooCommerce Meta
                update_user_meta($user_id, 'billing_first_name', $first_name);
                update_user_meta($user_id, 'billing_last_name', $last_name);
                update_user_meta($user_id, 'billing_phone', $phone);
                update_user_meta($user_id, 'billing_postcode', $postcode);
                
                // Construct clean address string
                $address_parts = array_filter([
                    $flat_no ? "Flat $flat_no" : '',
                    $building,
                    "Door $door_no",
                    $road_name
                ]);
                $full_address_string = implode(', ', $address_parts);
                
                update_user_meta($user_id, 'billing_address_1', $full_address_string);
                update_user_meta($user_id, 'billing_address_2', $address_gen);
                
                // Store your custom individual fields
                update_user_meta($user_id, 'fd_flat_no', $flat_no);
                update_user_meta($user_id, 'fd_building', $building);
                update_user_meta($user_id, 'fd_door_no', $door_no);
                update_user_meta($user_id, 'fd_road_name', $road_name);
                
                // Auto-login
                wp_set_current_user($user_id);
                wp_set_auth_cookie($user_id);
                
                wp_redirect(home_url('/checkout'));
                exit;
            } else {
                $errors[] = $user_id->get_error_message();
            }
        }
    }
}
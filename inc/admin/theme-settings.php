<?php
/**
 * Theme Settings Page Content
 */

function afd_theme_settings_render() {
    // সেটিংস সেভ হওয়ার পর নোটিফিকেশন দেখানোর জন্য
    if (isset($_GET['settings-updated'])) {
        add_settings_error('afd_messages', 'afd_message', __('Settings Saved', 'awesome-food-delivery'), 'updated');
    }
    settings_errors('afd_messages');
    ?>

    <div class="wrap awesome-food-delivery">
        <h1>Theme Custom Settings</h1>
        <hr>
        
        <form method="post" action="options.php" class="afd-settings-form">
            <?php
            settings_fields('afd_theme_settings_group');
            do_settings_sections('afd_theme_settings_group');
            ?>
            
            <div class="afd-right-box" style="padding: 30px; background: #fff; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); margin-top: 20px;">
                <table class="form-table">
                    <tr valign="top">
                        <th scope="row">Header Logo URL</th>
                        <td>
                            <input type="text" name="afd_header_logo" value="<?php echo esc_attr(get_option('afd_header_logo')); ?>" class="regular-text" placeholder="https://example.com/logo.png" />
                        </td>
                    </tr>

                    <tr valign="top">
                        <th scope="row">Primary Theme Color</th>
                        <td>
                            <input type="color" name="afd_primary_color" value="<?php echo esc_attr(get_option('afd_primary_color', '#d63638')); ?>" />
                            <p class="description">Select your main branding color.</p>
                        </td>
                    </tr>

                    <tr valign="top">
                        <th scope="row">Facebook URL</th>
                        <td>
                            <input type="text" name="afd_facebook_url" value="<?php echo esc_attr(get_option('afd_facebook_url')); ?>" class="regular-text" />
                        </td>
                    </tr>

                    <tr valign="top">
                        <th scope="row">Footer Copyright Text</th>
                        <td>
                            <textarea name="afd_footer_text" rows="4" class="large-text"><?php echo esc_textarea(get_option('afd_footer_text')); ?></textarea>
                        </td>
                    </tr>
                </table>

                <div style="margin-top: 20px; border-top: 1px solid #eee; padding-top: 20px;">
                    <?php submit_button('Save Theme Settings', 'primary', 'submit_afd_settings'); ?>
                </div>
            </div>
        </form>
    </div>
    <?php
}

/**
 * Register Settings logic
 */
add_action('admin_init', function() {
    register_setting('afd_theme_settings_group', 'afd_header_logo');
    register_setting('afd_theme_settings_group', 'afd_primary_color');
    register_setting('afd_theme_settings_group', 'afd_facebook_url');
    register_setting('afd_theme_settings_group', 'afd_footer_text');
});
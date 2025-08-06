<div class="wrap">
    <h1>Simple Setting Plugin</h1>
    <form method="post" action="options.php">
        <?php settings_fields('ssp_options_group'); ?>
        <?php do_settings_sections('ssp_options_group'); ?>
        <table class="form-table">
            <tr valign="top">
                <th scope="row">Example Setting</th>
                <td><input type="text" name="ssp_option" value="<?php echo esc_attr($value); ?>" /></td>
            </tr>
        </table>
        <?php submit_button(); ?>
    </form>
</div>


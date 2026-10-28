<?php

function theme_saya_setup() {
    // Menambahkan title tag otomatis
    add_theme_support('title-tag');

    // Menampilkan Gambar Unggulan (Featured Image / Thumbnail)
    add_theme_support('post-thumbnails');

    // Mendaftarkan Menu Navigasi
    register_nav_menus(array(
        'menu-utama' => 'Menu Utama'
    ));
}
add_action('after_setup_theme', 'theme_saya_setup');

function theme_saya_assets() {
    // Memanggil CSS
    wp_enqueue_style('theme-saya-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'theme_saya_assets');
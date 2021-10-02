<?php

    function evis_multipurpose(){
        wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/css/fontawesome-all.css', array(), '5.0.6', 'all');
        wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', array(), '4.1.3', 'all');
        wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', array(), '0.0.1', 'all');
        wp_enqueue_style('google-fonts', evis_slug_fonts_url(), array(), null);
        
        wp_enqueue_script('jquery');
        wp_enqueue_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array('jquery'), '4.1.3', true);
        wp_enqueue_script('vide', get_template_directory_uri() .'/assets/js/jquery.vide.min.js', array('jquery'), '1.0.0', true);
    }
    add_action('wp_enqueue_scripts', 'evis_multipurpose');

    function evis_slug_fonts_url() {
        $fonts_url = '';
        $Oswald = _x('on', 'Oswald font: on or off', 'theme-slug');
        $Montserrat = _x('on', 'Montserrat font: on or off', 'theme-slug');
        if ('off' !== $Oswald || 'off' !== $Montserrat) {
            $font_families = array();
            if ( 'off' !== $Oswald ) {
                $font_families[] = 'Oswald:200,300,400,500,600,700';
            }
            if ( 'off' !== $Montserrat ) {
                $font_families[] = 'Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
            }
            $query_args = array(
                'family' => urlencode(implode('|', $font_families)),
                'subset' => urlencode('cyrillic,cyrillic-ext,latin-ext,vietnamese'),
            );        
            $fonts_url = add_query_arg($query_args, 'https://fonts.googleapis.com/css');
        }
        return esc_url_raw($fonts_url);
    }
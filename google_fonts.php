<?php
    
    function dano_enqueue_google_fonts() {
        $dano_font_list = array(
            
            /* SERIF */
            
            //"Literata:400,500,600,700", // Literata
            //"Merriweather:300,400,700,900", // Merriweather
            //"Roboto+Slab:100,300,400,700", // Roboto Slab
            //"Crimson+Text:400,600,700", // Crimson Text

            /* SANS SERIF */

            //"Roboto:100,300,400,500,700,900", // Roboto
            //"Montserrat:100,200,300,400,500,600,700,800,900", // Montserrat
            "Raleway:100,200,300,400,500,600,700,800,900", // Raleway

            /* DISPLAY */

            "Barriecito", // Barriecito
            //"Mountains+Of+Christmas:400,700", // Mountains of Christmas
            //"Lobster", // Lobster
            //"Comfortaa:300,400,500,600,700", // Comfortaa

            /* HANDWRITING */

            //"Indie+Flower", // Indie Flower
            //"Shadows+Into+Light", // Shadows Into Light
            //"Pacifico", // Pacifico
            //"Permanent+Marker", // Permanent Marker

        );

        $dano_font_string = implode("|", $dano_font_list);
        $dano_url = 'https://fonts.googleapis.com/css?family=' . $dano_font_string . '&display=swap';
        wp_enqueue_style( 'google-fonts', $dano_url );

    }
    add_action( 'wp_enqueue_scripts', 'dano_enqueue_google_fonts');
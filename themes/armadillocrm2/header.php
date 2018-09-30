<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<?php wp_head(); ?>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

    <link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/favicon/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/favicon/touch.png" rel="apple-touch-icon-precomposed">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    
    
    <script>
    // conditionizr.com
    // configure environment tests
    conditionizr.config({
        assets: '<?php echo get_template_directory_uri(); ?>',
        tests: {}
    });
    </script>
    <link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/main.css?123515" rel="stylesheet">

    
    <!-- Nav highlight styles -->
    <style>
        <?php if (is_page('What we do')): ?>header li.current-menu-item:before, header li.current-menu-item a {color: #e64b50;}<?php endif; ?>
        <?php if (is_page('Who we are')): ?>header li.current-menu-item:before, header li.current-menu-item a {color: #d121a1;}<?php endif; ?>
        <?php if (is_page('Our work')): ?>header li.current-menu-item:before, header li.current-menu-item a {color: #ff9901;}<?php endif; ?>
        <?php if(is_home() && !is_front_page()): ?>header li.current-menu-item:before, headerav li.current-menu-item a {color: #7838fb;}<?php endif; ?>
        <?php if (is_page('Contact us')): ?>header li.current-menu-item:before, header li.current-menu-item a {color: #ffd400;}<?php endif; ?>
    </style>
    

</head>
<body <?php body_class(); ?>>
<div class="wrapper">
    
    <!-- Header ----------------------->
    <header>
        <div class="container">
            <a href="<?php echo home_url(); ?>" data-slug="index" class="armadilloLogo">
                <svg id="armadilloLogo" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 306.18 54.21">
                    <title>Armadillo</title>
                    <g id="arcs">
                        <path d="M19.55 15.25A19.48 19.48 0 1 0 39 34.65a19.5 19.5 0 0 0-19.45-19.4M31 34.65A11.38 11.38 0 0 1 19.55 46.2a11.51 11.51 0 1 1 0-23A11.35 11.35 0 0 1 31 34.65" fill="#97cb5c" />
                        <path d="M66.69 20.16a3.81 3.81 0 0 0-3.41-3.79 19.5 19.5 0 0 0-19.59 19.4v.47h7.93v-.47A11.42 11.42 0 0 1 63.24 24.3a3.78 3.78 0 0 0 3.41-4.14" fill="#97cb5c" />
                        <path d="M161.61 15.25A19.48 19.48 0 1 0 181 34.65a19.5 19.5 0 0 0-19.41-19.41m11.47 19.41a11.51 11.51 0 1 1-11.47-11.47 11.38 11.38 0 0 1 11.47 11.47" fill="#97cb5c" />
                        <path d="M205.27 15.25a19.48 19.48 0 1 0 19.41 19.41 19.5 19.5 0 0 0-19.41-19.41m11.47 19.41a11.51 11.51 0 1 1-11.47-11.47 11.38 11.38 0 0 1 11.47 11.47" fill="#97cb5c" />
                        <path d="M286.77 15.25a19.48 19.48 0 1 0 19.41 19.41 19.5 19.5 0 0 0-19.41-19.41m0 30.95a11.51 11.51 0 1 1 11.47-11.54 11.42 11.42 0 0 1-11.47 11.54" fill="#97cb5c" />
                        <path d="M98.48 34.67a4 4 0 0 0 4 3.86 4 4 0 0 0 3.93-3.86 19.48 19.48 0 0 0-39 0 4 4 0 0 0 8 0 11.51 11.51 0 0 1 23 0" fill="#97cb5c" />
                        <path d="M129.5 34.67a4 4 0 0 0 4 3.86 4.05 4.05 0 0 0 3.93-3.86 19.48 19.48 0 0 0-39 0 4 4 0 0 0 8 0 11.51 11.51 0 0 1 23 0" fill="#97cb5c" />
                    </g>
                    <g id="lines">
                        <path id="target" data-name="target" d="M35 15.5a4 4 0 0 0-4 3.86V50a4 4 0 0 0 4 3.86A4 4 0 0 0 39 50V19.36a4 4 0 0 0-4-3.86" fill="#6858a6" />
                        <path id="target-2" data-name="target" d="M47.69 15.5a4 4 0 0 0-4 3.86V50a4 4 0 0 0 4 3.86A4 4 0 0 0 51.62 50V19.36a4 4 0 0 0-3.93-3.86" fill="#6858a6" />
                        <path id="target-3" data-name="target" d="M177.08 15.5a4 4 0 0 0-4 3.86V50a4 4 0 0 0 4 3.86A4 4 0 0 0 181 50V19.36a4 4 0 0 0-3.93-3.86" fill="#6858a6" />
                        <path id="target-4" data-name="target" d="M233.37 15.5a4 4 0 0 0-4 3.86V50a4 4 0 0 0 4 3.86A4 4 0 0 0 237.3 50V19.36a4 4 0 0 0-3.93-3.86" fill="#6858a6" />
                        <path id="target-5" data-name="target" d="M220.74 0a4 4 0 0 0-4 3.86v30.66a4 4 0 0 0 4 3.86 4.05 4.05 0 0 0 3.93-3.86V3.86A4.05 4.05 0 0 0 220.74 0" fill="#6858a6" />
                        <path id="target-6" data-name="target" d="M246 0a4 4 0 0 0-4 3.86v30.66a4 4 0 0 0 4 3.86 4 4 0 0 0 3.93-3.86V3.86A4.05 4.05 0 0 0 246 0" fill="#6858a6" />
                        <path id="target-7" data-name="target" d="M258.67 0a4 4 0 0 0-4 3.86v30.66a4 4 0 0 0 4 3.86 4.05 4.05 0 0 0 3.93-3.86V3.86A4.05 4.05 0 0 0 258.67 0" fill="#6858a6" />
                    </g>
                </svg>
            </a>
            
            <input type="checkbox" id="navToggle" name="navToggle">
            <label for="navToggle"><span></span></label>
            <nav>
                <ul>
                    <li><?php html5blank_nav(); ?></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="page case">
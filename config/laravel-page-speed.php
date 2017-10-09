<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Laravel Page Speed
    |--------------------------------------------------------------------------    |
    */

    'zlib' => false, // Needs enable zlib module: http://php.net/manual/en/zlib.configuration.php
    //ini_set('zlib.output_compression', 'On');

    'filters' => [
        'collapse_whitespace' => true,
        'remove_comments' => true,
        'combine_css' => true,
        'combine_heads' => false,
        'combine_javascript' => false,
        'dedup_inlined_images' => false,
        'defer_javascript' => false,
        'elide_attributes' => true,
        'pedantic' => false,
        'extend_cache' => false,
        'fallback_rewrite_css_urls' => false,
        'flatten_css_imports' => false,
        'hint_preload_subresources' => true,
        'inline_css' => true,
        'inline_google_font_css' => false,
        'inline_import_to_link' => false,
        'inline_javascript' => true,
        'inline_preview_images' => false,
        'insert_dns_prefetch' => true,
        'insert_ga' => false,
        'lazyload_images' => false,
        'local_storage_cache' => false,
        'make_show_ads_async' => false,
        'make_google_analytics_async' => false,
        'move_css_above_scripts' => false,
        'move_css_to_head' => false,
        'outline_css' => false,
        'outline_javascript' => false,
        'prioritize_critical_css' => false,
        'remove_quotes' => true,
        'resize_mobile_images' => false,
        'resize_rendered_image_dimensions' => false,
        'responsive_images' => false,
        'rewrite_css' => false,
        'rewrite_images' => false,
        'rewrite_javascript' => false,
        'rewrite_style_attributes' => false,
        'rewrite_style_attributes_with_url' => false,
        'sprite_images' => false,
        'trim_urls' => true
    ]
];

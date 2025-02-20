<style>
    .anc-6310-counter-05-paralax {
        <?php
        if ($bgType == 1) {
            echo "background: transparent;";
        } else if ($bgType == 2) {
            echo "background-color: " . (isset($cssData['template_background_color']) ? esc_attr($cssData['template_background_color']) : 'rgba(255, 255, 255, 0)') . ";";
        } else if ($bgType == 3) {
            echo "background-image: url('" . (isset($cssData['box_background_image']) ? esc_attr($cssData['box_background_image']) : 'rgba(255, 255, 255, 0)') . "');";
        }
        ?>background-attachment: fixed;
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        overflow: hidden;
        font-size: 0;
    }

    .anc-6310-counter-05-common-overlay {
        background-color: <?php echo esc_attr($cssData['image_overlay_color']); ?>;
        overflow: hidden;
        font-size: 0;
        position: relative;
    }

    .anc-6310-counter-05-common-overlay iframe {
        position: absolute;
        top: -100%;
        left: 0;
        width: 100%;
        height: 300%;
        pointer-events: none;
        opacity: .7;
    }

    .anc-6310-counter-05-common-overlay:hover {
        background-color: <?php echo esc_attr($cssData['image_overlay_hover_color']); ?>;
    }

    .anc-6310-counter-05-row {
        padding: 70px 10px 60px 15px;
        overflow: hidden;
        font-size: 0;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .anc-6310-counter-05 {
        overflow: hidden;
        margin: 0 auto;
        padding-top: 50px;
        padding-bottom: 20px;
        padding-right: 15px;
        width: 100%;
        -webkit-transition: all 0.3s ease 0s;
        -moz-transition: all 0.3s ease 0s;
        -ms-transition: all 0.3s ease 0s;
        -o-transition: all 0.3s ease 0s;
        transition: all 0.3s ease 0s;
        height: calc(100% - 70px);
        display: flex;
    }

    .anc-6310-counter-05:hover {
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        -moz-transform: translateY(-5px) translateZ(0);
        -webkit-transform: translateY(-5px) translateZ(0);
        transform: translateY(-5px) translateZ(0);
        transition: transform 0.7s;
    }

    .anc-6310-counter-05-featured-item {
        display: inline-block;
        width: calc(30% - (<?php echo esc_attr($cssData['icon_margin_left']); ?>px + <?php echo esc_attr($cssData['icon_margin_right']); ?>px));
        overflow: visible;
        text-align: left;
        line-height: <?php echo esc_attr($cssData['icon_line_height']); ?>px;
        margin-left: <?php echo esc_attr($cssData['icon_margin_left']); ?>px;
        margin-right: <?php echo esc_attr($cssData['icon_margin_right']); ?>px;
        margin-top: <?php echo esc_attr($cssData['icon_margin_top']); ?>px;
        margin-bottom: <?php echo esc_attr($cssData['icon_margin_bottom']); ?>px;
    }

    @-webkit-keyframes hvr-icon-bob {
        0% {
            -webkit-transform: translateY(-6px);
            transform: translateY(-6px);
        }

        50% {
            -webkit-transform: translateY(-2px);
            transform: translateY(-2px);
        }

        100% {
            -webkit-transform: translateY(-6px);
            transform: translateY(-6px);
        }
    }

    @keyframes hvr-icon-bob {
        0% {
            -webkit-transform: translateY(-6px);
            transform: translateY(-6px);
        }

        50% {
            -webkit-transform: translateY(-2px);
            transform: translateY(-2px);
        }

        100% {
            -webkit-transform: translateY(-6px);
            transform: translateY(-6px);
        }
    }

    @-webkit-keyframes hvr-icon-bob-float {
        100% {
            -webkit-transform: translateY(-6px);
            transform: translateY(-6px);
        }
    }

    @keyframes hvr-icon-bob-float {
        100% {
            -webkit-transform: translateY(-6px);
            transform: translateY(-6px);
        }
    }

    .anc-6310-counter-05-featured-item i,
    .anc-6310-counter-05-featured-item img {
        color: <?php echo esc_attr($cssData['icon_color']); ?>;
        font-size: <?php echo esc_attr($cssData['icon_size']); ?>px;
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }
    .anc-6310-counter-05-featured-item img {
        width: <?php echo esc_attr($cssData['icon_size']); ?>px;
        height: <?php echo esc_attr($cssData['icon_size']); ?>px;
    }

    .anc-6310-counter-05:hover .anc-6310-counter-05-featured-item i,
    .anc-6310-counter-05:hover .anc-6310-counter-05-featured-item img {
        color: <?php echo esc_attr($cssData['icon_hover_color']); ?>;
        -webkit-animation-name: hvr-icon-bob-float, hvr-icon-bob;
        animation-name: hvr-icon-bob-float, hvr-icon-bob;
        -webkit-animation-duration: .3s, 1.5s;
        animation-duration: .3s, 1.5s;
        -webkit-animation-delay: 0s, .3s;
        animation-delay: 0s, .3s;
        -webkit-animation-timing-function: ease-out, ease-in-out;
        animation-timing-function: ease-out, ease-in-out;
        -webkit-animation-iteration-count: 1, infinite;
        animation-iteration-count: 1, infinite;
        -webkit-animation-fill-mode: forwards;
        animation-fill-mode: forwards;
        -webkit-animation-direction: normal, alternate;
        animation-direction: normal, alternate;
    }

    .anc-6310-counter-05-bottom-container {
        position: relative;
        display: inline-block;
        width: calc(100% - <?php echo esc_attr(($cssData['box_border_width']?$cssData['box_border_width']:0) * 2); ?>px);
        background-color: <?php echo esc_attr($cssData['box_background_color']); ?>;
        border-style: solid;
        border-width: <?php echo esc_attr($cssData['box_border_width']); ?>px;
        border-color: <?php echo esc_attr($cssData['box_border_color']); ?>;
        border-top: 0;
        box-shadow: 0 0 <?php echo esc_attr((($cssData['box_shadow_blur']?$cssData['box_shadow_blur']:0) * 2)); ?>px <?php echo esc_attr($cssData['box_shadow_width']); ?>px <?php echo esc_attr($cssData['box_shadow_color']); ?>;
        height: 100%;
    }

    .anc-6310-counter-05:hover .anc-6310-counter-05-bottom-container {
        background-color: <?php echo esc_attr($cssData['box_background_hover_color']); ?>;
        border-color: <?php echo esc_attr($cssData['box_border_hover_color']); ?>;
        box-shadow: 0 0 <?php echo esc_attr((($cssData['box_shadow_blur']?$cssData['box_shadow_blur']:0) * 2)); ?>px <?php echo esc_attr($cssData['box_shadow_width']); ?>px <?php echo esc_attr($cssData['box_shadow_hover_color']); ?>;
    }

    .anc-6310-counter-05-bottom-container>span.span2 {
        content: "";
        position: absolute;
        height: <?php echo esc_attr($cssData['box_border_width']); ?>px;
        background-color: <?php echo esc_attr($cssData['box_border_color']); ?>;
        top: 0;
        left: 0;
        width: 12%;
    }

    .anc-6310-counter-05-bottom-container>span.span1 {
        position: absolute;
        height: <?php echo esc_attr($cssData['box_border_width']); ?>px;
        background-color: <?php echo esc_attr($cssData['box_border_color']); ?>;
        top: 0;
        right: 0;
    }

    .anc-6310-counter-05:hover .anc-6310-counter-05-bottom-container>span.span2 {
        background-color: <?php echo esc_attr($cssData['box_border_hover_color']); ?>;
    }

    .anc-6310-counter-05:hover .anc-6310-counter-05-bottom-container>span.span1 {
        background-color: <?php echo esc_attr($cssData['box_border_hover_color']); ?>;
    }

    .anc-6310-counter-05-count-content,
    .anc-6310-counter-05-count-content-hidden {
        position: absolute;
        top: -<?php echo round(esc_attr($cssData['number_font_size']?$cssData['number_font_size']:0) / 2); ?>px;
        left: calc(12% + 10px);
    }

    .anc-6310-counter-05-count-content-hidden {
        display: none;
        top: 100px;
    }

    .anc-6310-counter-05-count-content-inner {
        display: inline-block;
    }

    .anc-6310-counter-05-count-number {
        font-weight: <?php echo esc_attr($cssData['number_font_weight']); ?>;
        font-size: <?php echo esc_attr($cssData['number_font_size']); ?>px;
        color: <?php echo esc_attr($cssData['number_font_color']); ?>;
        font-family: <?php echo str_replace("+", " ", esc_attr($cssData['number_font_family'])); ?>;
        margin-left: <?php echo isset($cssData['number_margin_left']) && $cssData['number_margin_left'] !== '' ? esc_attr($cssData['number_margin_left']) : 0; ?>px;
        line-height: <?php echo esc_attr($cssData['number_font_size']); ?>px;
    }

    .anc-6310-counter-05:hover .anc-6310-counter-05-count-number {
        color: <?php echo esc_attr($cssData['number_font_hover_color']); ?>;
    }

    .anc-6310-counter-05-count-prefix {
        display: <?php echo (isset($cssData['prefix_icon_show_hide']) && $cssData['prefix_icon_show_hide']) ? 'inline-block' : 'none' ?>;
        font-size: <?php echo isset($cssData['number_prefix_font_size']) && $cssData['number_prefix_font_size'] !== '' ? esc_attr($cssData['number_prefix_font_size']) : 20; ?>px;
        color: <?php echo isset($cssData['number_prefix_font_color']) && $cssData['number_prefix_font_color'] !== '' ? esc_attr($cssData['number_prefix_font_color']) : 'rgb(255, 255, 255)'; ?>;
        font-weight: <?php echo isset($cssData['number_prefix_font_weight']) && $cssData['number_prefix_font_weight'] !== '' ? esc_attr($cssData['number_prefix_font_weight']) : '100'; ?>;
        font-family: <?php echo isset($cssData['number_prefix_font_family']) && $cssData['number_prefix_font_family'] !== '' ? str_replace("+", " ", esc_attr($cssData['number_prefix_font_family'])) : 'Amaranth'; ?>;
        vertical-align: <?php echo isset($cssData['number_prefix_position']) && $cssData['number_prefix_position'] !== '' ? esc_attr($cssData['number_prefix_position']) : 2; ?>px;
        margin-left: <?php echo isset($cssData['number_prefix_margin_left']) && $cssData['number_prefix_margin_left'] !== '' ? esc_attr($cssData['number_prefix_margin_left']) : 0; ?>px;
        margin-right: <?php echo isset($cssData['number_prefix_margin_right']) && $cssData['number_prefix_margin_right'] !== '' ? esc_attr($cssData['number_prefix_margin_right']) : 0; ?>px;
    }

    .anc-6310-counter-05:hover .anc-6310-counter-05-count-prefix {
        color: <?php echo isset($cssData['number_prefix_font_hover_color']) && $cssData['number_prefix_font_hover_color'] !== '' ? esc_attr($cssData['number_prefix_font_hover_color']) : 'rgb(255, 255, 255)'; ?>;
    }

    .anc-6310-counter-05-count-suffix {
        display: <?php echo (isset($cssData['suffix_icon_show_hide']) && $cssData['suffix_icon_show_hide']) ? 'inline-block' : 'none' ?>;
        font-size: <?php echo isset($cssData['number_suffix_font_size']) && $cssData['number_suffix_font_size'] !== '' ? esc_attr($cssData['number_suffix_font_size']) : 20; ?>px;
        color: <?php echo isset($cssData['number_suffix_font_color']) && $cssData['number_suffix_font_color'] !== '' ? esc_attr($cssData['number_suffix_font_color']) : 'rgb(255, 255, 255)'; ?>;
        font-weight: <?php echo isset($cssData['number_suffix_font_weight']) && $cssData['number_suffix_font_weight'] !== '' ? esc_attr($cssData['number_suffix_font_weight']) : '100'; ?>;
        font-family: <?php echo isset($cssData['number_suffix_font_family']) && $cssData['number_suffix_font_family'] !== '' ? str_replace("+", " ", esc_attr($cssData['number_suffix_font_family'])) : 'Amaranth'; ?>;
        vertical-align: <?php echo isset($cssData['number_suffix_position']) && $cssData['number_suffix_position'] !== '' ? esc_attr($cssData['number_suffix_position']) : 2; ?>px;
        margin-left: <?php echo isset($cssData['number_suffix_margin_left']) && $cssData['number_suffix_margin_left'] !== '' ? esc_attr($cssData['number_suffix_margin_left']) : 0; ?>px;
        margin-right: <?php echo isset($cssData['number_suffix_margin_right']) && $cssData['number_suffix_margin_right'] !== '' ? esc_attr($cssData['number_suffix_margin_right']) : 0; ?>px;
    }

    .anc-6310-counter-05:hover .anc-6310-counter-05-count-suffix {
        color: <?php echo isset($cssData['number_suffix_font_hover_color']) && $cssData['number_suffix_font_hover_color'] !== '' ? esc_attr($cssData['number_suffix_font_hover_color']) : 'rgb(255, 255, 255)'; ?>;
    }

    .anc-6310-counter-05-count-title {
        position: relative;
        font-weight: <?php echo esc_attr($cssData['title_font_weight']); ?>;
        font-size: <?php echo esc_attr($cssData['title_font_size']); ?>px;
        color: <?php echo esc_attr($cssData['title_font_color']); ?>;
        font-family: <?php echo str_replace("+", " ", esc_attr($cssData['title_font_family'])); ?>;
        margin-top: <?php echo esc_attr($cssData['title_margin_top']); ?>px;
        margin-bottom: <?php echo esc_attr($cssData['title_margin_bottom']); ?>px;
        margin-left: <?php echo esc_attr($cssData['title_margin_left']); ?>px;
        margin-right: <?php echo esc_attr($cssData['title_margin_right']); ?>px;
        padding-left: 12%;
        line-height: <?php echo esc_attr($cssData['title_line_height']); ?>px;
    }

    .anc-6310-counter-05:hover .anc-6310-counter-05-count-title {
        color: <?php echo esc_attr($cssData['title_font_hover_color']); ?>;
    }

    .anc-6310-counter-05-description {
        font-size: <?php echo esc_attr($cssData['description_font_size']); ?>px;
        color: <?php echo esc_attr($cssData['description_font_color']); ?>;
        font-family: <?php echo str_replace("+", " ", esc_attr($cssData['description_font_family'])); ?>;
        margin-top: <?php echo esc_attr($cssData['description_margin_top']); ?>px;
        margin-bottom: <?php echo esc_attr($cssData['description_margin_bottom']); ?>px;
        margin-left: <?php echo esc_attr($cssData['description_margin_left']); ?>px;
        margin-right: <?php echo esc_attr($cssData['description_margin_right']); ?>px;
        display: <?php echo (isset($cssData['counter_description']) && $cssData['counter_description']) ? 'block' : 'none' ?>;
        font-weight: <?php echo esc_attr($cssData['description_font_weight']); ?>;
        text-align: <?php echo esc_attr($cssData['description_text_align']); ?>;
        line-height: <?php echo esc_attr($cssData['description_line_height']); ?>px;
        padding-left: 12%;
        width: calc(88% - <?php echo esc_attr($cssData['description_margin_left']); ?>px - <?php echo esc_attr($cssData['description_margin_right']); ?>px);
    }

    .anc-6310-counter-05:hover .anc-6310-counter-05-description {
        color: <?php echo esc_attr($cssData['description_font_hover_color']); ?>;
    }
    .anc-6310-counter-05-button {
        outline: none;
        display: <?php echo isset($cssData['counter_button']) && $cssData['counter_button'] !== '' ? (($cssData['counter_button']) ? 'block' : 'none') : 'none'; ?>;
        width: <?php echo isset($cssData['button_width']) && $cssData['button_width'] !== '' ? esc_attr($cssData['button_width']) : 110; ?>px;
        background-color: <?php echo isset($cssData['button_background_color']) && $cssData['button_background_color'] !== '' ? esc_attr($cssData['button_background_color']) : 'rgba(0, 158, 226, 1)'; ?>;
        text-align: <?php echo isset($cssData['button_text_align']) && $cssData['button_text_align'] !== '' ? esc_attr($cssData['button_text_align']) : 'center'; ?>;
        border-width: <?php echo isset($cssData['button_border_width']) && $cssData['button_border_width'] !== '' ? esc_attr($cssData['button_border_width']) : "0px"; ?>;
        border-style: solid;
        border-color: <?php echo isset($cssData['button_border_color']) && $cssData['button_border_color'] !== '' ? esc_attr($cssData['button_border_color']) : 'rgb(255, 255, 255)'; ?>;
        border-radius: <?php echo isset($cssData['button_border_radius']) && $cssData['button_border_radius'] !== '' ? esc_attr($cssData['button_border_radius']) : 0; ?>px;
        margin-top: <?php echo isset($cssData['button_margin_top']) && $cssData['button_margin_top'] !== '' ? esc_attr($cssData['button_margin_top']) : 20; ?>px;
        margin-bottom: <?php echo isset($cssData['button_margin_bottom']) && $cssData['button_margin_bottom'] !== '' ? esc_attr($cssData['button_margin_bottom']) : 5; ?>px;
        <?php
        if (isset($cssData['button_align']) && $cssData['button_align'] !== '') {
            if ($cssData['button_align'] == 'center') {
                echo "margin-left: auto; margin-right: auto;";
            } elseif ($cssData['button_align'] == 'right') {
                echo "margin-left: auto;";
            } elseif ($cssData['button_align'] == 'left') {
                echo "margin-right: auto;";
            }
        } else {
            echo "margin-left: auto; margin-right: auto;";
        }
        ?>
    }

    .anc-6310-counter-05-button:hover {
        background-color: <?php echo isset($cssData['button_background_hover_color']) && $cssData['button_background_hover_color'] !== '' ? esc_attr($cssData['button_background_hover_color']) : 'rgba(0, 158, 226, 1)'; ?>;
        border-color: <?php echo isset($cssData['button_border_hover_color']) && $cssData['button_border_hover_color'] !== '' ? esc_attr($cssData['button_border_hover_color']) : 'rgb(255, 255, 255)'; ?>;
    }

    .anc-6310-counter-05-button a {
        text-decoration: none;
        padding: <?php echo isset($cssData['button_padding_top_bottom']) && $cssData['button_padding_top_bottom'] !== '' ? esc_attr($cssData['button_padding_top_bottom']) : 0; ?>px <?php echo isset($cssData['button_padding_left_right']) && $cssData['button_padding_left_right'] !== '' ? esc_attr($cssData['button_padding_left_right']) : 10; ?>px;
        font-size: <?php echo isset($cssData['button_font_size']) && $cssData['button_font_size'] !== '' ? esc_attr($cssData['button_font_size']) : 16; ?>px;
        line-height: <?php echo isset($cssData['button_line_height']) && $cssData['button_line_height'] !== '' ? esc_attr($cssData['button_line_height']) : 24; ?>px;
        color: <?php echo isset($cssData['button_font_color']) && $cssData['button_font_color'] !== '' ? esc_attr($cssData['button_font_color']) : 'rgb(255, 255, 255)'; ?>;
        font-weight: <?php echo isset($cssData['button_font_weight']) && $cssData['button_font_weight'] !== '' ? esc_attr($cssData['button_font_weight']) : '700'; ?>;
        font-family: <?php echo isset($cssData['button_font_family']) && $cssData['button_font_family'] !== '' ? esc_attr($cssData['button_font_family']) : 'Amaranth'; ?>;
    }

    .anc-6310-counter-05-button a:hover {
        color: <?php echo isset($cssData['button_font_hover_color']) && $cssData['button_font_hover_color'] !== '' ? esc_attr($cssData['button_font_hover_color']) : 'rgb(255, 255, 255)'; ?>;
    }
</style>
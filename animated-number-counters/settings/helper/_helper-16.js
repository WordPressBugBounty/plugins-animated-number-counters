jQuery(document).ready(function() {
    //default load start
    if (jQuery('#anc_6310_counter_description').prop('checked') != true) {
        jQuery('.description-act-field').hide();
    }
    if (jQuery('#anc_6310_prefix_icon_show_hide').prop('checked') != true) {
        jQuery('.prefix-act-field').hide();
    }
    if (jQuery('#anc_6310_suffix_icon_show_hide').prop('checked') != true) {
        jQuery('.suffix-act-field').hide();
    }
    if (jQuery('#anc_6310_counter_button').prop('checked') != true) {
        jQuery('.button-act-field').hide();
    }
    // default load end
    jQuery("#anc_6310_box_background_color").on("change", function() {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'>.anc-6310-counter-16 { background:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_box_background_hover_color").on("change", function() {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'>.anc-6310-counter-16:hover { background:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_box_radius").on("change", function() {
        var value = jQuery(this).val() + "px";
        jQuery("<style type='text/css'>.anc-6310-counter-16 { border-radius:" + value + "; -moz-border-radius:" + value + "; -ms-border-radius:" + value + "; -o-border-radius:" + value + "; -webkit-border-radius:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_box_border_width").on("change", function() {
        var value = jQuery(this).val() + "px";
        jQuery("<style type='text/css'>.anc-6310-counter-16 { border-width:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_box_border_color").on("change", function() {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'>.anc-6310-counter-16 { border-color:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_box_border_hover_color").on("change", function() {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'>.anc-6310-counter-16:hover { border-color:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_image_overlay_color").on("change", function() {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'>.anc-6310-counter-16-common-overlay { background-color:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_image_overlay_hover_color").on("change", function() {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'>.anc-6310-counter-16-common-overlay:hover { background-color:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    // anc_6310_box_shadow_blur
    jQuery("#anc_6310_box_shadow_width, #anc_6310_box_shadow_blur, #anc_6310_box_shadow_color, #anc_6310_box_shadow_hover_color").on("change", function() {
        var spread = jQuery("#anc_6310_box_shadow_width").val() + "px";
        var blur = (parseInt(jQuery("#anc_6310_box_shadow_blur").val()) * 2) + "px";
        var color = jQuery("#anc_6310_box_shadow_color").val().replace(/\+/g, ' ');
        var hover_color = jQuery("#anc_6310_box_shadow_hover_color").val().replace(/\+/g, ' ');
        jQuery("<style type='text/css'> .anc-6310-counter-16 { box-shadow: 0 0 " + blur + " " + spread + " " + color + "; -moz-box-shadow: 0 0 " + blur + " " + spread + " " + color + "; -webkit-box-shadow: 0 0 " + blur + " " + spread + " " + color + "; -ms-box-shadow: 0 0 " + blur + " " + spread + " " + color + "; -o-box-shadow: 0 0 " + blur + " " + spread + " " + color + ";} </style>").appendTo(".anc-6310-preview");
        jQuery("<style type='text/css'> .anc-6310-counter-16:hover { box-shadow: 0 0 " + blur + " " + spread + " " + hover_color + "; -moz-box-shadow: 0 0 " + blur + " " + spread + " " + hover_color + "; -webkit-box-shadow: 0 0 " + blur + " " + spread + " " + hover_color + "; -ms-box-shadow: 0 0 " + blur + " " + spread + " " + hover_color + "; -o-box-shadow: 0 0  " + blur + " " + spread + " " + hover_color + ";} </style>").appendTo(".anc-6310-preview");
    });

    //Title Start
    jQuery("#anc_6310_title_font_size").on("change", function() {
        var value = jQuery(this).val() + "px";
        jQuery("<style type='text/css'>.anc-6310-counter-16-title { font-size:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_heading_line_height").on("change", function() {
        var value = jQuery(this).val() + "px";
        jQuery("<style type='text/css'> .anc-6310-counter-16-title { line-height:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_title_font_color").on("change", function() {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'>.anc-6310-counter-16-title { color:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_title_font_hover_color").on("change", function() {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'>.anc-6310-counter-16:hover .anc-6310-counter-16-title { color:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_title_font_weight").on("change", function() {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'>.anc-6310-counter-16-title { font-weight:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_title_text_transform").on("change", function() {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'>.anc-6310-counter-16-title { text-transform:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_title_text_align").on("change", function() {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'>.anc-6310-counter-16-title { text-align:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_jquery_heading_font").on("change", function() {
        var value = jQuery(this).val().replace(/\+/g, ' ');
        value = value.split(':');
        jQuery("<style type='text/css'>.anc-6310-counter-16-title { font-family:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_title_margin_top").on("change", function() {
        var value = jQuery(this).val() + "px";
        jQuery("<style type='text/css'>.anc-6310-counter-16-title{  margin-top:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_title_margin_bottom").on("change", function() {
        var value = jQuery(this).val() + "px";
        jQuery("<style type='text/css'>.anc-6310-counter-16-title{  margin-bottom:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_title_margin_left").on("change", function() {
        var value = jQuery(this).val() + "px";
        jQuery("<style type='text/css'>.anc-6310-counter-16-title{  margin-left:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_title_margin_right").on("change", function() {
        var value = jQuery(this).val() + "px";
        jQuery("<style type='text/css'>.anc-6310-counter-16-title{  margin-right:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    

    // Description Start
    jQuery('#anc_6310_counter_description').on('click', function() {
        if (jQuery('#anc_6310_counter_description').prop('checked') == true) {
            jQuery('.description-act-field').show();
            jQuery("<style type='text/css'>.anc-6310-counter-16-description { display:block;}</style>").appendTo(".anc-6310-preview");
        } else {
            jQuery('.description-act-field').hide();
            jQuery("<style type='text/css'>.anc-6310-counter-16-description { display:none;}</style>").appendTo(".anc-6310-preview");
        }
    });
    jQuery("#anc_6310_description_font_size").on("change", function() {
        var value = jQuery(this).val() + "px";
        jQuery("<style type='text/css'> .anc-6310-counter-16-description { font-size:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_description_line_height").on("change", function() {
        var value = jQuery(this).val() + "px";
        jQuery("<style type='text/css'> .anc-6310-counter-16-description { line-height:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_description_font_color").on("change", function() {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'> .anc-6310-counter-16-description { color:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_description_font_hover_color").on("change", function() {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'> .anc-6310-counter-16:hover .anc-6310-counter-16-description { color:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_description_font_weight").on("change", function() {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'> .anc-6310-counter-16-description { font-weight:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_description_text_transform").on("change", function() {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'> .anc-6310-counter-16-description { text-transform:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_description_text_align").on("change", function() {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'> .anc-6310-counter-16-description { text-align:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_jquery_description_font").on("change", function() {
        var value = jQuery(this).val().replace(/\+/g, ' ');
        value = value.split(':');
        jQuery("<style type='text/css'>.anc-6310-counter-16-description { font-family:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_description_margin_top").on("change", function() {
        var value = jQuery(this).val() + "px";
        jQuery("<style type='text/css'>.anc-6310-counter-16-description{  margin-top:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_description_margin_bottom").on("change", function() {
        var value = jQuery(this).val() + "px";
        jQuery("<style type='text/css'>.anc-6310-counter-16-description{  margin-bottom:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_description_margin_left").on("change", function() {
        var value = jQuery(this).val() + "px";
        jQuery("<style type='text/css'>.anc-6310-counter-16-description{  margin-left:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_description_margin_right").on("change", function() {
        var value = jQuery(this).val() + "px";
        jQuery("<style type='text/css'>.anc-6310-counter-16-description{  margin-right:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });

    //Icon Start
    jQuery("#anc_6310_icon_color").on("change", function() {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'>.anc-6310-counter-16-icon i{ color:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_icon_hover_color").on("change", function() {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'>.anc-6310-counter-16:hover .anc-6310-counter-16-icon i{ color:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_icon_size").on("change", function() {
        var value = jQuery(this).val() + "px";
        jQuery("<style type='text/css'>.anc-6310-counter-16-icon i{ font-size:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_icon_size").on("change", function() {
        var value = jQuery(this).val() + "px";
        jQuery("<style type='text/css'>.anc-6310-counter-16-icon img{ width:" + value + "; height:" + value + "; } </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_icon_margin_top").on("change", function() {
        var value = jQuery(this).val() + "px";
        jQuery("<style type='text/css'>.anc-6310-counter-16-icon i{  margin-top:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_icon_margin_bottom").on("change", function() {
        var value = jQuery(this).val() + "px";
        jQuery("<style type='text/css'>.anc-6310-counter-16-icon i{  margin-bottom:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_icon_margin_left").on("change", function() {
        var value = jQuery(this).val() + "px";
        jQuery("<style type='text/css'>.anc-6310-counter-16-icon i{  margin-left:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_icon_margin_right").on("change", function() {
        var value = jQuery(this).val() + "px";
        jQuery("<style type='text/css'>.anc-6310-counter-16-icon i{  margin-right:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_icon_text_align").on("change", function() {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'>.anc-6310-counter-16 { text-align:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_icon_margin_top").on("change", function() {
        var value = jQuery(this).val() + "px";
        jQuery("<style type='text/css'>.anc-6310-counter-16-icon img{  margin-top:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_icon_margin_bottom").on("change", function() {
        var value = jQuery(this).val() + "px";
        jQuery("<style type='text/css'>.anc-6310-counter-16-icon img{  margin-bottom:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_icon_margin_left").on("change", function() {
        var value = jQuery(this).val() + "px";
        jQuery("<style type='text/css'>.anc-6310-counter-16-icon img{  margin-left:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_icon_margin_right").on("change", function() {
        var value = jQuery(this).val() + "px";
        jQuery("<style type='text/css'>.anc-6310-counter-16-icon img{  margin-right:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });

    //Number Start
    jQuery("#anc_6310_number_font_size").on("change", function() {
        var value = jQuery(this).val() + "px";
        jQuery("<style type='text/css'>.anc-6310-counter-16-number{ font-size:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_number_line_height").on("change", function() {
        var value = jQuery(this).val() + "px";
        jQuery("<style type='text/css'>.anc-6310-counter-16-number { line-height:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_number_font_color").on("change", function() {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'>.anc-6310-counter-16-number{ color:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_number_font_hover_color").on("change", function() {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'>.anc-6310-counter-16:hover .anc-6310-counter-16-number{ color:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_number_font_weight").on("change", function() {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'>.anc-6310-counter-16-number{ font-weight:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_jquery_number_font").on("change", function() {
        var value = jQuery(this).val().replace(/\+/g, ' ');
        value = value.split(':');
        jQuery("<style type='text/css'>.anc-6310-counter-16-number{ font-family:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_number_margin_top").on("change", function() {
        var value = jQuery(this).val() + "px";
        jQuery("<style type='text/css'>.anc-6310-counter-16-number{  margin-top:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_number_margin_bottom").on("change", function() {
        var value = jQuery(this).val() + "px";
        jQuery("<style type='text/css'>.anc-6310-counter-16-number{  margin-bottom:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_number_margin_left").on("change", function() {
        var value = jQuery(this).val() + "px";
        jQuery("<style type='text/css'>.anc-6310-counter-16-number{  margin-left:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_number_margin_right").on("change", function() {
        var value = jQuery(this).val() + "px";
        jQuery("<style type='text/css'>.anc-6310-counter-16-number{  margin-right:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    //Activate Number Prefix settings
    var pre_hidden = jQuery('.anc_6310_tabs_panel_preview').attr('data-prefix-icon');
    jQuery('#anc_6310_prefix_icon_show_hide').on('click', function() {
        if (jQuery('#anc_6310_prefix_icon_show_hide').prop('checked') == true) {
            jQuery('.prefix-act-field').show();
            pre_hidden = 2;
            jQuery("<style type='text/css'>.anc-6310-counter-16-count-prefix { display:inline-block;}</style>").appendTo("body");
        } else {
            jQuery('.prefix-act-field').hide();
            pre_hidden = 1;
            jQuery("<style type='text/css'>.anc-6310-counter-16-count-prefix { display:none;}</style>").appendTo("body");
        }
        calculateWidth(hidden);
    });
    jQuery("#anc_6310_number_prefix_font_size").on("change", function() {
        var value = jQuery(this).val() + "px";
        jQuery("<style type='text/css'>.anc-6310-counter-16-count-prefix{ font-size:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_number_prefix_font_color").on("change", function() {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'>.anc-6310-counter-16-count-prefix{ color:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_number_prefix_font_hover_color").on("change", function() {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'>.anc-6310-counter-16:hover .anc-6310-counter-16-count-prefix{ color:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_number_prefix_position").on("change", function() {
        var value = jQuery(this).val() + "px";
        jQuery("<style type='text/css'>.anc-6310-counter-16-count-prefix{  vertical-align:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_number_prefix_margin_left").on("change", function() {
        var value = jQuery(this).val() + "px";
        jQuery("<style type='text/css'>.anc-6310-counter-16-count-prefix{  margin-left:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_number_prefix_margin_right").on("change", function() {
        var value = jQuery(this).val() + "px";
        jQuery("<style type='text/css'>.anc-6310-counter-16-count-prefix{  margin-right:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    //Activate Number Suffix settings
    var suf_hidden = jQuery('.anc_6310_tabs_panel_preview').attr('data-suffix-icon');
    jQuery('#anc_6310_suffix_icon_show_hide').on('click', function() {
        if (jQuery('#anc_6310_suffix_icon_show_hide').prop('checked') == true) {
            jQuery('.suffix-act-field').show();
            suf_hidden = 2;
            jQuery("<style type='text/css'>.anc-6310-counter-16-count-suffix { display:inline-block;}</style>").appendTo(".anc-6310-preview");
        } else {
            jQuery('.suffix-act-field').hide();
            suf_hidden = 1;
            jQuery("<style type='text/css'>.anc-6310-counter-16-count-suffix { display:none;}</style>").appendTo(".anc-6310-preview");
        }
        calculateWidth(hidden);
    });
    jQuery("#anc_6310_number_suffix_font_size").on("change", function() {
        var value = jQuery(this).val() + "px";
        jQuery("<style type='text/css'>.anc-6310-counter-16-count-suffix{ font-size:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_number_suffix_font_color").on("change", function() {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'>.anc-6310-counter-16-count-suffix{ color:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_number_suffix_font_hover_color").on("change", function() {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'>.anc-6310-counter-16:hover .anc-6310-counter-16-count-suffix{ color:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_number_suffix_position").on("change", function() {
        var value = jQuery(this).val() + "px";
        jQuery("<style type='text/css'>.anc-6310-counter-16-count-suffix{  vertical-align:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_number_suffix_margin_left").on("change", function() {
        var value = jQuery(this).val() + "px";
        jQuery("<style type='text/css'>.anc-6310-counter-16-count-suffix{  margin-left:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_number_suffix_margin_right").on("change", function() {
        var value = jQuery(this).val() + "px";
        jQuery("<style type='text/css'>.anc-6310-counter-16-count-suffix{  margin-right:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });

    //Button Start
    jQuery('#anc_6310_counter_button').on('click', function() {
        if (jQuery('#anc_6310_counter_button').prop('checked') == true) {
            jQuery('.button-act-field').show();
            jQuery("<style type='text/css'>.anc-6310-counter-16-button { display:block;}</style>").appendTo(".anc-6310-preview");
        } else {
            jQuery('.button-act-field').hide();
            jQuery("<style type='text/css'>.anc-6310-counter-16-button { display:none;}</style>").appendTo(".anc-6310-preview");
        }
    });
    jQuery("#anc_6310_button_background_color").on("change", function() {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'>.anc-6310-counter-16-button { background:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_button_background_hover_color").on("change", function() {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'>.anc-6310-counter-16-button:hover { background:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_button_font_size").on("change", function() {
        var value = jQuery(this).val() + "px";
        jQuery("<style type='text/css'>.anc-6310-counter-16-button a { font-size:" + value + " !important;} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_button_line_height").on("change", function() {
        var value = jQuery(this).val() + "px";
        jQuery("<style type='text/css'>.anc-6310-counter-16-button a { line-height:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_button_font_color").on("change", function() {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'>.anc-6310-counter-16-button a { color:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_button_font_hover_color").on("change", function() {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'>.anc-6310-counter-16-button:hover a { color:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_button_font_weight").on("change", function() {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'>.anc-6310-counter-16-button a { font-weight:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_button_text_transform").on("change", function() {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'>.anc-6310-counter-16-button a { text-transform:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_jquery_button_font").on("change", function() {
        var value = jQuery(this).val().replace(/\+/g, ' ');
        value = value.split(':');
        jQuery("<style type='text/css'>.anc-6310-counter-16-button a { font-family:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_button_width").on("change", function() {
        var value = jQuery(this).val() + "px";
        jQuery("<style type='text/css'>.anc-6310-counter-16-button { width:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_button_align,#anc_6310_button_margin_top,#anc_6310_button_margin_bottom").on("change", function() {
        var mtop= jQuery("#anc_6310_button_margin_top").val() + "px";
        var mbottom= jQuery("#anc_6310_button_margin_bottom").val() + "px";
        var value = jQuery("#anc_6310_button_align").val();
        if (value == 'left') {
            jQuery(
                "<style type='text/css'>.anc-6310-counter-16-button {margin:" + mtop + " auto " + mbottom + " 0 !important;} </style>"
            ).appendTo(".anc-6310-preview");
        } else if (value == 'center') {
            jQuery(
                "<style type='text/css'>.anc-6310-counter-16-button {margin:" + mtop + " auto " + mbottom + " auto !important;} </style>"
            ).appendTo(".anc-6310-preview");
        } else if (value == 'right') {
            jQuery(
                "<style type='text/css'>.anc-6310-counter-16-button {margin:" + mtop + " 0 " + mbottom + " auto !important;} </style>"
            ).appendTo(".anc-6310-preview");
        }
        });
    jQuery("#anc_6310_button_text_align").on("change", function() {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'>.anc-6310-counter-16-button { text-align:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_button_border_width").on("change", function() {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'>.anc-6310-counter-16-button { border-width:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_button_border_color").on("change", function() {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'>.anc-6310-counter-16-button { border-color:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_button_border_hover_color").on("change", function() {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'>.anc-6310-counter-16-button:hover { border-color:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_button_border_radius").on("change", function() {
        var value = jQuery(this).val() + "px";
        jQuery("<style type='text/css'>.anc-6310-counter-16-button { border-radius:" + value + "; -moz-border-radius:" + value + "; -ms-border-radius:" + value + "; -o-border-radius:" + value + "; -webkit-border-radius:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_jquery_number_prefix_font").on("change", function() {
        var value = jQuery(this).val().replace(/\+/g, ' ');
        value = value.split(':');
        jQuery("<style type='text/css'>.anc-6310-counter-16-count-prefix { font-family:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_number_prefix_font_weight").on("change", function() {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'>.anc-6310-counter-16-count-prefix { font-weight:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_jquery_number_suffix_font").on("change", function() {
        var value = jQuery(this).val().replace(/\+/g, ' ');
        value = value.split(':');
        jQuery("<style type='text/css'>.anc-6310-counter-16-count-suffix { font-family:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
    jQuery("#anc_6310_number_suffix_font_weight").on("change", function() {
        var value = jQuery(this).val();
        jQuery("<style type='text/css'>.anc-6310-counter-16-count-suffix { font-weight:" + value + ";} </style>").appendTo(".anc-6310-preview");
    });
});
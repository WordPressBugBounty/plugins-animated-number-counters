<?php
//Add/Edit Counter Save
if (
    isset($_POST['customize-counter-save']) &&
    sanitize_text_field(wp_unslash($_POST['customize-counter-save'])) === 'Save'
) {
    if (
        !isset($_POST['_wpnonce']) ||
        !wp_verify_nonce(
            sanitize_text_field(wp_unslash($_POST['_wpnonce'])),
            'anc_6310_nonce_add_edit_counter'
        )
    ) {
        wp_die(
            esc_html__(
                'You do not have sufficient permissions to access this page.',
                'your-text-domain'
            )
        );
    }

    $counter_ids = isset($_POST['counterid'])
        ? array_map('absint', (array) wp_unslash($_POST['counterid']))
        : array();

    $counter_ids = implode(',', $counter_ids);

    $style_id = isset($_POST['add_edit_counter_id'])
        ? absint($_POST['add_edit_counter_id'])
        : 0;

    if ($style_id > 0) {
        $wpdb->query(
            $wpdb->prepare(
                "UPDATE {$style_table} SET counterids = %s WHERE id = %d",
                $counter_ids,
                $style_id
            )
        );
    }
}

//Rearrange Counter Save
if (
    isset($_POST['rearrange-counter-save']) &&
    sanitize_text_field(wp_unslash($_POST['rearrange-counter-save'])) === 'Save'
) {
    if (
        !isset($_POST['_wpnonce']) ||
        !wp_verify_nonce(
            sanitize_text_field(wp_unslash($_POST['_wpnonce'])),
            'anc_6310_nonce_rearrange_counter'
        )
    ) {
        wp_die(esc_html__('You do not have sufficient permissions to access this page.', 'your-text-domain'));
    }

    $counter_id = isset($_POST['rearrange_counter_id'])
        ? absint($_POST['rearrange_counter_id'])
        : 0;

    $counter_ids = isset($_POST['rearrange_counter_list'])
        ? sanitize_text_field(wp_unslash($_POST['rearrange_counter_list']))
        : '';

    if ($counter_id > 0) {
        $wpdb->query(
            $wpdb->prepare(
                "UPDATE {$style_table} SET counterids = %s WHERE id = %d",
                $counter_ids,
                $counter_id
            )
        );
    }
}



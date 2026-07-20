<?php
/**
 * Rankaty Theme Customizer
 */

function rankaty_customize_register( $wp_customize ) {
    // Panel/Section
    $wp_customize->add_section( 'rankaty_contact_settings', array(
        'title'       => __( 'Rankaty Contact Info', 'rankaty' ),
        'priority'    => 30,
        'description' => __( 'Update your contact information such as WhatsApp, Email, and Address.', 'rankaty' )
    ) );

    // WhatsApp Number Setting
    $wp_customize->add_setting( 'rankaty_whatsapp_number', array(
        'default'           => '+201007462953',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'rankaty_whatsapp_number', array(
        'label'    => __( 'WhatsApp Number', 'rankaty' ),
        'description' => __( 'Enter number with country code (e.g., +201007462953)', 'rankaty' ),
        'section  ' => 'rankaty_contact_settings',
        'type'     => 'text',
    ) );

    // Email Setting
    $wp_customize->add_setting( 'rankaty_contact_email', array(
        'default'           => 'hello@rankaty.com',
        'sanitize_callback' => 'sanitize_email',
    ) );
    $wp_customize->add_control( 'rankaty_contact_email', array(
        'label'    => __( 'Contact Email', 'rankaty' ),
        'section  ' => 'rankaty_contact_settings',
        'type'     => 'email',
    ) );

    // Address Setting
    $wp_customize->add_setting( 'rankaty_office_address', array(
        'default'           => 'دبي، الإمارات العربية المتحدة',
        'sanitize_callback' => 'sanitize_textarea_field',
    ) );
    $wp_customize->add_control( 'rankaty_office_address', array(
        'label'    => __( 'Office Address', 'rankaty' ),
        'section  ' => 'rankaty_contact_settings',
        'type'     => 'textarea',
    ) );
    
    // Address 2 Setting (Optional, since there are two locations shown in footer vs contact page)
    $wp_customize->add_setting( 'rankaty_office_address_2', array(
        'default'           => 'الرياض، المملكة العربية السعودية<br>المركز المالي، برج ب',
        'sanitize_callback' => 'wp_kses_post',
    ) );
    $wp_customize->add_control( 'rankaty_office_address_2', array(
        'label'    => __( 'Secondary Office Address', 'rankaty' ),
        'section  ' => 'rankaty_contact_settings',
        'type'     => 'textarea',
    ) );
}
add_action( 'customize_register', 'rankaty_customize_register' );

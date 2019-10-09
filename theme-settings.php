<?php
/**
 * @file
 * Theme settings in this file.
 */
/**
 * Implements hook_form_system_theme_settings_alter().
 */

function mytheme_form_system_theme_settings_alter(&$form, $form_state)
{
    $form['text_name'] = [
        '#type' => 'textfield',
        '#title' => t('Doggie name'),
        '#default_value' => theme_get_setting('text_name'),
        '#description' => t('Our cute doggie name here'),
    ];

    $form['secondary_logo'] = array(
        '#title' => t('Secondary logo'),
        '#description' => t('A description'),
        '#type' => 'managed_file',
        '#upload_location' => 'public://secondary-logo/',
        '#upload_validators' => array(
            'file_validate_extensions' => array('gif png jpg jpeg'),
        ),
        '#default_value' => theme_get_setting('secondary_logo'),
    );
}

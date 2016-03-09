<?php
/**
 * @file
 * vi_uk_content_types.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function vi_uk_content_types_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "field_group" && $api == "field_group") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_node_info().
 */
function vi_uk_content_types_node_info() {
  $items = array(
    'challenge_kit' => array(
      'name' => t('Challenge Kit'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'events' => array(
      'name' => t('Events'),
      'base' => 'node_content',
      'description' => t('All of the Vi events.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'home_page' => array(
      'name' => t('Home Page'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'product' => array(
      'name' => t('Product'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'promoter_pages' => array(
      'name' => t('Promoter Pages'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'promoter_portal' => array(
      'name' => t('Promoter Portal'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}

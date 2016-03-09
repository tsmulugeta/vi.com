<?php
/**
 * @file
 * vi_uk_content_types.field_group.inc
 */

/**
 * Implements hook_field_group_info().
 */
function vi_uk_content_types_field_group_info() {
  $export = array();

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_banner|node|promoter_portal|form';
  $field_group->group_name = 'group_banner';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'promoter_portal';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Banner',
    'weight' => '1',
    'children' => array(
      0 => 'field_image',
      1 => 'field_link',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => '',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_banner|node|promoter_portal|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_big_pod|node|promoter_portal|default';
  $field_group->group_name = 'group_big_pod';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'promoter_portal';
  $field_group->mode = 'default';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Big pod',
    'weight' => '4',
    'children' => array(
      0 => 'field_image1',
    ),
    'format_type' => 'div',
    'format_settings' => array(
      'label' => 'Big pod',
      'instance_settings' => array(
        'classes' => 'grid-4 alpha',
        'description' => '',
      ),
      'formatter' => 'open',
    ),
  );
  $export['group_big_pod|node|promoter_portal|default'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_big_pod|node|promoter_portal|form';
  $field_group->group_name = 'group_big_pod';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'promoter_portal';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Big Pod',
    'weight' => '2',
    'children' => array(
      0 => 'field_image1',
      1 => 'field_link1',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => '',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_big_pod|node|promoter_portal|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_extra_content|node|home_page|form';
  $field_group->group_name = 'group_extra_content';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'home_page';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Extra Content',
    'weight' => '1',
    'children' => array(
      0 => 'field_copy',
      1 => 'field_copy_section',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => '',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_extra_content|node|home_page|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_home_page_content|node|home_page|form';
  $field_group->group_name = 'group_home_page_content';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'home_page';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Home Page Content',
    'weight' => '0',
    'children' => array(
      0 => 'body',
      1 => 'field_image',
      2 => 'field_kaltura_video',
      3 => 'title',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => '',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_home_page_content|node|home_page|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_how_to_use|node|challenge_kit|default';
  $field_group->group_name = 'group_how_to_use';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'challenge_kit';
  $field_group->mode = 'default';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'How To Use',
    'weight' => '3',
    'children' => array(
      0 => 'field_copy1',
    ),
    'format_type' => 'div',
    'format_settings' => array(
      'label' => 'How To Use',
      'instance_settings' => array(
        'classes' => 'grid-6 omega',
        'description' => '',
        'show_label' => '1',
        'label_element' => 'h3',
        'effect' => 'none',
        'speed' => 'none',
      ),
      'formatter' => 'open',
    ),
  );
  $export['group_how_to_use|node|challenge_kit|default'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_kit_info|node|challenge_kit|default';
  $field_group->group_name = 'group_kit_info';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'challenge_kit';
  $field_group->mode = 'default';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Kit Info',
    'weight' => '0',
    'children' => array(
      0 => 'body',
      1 => 'field_link',
      2 => 'field_title',
      3 => 'title',
    ),
    'format_type' => 'div',
    'format_settings' => array(
      'label' => 'Kit Info',
      'instance_settings' => array(
        'classes' => 'grid-6 alpha',
        'description' => '',
        'show_label' => '0',
        'label_element' => 'h3',
        'effect' => 'none',
        'speed' => 'none',
      ),
      'formatter' => 'open',
    ),
  );
  $export['group_kit_info|node|challenge_kit|default'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_kit_info|node|challenge_kit|form';
  $field_group->group_name = 'group_kit_info';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'challenge_kit';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'kit info',
    'weight' => '0',
    'children' => array(
      0 => 'body',
      1 => 'field_link',
      2 => 'field_copy',
      3 => 'field_pic',
      4 => 'field_copy1',
      5 => 'field_copy2',
      6 => 'field_copy3',
      7 => 'field_title',
      8 => 'field_page_categories',
      9 => 'title',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => '',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_kit_info|node|challenge_kit|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_nutritional_benefits|node|challenge_kit|default';
  $field_group->group_name = 'group_nutritional_benefits';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'challenge_kit';
  $field_group->mode = 'default';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Nutritional Benefits',
    'weight' => '2',
    'children' => array(
      0 => 'field_copy',
    ),
    'format_type' => 'div',
    'format_settings' => array(
      'label' => 'Nutritional Benefits',
      'instance_settings' => array(
        'classes' => 'grid-6 alpha',
        'description' => '',
        'show_label' => '1',
        'label_element' => 'h3',
        'effect' => 'none',
        'speed' => 'none',
      ),
      'formatter' => 'open',
    ),
  );
  $export['group_nutritional_benefits|node|challenge_kit|default'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_pod1|node|home_page|default';
  $field_group->group_name = 'group_pod1';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'home_page';
  $field_group->mode = 'default';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Pod1',
    'weight' => '4',
    'children' => array(
      0 => 'field_image1',
      1 => 'field_copy1',
    ),
    'format_type' => 'div',
    'format_settings' => array(
      'label' => 'Pod1',
      'instance_settings' => array(
        'classes' => 'grid-4 alpha',
        'description' => '',
        'show_label' => '0',
        'label_element' => 'h3',
        'effect' => 'none',
        'speed' => 'none',
      ),
      'formatter' => 'open',
    ),
  );
  $export['group_pod1|node|home_page|default'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_pod1|node|home_page|form';
  $field_group->group_name = 'group_pod1';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'home_page';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Pod1',
    'weight' => '3',
    'children' => array(
      0 => 'field_copy1',
      1 => 'field_image1',
      2 => 'field_link1',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => '',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_pod1|node|home_page|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_pod2|node|home_page|default';
  $field_group->group_name = 'group_pod2';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'home_page';
  $field_group->mode = 'default';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Pod2',
    'weight' => '5',
    'children' => array(
      0 => 'field_image2',
      1 => 'field_copy2',
    ),
    'format_type' => 'div',
    'format_settings' => array(
      'label' => 'Pod2',
      'instance_settings' => array(
        'classes' => 'grid-4',
        'description' => '',
        'show_label' => '0',
        'label_element' => 'h3',
        'effect' => 'none',
        'speed' => 'none',
      ),
      'formatter' => 'open',
    ),
  );
  $export['group_pod2|node|home_page|default'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_pod2|node|home_page|form';
  $field_group->group_name = 'group_pod2';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'home_page';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Pod2',
    'weight' => '4',
    'children' => array(
      0 => 'field_copy2',
      1 => 'field_image2',
      2 => 'field_link2',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => '',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_pod2|node|home_page|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_pod3|node|home_page|default';
  $field_group->group_name = 'group_pod3';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'home_page';
  $field_group->mode = 'default';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Pod3',
    'weight' => '6',
    'children' => array(
      0 => 'field_image3',
      1 => 'field_copy3',
    ),
    'format_type' => 'div',
    'format_settings' => array(
      'label' => 'Pod3',
      'instance_settings' => array(
        'classes' => 'grid-4 omega',
        'description' => '',
        'show_label' => '0',
        'label_element' => 'h3',
        'effect' => 'none',
        'speed' => 'none',
      ),
      'formatter' => 'open',
    ),
  );
  $export['group_pod3|node|home_page|default'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_pod3|node|home_page|form';
  $field_group->group_name = 'group_pod3';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'home_page';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Pod3',
    'weight' => '5',
    'children' => array(
      0 => 'field_copy3',
      1 => 'field_image3',
      2 => 'field_link3',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => '',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_pod3|node|home_page|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_pod_2|node|promoter_portal|form';
  $field_group->group_name = 'group_pod_2';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'promoter_portal';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Pod2',
    'weight' => '3',
    'children' => array(
      0 => 'field_image2',
      1 => 'field_link2',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => '',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_pod_2|node|promoter_portal|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_pod_3|node|promoter_portal|form';
  $field_group->group_name = 'group_pod_3';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'promoter_portal';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Pod3',
    'weight' => '4',
    'children' => array(
      0 => 'field_image3',
      1 => 'field_link3',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => '',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_pod_3|node|promoter_portal|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_pod_4|node|promoter_portal|form';
  $field_group->group_name = 'group_pod_4';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'promoter_portal';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Pod4',
    'weight' => '5',
    'children' => array(
      0 => 'field_image4',
      1 => 'field_link4',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => '',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_pod_4|node|promoter_portal|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_pod_5|node|promoter_portal|form';
  $field_group->group_name = 'group_pod_5';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'promoter_portal';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Pod5',
    'weight' => '6',
    'children' => array(
      0 => 'field_image5',
      1 => 'field_link5',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => '',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_pod_5|node|promoter_portal|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_pod|node|promoter_portal|default';
  $field_group->group_name = 'group_pod';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'promoter_portal';
  $field_group->mode = 'default';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Group Pod',
    'weight' => '5',
    'children' => array(
      0 => 'field_image2',
      1 => 'field_image3',
      2 => 'field_image4',
      3 => 'field_image5',
    ),
    'format_type' => 'div',
    'format_settings' => array(
      'label' => 'Group Pod',
      'instance_settings' => array(
        'classes' => 'grid-8 omega',
        'description' => '',
      ),
      'formatter' => 'open',
    ),
  );
  $export['group_pod|node|promoter_portal|default'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_portal_info|node|promoter_portal|form';
  $field_group->group_name = 'group_portal_info';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'promoter_portal';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Portal Info',
    'weight' => '0',
    'children' => array(
      0 => 'body',
      1 => 'title',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => '',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_portal_info|node|promoter_portal|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_product_content|node|product|form';
  $field_group->group_name = 'group_product_content';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'product';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Product Content',
    'weight' => '0',
    'children' => array(
      0 => 'body',
      1 => 'field_link',
      2 => 'field_copy',
      3 => 'field_pic',
      4 => 'field_copy1',
      5 => 'field_copy2',
      6 => 'field_copy3',
      7 => 'field_title',
      8 => 'field_page_categories',
      9 => 'title',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => '',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_product_content|node|product|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_product_info|node|product|default';
  $field_group->group_name = 'group_product_info';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'product';
  $field_group->mode = 'default';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Product Info',
    'weight' => '0',
    'children' => array(
      0 => 'body',
      1 => 'field_link',
      2 => 'field_title',
      3 => 'title',
    ),
    'format_type' => 'div',
    'format_settings' => array(
      'label' => 'Product Info',
      'instance_settings' => array(
        'classes' => 'grid-6 alpha',
        'description' => '',
        'show_label' => '0',
        'label_element' => 'h3',
        'effect' => 'none',
        'speed' => 'none',
      ),
      'formatter' => 'open',
    ),
  );
  $export['group_product_info|node|product|default'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_promoter_page_info|node|promoter_pages|form';
  $field_group->group_name = 'group_promoter_page_info';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'promoter_pages';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Promoter Page Info',
    'weight' => '0',
    'children' => array(
      0 => 'body',
      1 => 'field_image',
      2 => 'field_link',
      3 => 'field_copy1',
      4 => 'field_copy2',
      5 => 'field_copy3',
      6 => 'field_copy_section',
      7 => 'field_kaltura_video',
      8 => 'field_title',
      9 => 'field_page_categories',
      10 => 'title',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => '',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_promoter_page_info|node|promoter_pages|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_ressources|node|promoter_portal|form';
  $field_group->group_name = 'group_ressources';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'promoter_portal';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Extra Ressources',
    'weight' => '7',
    'children' => array(
      0 => 'field_copy1',
      1 => 'field_copy2',
      2 => 'field_copy3',
    ),
    'format_type' => 'tab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => '',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_ressources|node|promoter_portal|form'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_tab2|node|product|default';
  $field_group->group_name = 'group_tab2';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'product';
  $field_group->mode = 'default';
  $field_group->parent_name = 'group_tab';
  $field_group->data = array(
    'label' => 'What\'s Not In it?',
    'weight' => '4',
    'children' => array(
      0 => 'field_copy3',
    ),
    'format_type' => 'htab',
    'format_settings' => array(
      'label' => 'What\'s Not In it?',
      'instance_settings' => array(
        'classes' => '',
        'description' => '',
      ),
      'formatter' => 'closed',
    ),
  );
  $export['group_tab2|node|product|default'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_tab3|node|product|default';
  $field_group->group_name = 'group_tab3';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'product';
  $field_group->mode = 'default';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Nutritional Benefits',
    'weight' => '2',
    'children' => array(
      0 => 'field_copy',
    ),
    'format_type' => 'div',
    'format_settings' => array(
      'label' => 'Nutritional Benefits',
      'instance_settings' => array(
        'classes' => 'grid-6 alpha',
        'description' => '',
        'show_label' => '1',
        'label_element' => 'h3',
        'effect' => 'none',
        'speed' => 'none',
      ),
      'formatter' => 'open',
    ),
  );
  $export['group_tab3|node|product|default'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_tab4|node|product|default';
  $field_group->group_name = 'group_tab4';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'product';
  $field_group->mode = 'default';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'How to Use?',
    'weight' => '3',
    'children' => array(
      0 => 'field_copy1',
    ),
    'format_type' => 'div',
    'format_settings' => array(
      'label' => 'How to Use?',
      'instance_settings' => array(
        'classes' => 'grid-6 omega',
        'description' => '',
        'show_label' => '1',
        'label_element' => 'h3',
        'effect' => 'none',
        'speed' => 'none',
      ),
      'formatter' => 'open',
    ),
  );
  $export['group_tab4|node|product|default'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_tabs|node|product|default';
  $field_group->group_name = 'group_tabs';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'product';
  $field_group->mode = 'default';
  $field_group->parent_name = 'group_tab';
  $field_group->data = array(
    'label' => 'What\'s In It?',
    'weight' => '3',
    'children' => array(
      0 => 'field_copy2',
    ),
    'format_type' => 'htab',
    'format_settings' => array(
      'label' => 'What\'s In It?',
      'instance_settings' => array(
        'classes' => '',
        'description' => '',
      ),
      'formatter' => 'open',
    ),
  );
  $export['group_tabs|node|product|default'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_tab|node|product|default';
  $field_group->group_name = 'group_tab';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'product';
  $field_group->mode = 'default';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Tabs',
    'weight' => '11',
    'children' => array(
      0 => 'group_tabs',
      1 => 'group_tab2',
    ),
    'format_type' => 'htabs',
    'format_settings' => array(
      'formatter' => 'collapsible',
      'instance_settings' => array(
        'description' => '',
        'classes' => '',
      ),
    ),
  );
  $export['group_tab|node|product|default'] = $field_group;

  return $export;
}

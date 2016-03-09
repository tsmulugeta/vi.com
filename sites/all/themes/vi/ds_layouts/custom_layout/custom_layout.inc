<?php

/**
 * @file
 * Display Suite Custom Layout configuration.
 */

function ds_custom_layout() {
  return array(
    'label' => t('Custom Layout'),
    'regions' => array(
      'header' => t('Header'),
      'left' => t('Left'),      
      'right' => t('Right'),
      'copy' => t('Copy'),
      'copy1' => t('Copy 1'),
      'copy2' => t('Copy 2'),
      'copy3' => t('Copy 3'),
      'pod1' => t('Pod 1'),
      'pod2' => t('Pod 2'),
      'pod3' => t('Pod 3'),
    ),
    // Uncomment if you want to include a CSS file for this layout (custom_layout.css)
    'css' => TRUE,
    // Uncomment if you want to include a preview for this layout (custom_layout.png)
    // 'image' => TRUE,
  );
}

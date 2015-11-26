<?php
function sub_mayo_preprocess_html(&$variables) {
	drupal_add_css(path_to_theme() . '/css/custom.css', array('group' => CSS_THEME, 'type' => 'file'));
}

function sub_mayo_html_head_alter(&$head_elements) {
  $theme_path = '/' . drupal_get_path('theme', variable_get('theme_default', NULL));

  $head_elements['apple_icon_precomposed'] = array(
      '#type' => 'html_tag',
      '#tag' => 'link',
      '#attributes' => array('rel' => 'apple-touch-icon-precomposed', 'href' => $theme_path . '/icons/apple-touch-icon-precomposed.png'),
  );
  $head_elements['apple_icon'] = array(
      '#type' => 'html_tag',
      '#tag' => 'link',
      '#attributes' => array('rel' => 'apple-touch-icon-precomposed', 'href' => $theme_path . '/icons/apple-touch-icon.png'),
  );
  $head_elements['apple_icon_76x76'] = array(
      '#type' => 'html_tag',
      '#tag' => 'link',
      '#attributes' => array('rel' => 'apple-touch-icon-precomposed', 'sizes' => '76x76', 'href' => $theme_path . '/icons/apple-touch-icon-76x76-precomposed.png'),
  );
  $head_elements['apple_icon_120x120'] = array(
      '#type' => 'html_tag',
      '#tag' => 'link',
      '#attributes' => array('rel' => 'apple-touch-icon-precomposed', 'sizes' => '120x120', 'href' => $theme_path . '/icons/apple-touch-icon-120x120-precomposed.png'),
  );
  $head_elements['apple_icon_152x152'] = array(
      '#type' => 'html_tag',
      '#tag' => 'link',
      '#attributes' => array('rel' => 'apple-touch-icon-precomposed', 'sizes' => '152x152', 'href' => $theme_path . '/icons/apple-touch-icon-152x152-precomposed.png'),
  );
}
?>

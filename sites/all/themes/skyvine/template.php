<?php
/**
 * @file
 * Creates theme override functions
 */

/**
 * Implements THEME_preprocess_html()
 *
 * Lets themers set conditional stylesheets in their .info file.
 *
 * Code borrowed from Conditional Styles module.
 *
 * @see
 * http://drupal.org/project/conditional_styles
 */
function skyvine_preprocess_html(&$vars) {
  // Make a list of base themes and the current theme.
  $themes = $GLOBALS['base_theme_info'];
  $themes[] = $GLOBALS['theme_info'];

  foreach (array_keys($themes) as $key) {
    $theme_path = dirname($themes[$key]->filename) . '/';
    if (isset($themes[$key]->info['stylesheets-conditional'])) {
      foreach (array_keys($themes[$key]->info['stylesheets-conditional']) as $condition) {
        foreach (array_keys($themes[$key]->info['stylesheets-conditional'][$condition]) as $media) {
          foreach ($themes[$key]->info['stylesheets-conditional'][$condition][$media] as $stylesheet) {
            // Add each conditional stylesheet.
            drupal_add_css(
              $theme_path . $stylesheet,
              array(
                'group' => CSS_THEME,
                'browsers' => array(
                  'IE' => $condition,
                  '!IE' => FALSE,
                ),
                'every_page' => TRUE,
              )
            );
          }
        }
      }
    }
  }
}

/**
 * Implements THEME_preprocess_page()
 */
function skyvine_preprocess_page(&$vars) {

}

/**
 * Implements THEME_preprocess_node()
 */
function skyvine_preprocess_node(&$vars) {

}
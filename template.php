<?php

function tmle_preprocess_page(&$variables) {
  if ($variables['is_front']) {
    // Because we're using the Blogs module to implement the front page,
    // the title defaults to 'Blogs'.  Change this.
    $variables['title'] = $variables['head_title'] = 'The Max Levine Ensemble';
  }
}

function tmle_links ($links, $attributes = array('class' => 'links')) {
  global $language;
  $output = '';

  // Get rid of the "tmle's blog" link
  unset($links['blog_usernames_blog']);

  // Add additional attributes
  $updated_attributes = $attributes;

  if (count($links) > 0) {
    $output = '<ul'. drupal_attributes($updated_attributes) .'>';

    $num_links = count($links);
    $i = 1;

    foreach ($links as $key => $link) {
      $class = $key;

      // Add first, last and active classes to the list of links to help out themers.
      if ($i == 1) {
        $class .= ' first';
      }
      if ($i == $num_links) {
        $class .= ' last';
      }
      if (isset($link['href']) && ($link['href'] == $_GET['q'] || ($link['href'] == '<front>' && drupal_is_front_page()))
          && (empty($link['language']) || $link['language']->language == $language->language)) {
        $class .= ' active';
      }
      $output .= '<li'. drupal_attributes(array('class' => $class)) .'>';

      if (isset($link['href'])) {
        // Pass in $link as $options, they share the same keys.
        $output .= l($link['title'], $link['href'], $link);
      }
      else if (!empty($link['title'])) {
        // Some links are actually not links, but we wrap these in <span> for adding title and class attributes
        if (empty($link['html'])) {
          $link['title'] = check_plain($link['title']);
        }
        $span_attributes = '';
        if (isset($link['attributes'])) {
          $span_attributes = drupal_attributes($link['attributes']);
        }
        $output .= '<span'. $span_attributes .'>'. $link['title'] .'</span>';
      }

      $i++;
      $output .= "</li>\n";
    }

    $output .= '</ul>';
  }

  return $output;

}


<?php

function tmle_preprocess_page(&$variables) {
  if ($variables['is_front']) {
    // Because we're using the Blogs module to implement the front page,
    // the title defaults to 'Blogs'.  Change this.
    $variables['title'] = $variables['head_title'] = 'The Max Levine Ensemble';
  }
}

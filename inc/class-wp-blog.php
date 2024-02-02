<?php

class Blog {

  public function getPosts($limit = -1, $ignore = []) {
    $args = [
      'posts_per_page' => $limit,
      'post_status' => 'publish',
      'post__not_in' => $ignore
    ];

    $query = new WP_Query($args);

    $query->wp_reset_query();
    $query->wp_reset_postdata();

    return $query->posts;
  }

  public function getExcerpt($content, $length = 500) {
    $contentWithoutHTML = wp_strip_all_tags($content);
    $pos = strpos($contentWithoutHTML, " ", $length);
    $result = substr($contentWithoutHTML, 0, $pos ); 

    return $result;
  }

}
<?php

class Specialists {

  public function getSpecialists($limit = -1) {
    $args = [
      'posts_per_page' => $limit,
      'post_type' => 'specialists',
      'post_status' => 'publish',
    ];

    if (isset($_GET['category']) && $_GET['category']) {
      $args['meta_query'] = [
        [
          'key' => 'category',
          'value' => $_GET['category'],
          'compare' => '='
        ]
      ];
    }

    $query = new WP_Query($args);

    $query->wp_reset_query();
    $query->wp_reset_postdata();

    return $query->posts;
  }

  public function getCategories() {
    $field = get_field_object('field_65bbc8c062c9a');
    $choices = $field['choices'];

    return $choices;
  }

  public function getBorderColor($category) {
    $border_color = '';
    switch ($category) {
      case 'psychologist':
        $border_color = 'border-primary';
        break;
      case 'coach':
        $border_color = 'border-purple';
        break; 
      case 'energy-practitioner':
        $border_color = 'border-teal';
        break;   
    }

    return $border_color;
  }

}
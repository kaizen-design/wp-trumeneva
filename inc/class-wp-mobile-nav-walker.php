<?php

class mobile_menu_walker extends Walker_Nav_Menu {
  function start_el(&$output, $item, $depth=0, $args=[], $id=0) {
      $output .= "<li class='" .  implode(" ", $item->classes) . "'>";
      
      if ($item->url && $item->url != '#') {
          $output .= '<a href="' . $item->url . '">';
      } else {
          $output .= '<span>';
      }

      $output .= $item->title;

      if ($item->url && $item->url != '#') {
          $output .= '</a>';
      } else {
          $output .= '</span>';
      }

      /* if ($item->url === '/contacts') {
          $socials = get_template_part(
            'partials/components/socials-list', 
            null, 
            ['class' => 'socials-list d-flex align-items-center justify-content-end gap-3 list-unstyled m-0']
          );
          $output .= $socials;
      } */
  }
}
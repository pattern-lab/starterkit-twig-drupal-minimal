<?php
/**
 * @file
 * Add "link" function for Pattern Lab.
 */

$function = new Twig_SimpleFunction('link', function ($text, $url, $attributes = []) {
  $attribute_string = '';
  if(is_array($attributes)) {
    foreach ($attributes as $key => $value) {
      if (is_array($value)) {
        $value = implode(' ', $value);
      }
      $attributes .= ' ' . $key . '="' . $value .'"';
    }
  }
  else {
    $attribute_string .= ' ' . $attributes;
  }

  return '<a href="' . $url . '"' . $attribute_string . '>' . $text . '</a>';

}, array('is_safe' => array('html')));
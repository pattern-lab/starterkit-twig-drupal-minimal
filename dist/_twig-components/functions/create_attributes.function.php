<?php
/**
 * @file
 * Add "create_attributes" function for Pattern Lab & Drupal
 */

use \Drupal\Core\Template\Attribute;

$function = new Twig_SimpleFunction('create_attribute', function (array $attributes = []) {
  return new Attribute($attributes);
});
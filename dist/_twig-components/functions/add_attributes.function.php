<?php
/**
 * @file
 * Add "add_attributes" function for Pattern Lab & Drupal
 */

use synetic\DrupalFrontendTools\AttributeMerger;

$function = new Twig_SimpleFunction('add_attributes', function ($attributes, $additional_attributes = []) {
  $attributeMerger = new AttributeMerger();
  return $attributeMerger->merge($attributes, $additional_attributes);
}, array('is_safe' => array('html')));

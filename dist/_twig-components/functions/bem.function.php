<?php
/**
 * @file
 * Add "bem" function for Pattern Lab & Drupal
 */

use synetic\DrupalFrontendTools\Bem;

$function = new Twig_SimpleFunction('bem', function ($base_class, $modifiers = array(), $blockname = '', $extra = array()) {
  $bem = new Bem();
  return $bem->generate($base_class, $modifiers, $blockname, $extra);
}, array('is_safe' => array('html')));

<?php
function printHeader(){
  
    $string = '';
    $string .= '<nav>';
    $string .= '<ul>';
    $string .= '<li> Home </li>';
    $string .= '<li> History </li>';
    $string .= '<li> Tips and Tricks </li>';
    $string .= '<li> Instructional Video </li>';
    $string .= '<li> Contact Us </li>';
    $string .= '</ul>';
    $string .= '</nav>';
  
    return $string;
  }
?>
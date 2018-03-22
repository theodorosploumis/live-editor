<?php
// Create a CSS file and save contents to it
include __DIR__ . '/Cssparser.php';

$filename = __DIR__ . "/../live-styles.css";
$result = [];

if (!isset($_POST['inline_styles'])) {
  exit();
}

$inline_styles = $_POST['inline_styles'];
//$inline_styles = '.node-01 {color: #fff;}';

$css = new Cssparser();
$css->read_from_file($filename);
$css_vars = get_object_vars($css)['css'];

$inline_css = new Cssparser();
$inline_css->read_from_string($inline_styles);
$inline_css_vars = get_object_vars($inline_css)['css'];

if ($css_vars && $inline_css_vars) {
    $result = array_unique(array_merge_recursive($css_vars, $inline_css_vars), SORT_REGULAR);
} else if (!$css_vars && $inline_css_vars) {
    $result = $inline_css_vars;
}

foreach ($result as $key => $value) {
  foreach ($value as $k => $v) {
    // Keep only the last array value
    if (is_array($v)) {
      $v = end($v);
      $value[$k] = $v;
    } else {
      continue;
    }
  }
  $result[$key] = $value;
  // Sort CSS properties
  ksort($result[$key]);
}
// Sort classes
ksort($result);

$plain_css = arrayToCss($result);

saveFile($filename, $plain_css);

// Array to css plain text
function arrayToCss($array){
  $css = '';
  if(is_array($array) && count($array) > 0) {
    foreach($array as $level_1_key => $level_1_value) {
      $css .= stripslashes($level_1_key)." {\n";
      foreach($level_1_value as $level_2_key=>$level_2_value) {
        $css .= "\t".stripslashes($level_2_key)." : ".stripslashes($level_2_value).";\n";
      }
      $css .= "}\n";
    }
  }
  return $css;
}

// Save CSS file locally
function saveFile($filename, $css) {
  
  $fh = fopen($filename,"w") or die("Unable to open file.");
  fwrite($fh, $css);
  fclose($fh);
  
  print $css;
  
  return true;
}

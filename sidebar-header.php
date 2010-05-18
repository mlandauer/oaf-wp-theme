<?php
if (function_exists('dynamic_sidebar')) {
  echo '<div id="header-widget-area" class="sidebar"><ul class="xoxo">';
  dynamic_sidebar(3);
  echo '</ul></div><!-- #header-widget-area .sidebar -->';
}
?>

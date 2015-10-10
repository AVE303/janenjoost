<?php
/**
 * @file
 * Template for Panopoly moscone-flipped Flipped.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>

<div class="panel-display moscone-flipped-flipped clearfix <?php !empty($class) ? print $class : ''; ?>" <?php !empty($css_id) ? print "id=\"$css_id\"" : ''; ?>>
  <section class="section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 moscone-flipped-main-container">
          <?php print $content['header']; ?>
        </div>
      </div>
    </div>
  </section>
  <section class="section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8 moscone-flipped-main-content">
          <?php print $content['content_main']; ?>
        </div>
        <div class="col-md-4 moscone-flipped-sidebar-area">
          <?php print $content['sidebar']; ?>
        </div>
      </div>
    </div>
  </section>
  <footer class="section" id="footer">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 moscone-flipped-footer-area">
          <?php print $content['footer']; ?>
        </div>
      </div>
    </div>
  </footer>
</div><!-- /.moscone-flipped-flipped -->
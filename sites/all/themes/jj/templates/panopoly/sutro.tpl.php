<?php
/**
 * @file
 * Template for Panopoly Sutro.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>

<div class="panel-display sutro clearfix <?php !empty($class) ? print $class : ''; ?>" <?php !empty($css_id) ? print "id=\"$css_id\"" : ''; ?>>
  <section class="section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 sutro-header-area">
            <?php print $content['header']; ?>
        </div>
      </div>
    </div>
  </section>
  <section class="section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 col-sm-6 sutro-column-content-region-1">
          <?php print $content['column1']; ?>
        </div>
        <div class="col-md-6 col-sm-6 sutro-column-content-region-2">
          <?php print $content['column2']; ?>
        </div>
      </div>
    </div>
  </section>
  <footer class="section" id="footer">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 sutro-footer-area">
          <?php print $content['footer']; ?>
        </div>
      </div>
    </div>
  </footer>
</div><!-- /.sutro -->
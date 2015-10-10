<?php
/**
 * @file
 * Template for Panopoly Harris.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>

<div class="panel-display harris clearfix <?php !empty($class) ? print $class : ''; ?>" <?php !empty($css_id) ? print "id=\"$css_id\"" : ''; ?>>
  <section class="section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 harris-main-container">
          <?php print $content['header']; ?>
        </div>
      </div>
    </div>
  </section>
  <section class="section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3 harris-column-content-region-1">
          <?php print $content['column1']; ?>
        </div>
        <div class="col-md-6 harris-column-content-region-2">
          <?php print $content['content_main']; ?>
        </div>
        <div class="col-md-3 harris-column-content-region-3">
          <?php print $content['column2']; ?>
        </div>
      </div>
    </div>
  </section>
</div><!-- /.harris -->
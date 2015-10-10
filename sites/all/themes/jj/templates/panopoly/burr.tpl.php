<?php
/**
 * @file
 * Template for Panopoly Burr.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>

<div class="panel-display burr clearfix <?php !empty($class) ? print $class : ''; ?>" <?php !empty($css_id) ? print "id=\"$css_id\"" : ''; ?>>
  <section class="section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5 col-sm-5 burr-sidebar-region">
          <?php print $content['sidebar']; ?>
        </div>
        <div class="col-md-7 col-sm-7 burr-main-content">
          <?php print $content['content_main']; ?>
        </div>
      </div>
    </div>
  </section>
</div><!-- /.burr -->

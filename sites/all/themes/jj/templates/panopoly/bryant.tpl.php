<?php
/**
 * @file
 * Template for Panopoly bryant.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>

<div class="panel-display bryant clearfix <?php !empty($class) ? print $class : ''; ?>" <?php !empty($css_id) ? print "id=\"$css_id\"" : ''; ?>>
  <section class="section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4 bryant-sidebar-region">
          <?php print $content['sidebar']; ?>
        </div>
        <div class="col-md-8 bryant-main-content">
          <?php print $content['content_main']; ?>
        </div>
      </div>
    </div>
  </section>
</div><!-- /.bryant -->
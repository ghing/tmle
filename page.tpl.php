<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
  <head>
    <title><?php print $head_title; ?></title>
		
    <?php print $head; ?>
    <?php print $styles; ?>
    <?php print $scripts; ?>
  </head>

  <body class="<?php print $body_classes; ?>">
    <div id="center-container">
      <div id="header">
        <h1 id="logo"><a href="/"><?php print $site_name; ?></a></h1>
                                  
        <?php if (isset($primary_links)) : ?>
        <?php print theme('links', $primary_links, array('class' => 'links primary-links')) ?>
       <?php endif; ?>
      </div>
      <!-- /#header -->

      <div id="content-border-top"></div>

      <div id="content-border-middle">	
        <div id="content-container" class="container-12">

          <div id="content" class="grid-12">
            <?php if (!empty($tabs)): ?><div class="tabs"><?php print $tabs; ?></div><?php endif; ?>
            <?php if (!empty($messages)): print $messages; endif; ?>
            <?php if (!empty($help)): print $help; endif; ?>

            <?php print $content; ?>
            <div class="clear-block"></div>
          </div>		
          <!-- /#content -->

          <?php if ($is_front && $right): ?>
          <div id="sidebar-right" class="sidebar grid-4 push-8">
          <?php print $right ?>
          </div>
          <?php endif; ?>			

        </div>
        <!-- /#content -->

      </div>
      <!-- /#content-border-middle -->

      <div id="content-border-bottom"></div>			
                              
                              
    </div>
    <!-- /#center-container -->

    <?php print $closure ?>	
      
  </body>
</html>

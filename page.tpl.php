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
			<h1 id="logo"><a href="/"><?php print $site_name; ?></a></h1>
			        
			<?php if (isset($primary_links)) : ?>
          	<?php print theme('links', $primary_links, array('class' => 'links primary-links')) ?>
        	<?php endif; ?>
			
			<div id="content-border-top">
				<div id="content-border-middle">	
					<?php if ($is_front && $right): ?>
        			<div id="sidebar-right" class="sidebar">
          				<?php print $right ?>
        			</div>
      				<?php endif; ?>			
					<div id="content">
						<?php print $content; ?>
						<div class="clear-block"></div>
					</div>		

				</div>
				<div id="content-border-bottom"></div>			
				
				
			</div>
		</div>
	<?php print $closure ?>	
	</body>
</html>
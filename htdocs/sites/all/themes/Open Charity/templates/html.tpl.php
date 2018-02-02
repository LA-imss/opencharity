<!DOCTYPE html>
<html lang="en">
	<head>
		<?php print $head; ?>
		<title><?php print $head_title; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<?php print $styles; ?>
		<?php print $scripts; ?>
	</head>
	<body class="<?php print $classes; ?>" <?php print $attributes;?>>
		<?php print $page_top; ?>
		<?php print $page; ?>
		<?php print $page_bottom; ?>
	</body>
</html>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo (isset($title))? $title : 'Internal Apps' ;?></title>
    <?php echo (isset($render_css))? $render_css : '';?>

</head>
<style type="text/css">
	
</style>
<body >

<div class="container">
	<div class="col-md-4 col-lg-offset-4">
		<?php echo $this->template->content; ?>
	</div>
</div>
<?php echo (isset($render_js))? $render_js : '';?>
</body>
</html>

<?php
/**
 * post register mail view.
 * PHP Version 5.4.0
 * Version 1.0.0
 * @author Hideaki Oguchi (bluff-lab.com) <oguchi@bluff-lab.com>
 * @copyright 2016 Yamate Kenkyujo - Bluff Laboratory
 */
/**
 * @var array $data
 * @var string $message
 */
$title   = empty( $data['title'] ) ? '' : $data['title'];
$message = empty( $data['message'] ) ? '' : $data['message'];
?>
<div class="container">
	<div class="page-header">
		<h1><?php echo esc_html( $title ) ?></h1>
	</div>

	<div class="col-sm-8 col-sm-offset-2">
		<div class="alert alert-success" role="alert">
			<p><?php echo esc_html( $message ) ?></p>
		</div>
	</div>
</div>

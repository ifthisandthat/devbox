<?php defined('LIBRARY') or die('No direct script access allowed');

	$page_title = '&raquo; Dashboard';
	
    if(!$Auth->loggedIn()) redirect('/login/');

	require_once DIR_VIEW . '/_header.php'; 
	require_once DIR_VIEW . '/_navigation.php';
?>

	<div class="wrapper">		
		<div class="container">
			<div class="row">
				<div class="span16">

					<?php if (!$Error->ok()): ?>
						<div class="row">
							<div style="">
								<div class="alert-message warning">
									<?php foreach ($Error->errors as $k => $v): ?>
										<p><?= $v; ?></p>
									<?php endforeach ?>
							    </div>
							</div>
						</div>
					<?php endif ?>

				</div>
			</div>
			<div class="row">
				<div class="span-one-third">
					<img alt="" src="/assets/images/origami/file.png" class="thumbnail floatleft" style="margin: 10px 10px 0 0; width: 55px;">
					<h3>EZee Pages</h3>
					<p>Easily add pages using your default template or start a new template.</p>
					
					<img alt="" src="/assets/images/icons/dashboard/icon_06.png" class="thumbnail floatleft" style="margin-top: 10px;">
					<h3>EZee Contact Form</h3>
					<p>Supports direct email, <a href="http://www.mailchimp.com" target="_blank">Mailchimp</a> and 
					<a href="http://www.constantcontact.com" target="_blank">Constant Contact</a>.</p>
					
					<img alt="" src="/assets/images/icons/dashboard/icon_01.png" class="thumbnail floatleft" style="margin-top: 10px;">
					<h3>EZee FAQ</h3>
					<p>Build a Frequently Asked Questions list with jQuery UI support.</p>

					<a href="/gallery/">
					<img alt="" src="/assets/images/milky/27.png" class="thumbnail floatleft" style="margin: 10px 8px 0;">
					<h3>EZee Gallery</h3></a>
					<p>Upload your picture gallery. Crop, resize and apply popular filters.</p>
					
					<img alt="" src="/assets/images/origami/save.png" class="thumbnail floatleft" style="margin: 10px 5px 0; width: 55px;">
					<h3>EZee Backups</h3>
					<p>Backup your website and database with <a href="http://www.dropbox.com" target="_blank">Dropbox</a> support.</p>
					
					<img alt="" src="/assets/images/icons/dashboard/icon_18.png" class="thumbnail floatleft" style="margin-top: 10px;">
					<h3>EZee Settings</h3>
					<p>Setup Admin access, email contacts, database settings and more.</p>
				</div>
				<div class="span-one-third">
				</div>
				<div class="span-one-third">
					
				</div>
			</div>
		</div>

<?php require_once DIR_VIEW . '/_footer.php'; ?>
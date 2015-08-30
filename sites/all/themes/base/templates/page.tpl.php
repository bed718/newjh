
<div id="header-container">
	<div id="header">
		<div id="logo"><a href="/">Jacob Holston</a></div>
		<div class="menu-toggle icon-list"></div>
		<div id="main-nav">
			

			<div id="menu">
				<?php print render($page['nav_main']); ?>
				<div class="social-icons">
					<a href="http://twitter.com/jacobholston" class="icon-twitter" target="_blank"></a>
					<a href="http://instagram.com/jacobholston" class="icon-instagram" target="_blank"></a>
					<a href="http://pinterest.com/jacobholston" class="icon-pinterest" target="_blank"></a>
				</div>
			</div>
		</div> 
	</div>
</div>
<?php if(isset($messages)): ?>
			<div id="messages"><?php echo $messages; ?></div>
		<?php endif; ?>

<div id="main-container">
	<div class="main">
		

		

		<?php if(isset($title)): ?>
			<h1 id="page-title"><?php echo $title; ?></h1>
		<?php endif; ?>

		<?php if(isset($tabs)): ?>
			<div id="tabs"><?php echo render($tabs); ?></div>
		<?php endif; ?>

		<div id="content">
			<?php if($node_type == 'collection'): ?>
				<div id="line-sheet">
					<?php if (isset($_POST['password']) && ($_POST['password'] == $line_sheet_pw)): ?>
						<meta content="2; URL=/sites/default/files/line-sheets/<?php print $line_sheet_url; ?>" http-equiv="Refresh" />
						Downloading…
					<?php else: ?>
						<a id="line-sheet-btn" href="#">Download Line Sheet</a>
					<?php endif; ?>	
				</div>
							
				<?php if (!isset($_POST['password']) || ($_POST['password'] != $line_sheet_pw)): ?>
					<div id="line-sheet-form"> 
						<form method="post">
							<input name="password" type="password" placeholder="password"/>
							<input class="form-submit"  type="submit" value="download" />
						</form>
					</div>
				<?php endif; ?>	
			<?php endif; ?>

			<?php print render($page['content']); ?>
		</div>
	</div>
</div>

<div id="footer-container">
	<div id="front-devider">
				<h3>Instagram: <a href="http://instagram.com/jacobholston">@jacobholston</a></h3>
				<div id="footer-instafeed"></div>
			</div>
	<div  id="footer">

		<div class="inner">
			
			<div id="footer-main"><?php print render($page['footer_main']); ?></div>
			<div id="footer-left"><?php print render($page['footer_left']); ?></div>
			<div id="footer-right"><?php print render($page['footer_right']); ?>
				<h2>Follow Us</h2>
				<div class="social-icons">
					<a href="http://twitter.com/jacobholston" class="icon-twitter" target="_blank"></a>
					<a href="http://instagram.com/jacobholston" class="icon-instagram" target="_blank"></a>
					<a href="http://pinterest.com/jacobholston" class="icon-pinterest" target="_blank"></a>
				</div>
			</div>
		</div>
		
	</div>
</div>
<div class="copy">
	&copy; <?php echo date('Y') . ' ' . $site_name; ?>
</div>


<div id="back-to-top"><div><span class="icon-arrow-up"></span></div></div>




<div class="coulsy-header">
	<div class="coulsy-header__inner">
		<div class="coulsy-header__inner--logo">
			<img alt="Coulsy" width="140" height="140" src="http://127.0.0.1/coulsy/libs/images/coulsy-logo-sm.png">
		</div>
		<div class="coulsy-header__inner--links">
			<ul>
				<li><a href="<?php echo $base_url ?>">Home</a></li>
				<li><a href="<?php echo $base_url ?>areas-covered">Areas Covered</a></li>
				<li>
					<a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Our Locations
						<i class="fas fa-chevron-down"></i>
					</a>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
						<a class="dropdown-item" href="<?php echo $base_url ?>halifax-windows">Halifax</a>
						<a class="dropdown-item" href="<?php echo $base_url ?>leeds-windows">Leeds</a>
						<a class="dropdown-item" href="<?php echo $base_url ?>bradford-windows">Bradford</a>
					</div>
				</li>
				<li><a href="<?php echo $base_url ?>showcase">Our Work</a></li>
				<li><a href="<?php echo $base_url ?>about">About Us</a></li>
			</ul>
		</div>
		<div class="coulsy-header__inner--social">
			<ul>
				<li class="social-icons-instagram"><a href="<?php echo $social_link_insta ?>" target="_blank" class="coulsy-header__inner--social--icon" title="Instagram"><i class="fab fa-instagram"></i></a></li>
				<li class="social-icons-twitter"><a href="<?php echo $social_link_twitter ?>" target="_blank" class="coulsy-header__inner--social--icon" title="Twitter"><i class="fab fa-twitter"></i></a></li>
				<li class="social-icons-facebook"><a href="<?php echo $social_link_facebook ?>" target="_blank" class="coulsy-header__inner--social--icon" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
			</ul>
		</div>
		<button class="btn coulsy-header__collapse--button" data-toggle="collapse" data-target=".coulsy-header__inner--links">
			<i class="fas fa-bars"></i>
		</button>
	</div>
</div>
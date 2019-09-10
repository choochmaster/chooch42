<?php
$username = $_SESSION['username'];
if($_SESSION['rank'] !== "5"){
	$whoread = mysqli_query($con, "SELECT * FROM `ticket` WHERE `username` = '$username' AND `isread` = '0'");
		if(mysqli_num_rows($whoread) >= 1){
			while($row = mysqli_fetch_array($whoread)){
			$isreadd = $row['isread'];
			$numrows = mysqli_num_rows($whoread);
			}
		}else{ $numrows = '0';}
}elseif($_SESSION['rank'] === "5"){
	$whoread = mysqli_query($con, "SELECT * FROM `ticket` WHERE `isadminread` = '0'");
	$numrows = mysqli_num_rows($whoread);
		if($numrows >= 1){
			while($row = mysqli_fetch_array($whoread)){
			$isreadd = $row['isadminread'];
			}
		}else{ $numrows = '0';}
}

	if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on'){
	
		$lien = "https://".$_SERVER['HTTP_HOST'];
	
	}else{
		
		$lien = "http://".$_SERVER['HTTP_HOST'];
		
	}

$path = explode("/", $_SERVER["PHP_SELF"]);	
$path = $lien . "/" . $path[1];

$myLang = $_SESSION['lang'];
include_once('lang/' . $myLang . '.php');

?>
<style>
a.logo2 {
    font-size: 200%;
    color: <?php 
	if($_SESSION['skin'] == "yellow" || $_SESSION['skin'] == "green" || $_SESSION['skin'] == "facebook"){
	echo ' #fff;';}else{
	if($_SESSION['skin'] == "white"){echo'
	
	#000;'
	
	;}else{
	
	echo'
	
	#2e2e2e;
	
	';} }
	?>
    float: left;
    text-transform: uppercase;
}

a.logo2:hover, a.logo2:focus {
    text-decoration: none;
    outline: none;
}

a.logo2 span {
    color: #FF6C60;
}


</style>
<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
	
	<div class="sidebar-menu">

		<div class="sidebar-menu-inner">
			
			<header class="logo-env">

				<!-- logo collapse icon -->
				<div class="sidebar-collapse">
					<a href="#" class="sidebar-collapse-icon"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
						<i class="entypo-menu"></i>
					</a>
				</div>
				<div class="logo">
						<a href="index">
						<h2 style="color:  <?php 
	if($_SESSION['skin'] == "yellow" || $_SESSION['skin'] == "green" || $_SESSION['skin'] == "facebook" || $_SESSION['skin'] == "purple"|| $_SESSION['skin'] == "cafe"|| $_SESSION['skin'] == "red"|| $_SESSION['skin'] == "blue"|| $_SESSION['skin'] == "normal"|| $_SESSION['skin'] == "black"){
	echo ' white;';}else{
	if($_SESSION['skin'] == "white"){echo'
	
	black;'
	
	;}else{
	
	echo'
	
	#2e2e2e;
	
	';} }
	?>">
	<?php 
						if($_SERVER['PHP_SELF'] == "/purchase.php"){
							echo '<div style="font-size: 150%;">';} ?>
						
						<?php echo $website; ?>
						<?php	 
					if($_SERVER['PHP_SELF'] == "/purchase.php"){
							echo '</div>';}?>
						
						</h2></a>
						

							
							
				</div>			
				<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
				<div class="sidebar-mobile-menu visible-xs">
					<a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
						<i class="entypo-menu"></i>
					</a>
				</div>

			</header>

<ul id="main-menu" class="main-menu multiple-expanded" >
				<!-- add class "multiple-expanded" to allow multiple submenus to open -->
				<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
								<li>
							</li>
				<li>
					<a href="#">
						<i class="entypo-gauge"></i>
						<span class="title"><?php echo $lang['dashboard'] ?></span>
					</a>
					<ul>
						<li>
							<a href="index">
								<span class="title"><?php echo $lang['home'] ?></span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="title"><?php echo $lang['skins'] ?></span>
								<span class="badge badge-info badge-roundless"><?php echo $lang['new_items'] ?></span>
							</a>
							<ul>
							  <li>
									<a href="skin?id=normal">
										<span class="title"><?php echo $lang['normal_skin'] ?></span>
									</a>
								</li>
								<li>
									<a href="skin?id=black">
										<span class="title"><?php echo $lang['black_skin'] ?></span>
									</a>
								</li>
								<li>
									<a href="skin?id=white">
										<span class="title"><?php echo $lang['white_skin'] ?></span>
									</a>
								</li>
								<li>
									<a href="skin?id=purple">
										<span class="title"><?php echo $lang['purple_skin'] ?></span>
									</a>
								</li>
								<li>
									<a href="skin?id=cafe">
										<span class="title"><?php echo $lang['cafe_skin'] ?></span>
									</a>
								</li>
								<li>
									<a href="skin?id=red">
										<span class="title"><?php echo $lang['red_skin'] ?></span>
									</a>
								</li>
								<li>
									<a href="skin?id=green">
										<span class="title"><?php echo $lang['green_skin'] ?></span>
									</a>
								</li>
								<li>
									<a href="skin?id=yellow">
										<span class="title"><?php echo $lang['yellow_skin'] ?></span>
									</a>
								</li>
								<li>
									<a href="skin?id=blue">
										<span class="title"><?php echo $lang['blue_skin'] ?></span>
									</a>
								</li>
								<li>
									<a href="skin?id=facebook">
										<span class="title"><?php echo $lang['facebook_skin'] ?></span>
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<a href="#">
						<i class="entypo-cloud"></i>
						<span class="title"><?php echo $lang['tools'] ?></span>
					</a>
					<ul>
							<li>
							<a href="generator">
								<span class="title"><?php echo $lang['premium_generator'] ?></span>
							</a>
								</li>
								<li>
							<a href="privategen">
								<span class="title"><?php echo $lang['private_generator'] ?></span>
							</a>
								</li>
						</ul>
				</li>
				<li>
					<a href="purchase">
						<i class="entypo-basket"></i>
						<span class="title"><?php echo $lang['purchase'] ?></span>
					</a>
				</li>
				<li>
					<a href="support">
						<i class="entypo-mail"></i>
						<span class="title"><?php echo $lang['support'] ?></span>
					</a>
				</li>
				<li>
					<a href="settings">
						<i class="entypo-cog"></i>
						<span class="title"><?php echo $lang['settings'] ?></span>
					</a>
				</li>
				<li>
					<a href="<?php echo $path; ?>/lib/logout">
						<i class="entypo-login"></i>
						<span class="title"><?php echo $lang['log_out'] ?></span>
					</a>
				</li>
											<?php
							if($_SESSION['rank'] == "5"){
							echo'
							</br></br>
				<li>
							</li>
						<li class="opened">
							<a href="#">
								<i class="entypo-flow-line"></i>
								<span class="title"> ' .$lang['administration'] . '</span>
							</a>
							<ul>
								<li>
									<a href="admin-manage">
										<i class="entypo-flow-parallel"></i>
										<span class="title">' . $lang['manage'] . '</span>
									</a>
								</li>
																<li>
									<a href="admin-support">
										<i class="entypo-flow-parallel"></i>
							
										<span class="title">' . $lang['support'] . '</span>';
										if($numrows >= 1){ echo
										'<span class="badge badge-secondary">'. $numrows .'</span>';}
										
										echo'
									</a>
								</li>
																<li>
									<a href="admin-users">
										<i class="entypo-flow-parallel"></i>
										<span class="title">' . $lang['users'] . '</span>
									</a>
								</li>
																<li>
									<a href="admin-subscriptions">
										<i class="entypo-flow-parallel"></i>
										<span class="title">' . $lang['subscriptions'] . '</span>
									</a>
								</li>
							
							</ul>
						</li>
											
			</ul>
			'	;}else{} ?>
		</div>

	</div>
	<div class="main-content">
				
		<div class="row">
		
			<!-- Profile Info and Notifications -->
		
			<!-- Profile Info and Notifications -->
			<div class="col-md-6 col-sm-8 clearfix">
		
				<ul class="user-info pull-left pull-none-xsm">
		
					<!-- Profile Info -->
					<li class="profile-info dropdown"><!-- add class "pull-right" if you want to place this from right -->
		
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img src="images/profile1.jpg" alt="" class="img-circle" width="44" />
													<?php 
						if($_SERVER['PHP_SELF'] == "/purchase.php"){
							echo '<div style="font-size: 100%;">';} ?>
							
							<?php echo $username; ?>
							
													<?php 
						if($_SERVER['PHP_SELF'] == "/purchase.php"){
							echo '</div>';} ?>
						</a>
		
						<ul class="dropdown-menu">
		
							<!-- Reverse Caret -->
							<li class="caret"></li>
		
							<!-- Profile sub-links -->
							<li>
								<a href="settings">
									<i class="entypo-user"></i>
									<?php echo $lang['settings'] ?>
								</a>
							</li>
		
							<li>
								<a href="<?php echo $path; ?>/lib/logout">
									<i class="entypo-logout right"></i>
									<?php echo $lang['log_out'] ?>
								</a>
							</li>
						</ul>
					</li>
		
				</ul>
				
				
				<ul class="user-info pull-left pull-left-xs pull-none-xsm">
		
					<!-- Raw Notifications -->
		
					<!-- Message Notifications -->
					<li class="notifications dropdown">
		
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
							<i class="entypo-mail"></i>
							<?php if($numrows >= 1){
							echo'
							<span class="badge badge-secondary">'. $numrows .'</span>';} ?>
						</a>
		
						<ul class="dropdown-menu">
							<li>
								<ul class="dropdown-menu-list scroller">
									<?php
									if($_SESSION['rank'] === "5"){
									$onverifie = mysqli_query($con, "SELECT * FROM `ticket` WHERE `isadminread` = '0' LIMIT 4");
									while($row = mysqli_fetch_array($onverifie)){
									$users = $row['username'];
									$msg = "You have a new response of ".$users;
									$tickettt = $row['idticket'];
									echo'
									<li class="active">
										<a href="admin-support?ticket='. $tickettt .'">
											<span class="image pull-right">
												<img src="images/profile1.jpg" width="44" alt="" class="img-circle" />
											</span>
											
											<span class="line">
												<strong>'. $users .'</strong>
												- ' . $lang['dontread'] . '
											</span>
											
											<span class="line desc small">
												'. $msg .'
											</span>
										</a>
									</li>
									';}}elseif($_SESSION['rank'] === "1"){
									$usernamei = mb_strtolower($username);
									$onverifie = mysqli_query($con, "SELECT * FROM `ticket` WHERE `username` = '$usernamei' AND `isread` = '0' LIMIT 4");
									while($row = mysqli_fetch_array($onverifie)){
									$users = $row['username'];
									$subjectss = $row['subject'];
									$date = $row['date'];
									$msg = $lang['newreplyfromadmins'];
									$tickettt = $row['idticket'];
									echo
									'
									<li class="active">
										<a href="ticket?id='. $tickettt .'">
											<span class="image pull-right">
												<img src="images/profile1.jpg" width="44" alt="" class="img-circle" />
											</span>
											
											<span class="line">
												<strong>'. $subjectss .'</strong>
												- '. $lang['dontread'] .'
											</span>
											
											<span class="line desc small">
												'. $msg .'
											</span>
										</a>
									</li>
									
									';}}
									?>
								</ul>

							</li>
							
							<li class="external">
								<a href="admin-support"><?php echo $lang['allmessages'] ?></a>
							</li>
						</ul>
		
					</li>
		
					<!-- Task Notifications -->
					
		
				</ul>
		
			</div>
		
		
			<!-- Raw Links -->
			
		
		
			<!-- Raw Links -->
			<div class="col-md-6 col-sm-4 clearfix">
		
				<ul class="list-inline links-list pull-right">
		
					<!-- Language Selector -->
					<li class="dropdown language-selector">
		
						<?php echo $lang['language'] ?>: &nbsp;
							<!--	IF YOU WANT TO TRANSLATE IT, REMOVE "<!--" AND "//"
							<li>
								<a href="<?php //echo $lien."/de/".$file;?>">
									<img src="assets/images/flags/flag-de.png" width="16" height="16" />
									<span>Deutsch</span>
								</a>
							</li> -->
							<?php if($_SESSION['lang'] == 'en'){ echo
						'<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-close-others="true">
							<img src="assets/images/flags/flag-uk.png" width="16" height="16" />
						</a>
		
						<ul class="dropdown-menu pull-right">
						<li class="active">
								<a href="'.$path.'/l?lang=en">
									<img src="assets/images/flags/flag-uk.png" width="16" height="16" />
									<span>English</span>
								</a>
							</li>
							<li>
								<a href="'.$path.'/l?lang=fr">
									<img src="assets/images/flags/flag-fr.png" width="16" height="16" />
									<span>Français</span>
								</a>
							</li>
							<li>
								<a href="'.$path.'/l?lang=es">
									<img src="assets/images/flags/flag-es.png" width="16" height="16" />
									<span>Español</span>
								</a>
							</li>'
							;}elseif($_SESSION['lang'] == 'fr'){echo
							'						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-close-others="true">
							<img src="assets/images/flags/flag-fr.png" width="16" height="16" />
						</a>
		
						<ul class="dropdown-menu pull-right">
							<li class="active">
								<a href="'.$path.'/l?lang=fr">
									<img src="assets/images/flags/flag-fr.png" width="16" height="16" />
									<span>Français</span>
								</a>
							</li>
							<li>
								<a href="'.$path.'/l?lang=en">
									<img src="assets/images/flags/flag-uk.png" width="16" height="16" />
									<span>English</span>
								</a>
							</li>
							<li>
								<a href="'.$path.'/l?lang=es">
									<img src="assets/images/flags/flag-es.png" width="16" height="16" />
									<span>Español</span>
								</a>
							</li>'
							;}elseif($_SESSION['lang'] == 'es'){echo
							'						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-close-others="true">
							<img src="assets/images/flags/flag-es.png" width="16" height="16" />
						</a>
		
						<ul class="dropdown-menu pull-right">
							<li class="active">
								<a href="'.$path.'/l?lang=es">
									<img src="assets/images/flags/flag-es.png" width="16" height="16" />
									<span>Español</span>
								</a>
							</li>
							<li>
								<a href="'.$path.'/l?lang=fr">
									<img src="assets/images/flags/flag-fr.png" width="16" height="16" />
									<span>Français</span>
								</a>
							</li>
							<li>
								<a href="'.$path.'/l?lang=en">
									<img src="assets/images/flags/flag-uk.png" width="16" height="16" />
									<span>English</span>
								</a>
							</li>'	
							;} ?>
							<!--
							<li>
								<a href="<?php echo $path."/es/".$file;?>">
									<img src="assets/images/flags/flag-es.png" width="16" height="16" />
									<span>Español</span>
								</a>
							</li> -->
						</ul>
		
					</li>
		
					<!--<li class="sep"></li>
		
					
					<li>
						<a href="#" data-toggle="chat" data-collapse-sidebar="1">
							<i class="entypo-chat"></i>
							Chat
		
							<span class="badge badge-success chat-notifications-badge is-hidden">0</span>
						</a>
					</li>-->
		
					<li class="sep"></li>
		
					<li>
						<a href="<?php echo $path; ?>/lib/logout">
							<?php echo $lang['log_out'] ?> <i class="entypo-logout right"></i>
						</a>
					</li>
				</ul>
		
			</div>
		
		</div>
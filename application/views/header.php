<!DOCTYPE html>
<head>
<title><?php echo $title; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Colored Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="<?php echo base_url('css/bootstrap.css');?>">
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="<?php echo base_url('css/style.css');?>" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="<?php echo base_url('css/font.css');?>" type="text/css"/>
<link href="<?php echo base_url('css/font-awesome.css');?>" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script>
	var base_url="<?php echo base_url();?>";
</script>
<script src="<?php echo base_url('js/jquery2.0.3.min.js');?>"></script>
<script src="<?php echo base_url('js/basic.js');?>"></script>
<script src="<?php echo base_url('js/modernizr.js');?>"></script>
<script src="<?php echo base_url('js/jquery.cookie.js');?>"></script>
<script src="<?php echo base_url('js/screenfull.js');?>"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});	
		});
		</script>
		
</head>
<body class="dashboard-page">
    <?php 
        if($this->session->userdata('logged_in')){
            if(($this->uri->segment(1).'/'.$this->uri->segment(2))!='quiz/attempt'){
            $logged_in=$this->session->userdata('logged_in');
	?>
	<nav class="main-menu">
		<ul>
            <?php  
				if($logged_in['su']==1){
			?>
			<li <?php if($this->uri->segment(1)=='dashboard'){ echo "class='active'"; } ?>>
				<a href="<?php echo site_url('dashboard');?>">
					<i class="fa fa-home nav_icon"></i>
					<span class="nav-text">
					<?php echo $this->lang->line('dashboard');?>
					</span>
				</a>
			</li>
			<li class="has-subnav">
				<a href="javascript:;">
				<i class="fa fa-users nav_icon" aria-hidden="true"></i>
				<span class="nav-text">
					<?php echo $this->lang->line('list');?> <?php echo $this->lang->line('users');?>
				</span>
				<i class="icon-angle-right"></i><i class="icon-angle-down"></i>
				</a>
				<ul>
					<li>
					<a class="subnav-text" href="<?php echo site_url('user/new_user');?>">
					<?php echo $this->lang->line('add_new');?>
					</a>
					</li>
					<li>
					<a class="subnav-text" href="<?php echo site_url('user');?>">
					<?php echo $this->lang->line('users');?>
					</a>
					</li>
				</ul>
			</li>
			<li class="has-subnav">
				<a href="javascript:;">
				<i class="fa fa-question-circle nav_icon"></i>
				<span class="nav-text">
				<?php echo $this->lang->line('qbank');?>
				</span>
				<i class="icon-angle-right"></i><i class="icon-angle-down"></i>
				</a>
				<ul>
					<li>
						<a class="subnav-text" href="<?php echo site_url('qbank/pre_new_question');?>"><?php echo $this->lang->line('add_new');?></a>
					</li>
					<li>
						<a class="subnav-text" href="<?php echo site_url('qbank');?>"><?php echo $this->lang->line('list');?> <?php echo $this->lang->line('question');?></a>
					</li>
				</ul>
			</li>
      <?php 
				}
			?>
			<li class="has-subnav">
				<a href="javascript:;">
					<i class="fa fa-file-text-o nav_icon"></i>
						<span class="nav-text"><?php echo $this->lang->line('quiz');?></span>
					<i class="icon-angle-right"></i><i class="icon-angle-down"></i>
				</a>
				<ul>
                    <?php  
                        if($logged_in['su']==1){
                    ?>
					<li>
						<a class="subnav-text" href="<?php echo site_url('quiz/add_new');?>">
							<?php echo $this->lang->line('add_new');?>
						</a>
					</li>
                    <?php 
                        }
                    ?>
					<li>
						<a class="subnav-text" href="<?php echo site_url('quiz');?>">
							<?php echo $this->lang->line('list');?> <?php echo $this->lang->line('quiz');?>
						</a>
					</li>
				</ul>
			</li>
			
			<li>
				<a href="<?php echo site_url('result');?>">
					<i class="icon-font nav-icon"></i>
					<span class="nav-text">
					<?php echo $this->lang->line('result');?>
					</span>
				</a>
			</li>
            <?php  
				if($logged_in['su']==1){
			?>
			<li class="has-subnav">
				<a href="javascript:;">
					<i class="fa fa-cogs nav_icon"></i>
						<span class="nav-text"><?php echo $this->lang->line('setting');?></span>
					<i class="icon-angle-right"></i><i class="icon-angle-down"></i>
				</a>
				<ul>
					<li>
						<a class="subnav-text" href="<?php echo site_url('user/group_list');?>">
							<?php echo $this->lang->line('group_list');?>
						</a>
					</li>
					<li>
						<a class="subnav-text" href="<?php echo site_url('qbank/category_list');?>">
							<?php echo $this->lang->line('category_list');?>
						</a>
					</li>
                    <li>
						<a class="subnav-text" href="<?php echo site_url('qbank/level_list');?>">
							<?php echo $this->lang->line('level_list');?>
						</a>
					</li>
				</ul>
			</li>
		</ul>
        <?php 
            }
        ?>
		<ul class="logout">
			<li>
			<a href="<?php echo site_url('user/logout');?>">
			<i class="icon-off nav-icon"></i>
			<span class="nav-text">
			<?php echo $this->lang->line('logout');?>
			</span>
			</a>
			</li>
		</ul>
	</nav>
    <?php
            }
        }
    ?>

	<section class="wrapper scrollable">
		<nav class="user-menu">
			<a href="javascript:;" class="main-menu-access">
			<i class="icon-proton-logo"></i>
			<i class="icon-reorder"></i>
			</a>
		</nav>
		<section class="title-bar">
			<div class="logo">
				<h1><a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>images/logo.png" alt="" />OnTest</a></h1>
			</div>
			<div class="full-screen">
				<section class="full-top">
					<button id="toggle"><i class="fa fa-arrows-alt" aria-hidden="true"></i></button>	
				</section>
			</div>
			<div class="w3l_search">
				<form action="#" method="post">
					<input type="text" name="search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required="">
					<button class="btn btn-default btn-search" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
				</form>
			</div>
			
            <!--Star Header Right-->
            <div class="header-right">
				<div class="profile_details_left">
					<div class="header-right-left">
						<!--Start notifications of menu start -->
						<!--<ul class="nofitications-dropdown">
							<li class="dropdown head-dpdn">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="badge">3</span></a>
								<ul class="dropdown-menu anti-dropdown-menu w3l-msg">
									<li>
										<div class="notification_header">
											<h3>You have 3 new messages</h3>
										</div>
									</li>
									<li><a href="#">
									   <div class="user_img"><img src="images/1.png" alt=""></div>
									   <div class="notification_desc">
										<p>Lorem ipsum dolor amet</p>
										<p><span>1 hour ago</span></p>
										</div>
									   <div class="clearfix"></div>	
									</a></li>
									<li class="odd"><a href="#">
										<div class="user_img"><img src="images/2.png" alt=""></div>
									   <div class="notification_desc">
										<p>Lorem ipsum dolor amet </p>
										<p><span>1 hour ago</span></p>
										</div>
									  <div class="clearfix"></div>	
									</a></li>
									<li><a href="#">
									   <div class="user_img"><img src="images/3.png" alt=""></div>
									   <div class="notification_desc">
										<p>Lorem ipsum dolor amet </p>
										<p><span>1 hour ago</span></p>
										</div>
									   <div class="clearfix"></div>	
									</a></li>
									<li>
										<div class="notification_bottom">
											<a href="#">See all messages</a>
										</div> 
									</li>
								</ul>
							</li>
							<li class="dropdown head-dpdn">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
								<ul class="dropdown-menu anti-dropdown-menu agile-notification">
									<li>
										<div class="notification_header">
											<h3>You have 3 new notifications</h3>
										</div>
									</li>
									<li><a href="#">
										<div class="user_img"><img src="images/2.png" alt=""></div>
									   <div class="notification_desc">
										<p>Lorem ipsum dolor amet</p>
										<p><span>1 hour ago</span></p>
										</div>
									  <div class="clearfix"></div>	
									 </a></li>
									 <li class="odd"><a href="#">
										<div class="user_img"><img src="images/1.png" alt=""></div>
									   <div class="notification_desc">
										<p>Lorem ipsum dolor amet </p>
										<p><span>1 hour ago</span></p>
										</div>
									   <div class="clearfix"></div>	
									 </a></li>
									 <li><a href="#">
										<div class="user_img"><img src="images/3.png" alt=""></div>
									   <div class="notification_desc">
										<p>Lorem ipsum dolor amet </p>
										<p><span>1 hour ago</span></p>
										</div>
									   <div class="clearfix"></div>	
									 </a></li>
									 <li>
										<div class="notification_bottom">
											<a href="#">See all notifications</a>
										</div> 
									</li>
								</ul>
							</li>	
							<li class="dropdown head-dpdn">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">15</span></a>
								<ul class="dropdown-menu anti-dropdown-menu agile-task">
									<li>
										<div class="notification_header">
											<h3>You have 8 pending tasks</h3>
										</div>
									</li>
									<li><a href="#">
										<div class="task-info">
											<span class="task-desc">Database update</span><span class="percentage">40%</span>
											<div class="clearfix"></div>	
										</div>
										<div class="progress progress-striped active">
											<div class="bar yellow" style="width:40%;"></div>
										</div>
									</a></li>
									<li><a href="#">
										<div class="task-info">
											<span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
										   <div class="clearfix"></div>	
										</div>
										<div class="progress progress-striped active">
											 <div class="bar green" style="width:90%;"></div>
										</div>
									</a></li>
									<li><a href="#">
										<div class="task-info">
											<span class="task-desc">Mobile App</span><span class="percentage">33%</span>
											<div class="clearfix"></div>	
										</div>
									   <div class="progress progress-striped active">
											 <div class="bar red" style="width: 33%;"></div>
										</div>
									</a></li>
									<li><a href="#">
										<div class="task-info">
											<span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
										   <div class="clearfix"></div>	
										</div>
										<div class="progress progress-striped active">
											 <div class="bar  blue" style="width: 80%;"></div>
										</div>
									</a></li>
									<li>
										<div class="notification_bottom">
											<a href="#">See all pending tasks</a>
										</div> 
									</li>
								</ul>
							</li>	
							<div class="clearfix"> </div>
						</ul>-->
                        <!--End notifications of menu start -->
					</div>	
					<div class="profile_details">		
						<ul>
							<li class="dropdown profile_details_drop">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<div class="profile_img">	
										<span class="prfil-img"><i class="fa fa-user" aria-hidden="true"></i></span> 
										<div class="clearfix"></div>	
									</div>	
								</a>
								<ul class="dropdown-menu drp-mnu">
									<li> <a href="<?php echo site_url('user/edit_user/'.$logged_in['uid']);?>"><i class="fa fa-user"></i> <?php echo $this->lang->line('myaccount');?></a> </li> 
									<li> <a href="<?php echo site_url('user/logout');?>"><i class="fa fa-sign-out"></i> <?php echo $this->lang->line('logout');?></a> </li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
            <!--End Header Right-->
		</section>
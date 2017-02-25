            <!--Start Content-->
			<div class="content2">
				<div class="grids-heading gallery-heading signup-heading">
					<h2>Login</h2>
				</div>
				<?php 
                if($this->session->flashdata('message')){
                ?>
                    <div class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <?php echo $this->session->flashdata('message'); ?>
                    </div>
                <?php	
                }
                    $attributes = array("name" => "login_form", "id" => "login_form");
                    echo form_open('login/verifylogin', $attributes);
                ?>
                    <?php echo form_input(array(
                        'name' => 'email',
                        'type' => 'email',
                        'id' => 'inputEmail', 
                        'required' => 'required', 
                        'autofocus' => 'autofocus',
                        'placeholder' => $this->lang->line('email_address'), 
                    )); ?>
                    <?php echo form_input(array(
                        'name' => 'password',
                        'type' => 'password',
                        'id' => 'inputPassword', 
                        'required' => 'required', 
                        'placeholder' => $this->lang->line('password'), 
                    )); ?>
                    <button class="register" type="submit"><?php echo $this->lang->line('login');?></button>
				<?php echo form_close(); ?>
                
                <div class="signin-text">
					<div class="text-left">
						<p><a href="<?php echo site_url('login/forgot');?>"><?php echo $this->lang->line('forgot_password');?></a></p>
					</div>
					<div class="text-right">
						<p><a href="<?php echo site_url('login/registration');?>"><?php echo $this->lang->line('register_new_account');?></a></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<h5>- OR -</h5>
				<div class="footer-icons">
					<ul>
						<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" class="twitter facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" class="twitter chrome"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#" class="twitter dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
			<!--End Content-->
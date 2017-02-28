<div class="container">
	<div class="row">
		<div class="col-md-8">
			<form method="post" action="<?php echo site_url('user/update_user/'.$uid);?>">
				<div class="login-panel panel panel-default">
					<div class="panel-heading">
						<h3><?php echo $title;?></h3>
					</div>
					<div class="panel-body">
						<?php if($this->session->flashdata('message')){ ?>
						<div class="alert alert-success alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<?php echo $this->session->flashdata('message'); ?>
						</div>
						<?php } ?>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">	 
									<label for="inputEmail"><?php echo $this->lang->line('email_address');?></label> 
									<input type="email" id="inputEmail" name="email" value="<?php echo $result['email'];?>" readonly=readonly class="form-control" placeholder="<?php echo $this->lang->line('email_address');?>" required autofocus>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">	  
									<label for="inputPassword"><?php echo $this->lang->line('password');?></label>
									<input type="password" id="inputPassword" name="password"   value=""  class="form-control" placeholder="<?php echo $this->lang->line('password');?>"   >
							 	</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">	 
									<label for="inputEmail"><?php echo $this->lang->line('first_name');?></label> 
									<input type="text"  name="first_name"  class="form-control"  value="<?php echo $result['first_name'];?>"  placeholder="<?php echo $this->lang->line('first_name');?>"   autofocus>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">	 
									<label for="inputEmail"><?php echo $this->lang->line('last_name');?></label> 
									<input type="text"   name="last_name"  class="form-control"  value="<?php echo $result['last_name'];?>"  placeholder="<?php echo $this->lang->line('last_name');?>"   autofocus>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">	 
									<label for="inputEmail"><?php echo $this->lang->line('contact_no');?></label> 
									<input type="text" name="contact_no"  class="form-control"  value="<?php echo $result['contact_no'];?>"  placeholder="<?php echo $this->lang->line('contact_no');?>"   autofocus>
								</div>
							</div>
						</div>
					</div>
					<div class="panel-footer">
						<button class="btn btn-default btn-special" type="submit"><?php echo $this->lang->line('submit');?></button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
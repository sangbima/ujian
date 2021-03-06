<div class="container">
	<div class="row">
		<div class="col-md-6">
			<form id="userSearch" method="post" action="<?php echo site_url('user/index/');?>">
				<div class="input-group">
    				<input type="text" class="form-control" name="search" placeholder="<?php echo $this->lang->line('search');?>...">
      				<span class="input-group-btn">
        				<button class="btn btn-default" type="submit"><?php echo $this->lang->line('search');?></button>
      				</span>
    			</div><!-- /input-group -->
	 		</form>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"><?php echo $title;?></h3>
				</div>
				<div class="panel-body">
					<table class="table table-bordered">
						<tr>
							<th><?php echo $this->lang->line('email');?></th>
							<th><?php echo $this->lang->line('first_name');?> <?php echo $this->lang->line('last_name');?></th>
							<th><?php echo $this->lang->line('action');?> </th>
						</tr>
						<?php if(count($result)==0){ ?>
						<tr>
							<td colspan="3"><?php echo $this->lang->line('no_record_found');?></td>
						</tr>	
						<?php } ?>
						<?php foreach($result as $key => $val){ ?>
						<tr>
							<td><?php echo $val['email'];?></td>
							<td><?php echo $val['first_name'];?> <?php echo $val['last_name'];?></td>
							<td>
								<a href="<?php echo site_url('user/edit_user/'.$val['uid']);?>"><i class="fa fa-edit"></i></a>
								<a href="javascript:remove_entry('user/remove_user/<?php echo $val['uid'];?>');"><i class="fa fa-remove"></i></a>
							</td>
						</tr>
						<?php } ?>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<?php if(($limit-($this->config->item('number_of_rows')))>=0){ $back=$limit-($this->config->item('number_of_rows')); }else{ $back='0'; } ?>
			<a href="<?php echo site_url('user/index/'.$back);?>"  class="btn btn-primary btn-special"><?php echo $this->lang->line('back');?></a>
			&nbsp;&nbsp;
			<?php $next=$limit+($this->config->item('number_of_rows'));  ?>
			<a href="<?php echo site_url('user/index/'.$next);?>"  class="btn btn-primary btn-special"><?php echo $this->lang->line('next');?></a>
		</div>
	</div>
</div>
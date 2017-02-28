<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"><?php echo $title;?></h3>
				</div>
				<div class="panel-body">
					<?php if($this->session->flashdata('message')){ ?>
	        		<div class="alert alert-success alert-dismissable">
		            	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		            	<?php echo $this->session->flashdata('message');?>
	        		</div>
	        		<?php } ?>
					<div id="message"></div>
					<form method="post" action="<?php echo site_url('qbank/insert_category/');?>">
						<table class="table table-bordered">
							<tr>
								<th class="col-md-9"><?php echo $this->lang->line('category_name');?></th>
								<th class="col-md-3"><?php echo $this->lang->line('action');?> </th>
							</tr>
							<?php if(count($category_list)==0){ ?>
							<tr>
								<td colspan="3"><?php echo $this->lang->line('no_record_found');?></td>
							</tr>
							<?php } ?>
							<?php foreach($category_list as $key => $val){ ?>
							<tr>
								<td><input type="text"   class="form-control"  value="<?php echo $val['category_name'];?>" onBlur="updatecategory(this.value,'<?php echo $val['cid'];?>');" ></td>
								<td>
									<a class="btn btn-danger btn-sm" href="javascript:remove_entry('qbank/remove_category/<?php echo $val['cid'];?>');"><i class="fa fa-trash"></i></a>
								</td>
							</tr>
							<?php } ?>
							<tr>
								<td>
									<input type="text"   class="form-control"   name="category_name" value="" placeholder="<?php echo $this->lang->line('category_name');?>"  required >
								</td>
								<td>
									<button class="btn btn-default btn-special" type="submit"><i class="fa fa-plus"></i> <?php echo $this->lang->line('add_new');?></button>
								</td>
							</tr>
						</table>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
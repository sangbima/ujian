<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="login-panel panel panel-default">
				<form method="post" action="<?php echo site_url('qbank/new_question_3/'.$nop);?>">
				<div class="panel-heading">
					<h3><?php echo $title;?>: <small><?php echo $this->lang->line('match_the_column');?></small></h3>
				</div>
				<div class="panel-body">
					<?php if($this->session->flashdata('message')){ ?>
                    <div class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <?php echo $this->session->flashdata('message'); ?>
                    </div>
                    <?php } ?>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">	 
								<label><?php echo $this->lang->line('select_category');?></label> 
								<select class="form-control" name="cid">
								<?php foreach($category_list as $key => $val){ ?>
									<option value="<?php echo $val['cid'];?>"><?php echo $val['category_name'];?></option>
								<?php } ?>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">	 
								<label   ><?php echo $this->lang->line('select_level');?></label> 
								<select class="form-control" name="lid">
								<?php foreach($level_list as $key => $val){ ?>
									<option value="<?php echo $val['lid'];?>"><?php echo $val['level_name'];?></option>
								<?php } ?>
								</select>
							</div>
						</div>
					</div>
					<div class="form-group">	 
							<label for="inputEmail"><?php echo $this->lang->line('question');?></label> 
							<textarea  name="question"  class="form-control"   ></textarea>
					</div>
					<div class="form-group">	 
							<label for="inputEmail"><?php echo $this->lang->line('description');?></label> 
							<textarea  name="description"  class="form-control"></textarea>
					</div>
					<?php for($i=1; $i<=$nop; $i++){ ?>
						<div class="form-group">	 
							<label for="inputEmail"><?php echo $this->lang->line('options');?> <?php echo $i;?>)</label> <br>
							<input type="text" name="option[]" value=""  > =	<input type="text" name="option2[]" value=""  > 
						</div>
					<?php } ?>
				</div>
				<div class="panel-footer">
					<button class="btn btn-default btn-special" type="submit"><?php echo $this->lang->line('submit');?></button>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>
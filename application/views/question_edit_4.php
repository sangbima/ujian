<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="login-panel panel panel-default">
				<form method="post" action="<?php echo site_url('qbank/edit_question_4/'.$nop);?>">
					<div class="panel-heading">
						<h3><?php echo $title;?>: <small><?php echo $this->lang->line('short_answer');?></small></h3>
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
										<option value="<?php echo $val['cid'];?>"  <?php if($question['cid']==$val['cid']){ echo 'selected'; } ?> ><?php echo $val['category_name'];?></option>
									<?php } ?>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">	 
									<label><?php echo $this->lang->line('select_level');?></label> 
									<select class="form-control" name="lid">
									<?php foreach($level_list as $key => $val){ ?>
										<option value="<?php echo $val['lid'];?>" <?php if($question['lid']==$val['lid']){ echo 'selected'; } ?> ><?php echo $val['level_name'];?></option>
									<?php }?>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group">	 
							<label for="inputEmail"  ><?php echo $this->lang->line('question');?></label> 
							<textarea  name="question"  class="form-control"   ><?php echo $question['question'];?></textarea>
						</div>
						<div class="form-group">	 
							<label for="inputEmail"  ><?php echo $this->lang->line('description');?></label> 
							<textarea  name="description"  class="form-control"><?php echo $question['description'];?></textarea>
						</div>
						<div class="form-group">	 
							<label for="inputEmail"  ><?php echo $this->lang->line('answer_in_one_or_two_word');?> </label> <br>
							<input type="text" name="option[]"  class="form-control"  value="<?php echo $options[0]['q_option'];?>"  > 
						</div>
					</div>
					<div class="panel-footer">
						<button class="btn btn-default btn-special" type="submit"><?php echo $this->lang->line('submit');?></button>
					</div>
				</form>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">	 
				<table class="table table-bordered">
					<tr><td><?php echo $this->lang->line('no_times_corrected');?></td><td><?php echo $question['no_time_corrected'];?></td></tr>
					<tr><td><?php echo $this->lang->line('no_times_incorrected');?></td><td><?php echo $question['no_time_incorrected'];?></td></tr>
					<tr><td><?php echo $this->lang->line('no_times_unattempted');?></td><td><?php echo $question['no_time_unattempted'];?></td></tr>
				</table>
			</div>
		</div>
	</div>	
</div>
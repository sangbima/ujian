<div class="main-grid">
    <div class="agile-grids">	
        <div class="row">
            <div class="col-md-4">
                <div class="comments likes">
                    <div class="comments-icon">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="comments-info likes-info">
                        <h3><?php echo $num_users;?></h3>
                        <a href="<?php echo site_url('user');?>"><?php echo $this->lang->line('no_registered_user');?></a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="comments">
                    <div class="comments-icon">
                        <i class="fa fa-comments"></i>
                    </div>
                    <div class="comments-info">
                        <h3><?php echo $num_quiz;?></h3>
                        <a href="<?php echo site_url('quiz');?>"><?php echo $this->lang->line('no_registered_quiz');?></a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="comments tweets">
                    <div class="comments-icon">
                        <i class="fa fa-question"></i>
                    </div>
                    <div class="comments-info tweets-info">
                        <h3><?php echo $num_qbank;?></h3>
                        <a href="<?php echo site_url('qbank');?>"><?php echo $this->lang->line('no_questions_qbank');?></a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main-grid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo $this->lang->line('recently_registered');?></h3>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered" >
                        <tr>
                            <th><?php echo $this->lang->line('email');?></th>
                            <th><?php echo $this->lang->line('first_name');?> <?php echo $this->lang->line('last_name');?></th>
                            <th><?php echo $this->lang->line('group_name');?> </th>
                            <th><?php echo $this->lang->line('contact_no');?> </th>
                        </tr>
                        <?php 
                        if(count($result)==0){
                            ?>
                        <tr>
                        <td colspan="3"><?php echo $this->lang->line('no_record_found');?></td>
                        </tr>	
                        <?php
                        }
                        foreach($result as $key => $val){
                        ?>
                        <tr>
                            <td><?php echo $val['email'];?></td>
                            <td><?php echo $val['first_name'];?> <?php echo $val['last_name'];?></td>
                            <td><?php echo $val['group_name'];?></td>
                            <td><?php echo $val['contact_no'];?></td>
                        </tr>
                        <?php 
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
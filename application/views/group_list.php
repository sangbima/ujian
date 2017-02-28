<div class="container">
    <div class="row">
        <div class="col-md-12">
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
                    <form method="post" action="<?php echo site_url('user/insert_group/');?>">
                        <table class="table table-bordered">
                            <tr>
                                <th><?php echo $this->lang->line('group_name');?></th>
                                <th><?php echo $this->lang->line('valid_for_days');?></th>
                                <th><?php echo $this->lang->line('action');?> </th>
                            </tr>
                            <?php if(count($group_list)==0){ ?>
                            <tr>
                                <td colspan="3"><?php echo $this->lang->line('no_record_found');?></td>
                            </tr>   
                            <?php } ?>
                            <?php foreach($group_list as $key => $val){ ?>
                            <tr>
                                <td><input type="text"   class="form-control"  value="<?php echo $val['group_name'];?>" onBlur="updategroup(this.value,'<?php echo $val['gid'];?>');" ></td>
                                <td><input type="text"   class="form-control"  value="<?php echo $val['valid_for_days'];?>" onBlur="updategroupvalid(this.value,'<?php echo $val['gid'];?>');" ></td>
                                <td>
                                    <a class="btn btn-danger btn-sm" href="javascript:remove_entry('user/remove_group/<?php echo $val['gid'];?>');"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php } ?>
                            <tr>
                                <td>
                                    <input type="text" class="form-control" name="group_name" value="" placeholder="<?php echo $this->lang->line('group_name');?>"  required >
                                </td>
                                <td>
                                    <input type="text"   class="form-control"   name="valid_for_days" value="" placeholder="<?php echo $this->lang->line('valid_for_days');?>"  required >
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
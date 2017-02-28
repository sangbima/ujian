<div class="container">
    <div class="row">
        <div class="col-md-8">
            <form class="form-signin" method="post" action="<?php echo site_url('dashboard/config');?>" >
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?php echo $this->lang->line('config');?>: <small><?php echo $this->lang->line('config_warning');?></small></h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">    
                            <textarea name="config_val" style="width:800px;height:500px;"><?php echo $result;?></textarea>
                        </div>
                        <input type="checkbox" name="force_write"  > <span style="font-size:11px;"> Tick if server required 777 permission to write file </span>
                    </div>
                    <div class="panel-footer">
                        <button class="btn btn-primary" type="submit"><?php echo $this->lang->line('submit');?></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
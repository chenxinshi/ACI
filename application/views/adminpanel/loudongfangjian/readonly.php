<?php defined('BASEPATH') or exit('No direct script access allowed.'); ?><div class='panel panel-default '>
    <div class='panel-heading'>
        <i class='fa fa-table'></i> 楼栋房间信息 查看信息 
        <div class='panel-tools'>
            <div class='btn-group'>
            	<a class="btn " href="<?php echo base_url('adminpanel/loudongfangjian')?>"><span class="glyphicon glyphicon-arrow-left"></span> 返回 </a>
            </div>
        </div>
    </div>
    <div class='panel-body '>
<div class="form-horizontal"  >
	<fieldset>
        <legend>基本信息</legend>
     
  	  		<div class="form-group">
				<label for="loudong_id" class="col-sm-2 control-label form-control-static">楼栋</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['loudong_id'])?$data_info['loudong_id']:'' ?>
				</div>
			</div>
	  		<div class="form-group">
				<label for="loudongfangjian_name" class="col-sm-2 control-label form-control-static">房间号</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['loudongfangjian_name'])?$data_info['loudongfangjian_name']:'' ?>
				</div>
			</div>
	  		<div class="form-group">
				<label for="loudongfangjian_area" class="col-sm-2 control-label form-control-static">房间面积</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['loudongfangjian_area'])?$data_info['loudongfangjian_area']:'' ?>
				</div>
			</div>
	  		<div class="form-group">
				<label for="created" class="col-sm-2 control-label form-control-static">创建时间</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['created'])?$data_info['created']:'' ?>
				</div>
			</div>
	    </fieldset>
	</div>
</div>
</div>

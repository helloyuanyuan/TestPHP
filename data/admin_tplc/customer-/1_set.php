<?php if(!defined('PHPOK_SET')){die('<h3>Error...</h3>');}?><?php $APP->tpl->p("header","","0");?>
<script type="text/javascript">
function to_link(t)
{
	var turl = base_file + "?"+base_ctrl+"=link&"+base_func+"="+t+"&input_id=uid&input_i=uname&input_d=proname";
	Layer.init(turl,550,400);
}
</script>
<div class="notice"><div class="p">
	<table width="100%" cellpadding="0" cellspacing="0">
	<tr>
		<td><span class="lead">&nbsp;&raquo; <a href="<?php echo site_url('customer');?>">推荐人管理</a> &raquo; 添加/编辑信息</span></td>
	</tr>
	</table>
</div></div>

<form method="post" action="<?php echo site_url('customer,setok');?>id=<?php echo $id;?>" onsubmit="return to_submit();">
<div class="table">
	<div class="left"><span class="red">*</span> 合伙人ID：</div>
	<input type="text" name="uid" id="uid" value="<?php echo $rs[uid];?>" />
</div>
<div class="table">
	<div class="left"><span class="red">*</span> 合伙人姓名：</div>
	<input type="text" name="uname" id="uname" value="<?php echo $rs[uname];?>" />
    <span class="clue_on">合伙人ID和姓名，请点击下面【合伙人】按钮自动选择</span>
</div>
	
<div class="table">
	<div class="left">&nbsp;</div>
	<input type="button" class="btn2" value="合伙人" onclick="to_link('user')" />
	<span class="clue_on"></span>
</div>

<div class="table">
	<div class="left"><span class="red">*</span> 客户姓名：</div>
	<input type="text" name="username" id="username" value="<?php echo $rs[username];?>" />
</div>

<div class="table">
	<div class="left"><span class="red">*</span> 客户手机：</div>
	<input type="text" name="cellphone" id="cellphone" value="<?php echo $rs[cellphone];?>" />
</div>

<div class="table">
	<div class="left"><span class="red">*</span> 项目名称：</div>
	<input type="text" name="proname" id="proname" value="<?php echo $rs[proname];?>" />
    <span class="clue_on">项目名称，请点击下面【项目】按钮自动选择</span>
</div>

<div class="table">
	<div class="left">&nbsp;</div>
	<input type="button" class="btn2" value="项目" onclick="to_link('project')" />
	<span class="clue_on"></span>
</div>

<div class="table">
	<div class="left"><span class="red">*</span> 预约日期：</div>
	<input type="text" name="appointment_date" id="appointment_date" value="<?php echo $rs[appointment_date];?>" onfocus="show_date('appointment_date')" />
</div>

<div class="table">
	<div class="left"><span class="red">*</span> 预约时段：</div>
	<input type="text" name="appointment_time" id="appointment_time" value="<?php echo $rs[appointment_time] ? date('H:i',$rs[appointment_time]) : date('H:i',$sys_app->system_time);?>" />
</div>
<div class="table">
	<div class="left"> 到访：</div>
	<select id="daofang" name="daofang" class="select">
        <option value="">请选择</option>
        <option value="1"<?php if($rs[daofang]=='1'){?> selected='selected'<?php } ?>>是</option>
		<option value="0"<?php if($rs[daofang]=='0'){?> selected='selected'<?php } ?>>否</option>
	</select>	
</div>
<div class="table">
	<div class="left"> 到访备注：</div>
	<input type="text" name="dfnote" id="dfnote" style="width:300px" value="<?php echo $rs[dfnote];?>" />	
</div>
<div class="table">
	<div class="left"> 认筹：</div>
	<select id="renchou" name="renchou" class="select">
        <option value="">请选择</option>
        <option value="1"<?php if($rs[renchou]=='1'){?> selected='selected'<?php } ?>>是</option>
		<option value="0"<?php if($rs[renchou]=='0'){?> selected='selected'<?php } ?>>否</option>
	</select>	
</div>
<div class="table">
	<div class="left"> 认筹备注：</div>
	<input type="text" name="rcnote" id="rcnote" style="width:300px" value="<?php echo $rs[rcnote];?>" />	
</div>
<div class="table">
	<div class="left"> 认购：</div>
	<select id="rengou" name="rengou" class="select">
        <option value="">请选择</option>
        <option value="1"<?php if($rs[rengou]=='1'){?> selected='selected'<?php } ?>>是</option>
		<option value="0"<?php if($rs[rengou]=='0'){?> selected='selected'<?php } ?>>否</option>
	</select>	
</div>
<div class="table">
	<div class="left"> 认购备注：</div>
	<input type="text" name="rgnote" id="rgnote" style="width:300px" value="<?php echo $rs[rgnote];?>" />	
</div>
<div class="table">
	<div class="left"> 签约：</div>
	<select id="qianyue" name="qianyue" class="select">
        <option value="">请选择</option>
        <option value="1"<?php if($rs[qianyue]=='1'){?> selected='selected'<?php } ?>>是</option>
		<option value="0"<?php if($rs[qianyue]=='0'){?> selected='selected'<?php } ?>>否</option>
	</select>	
</div>
<div class="table">
	<div class="left"> 签约备注：</div>
	<input type="text" name="qynote" id="qynote" style="width:300px" value="<?php echo $rs[qynote];?>" />	
</div>
<div class="table">
	<div class="left"> 回款：</div>
	<select id="huikuan" name="huikuan" class="select">
        <option value="">请选择</option>
        <option value="1"<?php if($rs[huikuan]=='1'){?> selected='selected'<?php } ?>>是</option>
		<option value="0"<?php if($rs[huikuan]=='0'){?> selected='selected'<?php } ?>>否</option>
	</select>	
</div>
<div class="table">
	<div class="left"> 回款备注：</div>
	<input type="text" name="hknote" id="hknote" style="width:300px" value="<?php echo $rs[hknote];?>" />	
</div>
<div class="table">
	<div class="left">置业顾问：</div>
	<input type="text" name="guwenname" id="guwenname" value="<?php echo $rs[guwenname];?>" />
</div>
<div class="table">
	<div class="left">顾问电话：</div>
	<input type="text" name="guwentel" id="guwentel" value="<?php echo $rs[guwentel];?>" />
</div>
<div class="table">
	<div class="left">添加时间：</div>
	<input type="text" name="postdate" id="postdate" onfocus="show_date('postdate')" value="<?php echo $rs[postdate] ? date('Y-m-d H:i',$rs[postdate]) : date('Y-m-d H:i',$sys_app->system_time);?>" />
</div>

<div class="table">
	<div class="left">&nbsp;</div>
	<input type="submit" class="btn3" id="_phpok_submit" name="article_submit" value=" 提交 ">
</div>
</form>

<script type="text/javascript">
function to_submit()
{
	var uid= getid("uid").value;
	if(!uid)
	{
		alert("合伙人ID不允许为空");
		getid("uid").focus();
		return false;
	}
	var uname= getid("uname").value;
	if(!uname)
	{
		alert("合伙人姓名不允许为空");
		getid("uname").focus();
		return false;
	}
	var username= getid("username").value;
	if(!username)
	{
		alert("客户不允许为空");
		getid("username").focus();
		return false;
	}
	var cellphone = getid("cellphone").value;
	if(!cellphone)
	{
		alert("电话不允许为空");
		getid("cellphone").focus();
		return false;
	}
	var proname = getid("proname").value;
	if(!proname)
	{
		alert("项目名称不允许为空");
		getid("proname").focus();
		return false;
	}
	var appointment_date = getid("appointment_date").value;
	if(!appointment_date)
	{
		alert("预约日期不允许为空");
		getid("appointment_date").focus();
		return false;
	}
	var appointment_time = getid("appointment_time").value;
	if(!appointment_time)
	{
		alert("预约时间不允许为空");
		getid("appointment_time").focus();
		return false;
	}
	getid("_phpok_submit").disabled = true;
}
</script>
<?php $APP->tpl->p("footer","","0");?>
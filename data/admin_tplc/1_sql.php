<?php if(!defined('PHPOK_SET')){die('<h3>Error...</h3>');}?><?php $APP->tpl->p("header","","0");?>
<div class="notice"><div class="p">
	<table width="100%" cellpadding="0" cellspacing="0">
	<tr>
		<td width="130px"><span class="lead">&nbsp;&raquo; 数据库管理</span></td>
		<td align="right"><?php if($set_popedom){?><a href="<?php echo site_url('phpoksql,baklist');?>" class="button">已备份列表</a><?php } ?>&nbsp;</td>
	</tr>
	</table>
</div></div>

<div class="main">
<table width="100%" style="layout:fixed;" cellpadding="0" cellspacing="0">
<tr>
	<td class="t_sub" width="36px">&nbsp;</td>
	<td class="t_sub" width="100px">引挈</td>
	<td class="t_sub">数据表</td>
    <td class="t_sub" width="140px">更新时间</td>
	<td class="t_sub" width="80px">文件大小</td>
	<td class="t_sub" width="60px">碎片</td>
</tr>
<?php $total_size = $data_fee = 0;?>
<?php $_i=0;$rslist=(is_array($rslist))?$rslist:array();foreach($rslist AS  $key=>$value){$_i++; ?>
<?php $length = $value[Avg_row_length] + $value[Data_length] + $value[Index_length] + $value[Data_free];?>
<?php $total_size += $length;?>
<?php $data_fee += $value[Data_free];?>
<tr class="tr_out" onMouseOver="over_tr(this)" onMouseOut="out_tr(this)">
	<td align="center" class="tc_left"><input type="checkbox" value="<?php echo $value[Name];?>" /></td>
	<td align="center" class="tc_right"><?php echo $value[Engine];?></td>
	<td class="tc_right">&nbsp;<?php echo $value[Name];?> <?php if($value[Comment]){?><span class="clue_on"><?php echo $value[Comment];?></span><?php } ?></td>
	<td align="center" class="tc_right">&nbsp;<?php echo $value[Update_time];?></td>
	<td align="center" class="tc_right"><?php echo $length ? sys_numformat($length) : '0';?></td>
	<td align="center" class="tc_right"><?php echo $value[Data_free] ? sys_numformat($value[Data_free]) : '0';?></td>
</tr>
<?php } ?>
<?php if($set_popedom){?>
<tr class="tr_out">
	<td colspan="3" class="tc_left" height="26px">&nbsp;
		<input type="button" value="全选" onclick="select_all();" class="btn2">
		<input type="button" value="全不选" onclick="select_none();" class="btn3">
		<input type="button" value="反选" onclick="select_anti();" class="btn2">
		<select name="sql_option" id="sql_option">
			<option value="optimize_sql()">优化数据表</option>
			<option value="repair_sql()">修复数据表</option>
			<option value="backup_sql()">备份数据表</option>
		</select>
		<input type="button" value="执行" onclick="eval($('#sql_option').attr('value'));" class="btn2">
	</td>
	<td class="tc_right" colspan="3">&nbsp;总计：<?php echo $total_size ? sys_numformat($total_size) : '0';?> <?php if($data_fee){?> 碎片：<?php echo sys_numformat($data_fee);?><?php } ?></td>
</tr>
<?php } ?>
</table>
</div>

<?php if($set_popedom){?>
<script type="text/javascript">
function optimize_sql()
{
	var id = join_checkbox();
	if(!id)
	{
		alert("请选择要操作的数据表");
		return false;
	}
	var url = base_url + base_func + "=optimize&id="+encode_utf8(id);
	direct(url);
}

function repair_sql()
{
	var id = join_checkbox();
	if(!id)
	{
		alert("请选择要操作的数据表");
		return false;
	}
	var url = base_url + base_func + "=repair&id="+encode_utf8(id);
	direct(url);
}

function backup_sql()
{
	var qu = confirm("确定要备份数据表吗？不选择要操作的表，系统将备份全部！");
	if(qu == "0")
	{
		return false;
	}
	var id = join_checkbox();
	if(!id)
	{
		id = "all";
	}
	var url = base_url + base_func + "=backup&id="+encode_utf8(id);
	direct(url);
}
</script>
<?php } ?>

<?php $APP->tpl->p("footer","","0");?>
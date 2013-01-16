<html>
	<head>
	<link href="./resource/css/application.css" rel="stylesheet" type="text/css">
	<style type="text/css">
		#operation
		{
			float:right;
			margin:10px;
		}
		
		#add_base_url
		{
			display:none;
		}
	</style>
	<script type="text/javascript">
	function changeSelect(cbox)
	{
		var objCheckBoxs = document.getElementsByName('baseUrlId');
		for(var i=0;i < objCheckBoxs.length;i++){
			if(objCheckBoxs[i] != cbox){
				objCheckBoxs[i].checked = false;
			}
		}
	}

	function addBaseUrl()
	{
		document.getElementById('add_base_url').style.display = "block";
	}
	</script>
	</head>
	<body>
		<?php include_once 'header.html';?>
		<div id="content">
			<div id="operation">
				<input type="button" value="添加" onclick="addBaseUrl()"/>
				<input type="button" value="删除"/>
				<input type="button" value="编辑"/>
			</div>
			<table id="cus_table">
				<tr>
					<th>
						选择
					</th>
					<th>
						name
					</th>
					<th>
						description
					</th>
				</tr>
				<?php for($i=0 ; $i<10 ; $i++){ ?>
				<tr class="<?php if ($i%2 == 0) echo "alt"?>">
					<td style="wdith:10%">
						<input type="checkbox" name="baseUrlId" value="<?php echo $i?>" onchange="changeSelect(this)"/>
					</td>
					<td style="wdith:45%">
						http://www.baidu.com
					</td>
					<td style="wdith:45%">
						test
					</td>
				</tr>
				<?php }?>
			</table>
			<div id="add_base_url">
				adfadsf
			</div>
			<div id="operation">
				<input type="button" value="add"/>
				<input type="button" value="delete"/>
				<input type="button" value="update"/>
			</div>
		</div>
	</body>
</html>
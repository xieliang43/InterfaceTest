<?php

?>
<html>
	<head>
	<style type="text/css">
		#operation
		{
			float:right;
			margin:10px;
		}
		#customers
		{
		 font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
		 width:100%;
		 border-collapse:collapse;
		}

		#customers td, #customers th 
		  {
		  text-align:center;
		  font-size:1em;
		  border:1px solid #98bf21;
		  padding:3px 7px 2px 7px;
		  }

		#customers th 
		  {
		  font-size:1.1em;
		  padding-top:5px;
		  padding-bottom:4px;
		  background-color:#A7C942;
		  color:#ffffff;
		  }
		
		#customers tr.alt td 
		  {
		  color:#000000;
		  background-color:#EAF2D3;
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
		<div id="operation">
			<input type="button" value="add" onclick="addBaseUrl()"/>
			<input type="button" value="delete"/>
			<input type="button" value="update"/>
		</div>
		<table id="customers">
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
	</body>
</html>
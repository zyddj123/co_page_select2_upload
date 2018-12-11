<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>datatable</title>
	<link rel="stylesheet" href="<?php echo APP_HTTP_ROOT.$this->GetThemes();?>/assets/bootstrap/css/bootstrap.css">
	<!-- <link rel="stylesheet" href="<?php echo APP_HTTP_ROOT.$this->GetThemes();?>/assets/datatable/media/css/jquery.dataTables.css"> -->
	<link rel="stylesheet" href="<?php echo APP_HTTP_ROOT.$this->GetThemes();?>/assets/datatable/media/css/dataTables.bootstrap.css">
	
	<script src="<?php echo APP_HTTP_ROOT.$this->GetThemes();?>/assets/jquery-3.2.1.min.js"></script>
	<script src="<?php echo APP_HTTP_ROOT.$this->GetThemes();?>/assets/datatable/media/js/jquery.dataTables.js"></script>
	<script src="<?php echo APP_HTTP_ROOT.$this->GetThemes();?>/assets/datatable/media/js/dataTables.bootstrap.js"></script>
	<!-- <script src="<?php echo APP_HTTP_ROOT.$this->GetThemes();?>/assets/datatable/media/js/dataTables.default.config.js"></script> -->
</head>
<body>
	<div style="width: 800px">
		<table class="table table-bordered table-striped table-condensed" id="user_index">
			<thead>
				<tr>
					<th dt-data-width="20%">序号</th>
					<th dt-data-width="20%">id</th>
					<th dt-data-width="20%">name</th>
					<th dt-data-width="20%">操作</th>
				</tr>
			</thead>
			<tbody>

			</tbody>
		</table>
	</div>
</body>
<script>
	var table = $("#user_index").DataTable({
		order: [
		["1", 'asc']
		], //按照发布时间降序排序
		page: false,
		serverSide:true,
		info: true,
		autoWidth: false,
		searching:true,
		ajax: "<?php echo APP_URL_ROOT?>/Test/get_datatable",
		columns: [{
			data: null,
			targets: 0
		},{
			data: "id",
		},{
			data: "name",
		},/*{
			data: "create_category_time",
		},{
			data: "ROLENAME",
		},*/{
			data: "null",
		}],
		columnDefs: [{
			targets: -1,
			data: null,
			defaultContent: "<a>编辑</a>|<a>删除</a>",
		},{ 
			"orderable": false, "targets": [0,-1],  //设置第一列和最后一列不可排序
		}],
		createdRow: function(row, data, index) {
			$(row).data('id', data.id);
			console.log($(row).data('id'));
			// console.log(index);
		},
		"fnDrawCallback": function(){
　　        var api = this.api();
		　　var startIndex= api.context[0]._iDisplayStart;//获取到本页开始的条数
		　　api.column(0).nodes().each(function(cell, i) {
			cell.innerHTML = startIndex + i + 1;
		　　}); 
		},
		language: {  
			url: '<?php echo APP_HTTP_ROOT.$this->GetThemes();?>/assets/datatable/i18n/en.json'
		}
	});
</script>
</html>
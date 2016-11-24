<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>智谷科技后台管理框架 - WPP - jqGird</title>
    <meta name="keywords" content="WPP,后台HTML,响应式后台">
    <meta name="description" content="WPP是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link rel="shortcut icon" href="favicon.ico"> <link href="css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="css/font-awesome.css?v=4.4.0" rel="stylesheet">

    <!-- jqgrid-->
    <link href="css/plugins/jqgrid/ui.jqgrid.css?0820" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css?v=4.1.0" rel="stylesheet">

    <style>
        /* Additional style to fix warning dialog position */

        #alertmod_table_list_2 {
            top: 900px !important;
        }
    </style>

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content  animated fadeInRight">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox ">
                    
                    <div class="ibox-content">
                        
                     
              

                        <div class="jqGrid_wrapper">
                            <table id="table_list_1"></table>
                            <div id="pager_list_1"></div>
                        </div>
                        <p>&nbsp;</p>
                        <h4 class="m-t">技师管理</h4>


                        <div class="jqGrid_wrapper">
                            <table id="table_list_2"></table>
                            <div id="pager_list_2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 全局js -->
    <script src="js/jquery.min.js?v=2.1.4"></script>
    <script src="js/bootstrap.min.js?v=3.3.6"></script>



    <!-- Peity -->
    <script src="js/plugins/peity/jquery.peity.min.js"></script>

    <!-- jqGrid -->
    <script src="js/plugins/jqgrid/i18n/grid.locale-cn.js?0820"></script>
    <script src="js/plugins/jqgrid/jquery.jqGrid.min.js?0820"></script>

    <!-- 自定义js -->
    <script src="js/content.js?v=1.0.0"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function () {

            $.jgrid.defaults.styleUI = 'Bootstrap';
            // Examle data for jqGrid
            var mydata = [
                {
                    id: "1",
                    invdate: "2010-05-24",
                    name: "张三",
					sex:"女",
					amount:"23",
                    note: "5",
                    tax: "10.00",
					number:"13672228382",
                    total: "高级技师",
                },
                {
                    id: "2",
                    invdate: "2010-05-25",
                    name: "张三",
					sex:"女",
					amount:"23",
                    note: "5",
                    tax: "20.00",
					workage:"5",
                    total: "高级技师",
					number:"13672228382",
                },
                {
                    id: "3",
                    invdate: "2007-09-01",
                    name: "张三",
					sex:"女",
					amount:"23",
                    note: "5",
                    tax: "30.00",
					workage:"5",
                    total: "高级技师",
					number:"13672228382",
                },
                {
                    id: "4",
                    invdate: "2007-10-04",
                    name: "张三",
					sex:"女",
                    note: "5",
					amount:"23",
                    tax: "10.00",
					number:"13672228382",
                    total: "高级技师",
                },
				 {
                    id: "5",
                    invdate: "2007-10-04",
                    name: "张三",
					sex:"女",
                    note: "5",
					amount:"23",
                    tax: "10.00",
					number:"13672228382",
                    total: "高级技师",
                },
				{
                    id: "6",
                    invdate: "2007-10-04",
                    name: "张三",
					sex:"女",
                    note: "5",
					amount:"23",
                    tax: "10.00",
					number:"13672228382",
                    total: "高级技师",
                },
				{
                    id: "7",
                    invdate: "2007-10-04",
                    name: "张三",
					sex:"女",
                    note: "5",
					amount:"23",
                    tax: "10.00",
					number:"13672228382",
                    total: "高级技师",
                },
				{
                    id: "8",
                    invdate: "2007-10-04",
                    name: "张三",
					sex:"女",
                    note: "5",
					amount:"23",
                    tax: "10.00",
					number:"13672228382",
                    total: "高级技师",
                },
     
            ];

          

            // Configuration for jqGrid Example 2
            $("#table_list_2").jqGrid({
                data: mydata,
                datatype: "local",
                height: 450,
                autowidth: true,
                shrinkToFit: true,
                rowNum: 20,
                rowList: [10, 20, 30],
                colNames: ['序号', '就职日期', '姓名', '性别','年龄', '头像', '级别','工龄','电话'],
                colModel: [
				
                    {
                        name: 'id',
                        index: 'id',
                        editable: true,
                        width: 60,
                        sorttype: "int",
                        search: true
                    },
                    {
                        name: 'invdate',
                        index: 'invdate',
                        editable: true,
                        width: 90,
                        sorttype: "date",
                        formatter: "date"
                    },
                    {
                        name: 'name',
                        index: 'name',
                        editable: true,
                        width: 50,
                    },
					{
                        name: 'sex',
                        index: 'sex',
                        editable: true,
                        width: 50,
                    },
                    {
                        name: 'amount',
                        index: 'amount',
                        editable: true,
                        width: 50,
                        align: "left",
                        sorttype: "float",
                        formatter: "number"
                    },
                    {
                        name: 'tax',
                        index: 'tax',
                        editable: true,
                        width: 80,
                        align: "left",
                        sorttype: "float"
                    },
                    {
                        name: 'total',
                        index: 'total',
                        editable: true,
                        width: 80,
                        align: "left",
                        sorttype: "float"
                    },
					 {
                        name: 'note',
                        index: 'note',
                        editable: true,
                        width: 50,
                        sortable: false
                    },
                    {
                        name: 'number',
                        index: 'number',
                        editable: true,
                        width: 50,
                        sortable: false
                    }
                ],
                pager: "#pager_list_2",
                viewrecords: true,
                caption: "jqGrid 示例2",
                add: true,
                edit: true,
                addtext: 'Add',
                edittext: 'Edit',
                hidegrid: false
            });

            // Add selection
            $("#table_list_2").setSelection(4, true);


            // Setup buttons
            $("#table_list_2").jqGrid('navGrid', '#pager_list_2', {
                edit: true,
                add: true,
                del: true,
                search: true
            }, {
                height: 200,
                reloadAfterSubmit: true
            });

            // Add responsive to jqGrid
            $(window).bind('resize', function () {
                var width = $('.jqGrid_wrapper').width();
                $('#table_list_1').setGridWidth(width);
                $('#table_list_2').setGridWidth(width);
            });
        });
    </script>

    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
    <!--统计代码，可删除-->

</body>

</html>
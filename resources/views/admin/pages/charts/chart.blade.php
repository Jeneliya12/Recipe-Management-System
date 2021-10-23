
	<div id="chart-container"></div>
	<script src="https://code.highcharts.com/highcharts.js"></script>
	<script>
		var datas = <?php echo json_encode($datas) ?>

		Highcharts.chart('chart-container', {
		title:{
			text: 'New User Growth, 2021'
		},
		subtitle:{
			text:'Source: Jen Grg'
		},
		xAxis:{
			categories:['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
		},
		yAxis:{
			title:{
				text: 'Number of New User'
			}
		},
		legend:{
			layout: 'vertical',
			align: 'right',
			verticalAllign:'middle'
		},
		plotOptions:{
			series: {
				allowPointSelect:true
			}
		},
		series:[{
			name: 'New User',
			data: datas
		}],
		responsive:{
			rules:[
				{
					condition:{
						maxwidth:500
					},
					chartOptions:{
						legend:{
							layout:'horizontal',
							align:'center',
							verticalAllign:'bottom'
						}
					}
				}
			]
		}
	})

	</script>

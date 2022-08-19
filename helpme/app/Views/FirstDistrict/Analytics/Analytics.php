<?= $this->include('FirstDistrict/include/top') ?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Preloader -->

  <?= $this->include('FirstDistrict/include/nav')?>
  <?= $this->include('FirstDistrict/include/sidebar')?>

<div id="by_year" style="border: 1px solid #ccc"></div>

<script>
$(document).ready(function() {
   var interval = 500;
   var refresh = function() {
      $.ajax({
        url : "<?=base_url()?>/ChartController/graph",
        dataType : "JSON",
        success : function(result) {
          google.charts.load('current', {
            'packages' : [ 'corechart' ]
          });
          google.charts.setOnLoadCallback(function() {
            drawChart(result);
          });
          setTimeout(function() {
                  refresh();
              }, interval);
        }
      });
    };refresh();

      function drawChart(result) {

        var data = new google.visualization.DataTable();

        data.addColumn('string', 'year');
        data.addColumn('number', 'total');
        var dataArray = [];
        $.each(result, function(i, obj) {
          dataArray.push([ obj.year, parseInt(obj.total) ]);
        });

        data.addRows(dataArray);

        var piechart_options = {
          title : 'Yearly Sales',
          width : 1200,
          height : 300
        };
        // var piechart = new google.visualization.PieChart(document
        // 		.getElementById('piechart_div'));
        var piechart = new google.visualization.AreaChart(document
            .getElementById('by_year'));
        piechart.draw(data, piechart_options);

      }
});
</script>
<?= $this->include('FirstDistrict/include/end') ?>

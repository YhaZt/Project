<?= $this->include('FirstDistrict/include/top') ?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Preloader -->


    <?= $this->include('FirstDistrict/include/nav')?>
    <?= $this->include('FirstDistrict/include/sidebar')?>


    <div class="content-wrapper">
      <section class="content-header">

      </section>
<!-- top -->
<div style="width: 100%; overflow: hidden;">
    <div style=" float: left;"id = "by_year"> </div>
    <div style="margin-left: 510px;"id = "by"> </div>
</div>
<!-- bot -->
<div style="margin-top: 10px;overflow: hidden;">
    <div style=" float: left;"id = "b"> </div>
    <div style="margin-left: 510px;"id = "bb"> </div>
</div>

<!-- <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Sales
                </h3>
                <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                      <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="card-body">
                <div class="tab-content p-0">

                  <div class="chart tab-pane active" id="revenue-chart"
                       style="position: relative; height: 300px;">
                      <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>
                   </div>
                  <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                    <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>
                  </div>
                </div>
              </div>
            </div> -->











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
          data.addColumn('string', 'town');
          data.addColumn('number', 'total');
          var dataArray = [];
          $.each(result, function(i, obj) {
            dataArray.push([ obj.town, parseInt(obj.total) ]);
          });
          data.addRows(dataArray);
          var piechart_options = {
            title : 'Town Total',
            width : 500,
            height : 300
          };
          // var piechart = new google.visualization.PieChart(document
          // 		.getElementById('piechart_div'));
          var piechart = new google.visualization.PieChart(document
            .getElementById('by_year'));
            piechart.draw(data, piechart_options);
          }
        });

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
            data.addColumn('string', 'town');
            data.addColumn('number', 'total');
            var dataArray = [];
            $.each(result, function(i, obj) {
              dataArray.push([ obj.town, parseInt(obj.total) ]);
            });
            data.addRows(dataArray);
            var piechart_options = {
              title : 'Town Total',
              width : 500,
              height : 300
            };
            // var piechart = new google.visualization.PieChart(document
            // 		.getElementById('piechart_div'));
            var piechart = new google.visualization.PieChart(document
              .getElementById('bb'));
              piechart.draw(data, piechart_options);
            }
          });

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
            data.addColumn('string', 'town');
            data.addColumn('number', 'total');
            var dataArray = [];
            $.each(result, function(i, obj) {
              dataArray.push([ obj.town, parseInt(obj.total) ]);
            });
            data.addRows(dataArray);
            var piechart_options = {
              title : 'Town Total',
              width : 500,
              height : 300
            };
            // var piechart = new google.visualization.PieChart(document
            // 		.getElementById('piechart_div'));
            var piechart = new google.visualization.PieChart(document
              .getElementById('by'));
              piechart.draw(data, piechart_options);
            }
          });

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
              data.addColumn('string', 'town');
              data.addColumn('number', 'total');
              var dataArray = [];
              $.each(result, function(i, obj) {
                dataArray.push([ obj.town, parseInt(obj.total) ]);
              });
              data.addRows(dataArray);
              var piechart_options = {
                title : 'Town Total',
                width : 500,
                height : 300
              };
              // var piechart = new google.visualization.PieChart(document
              // 		.getElementById('piechart_div'));
              var piechart = new google.visualization.PieChart(document
                .getElementById('b'));
                piechart.draw(data, piechart_options);
              }
            });
      </script>
      <?= $this->include('FirstDistrict/include/end') ?>

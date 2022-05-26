<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="<?=base_url()?>https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url()?>/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?=base_url()?>https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?=base_url()?>/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=base_url()?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?=base_url()?>/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?=base_url()?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?=base_url()?>/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?=base_url()?>/plugins/summernote/summernote-bs4.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<?= $this->include('include/nav')?>
<?= $this->include('include/sidebar')?>

<body>
    <div class="container">
      <br><br>
        <div>
            <label class="label label-success">Codeigniter Line Chart Example</label>
            <div id="lineChart"></div>
        </div>
<br><br>
        <div>
            <label class="label label-success">Codeigniter Area Chart Example</label>
            <div id="areaChart"></div>
        </div>
    </div>
    <!-- Add Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.3.0/raphael.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <script>
            var data = [
                {
                    "year": "2004",
                    "expenses": "1000"
                },
                {
                    "year": "2005",
                    "expenses": "1250"
                },
                {
                    "year": "2006",
                    "expenses": "1400"
                },
                {
                    "year": "2007",
                    "expenses": "1640"
                },
                {
                    "year": "2015",
                    "expenses": "9640"
                },
                {
                    "year": "2020",
                    "expenses": "2640"
                },
            ]
            var data = data,
                config = {
                    data: data,
                    fillOpacity: 0.5,
                    xkey: 'year',
                    ykeys: ['expenses'],
                    labels: ['Students Expense Data'],
                    hideHover: 'auto',
                    behaveLikeLine: true,
                    resize: true,
                    lineColors:['green','orange'],
                    pointFillColors:['#ffffff'],
                    pointStrokeColors: ['blue'],
            };
            config.element = 'lineChart';
            Morris.Line(config);

            config.element = 'areaChart';
            Morris.Area(config);
    </script>


    <?= $this->include('include/end') ?>

</body>

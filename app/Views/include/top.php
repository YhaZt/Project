<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HelpMe Tracker | Dashboard</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
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
  <!-- DataTables -->
  <link rel="stylesheet" href="<?=base_url()?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?=base_url()?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?=base_url()?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?=base_url()?>/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?=base_url()?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?=base_url()?>/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <!-- //dropzone -->
  <link rel="stylesheet" href="<?=base_url()?>/plugins/summernote/summernote-bs4.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
  <!-- datatabel -->
<!-- chart -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('visualization', "1", {
        packages: ['corechart']
    });
</script>


        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?=base_url()?>/plugins/fontawesome-free/css/all.min.css">
        <!-- DataTables -->
        <link rel="stylesheet" href="<?=base_url()?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="<?=base_url()?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
        <link rel="stylesheet" href="<?=base_url()?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?=base_url()?>/dist/css/adminlte.min.css">

        <!-- BirthdayCalculate -->
        <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js" integrity="sha256-xH4q8N0pEzrZMaRmd7gQVcTZiFei+HfRTBPJ1OGXC0k=" crossorigin="anonymous"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                var age = "";
                $('#dob').datepicker({
                    onSelect: function(value, ui) {
                        var today = new Date();
                        age = today.getFullYear() - ui.selectedYear;
                        $('#age').val(age);
                    },
                    changeMonth: true,
                    changeYear: true,
                    yearRange: '1900:2999'
                })
            })
        </script>


        <script>
    function gtag() {
      window.dataLayer = window.dataLayer || [];

        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');

      $(document).ready(function(){
         load_json_data('municipality');
         function load_json_data(id, parent_id)
         {
          var html_code = '';
          $.getJSON('<?=base_url()?>/barangay.json', function(data){
           html_code += '<option value="">Select '+id+'</option>';
           $.each(data, function(key, value){
            if(id == 'municipality')
            {
             if(value.parent_id == '0')
             {
              html_code += '<option value="'+value.id+'">'+value.name+'</option>';
             }
            }
            else
            {
             if(value.parent_id == parent_id)
             {
              html_code += '<option value="'+value.name+'">'+value.name+'</option>';
             }
            }
           });
           $('#'+id).html(html_code);
          });

         }

         $(document).on('change', '#municipality', function(){
          var municipality_id = $(this).val();
          if(municipality_id != '')
          {
           load_json_data('barangay', municipality_id);
          }
          else
          {
           $('#barangay').html('<option value="">Select barangay</option>');
          }
         });
        });
    </script>
</head>

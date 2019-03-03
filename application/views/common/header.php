<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Inventory Plus</title>
        <!-- Bootstrap core CSS-->
        <link href="<?= base_url('vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
        <!-- Custom fonts for this template-->
        <link href="<?= base_url('vendor/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
        <!-- Page level plugin CSS-->
        <link href="<?= base_url('vendor/datatables/dataTables.bootstrap4.css') ?>" rel="stylesheet">
        <!-- Custom styles for this template-->
        <link href="<?= base_url('css/sb-admin.css') ?>" rel="stylesheet">
        <link href="<?= base_url('css/horsey.css') ?>" rel="stylesheet">
<link href="<?= base_url('css/tabulator.css') ?>" rel="stylesheet">
        <script src="https://cdn.rawgit.com/PascaleBeier/bootstrap-validate/v2.0.0/dist/bootstrap-validate.js" integrity="sha384-YmuBsjGRLbP6xIXehXIvB6ftbTViDPXx/goUnD/B7EZ8qDE5JVVuBN+Zws8lzmh7" crossorigin="anonymous"></script>

        <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

        <style>
            .switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {display:none;}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}


        </style>
    </head>
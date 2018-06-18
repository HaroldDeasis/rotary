<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Rotary | Messages</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="images/icon-messages.png">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

    <style type="text/css">
        table {
            table-layout: fixed;
            width: 100%;
            white-space: nowrap;
            padding: 10px;
        }

        td {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            text-align: left;
            padding: 10px;
        }
    </style>

    
</head>
<body>
 

    <?php require("leftpanel.php"); ?>

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

       <?php require("header.php"); ?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Messages</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="dashboard.php">Dashboard</a></li>
                            <li class="active">Messages</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Message</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Dacles, Mark Christian C.</td>
                        <td>May 16, 2018</td>
                        <td>Edinburgh</td>
                        <td>Unread</td>
                        <td><button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#viewModal"><i class="fa fa-eye">&nbsp;View</i></button>
							<button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash">&nbsp;Delete</i></button></td>
                      </tr>
                      <tr>
                        <td>De Asis, Harold Lemuel B.</td>
                        <td>May 16, 2018</td>
                        <td>Edinburgh</td>
                        <td>Unread</td>
                        <td><button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#viewModal"><i class="fa fa-eye">&nbsp;View</i></button>
							<button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash">&nbsp;Delete</i></button></td>
                      </tr>
                      <tr>
                        <td>Roque, Richelle Mae Q.</td>
                        <td>May 16, 2018</td>
                        <td>Edinburgh</td>
                        <td>Unread</td>
                        <td><button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#viewModal"><i class="fa fa-eye">&nbsp;View</i></button>
							<button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash">&nbsp;Delete</i></button></td>
                      </tr>
                      <tr>
                        <td>Badajos, Dexter R.</td>
                        <td>May 16, 2018</td>
                        <td>Edinburgh</td>
                        <td>Unread</td>
                        <td><button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#viewModal"><i class="fa fa-eye">&nbsp;View</i></button>
							<button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash">&nbsp;Delete</i></button></td>
                      </tr>
                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="viewModal">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">Name</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>
                                    Message
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="deleteModal">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">Warning!</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>
                                    Confirm to delete this message.
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" data-dismiss="modal">Confirm</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                

            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>

    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/lib/data-table/datatables-init.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>


</body>
</html>

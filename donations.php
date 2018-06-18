<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Rotary | Donations</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
 

    <?php
        require("leftpanel.php"); 
        require("connection.php"); 
    ?>

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
                                    <th>Donator</th>
                                    <th>Email</th>
                                    <th>Contact</th>
                                    <th>Amount</th>
                                    <th>Actions</th>
                                  </tr>
                                </thead>
                                <form method="get">
                                <?php //SHOW MESSAGES FROM DATABASE
                                    $connection = mysqli_connect("localhost", "root", "", "rotary_db");
                                    $displayMessages = mysqli_query($connection, "SELECT * FROM tbldonations");
                                    $messages = array();
                                    while ($row = mysqli_fetch_array($displayMessages)) {
                                      $messages[] = $row;
                                    }
                                    foreach ($messages as $message) :
                                ?>
                                <tbody>
                                  <tr>
                                    <td><?php echo $message[1]; ?></td>
                                    <td><?php echo $message[3]; ?></td>
                                    <td><?php echo $message[2]; ?></td>
                                    <td><?php echo $message[5]; ?></td>
                                    <td>
                                        <input type="hidden" class="donorID" name="donorID" value="<?php  echo $message[0]; ?>">
                                        <!--<button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#viewModal"><i class="fa fa-eye">&nbsp;View</i></button>-->
                                        <button type="button" name="deleteDonation" onclick="location.replace('donations.php?id=<?php  echo $message[0]; ?>&action=delete')" class="btn btn-outline-danger"><i class="fa fa-trash">&nbsp;Delete</i></button></td>
                                  </tr>
                                <?php endforeach ?>
                                </tbody>
                                </form>
                            </table>
                            <?php //DELETE MESSAGE FROM DATABASE
                                $id = $_GET['id'];
                                $action = $_GET['action'];
                                if(!isset($_POST['deleteDonation']) and $action == 'delete'){
                                    mysqli_query($connection, "DELETE FROM tbldonations WHERE donorID='$id'");
                                echo "<script>location.replace('donations.php?id=0&action=view');</script>";
                                }
                            ?>
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
                            <form method="post">
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
                                <button type="submit" name="confirmDelete" class="btn btn-success" data-dismiss="modal">Confirm</button>
                                <button type="button" name="cancelDelete" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                            </form>
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

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Rotary | Members</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="images/icon-rotarian.png">

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

    <?php require("leftpanel.php"); ?>

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

       <?php require("header.php"); ?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Members</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="dashboard.php">Dashboard</a></li>
                            <li><a href="#">Rotarians</a></li>
                            <li class="active">Members</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 offset-md-8">
                    <div class="card border border-success">
                        <div class="card-header">
                            <strong class="card-title">New Rotarian</strong>
                        </div>
                        <div class="card-body">
                            <p class="card-text"><button class="btn btn-success btn-block" onclick="window.location.href='rotarianCreate.php'"><i class="fa fa-plus">&nbsp;Create</i></button></p>
                        </div>
                    </div>
                </div>
            </div>

            <form method="get">
            <?php //SHOW ROTARIAN FROM DATABASE
                $connection = mysqli_connect("localhost", "root", "", "rotary_db");
                $displayRotarian = mysqli_query($connection, "SELECT lastName, firstName, position, rotarianID FROM tblrotarians WHERE position = 'Member'");
                $rotarians = array();
                while ($row = mysqli_fetch_array($displayRotarian)) {
                  $rotarians[] = $row;
                }
                foreach ($rotarians as $rotarian) :
            ?>
                <div class="col-md-4">
                    <aside class="profile-nav alt">
                        <section class="card">
                            <div class="card-header user-header alt bg-dark">
                                <div class="media">
                                    <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="images/admin.jpg">
                                    <div class="media-body">
                                        <h4 class="text-light display-6"><?php echo $rotarian[2]; ?></h2>
                                        <p><?php echo $rotarian[0].", ".$rotarian[1]; ?></p>
                                    </div>
                                </div>
                            </div>


                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <i class="fa fa-dollar"></i> Balance <span class="badge badge-warning pull-right">500</span>
                                </li>
                                <li class="list-group-item">
                                    <button type="button" class="btn btn-info btn-block" onclick="location.replace('rotarianInfo.php?id=<?php echo $rotarian[3]; ?>&action=edit')">View Info</button>
                                    <button type="button" class="btn btn-danger btn-block" name="deleteRotarian" onclick="location.replace('members.php?id=<?php echo $rotarian[3]; ?>&action=delete')">Delete</button>
                                    <!--<button class="btn btn-danger btn-block" data-toggle="modal" data-target="#deleteModal">Delete</button>-->
                                </li>
                            </ul>

                        </section>
                    </aside>
                </div>

            <?php endforeach ?>
            </form>
            <?php //DELETE ROTARIAN FROM DATABASE
                $id = $_GET['id'];
                $action = $_GET['action'];
                if(!isset($_POST['deleteRotarian']) and $action == 'delete'){
                    mysqli_query($connection, "DELETE FROM tblrotarians WHERE rotarianID='$id'");
                    echo "<script>location.replace('members.php?id=0&action=view');</script>";
                }
            ?>

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
                                Confirm to delete this Rotarian Information.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" data-dismiss="modal">Confirm</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            
        </div> <!-- /Main Content -->
        <!-- Main Content -->

    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>

</body>
</html>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Rotary | Rotarian Information</title>
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
                        <h1>Rotarian Information</h1>
                    </div>
                </div>
            </div>
        </div>
        <?php //SHOW MESSAGES FROM DATABASE
            $id = $_GET['id'];
            $connection = mysqli_connect("localhost", "root", "", "rotary_db");
            $displayInfo = mysqli_query($connection, "SELECT * FROM tblrotarians WHERE rotarianID = '$id'");
            $informations = array();
            while ($row = mysqli_fetch_array($displayInfo)) {
              $informations[] = $row;
            }
            foreach ($informations as $information) :
        ?>
        <!-- Main Content -->
        <div class="container-fluid">
        <form method="post">
            <div class="row">
                <div class="col-lg-6">
                    <aside class="profile-nav alt">
                        <section class="card">
                            <div class="card-header user-header alt bg-dark">
                                <div class="media">
                                    <a href="#">
                                        <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="images/admin.jpg">
                                    </a>
                                    <div class="media-body">
                                        <h3 class="text-light display-6">Position</h3>
                                        <select name="position" class="form-control">
                                            <option value="" disabled>Position</option>
                                            <option value="Member" <?php if($information[8] == 'Member') echo 'selected'; ?>>Member</option>
                                            <option value="President" <?php if($information[8] == 'President') echo 'selected'; ?>>President</option>
                                            <option value="Vice President" <?php if($information[8] == 'Vice President') echo 'selected'; ?>>Vice President</option>
                                            <option value="Secretary" <?php if($information[8] == 'Secretary') echo 'selected'; ?>>Secretary</option>
                                            <option value="Treasurer" <?php if($information[8] == 'Treasurer') echo 'selected'; ?>>Treasurer</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <a href="#"> <i class="fa fa-dollar"></i> Balance <span class="badge badge-warning pull-right">500</span></a>
                                </li>
                            </ul>

                        </section>
                    </aside>

                    <div class="card">
                        <div class="card-header">
                            <strong>Contact Information</strong>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label class="control-label">Contact Number</label>
                                <input type="text" name="contactNumber" class="form-control" value="<?php echo $information[9]; ?>">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Email</label>
                                <input type="text" name="emailAddress" class="form-control" value="<?php echo $information[10]; ?>">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Address</label>
                                <input type="text" name="address" class="form-control" value="<?php echo $information[6]; ?>">
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <strong>Others</strong>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label class="control-label">Sponsor</label>
                                <input type="text" name="sponsor" class="form-control" value="<?php echo $information[11]; ?>">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Status</label>
                                <input type="text" name="status" class="form-control" value="<?php echo $information[12]; ?>" disabled>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong>Personal Info</strong>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label class="control-label">Last Name</label>
                                <input type="text" name="lastName" class="form-control" value="<?php echo $information[1]; ?>">
                            </div>
                            <div class="form-group">
                                <label class="control-label">First Name</label>
                                <input type="text" name="firstName" class="form-control" value="<?php echo $information[2]; ?>">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Middle Name</label>
                                <input type="text" name="middleName" class="form-control" value="<?php echo $information[3]; ?>">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Birthday</label>
                                <input type="date" name="birthday" class="form-control" value="<?php echo $information[5]; ?>">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Profession</label>
                                <input type="text" name="profession" class="form-control" value="<?php echo $information[7]; ?>">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Gender</label>
                                <select name="gender" class="form-control">
                                    <option value="" disabled>Gender</option>
                                    <option name="gender" value="Male" <?php if($information[4] == 'Male') echo 'selected'; ?>>Male</option>
                                    <option name="gender" value="Female" <?php if($information[4] == 'Female') echo 'selected'; ?>>Female</option>
                                </select>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>

                    <div class="card">
                        <div class="card-header">
                            
                        </div>
                        <div class="card-body">
                            <!--<button type="button" class="btn btn-success btn-block" name="rotarianUpdate" onclick="location.replace('rotarianInfo.php?id=<?php echo $information[0]; ?>&action=update')"><i class="ti-angle-double-up"></i>&nbsp;Update Information</button>-->
                            <a href="rotarianInfo.php?id=<?php echo $information[0]; ?>&action=update"><input type="submit" name="rotarianUpdate" class="btn btn-success btn-block" value="Update Information"></a>.

                            <!--<button class="btn btn-success btn-block" data-toggle="modal" data-target="#updateModal"><i class="ti-angle-double-up"></i>&nbsp;Update Information</button>
                            <button class="btn btn-primary btn-block" disabled data-toggle="modal" data-target="#updateModal"><i class="fa fa-check"></i>&nbsp;Confirm</button>-->
                        </div>
                    </div>

                </div>
            </div>

            </form>
        </div> <!-- /Main Content -->
        <?php //UPDATE ROTARIAN TO DATABASE

            $action = $_GET['action'];

            if(isset($_POST['rotarianUpdate'])){
                $lastName = $_POST['lastName'];
                $firstName = $_POST['firstName'];
                $middleName = $_POST['middleName'];
                $gender = $_POST['gender'];
                $birthday = $_POST['birthday'];
                $contactNumber = $_POST["contactNumber"];
                $emailAddress = $_POST["emailAddress"];
                $address = $_POST["address"];
                $sponsor = $_POST["sponsor"];
                $position = $_POST["position"];
                $profession = $_POST["profession"];

                $rotarianUpdate = mysqli_query($connection, "UPDATE tblrotarians SET lastName = '$lastName', firstName = '$firstName', middleName='$middleName', gender = '$gender', birthday = '$birthday', address = '$address', profession = 'profession', position = '$position', contactNumber = '$contactNumber', emailAddress = '$emailAddress', sponsor = '$sponsor', status = 'Active', image = NULL, dueID = 1 WHERE rotarianID = '$id'");
                
                if($rotarianUpdate){
                    if($position!='Member'){
                        echo "<script>location.replace('officers.php?id=0&action=view');</script>";
                    }else{
                        echo "<script>location.replace('members.php?id=0&action=view');</script>";
                    }
                }
                
            }   
        ?>

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

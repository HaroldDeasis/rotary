<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Rotary | Create Rotarian</title>
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
    <script src="https://code.jquery.com/jquery-1.8.3.min.js"></script>
    <style>
        input #file1{
          font-size: 20px;
          height:50px;
        }
        .imagediv {
            float:left;
            margin-top:50px;
        }
        .imagediv .showonhover {
            background:red;
            padding:20px;
            opacity:0.9;
            color:white;
            width: 100%;
            display:block;  
            text-align:center;
            cursor:pointer;
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
                        <h1>Rotarian Information</h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="container-fluid">
            <form method="post">
            <div class="row">
                <div class="col-lg-6">
                    <aside class="profile-nav alt">
                        <section class="card">
                            <div class="card-header user-header alt bg-dark">
                                <div class="media">
                                    <input type="file" id="file1" name="image" accept="image/*" capture style="display:none"/>
                                    <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="images/admin.jpg" id="upfile1" style="cursor:pointer" />
                                    <div class="media-body form-group">
                                        <h3 class="text-light display-6">Position</h3>
                                        <select name="position" class="form-control">
                                            <option value="Member">Member</option>
                                            <option value="President">President</option>
                                            <option value="Vice President">Vice President</option>
                                            <option value="Secretary">Secretary</option>
                                            <option value="Treasurer">Treasurer</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                        </section>
                    </aside>

                    <div class="card">
                        <div class="card-header">
                            <strong>Contact Information</strong>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label class="control-label">Contact Number</label>
                                <input type="text" name="contactNumber" class="form-control" placeholder="+63XXXXXXXXXX" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Email</label>
                                <input type="email" name="emailAddress" class="form-control" placeholder="example@gmail.com" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Address</label>
                                <input type="text" name="address" class="form-control" placeholder="Address" required>
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
                                <input type="text" name="sponsor" class="form-control" placeholder="Sponsor">
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
                                <input type="text" name="lastName" class="form-control" placeholder="Last Name" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">First Name</label>
                                <input type="text" name="firstName" class="form-control" placeholder="First Name" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Middle Name</label>
                                <input type="text" name="middleName" class="form-control" placeholder="Middle Name">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Birthday</label>
                                <input type="date" name="birthday" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Profession</label>
                                <input type="text" name="profession" class="form-control" placeholder="Profession">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Gender</label>
                                <select name="gender" class="form-control">
                                    <option value="" disabled selected>Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            
                        </div>
                        <div class="card-body">
                            <input type="submit" class="btn btn-success btn-block" name="rotarianCreate" value="Create">
                        </div>
                    </div>

                </div>
            </div>

            <div class="modal fade" id="updateModal">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="mediumModalLabel">Admin Approval</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="control-label">Password</label>
                                <input type="text" name="password" class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" name="confirmCreate" class="btn btn-success" data-dismiss="modal">Confirm</button>
                            <button type="button" name="cancelCreate" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <?php //CREATE ROTARIAN TO DATABASE
            if(isset($_POST["rotarianCreate"])){
                $lastName = $_POST["lastName"];
                $firstName = $_POST["firstName"];
                $middleName = $_POST["middleName"];
                $gender = $_POST["gender"];
                $birthday = $_POST["birthday"];
                $contactNumber = $_POST["contactNumber"];
                $emailAddress = $_POST["emailAddress"];
                $address = $_POST["address"];
                $sponsor = $_POST["sponsor"];
                $position = $_POST["position"];
                $profession = $_POST["profession"];

                if(empty($lastName) or empty($firstName) or empty($gender) or empty($birthday) or empty($contactNumber) or empty($emailAddress) or empty($address) or empty($sponsor) or empty($position) or empty($profession)){
                    $emptyfields = true;
                }
                if($emptyfields){
                    echo "<script>confirm('Please fill up the blank fields.')</script>";
                }elseif($emptyfields != true){
                    $connection = mysqli_connect("localhost", "root", "", "rotary_db");
                    $rotarianCreate = mysqli_query($connection, "INSERT INTO tblrotarians(lastName, firstName, middleName, gender, birthday, contactNumber, emailAddress, address, sponsor, position, profession, dueID) VALUES ('$lastName', '$firstName', '$middleName', '$gender', '$birthday', '$contactNumber', '$emailAddress', '$address', '$sponsor', '$position', '$profession', 1);");
                    echo "<script>location.replace('members.php?id=0&action=view');</script>";
                }
            }   
        ?>

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
    <script>
        $(document).ready(function(e) {
            $(".showonhover").click(function(){
                $("#selectfile").trigger('click');
            });
        });

        var input = document.querySelector('input[type=file]'); // see Example 4

        input.onchange = function () {
          var file = input.files[0];

          drawOnCanvas(file);   // see Example 6
          displayAsImage(file); // see Example 7
        };

        function drawOnCanvas(file) {
          var reader = new FileReader();

          reader.onload = function (e) {
            var dataURL = e.target.result,
                c = document.querySelector('canvas'), // see Example 4
                ctx = c.getContext('2d'),
                img = new Image();

            img.onload = function() {
              c.width = img.width;
              c.height = img.height;
              ctx.drawImage(img, 0, 0);
            };

            img.src = dataURL;
          };

          reader.readAsDataURL(file);
        }

        function displayAsImage(file) {
          var imgURL = URL.createObjectURL(file),
              img = document.createElement('img');

          img.onload = function() {
            URL.revokeObjectURL(imgURL);
          };

          img.src = imgURL;
          document.body.appendChild(img);
        }

        $("#upfile1").click(function () {
            $("#file1").trigger('click');
        });
        $("#upfile2").click(function () {
            $("#file2").trigger('click');
        });
        $("#upfile3").click(function () {
            $("#file3").trigger('click');
        });
    </script>

</body>
</html>\
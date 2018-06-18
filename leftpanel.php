<html>

<body>

<!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"> <!-- <img src="images/logo.png" alt="Logo"> --></a>
                <a class="navbar-brand hidden" href="./"> <!-- <img src="images/logo2.png" alt="Logo"> --></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">

                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="dashboard.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>

                    <h3 class="menu-title">Admin</h3><!-- /.menu-title -->
                    <li>
                        <a href="messages.php"> <i class="menu-icon fa fa-envelope"></i>Messages </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-money"></i>Funds & Budget</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-dot-circle-o"></i><a href="ridues.php">RI Dues</a></li>
                            <li><i class="fa fa-dot-circle-o"></i><a href="balance.php">Balance</a></li>
                            <li><i class="fa fa-dot-circle-o"></i><a href="expenses.php">Expenses</a></li>
                            <li><i class="fa fa-dot-circle-o"></i><a href="donations.php?id=0&action=view">Donations</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>Rotarians</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-dot-circle-o"></i><a href="members.php?id=0&action=view">Members</a></li>
                            <li><i class="fa fa-dot-circle-o"></i><a href="officers.php?id=0&action=view">Officers</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Projects</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-dot-circle-o"></i><a href="todo.php">To Do</a></li>
                            <li><i class="fa fa-dot-circle-o"></i><a href="doing.php">Doing</a></li>
                            <li><i class="fa fa-dot-circle-o"></i><a href="done.php">Done</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="reports.php"> <i class="menu-icon fa fa-list-alt"></i>Reports </a>
                    </li>
                    <li>
                        <a href="archive.php"> <i class="menu-icon fa fa-archive"></i>Archive </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->
	
</body>

</html>
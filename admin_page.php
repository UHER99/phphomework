<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn AdminLTE</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="css/fontawesome.min.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/adminlte.min.css">
    <link rel="stylesheet" href="css/skin.min.css">
</head>
<body class="skin-blue">


    <div class="wrapper">

        <!-- Main Header -->
        <header class="main-header">

          <!-- Logo -->
          <a href="index2.php" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Admin</b>LTE</span>
          </a>

          <!-- Header Navbar -->
          <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
              <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
              <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <li class="dropdown messages-menu">
                  <!-- Menu toggle button -->
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-envelope-o"></i>
                    <span class="label label-success">4</span>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="header">You have 4 messages</li>
                    <li>
                      <!-- inner menu: contains the messages -->
                      <ul class="menu">
                        <li><!-- start message -->
                          <a href="#">
                            <div class="pull-left">
                              <!-- User Image -->
                              <img src="./image/LOGO.svg" class="img-circle" alt="User Image">
                            </div>
                            <!-- Message title and timestamp -->
                            <h4>
                              Support Team
                              <small><i class="fa fa-clock-o"></i> 5 mins</small>
                            </h4>
                            <!-- The message -->
                            <p>Why not buy a new awesome theme?</p>
                          </a>
                        </li>
                        <!-- end message -->
                      </ul>
                      <!-- /.menu -->
                    </li>
                    <li class="footer"><a href="#">See All Messages</a></li>
                  </ul>
                </li>
                <!-- /.messages-menu -->

                <!-- Notifications Menu -->
                <li class="dropdown notifications-menu">
                  <!-- Menu toggle button -->
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bell-o"></i>
                    <span class="label label-warning">10</span>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="header">You have 10 notifications</li>
                    <li>
                      <!-- Inner Menu: contains the notifications -->
                      <ul class="menu">
                        <li><!-- start notification -->
                          <a href="#">
                            <i class="fa fa-users text-aqua"></i> 5 new members joined today
                          </a>
                        </li>
                        <!-- end notification -->
                      </ul>
                    </li>
                    <li class="footer"><a href="#">View all</a></li>
                  </ul>
                </li>
                <!-- Tasks Menu -->
                <li class="dropdown tasks-menu">
                  <!-- Menu Toggle Button -->
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-flag-o"></i>
                    <span class="label label-danger">9</span>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="header">You have 9 tasks</li>
                    <li>
                      <!-- Inner menu: contains the tasks -->
                      <ul class="menu">
                        <li><!-- Task item -->
                          <a href="#">
                            <!-- Task title and progress text -->
                            <h3>
                              Design some buttons
                              <small class="pull-right">20%</small>
                            </h3>
                            <!-- The progress bar -->
                            <div class="progress xs">
                              <!-- Change the css width attribute to simulate progress -->
                              <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                                   aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                <span class="sr-only">20% Complete</span>
                              </div>
                            </div>
                          </a>
                        </li>
                        <!-- end task item -->
                      </ul>
                    </li>
                    <li class="footer">
                      <a href="#">View all tasks</a>
                    </li>
                  </ul>
                </li>
                <!-- User Account Menu -->
                <li class="dropdown user user-menu">
                  <!-- Menu Toggle Button -->
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <!-- The user image in the navbar-->
                    <img src="./image/LOGO.svg" class="user-image" alt="User Image">
                    <!-- hidden-xs hides the username on small devices so only the image appears. -->
                    <span class="hidden-xs">Hmong Traditional Clothing</span>
                  </a>
                  <ul class="dropdown-menu">
                    <!-- The user image in the menu -->
                    <li class="user-header">
                      <img src="./image/LOGO.svg" class="img-circle" alt="User Image">

                      <p>
                     5555 Hmong Traditional Clothing - Web Developer
                        <small>Member since Nov. 2012</small>
                      </p>
                    </li>
                    <!-- Menu Body -->
                    <li class="user-body">
                      <div class="row">
                        <div class="col-xs-4 text-center">
                          <a href="#">Followers</a>
                        </div>
                        <div class="col-xs-4 text-center">
                          <a href="#">Sales</a>
                        </div>
                        <div class="col-xs-4 text-center">
                          <a href="#">Friends</a>
                        </div>
                      </div>
                      <!-- /.row -->
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                      <div class="pull-left">
                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                      </div>
                      <div class="pull-right">
                        <a href="#" class="btn btn-default btn-flat">Sign out</a>
                      </div>
                    </li>
                  </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                <li>
                  <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>
              </ul>
            </div>
          </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">

          <!-- sidebar: style can be found in sidebar.less -->
          <section class="sidebar">

            <!-- Sidebar user panel (optional) -->
            <div class="user-panel">
              <div class="pull-left image">
                <img src="./image/LOGO.svg" class="img-circle" alt="User Image">
              </div>
              <div class="pull-left info">
                <p>Hmong Traditional Clothing</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
              </div>
            </div>

            <!-- search form (Optional) -->
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get" class="sidebar-form">
              <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                  </span>
              </div>
            </form>
            <!-- /.search form -->

            <!-- Sidebar Menu -->
            <ul class="sidebar-menu" data-widget="tree">
              <li class="header">HEADER</li>
              <!-- Optionally, you can add icons to the links -->
              <li class="active"><a href="admin_page.php"><i class="fa fa-link"></i> <span>Home</span></a></li>
              <li class="active"><a href="Product information.php"><i class="fa fa-link"></i> <span>Product information</span></span></a></li>
              <li class="active"><a href="login.php"><i class="fa fa-link"></i> <span>Login</span></span></a></li>

              <li class="treeview">
                <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
                  <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="#">Link in level 2</a></li>
                  <li><a href="#">Link in level 2</a></li>
                </ul>
              </li>
            </ul>
            <!-- /.sidebar-menu -->
          </section>
          <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Page Header
              <small>Optional description</small>
            </h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
              <li class="active">Here</li>
            </ol>
          </section>

          <!-- Main content -->
          <section class="content container-fluid">

            <!--------------------------
              | Your Page Content Here |
              -------------------------->
              <div class="row">
                  <div class="col-md-6">
                    <div class="box">
                        <div class="box-header with-border">
                          <h3 class="box-title">Default Box Example</h3>
                          <div class="box-tools pull-right">
                            <!-- Buttons, labels, and many other things can be placed here! -->
                            <!-- Here is a label for example -->
                            <span class="label label-primary">Label</span>
                          </div>
                          <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                          The body of the box
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                          The footer of the box
                        </div>
                        <!-- box-footer -->
                      </div>
                      <!-- /.box -->
                  </div>
                  <div class="col-md-6">
                    <div class="box box-success">
                        <div class="box-header with-border">
                          <h3 class="box-title">Default Box Example</h3>
                          <div class="box-tools pull-right">
                            <!-- Buttons, labels, and many other things can be placed here! -->
                            <!-- Here is a label for example -->
                            <span class="label label-primary">Label</span>
                          </div>
                          <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                          The body of the box
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                          The footer of the box
                        </div>
                        <!-- box-footer -->
                      </div>
                      <!-- /.box -->
                  </div>
                  <div class="col-md-6">
                    <div class="box box-solid box-success">
                        <div class="box-header with-border">
                          <h3 class="box-title">Default Box Example</h3>
                          <div class="box-tools pull-right">
                            <!-- Buttons, labels, and many other things can be placed here! -->
                            <!-- Here is a label for example -->
                          </div>
                          <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                          The body of the box
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                          The footer of the box
                        </div>
                        <!-- box-footer -->
                      </div>
                      <!-- /.box -->
                  </div>
                  <div class="col-md-6">
                    <div class="box box-solid box-primary">
                        <div class="box-header with-border">
                          <h3 class="box-title">Default Box Example</h3>
                          <div class="box-tools pull-right">
                            <!-- Buttons, labels, and many other things can be placed here! -->
                            <!-- Here is a label for example -->
                          </div>
                          <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                          The body of the box
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                          The footer of the box
                        </div>
                        <!-- box-footer -->
                      </div>
                      <!-- /.box -->
                  </div>
                  <div class="col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Messages</span>
                            <span class="info-box-number">1,410</span>
                        </div><!-- /.info-box-content -->
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-green"><i class="fa fa-flag-o"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Bookmarks</span>
                            <span class="info-box-number">410</span>
                        </div><!-- /.info-box-content -->
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-yellow"><i class="fa fa-files-o"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Uploads</span>
                            <span class="info-box-number">13,648</span>
                        </div><!-- /.info-box-content -->
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-red"><i class="fa fa-star-o"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Likes</span>
                            <span class="info-box-number">93,139</span>
                        </div><!-- /.info-box-content -->
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="info-box bg-aqua">
                        <span class="info-box-icon"><i class="fa fa-bookmark-o"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Bookmarks</span>
                            <span class="info-box-number">41,410</span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 70%"></div>
                            </div>
                            <span class="progress-description">
                                70% Increase in 30 Days
                            </span>
                        </div><!-- /.info-box-content -->
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="info-box bg-green">
                        <span class="info-box-icon"><i class="fa fa-thumbs-o-up"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Likes</span>
                            <span class="info-box-number">41,410</span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 70%"></div>
                            </div>
                            <span class="progress-description">
                                70% Increase in 30 Days
                            </span>
                        </div><!-- /.info-box-content -->
                    </div>
                  </div>
                  <div class="col-md-6">
                      <div class="box">
                          <p>
                          <div id="chart-container">
                                <canvas id="graphCanvas"></canvas>
                            </div>
                            <div>
                            <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
                            <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
                            <script>
                                $(document).ready(function() {
                                    showGraph();
                                });
                                function showGraph(){
                                    {
                                        $.post("data.php", function(data) {
                                            console.log(data);
                                            let ຊື່ສີນຄ້າ = [];
                                            let ລາຄາ = [];
                                            for (let i in data) {
                                                ຊື່ສີນຄ້າ.push(data[i].name);
                                                ລາຄາ.push(data[i].price);
                                            }
                                            let chartdata = {
                                                labels: ຊື່ສີນຄ້າ,
                                                datasets: [{
                                                        label: 'ລາຄາ',
                                                        backgroundColor: '#49e2ff',
                                                        borderColor: '#46d5f1',
                                                        hoverBackgroundColor: '#CCCCCC',
                                                        hoverBorderColor: '#666666',
                                                        data: ລາຄາ
                                                }]
                                            };
                                            let graphTarget = $('#graphCanvas');
                                            let barGraph = new Chart(graphTarget, {
                                                type: 'bar',
                                                data: chartdata
                                            })
                                        })
                                    }
                                }
                            </script>
                            </div>
                          </p>
                      </div>
                  </div>
                  <div class="col-md-6">
                    <div class="box" id="myBox">
                        <div class="box-header with-border">
                          <h3 class="box-title">Collapsible Box Example</h3>
                          <div class="box-tools pull-right">
                            <!-- Collapse Button -->
                            <button type="button" id="boxBtn" class="btn btn-box-tool" data-widget="collapse">
                              <i class="fa fa-minus"></i>
                            </button>
                          </div>
                          <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                          The body of the box
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                          The footer of the box
                        </div>
                        <!-- box-footer -->
                      </div>
                      <!-- /.box -->
                  </div>
                  <div class="col-md-6">
                      <!-- Construct the box with style you want. Here we are using box-danger -->
                        <!-- Then add the class direct-chat and choose the direct-chat-* contexual class -->
                        <!-- The contextual class should match the box, so we are using direct-chat-danger -->
                        <div class="box box-danger direct-chat direct-chat-danger">
                            <div class="box-header with-border">
                            <h3 class="box-title">Direct Chat</h3>
                            <div class="box-tools pull-right">
                                <span data-toggle="tooltip" title="3 New Messages" class="badge bg-red">3</span>
                                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                <!-- In box-tools add this button if you intend to use the contacts pane -->
                                <button class="btn btn-box-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle"><i class="fa fa-comments"></i></button>
                                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                            <!-- Conversations are loaded here -->
                            <div class="direct-chat-messages">
                                <!-- Message. Default to the left -->
                                <div class="direct-chat-msg">
                                <div class="direct-chat-info clearfix">
                                    <span class="direct-chat-name pull-left">Hmong Traditional Clothing</span>
                                    <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
                                </div>
                                <!-- /.direct-chat-info -->
                                <img class="direct-chat-img" src="../dist/imgs/user1-128x128.jpg" alt="message user image">
                                <!-- /.direct-chat-img -->
                                <div class="direct-chat-text">
                                    Is this template really for free? That's unbelievable!
                                </div>
                                <!-- /.direct-chat-text -->
                                </div>
                                <!-- /.direct-chat-msg -->

                                <!-- Message to the right -->
                                <div class="direct-chat-msg right">
                                <div class="direct-chat-info clearfix">
                                    <span class="direct-chat-name pull-right">Sarah Bullock</span>
                                    <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
                                </div>
                                <!-- /.direct-chat-info -->
                                <img class="direct-chat-img" src="../dist/imgs/user3-128x128.jpg" alt="message user image">
                                <!-- /.direct-chat-img -->
                                <div class="direct-chat-text">
                                    You better believe it!
                                </div>
                                <!-- /.direct-chat-text -->
                                </div>
                                <!-- /.direct-chat-msg -->
                            </div>
                            <!--/.direct-chat-messages-->

                            <!-- Contacts are loaded here -->

                            
                            <div class="direct-chat-contacts">
                                <ul class="contacts-list">
                                <li>
                                    <a href="#">
                                    <img class="contacts-list-img" src="../dist/imgs/user1-128x128.jpg" alt="Contact Avatar">
                                    <div class="contacts-list-info">
                                        <span class="contacts-list-name">
                                        Count Dracula
                                        <small class="contacts-list-date pull-right">2/28/2015</small>
                                        </span>
                                        <span class="contacts-list-msg">How have you been? I was...</span>
                                    </div>
                                    <!-- /.contacts-list-info -->
                                    </a>
                                </li>
                                <!-- End Contact Item -->
                                </ul>
                                <!-- /.contatcts-list -->
                            </div>
                            <!-- /.direct-chat-pane -->
                            </div>
                            <!-- /.box-body -->

                            
                            <div class="box-footer">
                            <div class="input-group">
                                <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                                <span class="input-group-btn">
                                        <button type="button" class="btn btn-danger btn-flat">Send</button>
                                        </span>
                                        
                            </div>
                            </div>
                            <!-- /.box-footer-->
                        </div>
                        <!--/.direct-chat -->
                  </div>
              </div>

          </section>
          <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <footer class="main-footer">
          <!-- To the right -->
          <div class="pull-right hidden-xs">
            Anything you want
          </div>
          <!-- Default to the left -->
          <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
          <!-- Create the tabs -->
          <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
          </ul>
          <!-- Tab panes -->
          <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane active" id="control-sidebar-home-tab">
              <h3 class="control-sidebar-heading">Recent Activity</h3>
              <ul class="control-sidebar-menu">
                <li>
                  <a href="javascript:;">
                    <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                    <div class="menu-info">
                      <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                      <p>Will be 23 on April 24th</p>
                    </div>
                  </a>
                </li>
              </ul>
              <!-- /.control-sidebar-menu -->

              <h3 class="control-sidebar-heading">Tasks Progress</h3>
              <ul class="control-sidebar-menu">
                <li>
                  <a href="javascript:;">
                    <h4 class="control-sidebar-subheading">
                      Custom Template Design
                      <span class="pull-right-container">
                          <span class="label label-danger pull-right">70%</span>
                        </span>
                    </h4>

                    <div class="progress progress-xxs">
                      <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                    </div>
                  </a>
                </li>
              </ul>
              <!-- /.control-sidebar-menu -->

            </div>
            <!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
            <!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
              <form method="post">
                <h3 class="control-sidebar-heading">General Settings</h3>

                <div class="form-group">
                  <label class="control-sidebar-subheading">
                    Report panel usage
                    <input type="checkbox" class="pull-right" checked>
                  </label>

                  <p>
                    Some information about this general settings option
                  </p>
                </div>
                <!-- /.form-group -->
              </form>
            </div>
            <!-- /.tab-pane -->
          </div>
        </aside>
        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
        immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
      </div>
      <!-- ./wrapper -->



    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/adminlte.min.js"></script>
    <script>
        $('#myBox').boxWidget({
            animationSpeed: 500,
            collapseTrigger: '#boxBtn',
            removeTrigger: '#my-remove-button-trigger',
            collapseIcon: 'fa-minus',
            expandIcon: 'fa-plus',
            removeIcon: 'fa-times'
        })
    </script>
</body>
</html>
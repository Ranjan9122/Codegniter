<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>DataTables | Gentallela</title>

  <!-- Bootstrap core CSS -->

  <link href="<?php echo base_url(); ?>Assets/css/bootstrap.min.css" rel="stylesheet">

  <link href="<?php echo base_url(); ?>Assets/fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>Assets/css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="<?php echo base_url(); ?>Assets/css/custom.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>Assets/css/icheck/flat/green.css" rel="stylesheet">

  <link href="<?php echo base_url(); ?>Assets/js/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url(); ?>Assets/js/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url(); ?>Assets/js/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url(); ?>Assets/js/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url(); ?>Assets/js/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />

  <script src="<?php echo base_url(); ?>Assets/js/jquery.min.js"></script>

  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>


<body class="nav-md">

  <div class="container body">


    <div class="main_container">

      <?php include('Include/Sidebar.php'); ?>
      <!-- top navigation -->
      <?php include('Include/Header.php'); ?>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>
                    Category
                    
                </h3>
            </div>

            
          </div>
          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>View Category <small>Users</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a href="#"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    
                    <li><a href="#"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                 
                  <table id="datatable-buttons" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Category</th>
                        <th>Uploading date</th>
                        <th>Status</th>
                        
                        <th>Action</th>
                        
                      </tr>
                    </thead>


                    <tbody>
                      <?php 
                      foreach ($viewcategory as $result )
                      {
                      ?>
                      <tr>
                        <td><?php echo $result->category; ?></td>
                        
                        <td><?php echo $result->date; ?></td>

                        <?php
                        $Active= $result->status;

                        if($Active==1)
                        {

                        ?>
                        <td><a href="<?= base_url() ?>Admin/activecategory?id=<?php echo $result->id; ?>"><i class="fa fa-eye" title="Click for Inactive Status"></i> Active</a></td>
                        <?php }else{ ?>
                        <td><a href="<?= base_url() ?>Admin/inactivecategory?id=<?php echo $result->id; ?>"><i class="fa fa-eye-slash" title="Click for Active Status"></i> Inactive</a></td>
                          <?php }?>

                        <td><a href="<?= base_url() ?>Admin/editcategory?id=<?php echo $result->id; ?>&category=<?php echo $result->category; ?>"><i class="fa fa-edit" title="Edit"></i></a>  
                          <a href="<?= base_url() ?>Admin/deletecategory?id=<?php echo $result->id; ?>"><i class="fa fa-trash" onclick="if(confirm('Are you sure want to delete?')) commentDelete(1); return false" title="Delete"></i></a> </td>
                        
                      </tr>
                    
                      <?php }?>
                    
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            
            

                </div>
              </div>
              <!-- footer content -->
              <footer>
                <div class="copyright-info">
                  <p class="pull-right">Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
                  </p>
                </div>
                <div class="clearfix"></div>
              </footer>
              <!-- /footer content -->

            </div>
            <!-- /page content -->
          </div>

        </div>

        <div id="custom_notifications" class="custom-notifications dsp_none">
          <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
          </ul>
          <div class="clearfix"></div>
          <div id="notif-group" class="tabbed_notifications"></div>
        </div>

        <script src="<?php echo base_url(); ?>Assets/js/bootstrap.min.js"></script>

        <!-- bootstrap progress js -->
        <script src="<?php echo base_url(); ?>Assets/js/progressbar/bootstrap-progressbar.min.js"></script>
        <script src="<?php echo base_url(); ?>Assets/js/nicescroll/jquery.nicescroll.min.js"></script>
        <!-- icheck -->
        <script src="<?php echo base_url(); ?>Assets/js/icheck/icheck.min.js"></script>

        <script src="<?php echo base_url(); ?>Assets/js/custom.js"></script>


        <!-- Datatables -->
        <!-- <script src="js/datatables/js/jquery.dataTables.js"></script>
  <script src="js/datatables/tools/js/dataTables.tableTools.js"></script> -->

        <!-- Datatables-->
        <script src="<?php echo base_url(); ?>Assets/js/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url(); ?>Assets/js/datatables/dataTables.bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>Assets/js/datatables/dataTables.buttons.min.js"></script>
        <script src="<?php echo base_url(); ?>Assets/js/datatables/buttons.bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>Assets/js/datatables/jszip.min.js"></script>
        <script src="<?php echo base_url(); ?>Assets/js/datatables/pdfmake.min.js"></script>
        <script src="<?php echo base_url(); ?>Assets/js/datatables/vfs_fonts.js"></script>
        <script src="<?php echo base_url(); ?>Assets/js/datatables/buttons.html5.min.js"></script>
        <script src="<?php echo base_url(); ?>Assets/js/datatables/buttons.print.min.js"></script>
        <script src="<?php echo base_url(); ?>Assets/js/datatables/dataTables.fixedHeader.min.js"></script>
        <script src="<?php echo base_url(); ?>Assets/js/datatables/dataTables.keyTable.min.js"></script>
        <script src="<?php echo base_url(); ?>Assets/js/datatables/dataTables.responsive.min.js"></script>
        <script src="<?php echo base_url(); ?>Assets/js/datatables/responsive.bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>Assets/js/datatables/dataTables.scroller.min.js"></script>


        <!-- pace -->
        <script src="<?php echo base_url(); ?>Assets/js/pace/pace.min.js"></script>
        <script>
          var handleDataTableButtons = function() {
              "use strict";
              0 !== $("#datatable-buttons").length && $("#datatable-buttons").DataTable({
                dom: "Bfrtip",
                buttons: [{
                  extend: "copy",
                  className: "btn-sm"
                }, {
                  extend: "csv",
                  className: "btn-sm"
                }, {
                  extend: "excel",
                  className: "btn-sm"
                }, {
                  extend: "pdf",
                  className: "btn-sm"
                }, {
                  extend: "print",
                  className: "btn-sm"
                }],
                responsive: !0
              })
            },
            TableManageButtons = function() {
              "use strict";
              return {
                init: function() {
                  handleDataTableButtons()
                }
              }
            }();
        </script>
        <script type="text/javascript">
          $(document).ready(function() {
            $('#datatable').dataTable();
            $('#datatable-keytable').DataTable({
              keys: true
            });
            $('#datatable-responsive').DataTable();
            $('#datatable-scroller').DataTable({
              ajax: "js/datatables/json/scroller-demo.json",
              deferRender: true,
              scrollY: 380,
              scrollCollapse: true,
              scroller: true
            });
            var table = $('#datatable-fixed-header').DataTable({
              fixedHeader: true
            });
          });
          TableManageButtons.init();
        </script>
</body>

</html>
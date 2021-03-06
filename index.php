<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Form Test Task for SphereMall</title>


  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="/assets/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/assets/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/assets/dist/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="/assets/dist/_all-skins.min.css">

  <link rel="stylesheet" href="/assets/style.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="//oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


    <!-- Main content -->
    <section class="content">
      <div class="row">

        <!-- right column -->
        <div class="col-md-6 form">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Fill Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form id="contact-form" enctype="multipart/form-data" action="" method="post" class="form-horizontal">
<!--                <input type="hidden" name="csrf_tok" value="">-->
              <div class="box-body">
                <div class="form-group">
                  <label for="name" class="col-sm-2 control-label">Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="username" id="name" placeholder="Name" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="surname" class="col-sm-2 control-label">Surname</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="usersurname" id="surname" placeholder="Surname" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" name="email"  id="inputEmail3" placeholder="Email" required >
                  </div>
                </div>

                <div class="form-group">
                  <label for="tarea" class="col-sm-2 control-label">Comment</label>

                  <div class="col-sm-10">
                    <textarea id="tarea" class="form-control" rows="3" name="comment" placeholder="Enter ..." required ></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label for="exampleInputFile" class="col-sm-2 control-label">You avatar</label>
                  <div class="col-sm-10">
                    <input type="file" id="exampleInputFile" name="file" required >
                  </div>
                  <p class="help-block">Only jpeg, jpg and png file types allowed. Not bigger than 2 Megabytes</p>
                </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">

                <button type="submit" class="btn btn-info pull-right" id="subm-form">Send</button>
              </div>
              <!-- /.box-footer -->
            </form>
              <div class="message success-sent" style="display: none;">
                  <p>You form data was successfully sent.</p>
                  <p>Mail was sent on you mailbox.</p>
                  <p>Have a nice day!</p>
              </div>

              <div class="message error-sent" style="display: none;">
                  <p>Ooops. Seems like something went wrong.</p>
                  <p>We will fix it as fast as possible.</p>
              </div>

          </div>



          <!-- /.box -->

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
</div>
<!-- ./wrapper -->
<div class="ajax-respond"></div>
<!-- jQuery 3 -->
<script src="/assets/jquery/dist/jquery.min.js"></script>
<!-- jQuery validate -->
<script src="/assets/jquery/plugins/jquery-validate/jquery.validate.js"></script>


<!-- Bootstrap 3.3.7 -->
<script src="/assets/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- form validation script -->
<script src="/assets/dist/form.validation.js"></script>

<script>

//(function($){
//

//}(jQuery));
</script>
</body>
</html>

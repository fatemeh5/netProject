<!DOCTYPE html>
<html  >
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>پروژه پایانی مهندسی نت</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{route('home1')}}/css js/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{route('home1')}}/css js/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{route('home1')}}/css js/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{route('home1')}}/css js/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{route('home1')}}/css js/_all-skins.min.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{route('home1')}}/css js/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{route('post')}}/">Internet Final Project</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{route('post')}}/home">Document</a></li>
      
    </ul>
  </div>
</nav>

@if(isset($r["description"]))
<div class="wrapper">

  <!-- Left side column. contains the logo and sidebar -->
  

    <!-- Main content -->
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="box"  >
            
            <!-- /.box-header -->
            <div class="box-body pad">
              <form method="post" action="{{route('post')}}/update">
                        <input id="csrf" type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input id="" type="hidden" name="id" value="{{ $r->id}}">
                <div class="form-group">
                  <label for="pwd">name:</label>
                  <input name="name" type="text" class="form-control" id="pwd" value="{!! (html_entity_decode($r->name)) !!}">
                </div>

                <textarea class="textarea" name="editor1" placeholder="write your text"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{!! (html_entity_decode($r->description)) !!}</textarea>
                <input type="submit" value="send" >
              </form>
            </div>
          </div>
        </div>
                <div class="col-md-2"></div>

      
</div>


@endif  
      <!-- ./row -->
    <!-- /.content -->



<!-- jQuery 3 -->
<script src="{{route('home1')}}/css js/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{route('home1')}}/css js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="{{route('home1')}}/css js/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="{{route('home1')}}/css js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{route('home1')}}/css js/demo.js"></script>
<!-- CK Editor -->
<script src="{{route('home1')}}/css js/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{route('home1')}}/css js/bootstrap3-wysihtml5.all.min.js"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>
</body>
</html>

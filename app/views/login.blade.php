<!doctype html>
<html>
<head>
	<title></title>
  {{HTML::style("bootstrap/less/bootstrap.less", $arrayName = array('type' => "text/less" ));}}
</head>
<body>
    <script>
    less = {
        env: "development",
        async: false,
        fileAsync: false,
        poll: 1000,
        functions: {},
        dumpLineNumbers: "comments",
        relativeUrls: false,
        rootpath: ":/a.com/"
    };
    </script>
    {{HTML::script("js/less-1.6.3.min.js");}}
    <style type="text/css">
    html, body{height:100%; margin:0;padding:0}

    .container-fluid{
      height:100%;
      display:table;
      width: 100%;
      padding: 0;
  }

  .row-fluid {height: 100%; display:table-cell; vertical-align: middle;}

  .centering {
      float:none;
      margin:0 auto;
  }

  </style>
  <div class="container-fluid">
    <div class="col-md-6 col-md-offset-3 row-fluid centering">
        <div class="hero-unit">
            {{Form::open($arrayName = array('class' => "form-horizontal"));}}

            <div class="form-group">
                {{Form::label("username", "username", $arrayName = array('class' => "col-sm-2 control-label"));}}
                <div class="col-sm-10">
                    {{Form::text("password","",$arrayName = array('class' => 'form-control'));}}
                </div>
            </div>

            <div class="form-group">
                {{Form::label("password", "password", $arrayName2 = array('class' => "col-sm-2 control-label"));}}
                <div class="col-sm-10">
                    {{Form::password("password",array('class' => 'form-control'));}}
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    {{Form::submit("Log In", $arrayName = array('class' => "btn btn-primary"));}}
                </div>
            </div>
            {{Form::close();}}
        </div>
    </div>
</div>
</body>
</html>
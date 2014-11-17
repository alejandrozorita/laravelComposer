<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="../../favicon.ico">

<title>Signin Template for Bootstrap</title>

<!-- Bootstrap core CSS -->
    <link href="{{ asset ('boostrap/css/bootstrap.min.css')}}" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    		<![endif]-->
    		
    		<style type="text/css">
    		body {
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #eee;
}

.form-signin {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 10px;
}
.form-signin .checkbox {
  font-weight: normal;
}
.form-signin .form-control {
  position: relative;
  height: auto;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.error_message{
color: red;
}
    		</style>
    		</head>

    		<body>

    		<div class="container">

    				<form class="form-signin" role="form">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
        <label>
        <input type="checkbox" value="remember-me"> Remember me
        </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </form>

        {{Form::open(['route' => 'register','method' => 'POST', 'role'=> 'form', 'novalidate']) }}

            <div class="form-group">
                {{Form::label('full_name','Nombre Completo')}}
                {{Form::text('full_name', null, ['class' => 'form-control' ])}}
                {{$errors->first('full_name', '<p class="error_message">:message</p>')}}
            </div>

            <div class="form-group">
                {{Form::label('email','Email')}}
                {{Form::email('email', null, ['class' => 'form-control' ])}}
                {{$errors->first('email', '<p class="error_message">:message</p>')}}
            </div>

            <div class="form-group">
                {{Form::label('password','Clave')}}
                {{Form::password('password', ['class' => 'form-control' ])}}
                {{$errors->first('password', '<p class="error_message">:message</p>')}}
            </div>

            <div class="form-group">
                {{Form::label('password_confirmation','Repita Clave')}}
                {{Form::password('password_confirmation',['class' => 'form-control' ])}}
                {{$errors->first('password_confirmation', '<p class="error_message">:message</p>')}}
            </div>
         <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        {{Form::close()}}

        </div> <!-- /container -->


        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
        </body>
        </html>
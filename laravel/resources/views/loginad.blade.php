<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Bootstrap Login Page</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Panel Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'><link rel="stylesheet" href= "dist/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box">
                <div class="col-lg-12 login-key">
                    <i class="fa fa-key" aria-hidden="true"></i>
                </div>
                @if (\Illuminate\Support\Facades\Session::has ('success'))
                <div class="alert alert-success">{{\Illuminate\Support\Facades\Session::get('success')}}</div> 
                    @endif
                    @if (\Illuminate\Support\Facades\Session::has ('fail'))
                <div class="alert alert-fail">{{\Illuminate\Support\Facades\Session::get('fail')}}</div> 
                    @endif
                    @if (\Illuminate\Support\Facades\Session::has ('restricted'))
                    <div class="alert alert-fail">{{\Illuminate\Support\Facades\Session::get('restricted')}}</div> 
                    @endif

                <div class="col-lg-12 login-title">
                    ADMIN PANEL
                </div>

                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <form method="post" action="{{route('login')}}"> 
                            @csrf
                            <div class="form-group">
                                <!-- <label class="form-control-label" style="font-size: large">Admin username</label> -->
                                
                                <input type="text" name="adminName" placeholder="Enter your username here" required="required" value="{{old('adminName')}}"  class="form-control" />
			                    <span class="text-danger">@error('adminName'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group">
                                <!-- <label class="form-control-label" style="font-size: large">PASSWORD</label> -->
                            
                                <input type="password" name="password" placeholder="Enter your password here" required="required" value="{{old('password')}}" class="form-control" />
			                    <span class="text-danger">@error('password'){{$message}}@enderror</span>
                            </div>

                            <div class="col-lg-12 loginbttm">
                                <div class="col-lg-6 login-btm login-text">
                                    <!-- Error Message -->
                                </div>
                                <div class="col-lg-6 login-btm login-button">
                                    <button type="submit" class="btn btn-outline-primary">LOGIN</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>
<!-- partial -->


<!-- partial -->
  <script  src="./script.js"></script>

</body>
</body>
</html>

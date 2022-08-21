<!doctype html>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Manage Data Table of Bookshop</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
    body {
        color: #566787;
		background: #f5f5f5;
		font-family: 'Varela Round', sans-serif;
		font-size: 15px;
	}
</style>
</head>
  <body>
    <div class="container" style="margin-top: 15px;">
        <div class="row">
            <div class="col-md-12" style="color: #440000;">
                <h2>Create New Author for Bookshop</h2>
                @if (\Illuminate\Support\Facades\Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{\Illuminate\Support\Facades\Session::get('success')}}
                    </div>
                @endif
                <form action="{{url('save_au')}}" method="POST">
                    @csrf
                    <div class="md-3">
                        <br> <label class="form-label" for="authorID">Author ID</label>
                        <input type="int" name="authorID" class="form-control" placeholder="Enter Author ID here"> </br>
                    </div>

                    <div class="md-3">
                        <br> <label class="form-label" for="authorName">Author name</label>
                        <input type="varchar" name="authorName" class="form-control" placeholder="Enter Author Name here"> </br>
                    </div>

                    <div class="md-3">
                       <br> <label class="form-label" for="authorDescription">Author Description </label>
                        <textarea name="authorDescription" rows="5" placeholder="Enter Author Description here" class="form-control"></textarea> </br> 
                    </div>
                    <a href="{{url('list_au')}}"><button type="submit" class="btn btn-success">Submit New Data
                    </button></a>
                    <a href="{{url('list_au')}}" class="btn btn-success">Back</a>
                </form>
            </div>
        </div>
    </div>
  </body>
</html>
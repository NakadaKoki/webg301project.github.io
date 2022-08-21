<!doctype html>
<html lang="en">
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
                <br><h2>Add New Product for Bookshop</h2></br>
                @if (\Illuminate\Support\Facades\Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{\Illuminate\Support\Facades\Session::get('success')}}
                    </div>
                @endif
                <form action="{{url('save')}}" method="POST">
                    @csrf
                    <div class="md-3">
                        <label class="form-label" for="id">Product ID</label>
                        <input type="int" name="id" class="form-control" placeholder="Enter Product ID here">
                    </div>
                    <div class="md-3">
                        <br><label class="form-label" for="name">Product Name</label>
                        <input type="varchar" name="name" class="form-control" placeholder="Enter product Name here"></br>
                    </div>
                    <div class="md-3">
                        <br><label class="form-label" for="price">Product Price</label>
                        <input type="int" name="price" class="form-control" placeholder="Enter Product Price here"></br>
                    </div>
                    <div class="md-3">
                        <label class="form-label" for="description">Product Description</label>
                        <textarea name="description" rows="5" placeholder="Enter Product Description here" class="form-control"></textarea>
                    </div>
                    <div class="md-3">
                        <br><label class="form-label" for="image">Product Image</label>
                        <input type="file" name="image" class="form-control"></br>
                    </div>
                    <div class="md-3">
                        <br><label class="form-label" for="author">Author Name of Product</label></br>
                        {{-- <input type="varchar" name="author" class="form-control"> --}}
                        <select name="author" class="form-control">
                            @foreach ($author as $row)
                                <option value="{{$row->authorID}}">{{$row->authorName}}</option>
                            @endforeach
                        </select>
                    </div> 
                    <div class="md-3">
                        <br><label class="form-label" for="category">Category Name of Product</label></br>
                        {{-- <input type="varchar" name="category" class="form-control"> --}}
                        <select name="category" class="form-control">
                            @foreach ($Category as $row)
                                <option value="{{$row->categoryID}}">{{$row->categoryName}}</option>
                            @endforeach
                        </select>
                    <br>
                    <a href="{{url('list')}}"><button type="submit" class="btn btn-success">Submit New Data
                    </button></a>
                    <a href="{{url('list')}}" class="btn btn-success">Back</a>
                </form>
            </div>
        </div>
    </div>
  </body>
</html>
@extends('master')
@section('content')

<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="addproduct" method="POST">
              @csrf
              <div class="form-group">
                <label for="exampleInputEmail1">Product Name</label>
                <input type="text" name="Productname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Product Name">
              </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Price</label>
                  <input type="text" name="price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Price">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Category</label>
                    <input type="text" name="category" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Price">
                  </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Gallery</label>
                    <input type="text" name="gallery" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Image address">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <textarea placeholder="enter your address"  name="description" class="form-control" > </textarea>
                  </div>
                <button type="submit" class="btn btn-primary">Add</button>
              </form>
        </div>
    </div>
</div>
@endsection
@extends('welcome')
@section('body')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Product Entry</h1>
            </div><!-- /.col -->

        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>  

<section class="content">
    <div class="container-fluid">
        <!-- Main row -->
        <div class="row">
            <div class="col">
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title"></h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Title</label>
                                <input type="text" class="form-control" name="txtTitle" id="txtTitle" placeholder="Enter Name">
                            </div>
                           
                            
                            <div class="form-group">
                                <label>SKU</label>
                                <input type="text" class="form-control" name="txtSKU" id="txtSKU" placeholder="product sku">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" class="form-control" name="txtDescription" id="txtDescription" placeholder="description">
                            </div>

                            <div class="form-group">
                                <label>Picture</label><br>
                                <input type="file" class="form-control-file" name="input_img" accept="image/*" />
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-sm btn-dark">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section>
@endsection
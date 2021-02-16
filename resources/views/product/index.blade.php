
    

{{-- <table class="table" border="1">
    <tr>
     <th>Title</th>
     <th>Descripion</th>
     <th>SKU</th>
    </tr>
    @foreach ($products as $product)
        
    <tr>
        <td>{{ $product->title }}</td>
        <td>{{ $product->description }}</td>
        <td>{{ $product->sku }}</td>
    </tr>
    @endforeach
 </table>
 {{ $products->links() }} --}}
 @extends("welcome")
@section("body")
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Manage Product</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Main row -->
        <div class="row">
            <div class="col">
                <div class="card card-secondary">
                    <div class="card-header">
                        <div class="row">
                            
                            <div class="col">
                                <a class="btn btn-sm btn-dark float-right" href="{{url('products/create')}}" style="font-size:15px"><i class="fa fa-plus"></i> Product Entry</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <table class="table table-bordered table-striped table-hover text-nowrap" id="example">
                            <thead>
                                <tr>
                                    <th style="background-color:gray;">ID</th>
                                    <th style="background-color:gray;">Title</th>
                                    <th style="background-color:gray;">SKU</th>
                                    <th style="background-color:gray;">Descripion</th>     
                                               
                                    <th style="background-color:gray;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td>{{$product->title}}</td>
                                    <td>
                                        <img src="product_img/{{$product->img}}" class="img-circle" alt="..." style="width:45px;height:45px">  
                                     </td>
                                    <td>{{$product->sku}}</td>
                                    <td>{{$product->description}}</td>

                                    
                                    
                                     <td>
                                        <div class="clearfix">
                                            <a style="float:left; margin-right:5px" class="btn btn-xs btn-dark" href="{{route('products.show',$product->id)}}"><i class="fa fa-eye"></i></a>
                                            <a style="float:left; margin-right:5px" class="btn btn-xs btn-success" href="{{route('products.edit',$product->id)}}"><i class="fa fa-edit"></i></a>
                                            <form onsubmit="return confirm('Are you sure?')" action="{{route('products.destroy',$product->id)}}" method="post">
                                                @csrf
                                                @method("DELETE")
                                                <button style="float:left" class="btn btn-xs btn-danger" type="submit" name="btn_del" value="Delete"><i class="fa fa-trash"></i></button>
                                            </form> 
                                        </div>
                                    </td> 
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

 @endsection
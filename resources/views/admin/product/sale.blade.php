@extends('admin.layouts.master')

@section('content')
    <style>
        td a i {
            font-size: 15px;
        }
    </style>

    <section class="section">
        <div class="section-header">
            <h1>Product</h1>

        </div>

        <div class="section-body">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>All Products</h4>
                            <div class="card-header-action">
                                <a href="{{ route('products.create') }}" class="btn btn-primary">Add New</a>
                            </div>
                        </div>
                        <div class="card-body">


                            <table class="table table-bordered table-striped table-hover ">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Stock</th>
                                <th>Sale Quantity</th>
                                <th>Update</th>

                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->quantity }}</td>


                                        <form action="{{ route('update.sale', $product->quantity) }}" method="POST">
                                            @csrf
                                            <td> <input type="text" class="form-control" name="sale_qty"></td>

                                            <input type="hidden" class="form-control" name="product_name" value="{{ $product->name }}">
                                            <input type="hidden" class="form-control" name="product_id" value="{{ $product->id }}">
                                       
                                            <td><button class="btn btn-primary">Sale</button></td>

                                        </form>

                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

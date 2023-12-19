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


                            <table class="table table-bordered table-striped table-hover">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Edit</th>
                                <th>Delete</th>

                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->quantity }}</td>
                                        <td>{{ $product->price }}</td>
                               
                                        <td><a class="btn btn-info m-1" href="{{ route('products.edit', $product->id) }}"><i
                                            class="fa-solid fa-pen-to-square"></i></a></td>
                                        <td>
                                            <a class="btn btn-light m-1" onclick="confirm('Are you sure')"
                                                href="{{ route('product.delete', $product->id) }}"><i
                                                    class="fa-solid fa-trash"></i></a>
                                        </td>
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

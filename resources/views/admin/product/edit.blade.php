@extends('admin.layouts.master')

@section('content')
    <style>
        textarea {
            width: 100%;
            border: 1px solid rgb(206, 206, 206);
            border-radius: 5px;
            background-color: #FDFDFF;
            outline: none;
        }

        .fa-trash {
            cursor: pointer;
            color: rgb(134, 6, 6);
            border: none;
            margin-top: 35px;
            font-size: 20px;

        }

        .fa-trash:hover {
            color: rgb(211, 0, 0);
        }

        button.submit-btn {

            padding: 10px;
            font-size: 16px;
        }

        .fa-percent {
            color: rgb(151, 8, 8);
            font-size: 18px;
        }

        .fa-star {
            color: rgb(177, 2, 2);
            font-size: 8px;
        }
    </style>


    <section class="section">
        <div class="section-header">
            <h1>Table</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Components</a></div>
                <div class="breadcrumb-item">Table</div>
            </div>
        </div>

        <div class="section-body">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Update Product</h4>
                        </div>

                        <div class="card-body">

                            <form action="{{ route('products.update',  $products->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Name <i class="fa-solid fa-star"></i></label>
                                            <input type="text" class="form-control" name="name"
                                                value="{{ $products->name }}" readonly>
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Price <i class="fa-solid fa-star"></i></label>
                                            <input type="number" class="form-control" name="price"
                                                value="{{ $products->price }}">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Quantity <i class="fa-solid fa-star"></i></label>
                                            <input type="number" class="form-control" name="quantity"
                                                value="{{ $products->quantity }}" readonly>
                                        </div>
                                    </div>
                              

                                    <div class="col-md-12">
                                        <button type="submit" class="submit-btn btn btn-primary">Submit Product</button>

                                    </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

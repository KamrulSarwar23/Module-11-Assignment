@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Category</h1>

        </div>

        <div class="section-body">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Create Categories</h4>
                        </div>
                        <div class="card-body">

                            {{-- <form action="{{route('category.update', $category->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="name" value="{{$category->name}}">
                                </div>

                                <div class="form-group">
                                    <label>Logo</label>
                                    <input type="file" class="form-control" name="logo">
                                </div>

                                <div class="my-3">
                                    <img class="my-2" width="120px" height="120px" src="{{ asset('images/'. $category->logo) }}" alt="Image"/>
                              </div>

                        

                                <button type="submit" class="btn btn-primary">Update</button>
                            </form> --}}


                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>
    </section>
@endsection

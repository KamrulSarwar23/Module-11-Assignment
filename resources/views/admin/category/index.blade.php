@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Category</h1>

        </div>

        <div class="section-body">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>All Category</h4>
                            <div class="card-header-action">
                                <a href="{{ route('category.create') }}" class="btn btn-primary">Create New</a>
                            </div>
                        </div>
                        <div class="card-body">

                            <table class="table table-borderd table-striped">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Logo</th>
                                <th>Action</th>

                                {{-- @foreach ($categories as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td><img class="my-2" width="80px" height="80px"
                                                src="{{ asset('storage/products/' . $item->logo) }}" alt="Image" /></td>


                                        <td>
                                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Category"
                                                class="btn btn-info m-1" href="{{ route('category.edit', $item->id) }}"><i
                                                    class="fa-solid fa-pen-to-square"></i></a>
                                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Category"
                                                onclick="return confirm('Are you sure?')" class="btn btn-light m-1"
                                                href="{{ route('category.delete', $item->id) }}"><i
                                                    class="fa-solid fa-trash"></i></a>
                                        </td>

                                    </tr>
                                @endforeach --}}




                            </table>

                            {{ $categories->links() }}

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

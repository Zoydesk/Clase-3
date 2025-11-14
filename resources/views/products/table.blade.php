@extends('admin.layouts.app')

@section('content')
    <div class = "card">
        <div class = "card-body">

            <h3>List Products</h3>

            <a type="button" class="btn btn-succes" href={{route('admin.products.create') }}>Add New product</a>



            <table class = "table align-items-center mb-0">

                <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                        {{-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Description</th> --}}
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Price</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Brand</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Category</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Updated</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">{{ $product->id }}</p>
                            </td>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">{{ $product->name }}</p>
                            </td>
                            {{-- <td>
                            <p class="text-xs font-weight-bold mb-0">{{ $product->description }}</p>
                        </td> --}}
                            <td>
                                <p class="text-xs font-weight-bold mb-0">${{ $product->price }}</p>
                            </td>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">{{ $product->brand_id }}</p>
                            </td>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">{{ $product->category_id }}</p>
                            </td>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">{{ $product->created_at }}</p>
                            </td>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">{{ $product->updated_at }}</p>
                            </td>
                            <td>
                                <a style="color: red;" href ="#">Eliminar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>


            </table>

            {{ $products->links() }}
        @endsection

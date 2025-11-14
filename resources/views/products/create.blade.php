@extends('admin.layouts.app')

@section('title', 'Crear Producto')

@section('content')
    <h2>New Product</h2>

    <div class = "card">
        <div class = "card-body">

            

            <form action="{{ route('admin.products.store') }}" method="POST">
                @csrf

                <!-- Nombre del Producto -->
                @error('name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
                <div class="input-group input-group-outline mb-3">
                    <label for="productName" class="form-label">Product Name</label>
                    <input type="text" class="form-control" id="productName" name="name" value="{{old('name')}}">

                </div>


                <!-- Descripción del Producto -->
                @error('description')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
                <div class="input-group input-group-outline mb-3">
                    <label for="productDescription" class="form-label">Descripción</label>
                    <textarea class="form-control" id="productDescription" rows="3" name="description" value="{{old('description')}}"></textarea>
                </div>

                <!-- Precio del Producto -->
                @error('price')
                    <small class="text-danger">{{ $message }}</small>
                @enderror

                    <div class="input-group input-group-outline mb-3">
                        <label for="productPrice" class="form-label">Price</label>
                        <input type="text" class="form-control" id="productPrice" name="price" step="0.01" value="{{old('price')}}">
                    </div>


                    <!-- Categoría del Producto -->
                    @error('category')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    <div class="input-group input-group-outline mb-3">
                        <select class="form-control" id="productCategory" name="category" value ="{{old('category')}}">
                            <option selected disabled>-- Category --</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Marca del Producto -->
                    @error('brand')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                        <div class="input-group input-group-outline mb-3">
                            <select class="form-control" id="productBrand" name="brand" value ="{{old('name')}}">
                                <option selected disabled>-- Brand --</option>
                                @foreach ($brands as $brand)
                                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Botón de Envío -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Add Producto</button>
                        </div>


                    </form>

                </div>
            </div>


        @endsection

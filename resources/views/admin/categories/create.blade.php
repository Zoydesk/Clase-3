@extends('admin.layouts.app')

@section('content')
    <h1>Crear Categoría</h1>

    <div class="p-4">
        <div class="card">
            <div class="card-body">
                <form action="{{route('admin.categories.store')}}" method="post">
                    @csrf
                    <div class="input-group input-outline mb-4">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <input type="submit" class="btn bg-gradient-succes" name="Save"
                </form>
            </div>
        </div>
    </div>
@endsection



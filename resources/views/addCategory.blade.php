@include('navbar')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="container mt-5">
        <h1 class="text-center">Add Category</h1>
        <form action="{{route('storeCategory')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="productName">Category Name</label>
                <input type="text" class="form-control"  name="name" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Category</button>
        </form>
    </div>
@include('navbar')
<div class="container mt-5">
        <h1 class="text-center">Add Product</h1>
        <form action="#" method="POST">
            @csrf
            <div class="form-group">
                <label for="productName">Product Name</label>
                <input type="text" class="form-control" id="productName" name="name" required>
            </div>
            <div class="form-group">
                <label for="productDescription">Product Description</label>
                <textarea class="form-control" id="productDescription" name="description" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="productPrice">Product Price</label>
                <input type="number" class="form-control" id="productPrice" name="price" required>
            </div>
            <div class="form-group">
                <label for="productCategory">Product Category</label>
                <select class="form-control" id="productCategory" name="category_id" required>
                    <!-- Categories options should be populated here -->
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Add Product</button>
        </form>
    </div>
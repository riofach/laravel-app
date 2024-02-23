<x-Template title="Product">
    @slot('body')
        <form class="row g-3" method="POST" action="{{ route('product.store') }}">
            {{-- @csrf guna keamanan bawaan laravel --}}
            @csrf
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name">
                <!-- error message untuk title -->
                @error('name')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Price</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price"
                    name="price">

                @error('price')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Stock</label>
                <input type="text" class="form-control @error('stock') is-invalid @enderror" id="stock"
                    name="stock">

                @error('stock')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-6 my-5">
                <button type="submit" class="btn btn-primary">Add Product</button>
            </div>
        </form>
    @endslot
</x-Template>

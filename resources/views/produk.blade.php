<x-Template title="Product">
    @slot('body')
        @if ($message = Session::get('success'))
            <div class="alert alert-info d-flex align-items-center" role="alert">
                <strong>{{ $message }}</strong>
                <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <a class="fancy my-2" href="{{ route('product.create') }}">
            <span class="top-key"></span>
            <span class="text">Add Product</span>
            <span class="bottom-key-1"></span>
            <span class="bottom-key-2"></span>
        </a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Product</th>
                    <th>Harga</th>
                    <th>Stock</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                {{-- $key untuk nomor dimulai dari 0, agar start 1 tambahin ++$key --}}
                @foreach ($product as $key => $prd)
                    <tr>
                        <th>{{ ++$key }}</th>
                        <td>{{ $prd->name }}</td>
                        <td>Rp. {{ $prd->price }}</td>
                        <td>{{ $prd->stock }}</td>
                        <td class="d-flex align-items-center">
                            <a href="{{ route('product.edit', $prd->id) }}">
                                <button class="btn btn-warning">Edit</button>
                            </a>
                            <form action="{{ route('product.delete', $prd->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger mx-2">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endslot
</x-Template>

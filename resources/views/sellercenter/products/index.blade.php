@extends('layouts.sellercenter')

@section ('content')
{{-- View Product--}}
{{-- Ghie jasper --}}
{{-- <style>

.product-info {
    display: flex;
    align-items: center;
}

.item-image {
    width: 100px;
    height: 100px;
    background-color: #ddd;
    border-radius: 5px;
    overflow: hidden;
    margin-right: 10px;
}

.item-image img {
    width: 100%;
    height: auto;
}

.product-details p {
    margin: 0;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}


</style> --}}
        {{-- <div class="row">
            <div class="col-md-12">
                @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h3>Your Products
                            <a href="{{ url('sellercenter/products/create') }}" class="btn btn-danger text-white float-end">Add products</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive"> <!-- Wrap table in responsive div -->
                            <table class="table table-stripped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Category</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                            <tbody>
                        <tr>
                            <td>
                                <div class="product-info">
                                    <div class="item-image"><!-- Placeholder for product image -->
                                    </div>
                                    <div class="product-details">
                                        <p>Product Name</p>

                                    </div>
                                </div>
                            </td>

                            <td>Product Category Here</td>
                            <td>Product Price Here</td>
                            <td>Quantity of Products Here</td>
                            <td>Product Status Here</td>

                            <td>
                                <button class="btn btn-primary text-white " style="padding-left: 21px; padding-right: 19px;">Edit</button>
                                <button class="btn btn-danger text-white " style="padding: 12px;">Delete</button>
                            </td>

                        </tr>

                        <tr>
                            <td>
                                <div class="product-info">
                                    <div class="item-image"><!-- Placeholder for product image -->
                                    </div>
                                    <div class="product-details">
                                        <p>Product Name</p>

                                    </div>
                                </div>
                            </td>

                            <td>Product Category Here</td>
                            <td>Product Price Here</td>
                            <td>Quantity of Products Here</td>
                            <td>Product Status Here</td>

                            <td>
                                <button class="btn btn-primary text-white " style="padding-left: 21px; padding-right: 19px;">Edit</button>
                                <button class="btn btn-danger text-white " style="padding: 12px;">Delete</button>
                            </td>

                        </tr>

                        <tr>
                            <td>
                                <div class="product-info">
                                    <div class="item-image"><!-- Placeholder for product image -->
                                    </div>
                                    <div class="product-details">
                                        <p>Product Name</p>

                                    </div>
                                </div>
                            </td>

                            <td>Product Category Here</td>
                            <td>Product Price Here</td>
                            <td>Quantity of Products Here</td>
                            <td>Product Status Here</td>

                            <td>
                                <button class="btn btn-primary text-white " style="padding-left: 21px; padding-right: 19px;">Edit</button>
                                <button class="btn btn-danger text-white " style="padding: 12px;">Delete</button>
                            </td>

                        </tr>


                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> --}}


    <div class="row">
        <div class="col-md-12">
            @if (session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>Products
                        <a href="{{ url('sellercenter/products/create')}}" class="btn btn-primary text-white float-end">Add products</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-stripped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                {{-- <th>Seller Name</th> --}}
                                <th>Category</th>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Status</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($products as $product)
                            <tr>

                                <td>{{ $product->id }}</td>
                                {{-- <td>{{ $product->user->name }}</td> <!-- Access the user's name --> --}}



                                <td> @if ($product->category)
                                    {{ $product->category->name }}
                                    @else
                                     No Category
                                @endif

                                </td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->selling_price }}</td>
                                <td>{{ $product->quantity }}</td>
                                <td>{{ $product->status == '1' ? 'hidden':'Visible' }}</td>
                                <td>
                                    <a href="{{ url('sellercenter/products/'.$product->id.'/edit') }}" class="btn btn-success">Edit</a>
                                    <a href="{{ url('sellercenter/products/'.$product->id.'/delete') }}" onclick="return confirm('Are you sure, you want to delete this data? There is no way back!')" class="btn btn-danger">Delete</a>
                                </td>



                            </tr>
                            @empty
                            <tr>
                                <td colspan="7">No. Products Available</td>
                            </tr>
                            @endforelse

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>




@endsection



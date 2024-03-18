@extends('layouts.sellercenter')

@section ('content')




<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Add Products
                    <a href="{{ url('sellercenter/products')}}" class="btn btn-danger text-white float-end">Back</a>
                </h4>
            </div>
            <div class="card-body">

                @if ($errors->any())
                <div class="alert alert-warning">
                    @foreach ($errors->all() as $errors)
                    <div>{{ $errors }}</div>

                    @endforeach

                </div>
                @endif

                <form action="{{ url('sellercenter/products') }}" method="POST" enctype="multipart/form-data">
                    @csrf


                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Home</button>
                    </li>
                    {{-- SEO TAGS --}}
                    {{-- <li class="nav-item" role="presentation">
                      <button class="nav-link" id="seotag-tab" data-bs-toggle="tab" data-bs-target="#seotag-tab-pane" type="button" role="tab" aria-controls="seo-tab-pane" aria-selected="false">SEO Tags</button>
                    </li> --}}
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="details-tab" data-bs-toggle="tab" data-bs-target="#details-tab-pane" type="button" role="tab" aria-controls="details-tab-pane" aria-selected="false">Details</button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="image-tab" data-bs-toggle="tab" data-bs-target="#image-tab-pane" type="button" role="tab" aria-controls="image-tab-pane" aria-selected="false">Product Image</button>
                      </li>

                      {{-- <li class="nav-item" role="presentation">
                        <button class="nav-link" id="color-tab" data-bs-toggle="tab" data-bs-target="#color-tab-pane" type="button" role="tab" aria-controls="image-tab-pane" aria-selected="false">Product Color</button>
                      </li> --}}


                  </ul>
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade border p-3 show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                        <div class="mb-3">
                            <label>Category</label>
                            <select name="category_id" class="form-control">

                                @foreach ($categories as $category)

                                <option value="{{ $category->id }}"> {{  $category->name }}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="mb-3">
                            <label>Product Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>

                        {{-- Product slug --}}
                        {{-- <div class="mb-3">
                            <label>Product Slug</label>
                            <input type="text" name="slug" class="form-control">
                        </div> --}}

                        <div class="mb-3">
                            <label>Select Brand</label>
                            <select name="brand" class="form-control">

                                @foreach ($brands as $brand)

                                <option value="{{ $brand->name }}"> {{  $brand->name }}</option>
                                @endforeach

                            </select>
                        </div>

                        {{-- Small desc --}}
                        {{-- <div class="mb-3">
                        <label>Small Description (500 Words)</label>
                        <textarea name="small_description" class="form-control" rows="10"></textarea>
                        </div> --}}

                        <div class="mb-3">
                        <label>Description</label>
                        <textarea name="description" class="form-control" rows="10"></textarea>
                        </div>


                    </div>

                    {{-- SEO TAGS --}}
                    {{-- <div class="tab-pane fade border p-3" id="seotag-tab-pane" role="tabpanel" aria-labelledby="seotag-tab" tabindex="0">

                        <div class="mb-3">
                            <label>Meta title</label>
                            <input type="text" name="meta_title" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Meta Description</label>
                            <textarea name="meta_description" class="form-control" rows="10"></textarea>
                        </div>

                        <div class="mb-3">
                            <label>Meta Keyword</label>
                            <textarea name="meta_keyword" class="form-control" rows="10"></textarea>
                        </div>

                    </div> --}}

                    <div class="tab-pane fade border p-3" id="details-tab-pane" role="tabpanel" aria-labelledby="details-tab" tabindex="0">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">

                                    <div class="mb-3">
                                        <label>Original price</label>
                                        <div class="input-group">
                                            <span class="input-group-text">₱</span>
                                            <input type="number" step="0.01" name="original_price" class="form-control">
                                        </div>
                                    </div>


                                    <div class="mb-3">
                                        <label>Selling price</label>
                                        <div class="input-group">
                                            <span class="input-group-text">₱</span>
                                            <input type="number" step="0.01" name="selling_price" class="form-control">
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label>Quantity</label>
                                        <input type="text" name="quantity" class="form-control">
                                    </div>

                                    <div class="mb-3"  style="display: none;"   >
                                        <label>Trending</label>
                                        <input type="checkbox" name="trending" checked>
                                    </div>

                                    {{-- <div class="mb-3">
                                        <label>Status</label>
                                        <input type="checkbox" name="status" >
                                    </div> --}}

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade border p-3" id="image-tab-pane" role="tabpanel" aria-labelledby="image-tab" tabindex="0">
                        <div class="mb-3">
                            <label>Upload Product Images</label>
                            <input type="file" name="image[]" multiple class="form-control"/>

                        </div>

                    </div>

                    <div class="tab-pane fade border p-3" id="color-tab-pane" role="tabpanel" aria-labelledby="color-tab" tabindex="0">
                        <div class="mb-3">
                            <label>Select Color</label>

                            <div class="row">
                                @forelse ($colors as $coloritem)
                                <div class="col-md-3">
                                    <div class="p-2 border mb-2">
                                         Color: <input type="checkbox" name="colors[{{ $coloritem->id }}]" value="{{ $coloritem->id }}" />
                                        {{ $coloritem->name }}
                                        <br/>
                                        Quantity: <input type="number" name="colorquantity[{{ $coloritem->id }}]" style="width:70px; border:1px solid"/>
                                    </div>

                                </div>

                                @empty
                                <div class="col-md-12">
                                    <h1>No colors Found</h1>
                                </div>

                                @endforelse

                            </div>


                        </div>

                    </div>
                  </div>

                  <div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                  </div>

                </form>

            </div>
        </div>
    </div>
</div>
@endsection

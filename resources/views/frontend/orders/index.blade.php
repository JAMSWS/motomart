@extends('layouts.app')

@section('title', 'Orders | Motomart')

@section('content')

<div class="py-3 py-md-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="shadow bg-white p-3">
                    <h4 class="mb-4"> My Orders</h4>

                    <hr>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Tracking No.</th>
                                    <th>Username</th>
                                    <th>Payment Mode</th>
                                    <th>Ordered date</th>
                                    <th>Status Message</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($orders as $items)
                                <tr>
                                    <td>{{ $items->id }}</td>
                                    <td>{{ $items->tracking_no }}</td>
                                    <td>{{ $items->fullname }}</td>
                                    <td>{{ $items->payment_mode }}</td>
                                    <td>{{ $items->created_at->format('d-m-y') }}</td>
                                    <td>{{ $items->status_message }}</td>
                                    <td><a href="{{ url('orders/'.$items->id) }}" class="btn btn-primary btn-small"> View</a></td>

                                </tr>
                                @empty
                                <tr>
                                    <td colspan="7">No Orders Available</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>

                        <div>
                            {{ $orders->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

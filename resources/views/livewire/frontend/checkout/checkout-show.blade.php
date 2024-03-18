<div>
    <div class="py-3 py-md-4 checkout bg-white">
        <div class="container">
            <h4>Checkout</h4>
            <hr>

            @if ($this->totalProductAmount != '0')

            {{-- Iterate over cart items --}}
            <div class="row row-cols-1 row-cols-md-2 g-4">
                @foreach ($cart as $cartItem)
                    <div class="col">
                        <div class="card h-100">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset($cartItem->product->productImages[0]->image) }}" class="img-fluid" alt="Product Image">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body d-flex flex-column justify-content-between">
                                        <div>
                                            <h5 class="card-title">{{ $cartItem->product->name }}</h5>
                                            <p class="card-text">Price: ₱{{ $cartItem->product->selling_price }}</p>
                                            <p class="card-text">Quantity: {{ $cartItem->quantity }}</p>
                                            <p class="card-text">Total: ₱{{ $cartItem->product->selling_price * $cartItem->quantity }}</p>
                                        </div>
                                        {{-- <button wire:click="removeCartItem({{ $cartItem->id }})" class="btn btn-danger btn-sm mt-2">Remove</button> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row">
                <div class="col-md-12 mb-4">
                    <div class="shadow bg-white p-3">
                        <h4 class="text-primary">
                            Item Total Amount :
                            <span class="float-end">₱{{ number_format($this->totalProductAmount, 2) }}</span>
                        </h4>
                        <hr>
                        <small class="text-success">* You can claim this item directly to the store!</small>
                        <br/>
                        <small></small>
                    </div>
                </div>
            </div>
                <div class="col-md-12">
                    <div class="shadow bg-white p-3">
                        <h4 class="text-primary">
                            Basic Information
                        </h4>
                        <hr>

                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label>Full Name</label>
                                    <input type="text" wire:model.defer="fullname" id="fullname" class="form-control" placeholder="Enter Full Name" />
                                    @error('fullname')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Phone Number (Ex. 09123456789)</label>
                                    <input type="number" wire:model.defer="phone" id="phone" class="form-control" placeholder="Enter Phone Number" />
                                    @error('phone')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Email Address</label>
                                    <input type="email" wire:model.defer="email"  id="email" class="form-control" placeholder="Enter Email Address" />
                                    @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Zip-Code (Ex. 1234)</label>
                                    <input type="number" wire:model.defer="pincode" id="pincode" class="form-control" placeholder="Enter Pin-code" />
                                    @error('pincode')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label>Full Address</label>
                                    <textarea wire:model.defer="address"  id="address" class="form-control" rows="2"></textarea>
                                    @error('address')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-3"  wire:ignore>
                                    <label>Payment Mode: </label>
                                    <div class="d-md-flex align-items-start">
                                        <div class="nav col-md-3 flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <button class="nav-link active fw-bold" id="cashOnDeliveryTab-tab" data-bs-toggle="pill" data-bs-target="#cashOnDeliveryTab" type="button" role="tab" aria-controls="cashOnDeliveryTab" aria-selected="true">Online Payment</button>

                                            {{-- <button class="nav-link fw-bold" id="onlinePayment-tab" data-bs-toggle="pill" data-bs-target="#onlinePayment" type="button" role="tab" aria-controls="onlinePayment" aria-selected="false">Online Payment</button> --}}
                                        </div>
                                        <div class="tab-content col-md-9" id="v-pills-tabContent">
                                            <div class="tab-pane active show fade" id="onlinePayment" role="tabpanel" aria-labelledby="cashOnDeliveryTab-tab" tabindex="0">
                                                <h6>Online Payment Mode</h6>
                                                <hr/>
                                                <button type="button" wire:click='OnlinePaymentOrder' class="btn btn-success">Pay Now (GCash)</button>
                                                <div>
                                                    {{-- <div id="paypal-button-container"></div> --}}
                                                </div>

                                            </div>
                                            {{-- <div class="tab-pane fade" id="onlinePayment" role="tabpanel" aria-labelledby="onlinePayment-tab" tabindex="0">
                                                <h6>Online Payment Mode</h6>
                                                <hr/>
                                                <button type="button" class="btn btn-warning">Pay Now (Online Payment)</button>
                                            </div> --}}
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </form>

                    </div>
                </div>


            </div>
            @else
            <div class="card card-body shadow text-center p-md-5">
                <h4>No items in Cart </h4>
                <a href="{{ url('collections') }}" class="btn btn-warning"> Shop now</a>
            </div>
            @endif
        </div>
    </div>
</div>



@push('scripts')

    <script src="https://www.paypal.com/sdk/js?client-id=AR1uUemv-ktV_uOlUpWEJ19yFepBjsk1zVODcfSKzgpZJtWMPf_WZLjXqdvx1ov8hyU28RYvnwHfjjId&currency=PHP"></script>





    <script>
        paypal.Buttons({
             onClick: function () {
                 if (!document.getElementById('fullname').value
                   || !document.getElementById('phone').value
                   || !document.getElementById('email').value
                   || !document.getElementById('pincode').value
                   || !document.getElementById('address').value
               )
               {
                   Livewire.dispatch('validationForAll');
                   return false;
               }
               else
               {
                   @this.set('fullname', document.getElementById('fullname').value);
                   @this.set('phone', document.getElementById('phone').value);
                   @this.set('email', document.getElementById('email').value);
                   @this.set('pincode', document.getElementById('pincode').value);
                   @this.set('address', document.getElementById('address').value);
               }
             },

             createOrder: (data, action) => {
                return action.order.create({
                    purchase_units: [{
                        amount: {
                            value:  '0.1'  //{{ $this->totalProductAmount }}
                        }
                    }]
                });
             },

             onApprove: (data, actions) => {
                return actions.order.capture().then(function(orderData){
                    console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                    const transaction = orderData.purchase_units[0].payments.captures[0];
                    //  alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee sonsole for all available details`);

                    if(transaction.status == "COMPLETED")
                    {
                        Livewire.dispatch('transactionDispatch', transaction.id);

                       // alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee sonsole for all available details`);

                    }




                });
             }
            }).render('#paypal-button-container')


    </script>

    {{-- <script>
        paypal.Buttons({
        onClick: function () {
            if (!document.getElementById('fullname').value ||
                !document.getElementById('phone').value ||
                !document.getElementById('email').value ||
                !document.getElementById('pincode').value ||
                !document.getElementById('address').value
            ) {
                Livewire.dispatch('validationForAll');
                return false;
            } else {
                @this.set('fullname', document.getElementById('fullname').value);
                @this.set('phone', document.getElementById('phone').value);
                @this.set('email', document.getElementById('email').value);
                @this.set('pincode', document.getElementById('pincode').value);
                @this.set('address', document.getElementById('address').value);
            }
        },

        createOrder: (data, actions) => {
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value:  '0.1'  // Initial hardcoded value, will be updated later
                    }
                }]
            });
        },

        onApprove: (data, actions) => {
            return actions.order.capture().then(function(orderData){
                console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                const transaction = orderData.purchase_units[0].payments.captures[0];
                Livewire.emit('transactionDispatch', transaction.id  ); // Emitting the Livewire event
            });
        }
        }).render('#paypal-button-container');

        // Listening for the Livewire event to update the order amount
        Livewire.dispatch('updateOrderAmount', (amount) => {
            // Update the order amount in the PayPal button
            paypal.Buttons().updateProps({
                createOrder: function(data, actions) {
                    return actions.order.create({
                        purchase_units: [{
                            amount: {
                                value: amount // Update the value to the new amount
                            }
                        }]
                    });
                }
            });
        });
    </script> --}}






@endpush

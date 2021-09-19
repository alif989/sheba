@include('partial.header_cart')

<section class="section-pagetop bg-dark">
        <div class="container clearfix">
            <h2 class="title-page">Checkout</h2>
        </div>
    </section>
    <!-- ========================= SECTION INTRO END// ========================= -->
    <section class="section-content bg padding-y">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <header class="card-header">
                            <h4 class="card-title mt-2">Billing Details</h4>
                        </header>
                        <form method="post" action="{{url('place_order')}}">
                        @csrf
                        <article class="card-body">
                           
                                <div class="form-row">
                                    <div class="col form-group">
                                        <label>First name</label>
                                        <input type="text" name="first_name" class="form-control" placeholder="" required>
                                    </div>
                                    <div class="col form-group">
                                        <label>Last name</label>
                                        <input type="text" name="last_name" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" name='address' class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Mobile Number</label>
                                    <input type="text" name="mobile_number" class="form-control" placeholder="" required>
                                </div>
                        </article>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <header class="card-header">
                                    <h4 class="card-title mt-2">Your Order</h4>
                                </header>
                                <?php // dd($productIds) ?>
                                <table class="table table-hover">
                                    <thead class="">
                                        <tr>
                                            <th scope="col">Product</th>
                                            <th scope="col" width="12">Quantity</th>
                                            <th scope="col" width="12">Unit Price</th>
                                            <th scope="col" width="12">Total Price</th>
                                        </tr>
                                    </thead>
                                    @foreach($productIds as $key => $productId)
                                        
                                        <tr>
                                            <td>{{$porduct_arr[$productId]}}</td>
                                            <td>{{$totalQtys[$key]}}</td>
                                            <td>{{$salesPrice[$key]}}</td>
                                            <td>{{ $totalQtys[$key] * $salesPrice[$key]}}</td>
                                            <input type="hidden" id="product_id" name="product_id[]" value ="{{$productId}}" />
                                            <input type="hidden" id="sales_price" name="sales_price[]" value ="{{ $salesPrice[$key]}}" />
                                            <input type="hidden" id="total_qty" name="total_qty[]" value ="{{ $totalQtys[$key] }}" />

                                        </tr>
                                        
                                    @endforeach
                                    <tr>
                                    <input type="hidden" id="amount" name="amount" value ="{{ $totalPrice }}" />

                                        <td colspan="3">Total </td>
                                        <td >{{$totalPrice}}</td>  
                                    </tr>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                        <div class="col-md-12 mt-4">
                            <div class="card">
                                <header class="card-header">
                                    <h4 class="card-title mt-2">Payment Method</h4>
                                </header>
                                <article class="card-body">
                                    <label class="form-check">
                                      <input class="form-check-input" type="radio" name="payment_method" value="cod" required>
                                      <span class="form-check-label">
                                        COD
                                      </span>
                                    </label>
                                    <label class="form-check">
                                      <input class="form-check-input" type="radio" name="payment_method" value="online" required>
                                      <span class="form-check-label">
                                        Online Payment
                                      </span>
                                    </label>
                                </article>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <button  class="subscribe btn btn-success btn-lg btn-block" type="submit">Place Order</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </section>

    <section class="section-subscribe bg-primary padding-y-lg">
        <div class="container">

            <p class="pb-2 text-center white">Delivering the latest product trends and industry news straight to your inbox</p>

            <div class="row justify-content-md-center">
                <div class="col-lg-4 col-sm-6">
                    <form class="row-sm form-noborder">
                        <div class="col-8">
                            <input class="form-control" placeholder="Your Email" type="email">
                        </div>
                        <!-- col.// -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-block btn-warning"> <i class="fa fa-envelope"></i> Subscribe </button>
                        </div>
                        <!-- col.// -->
                    </form>
                    <small class="form-text text-white-50">We’ll never share your email address with a third-party. </small>
                </div>
                <!-- col-md-6.// -->
            </div>

        </div>
        <!-- container // -->
    </section>
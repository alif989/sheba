@include('partial.header_cart')
   
    <section class="section-pagetop bg-dark">
        <div class="container clearfix">
            <h2 class="title-page">Cart</h2>
        </div>
    </section>
    
    <section class="section-content bg padding-y border-top">
        <div class="container">
            <form method="post" action="{{url('checkout')}}">
                @csrf
                <div class="row">
                    <main class="col-sm-9">
                        <div class="card">
                            <table class="table table-hover">
                                <thead class="">
                                    <tr>
                                        <th scope="col">Product</th>
                                        <th scope="col" width="120">Quantity</th>
                                        <th scope="col" width="120">Unit Price</th>
                                        <th scope="col" width="120">Total Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php 
                                        $totalPrice = 0;
                                    @endphp
                                    @if(!empty($products))
                                        
                                        @foreach($products as $product)
                                            @php
                                            $totalPrice += $product->sales_price * $idCount[$product->id];
                                            @endphp 
                                            <tr>
                                                <td>
                                                    <figure class="media">
                                                        <div class="img-wrap"><img src="images/items/1.jpg" class="img-thumbnail img-sm"></div>
                                                        <figcaption class="media-body">
                                                            <h6 class="title text-truncate"> {{$product->name}}</h6>
                                                           <input type="hidden" id="product_id" name="product_id[]" value ="{{$product->id}}" />

                                                        </figcaption>
                                                    </figure>
                                                </td>
                                                <td>
                                                    {{$idCount[$product->id]}}
                                                    <input type="hidden" id="total_qty" name="total_qty[]" value ="{{ $idCount[$product->id] }}" />
                                                </td>
                                                <td>
                                                    <div class="price-wrap">
                                                        <var class="price">{{$product->sales_price}}</var>
                                                        <input type="hidden" id="sales_price" name="sales_price[]" value ="{{ $product->sales_price }}" />

                                                        <small class="text-muted">BDT</small>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="price-wrap">
                                                        <var class="price">{{$product->sales_price * $idCount[$product->id]}}</var>
                                                        <small class="text-muted">BDT</small>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    
                                </tbody>
                            </table>
                        </div>
                    </main>
                    <aside class="col-sm-3">
                        <dl class="dlist-align">
                            <dt>Total price: </dt>
                            <dd class="text-right" id="total_price">{{ $totalPrice ?? '' }} BDT</dd>
                            <input type="hidden" id="total_price" name="total_price" value ="{{ $totalPrice ?? '' }}" />
                        </dl>
                        <hr>
                        
                        <input type="submit" value="Proceed To Checkout" class="btn btn-success btn-lg btn-block">
                    </aside>
                </div>
            </form>
        </div>
        <script type="text/javascript">

        

       </script>
    </section>
</html>
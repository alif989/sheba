@include('partial.header_cart')
   
    <section class="section-pagetop bg-dark">
        <div class="container clearfix">
            <h2 class="title-page">Orders</h2>
            <h2 class="title-page">{{$message}}</h2>
        </div>
        
    </section>
    
    <section class="section-content bg padding-y border-top">
        <div class="container">
                <div class="row">
                    <main class="col-sm-9">
                        <div class="card">
                            <table class="table table-hover">
                                <thead class="">
                                    <tr>
                                        <th scope="col">Product</th>
                                        <th scope="col" width="120">Quantity</th>
                                        <th scope="col" width="120">payment_amount</th>
                                        <th scope="col" width="120">payment_method</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php 
                                      
                                    @endphp
                                    @if(!empty($orders))
                                        
                                        @foreach($orders as $order)
                                          
                                            <tr>
                                                <td>{{$order->product->name}}</td>
                                                <td>{{$order->total_qty}}</td>
                                                <td>
                                                    <div class="price-wrap">
                                                        <var class="price">{{$order->payment_amount}}</var>
                                                        <small class="text-muted">BDT</small>
                                                    </div>
                                                </td>

                                                <td>{{$order->payment_method}}</td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    
                                </tbody>
                            </table>
                        </div>
                    </main>
                </div>
        </div>
        <script type="text/javascript">

        

       </script>
    </section>
</html>
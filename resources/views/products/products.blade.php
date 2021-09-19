@include('partial.header')
<div class="new_arrivals">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <div class="section_title new_arrivals_title">
          <h2>New Arrivals</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>

          <!-- Product 1 -->

          @foreach($products as $product)
            <div class="product-item men">
              <div class="product discount product_filter">
                <div class="product_image">
                  <img src="assets/images/product_1.png" alt="">
                </div>
                <input type="hidden" val=""  id="product_id"  />
                <div class="product_info">
                  <h6 class="product_name"><a href="#">{{$product->name}}</a></h6>
                  
                  <div class="product_price">BDT {{$product->sales_price}} <span></span></div>
                </div>
              </div>
              <div class="red_button add_to_cart_button" data-product_id="{{$product->id}}"  id="add_to_cart_button_{{$product->id}}"><a href="#">add to cart</a></div>
            </div>
            
          @endforeach

         
        </div>
      </div>
    </div>
  </div>
</div>



<!-- Best Sellers -->



<!-- Benefit -->



<script>
	var productIds = [];
	$(document).ready(function() {
		var count = 0;
		$("#checkout_items").text(count);
		

			$(".add_to_cart_button").on("click",function() {
				count +=1 ;
				var productId = $(this).data("product_id");

				productIds.push(productId);

				$("#checkout_items").text(count);
				
			});

	});
	$("#cart_id").on("click",function() {
		console.log(productIds);
		window.location = "{{URL::to('cart/')}}" +"/"+ productIds;
	});
</script>
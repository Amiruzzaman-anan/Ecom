<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Showroom - </title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<style type="text/css">
.center{
margin: auto;
width: 50%;
text-align:center;
padding: 30px;
}

table,th,td{

border: 1px solid grey;
}


.th_deg{
font-size: 30px;
padding:5px;
background:skyblue;
 
} 

</style>



   </head>


   <body>
   <div class="hero_area">
         
         @include('home.header')

         <div class="center">
        <table>
<tr>

<th class="th_deg">Product Title</th>
<th class="th_deg">Quantity</th>
<th class="th_deg">Price</th>
<th class="th_deg">Payment Status</th>
<th class="th_deg">Delivery Status</th>
<th class="th_deg">Image</th>
<th class="th_deg">Change Order</th>



</tr>
@foreach($order as $order)
<tr>
<td>{{$order->product_title}}</td>
<td>{{$order->quantity}}</td>
<td>{{$order->price}}</td>
<td>{{$order->payment_status}}</td>
<td>{{$order->delivery_status}}</td>
<td><img src="product/{{$order->image}}" height="100" width="180" ></td>

@if($order->delivery_status=='processing')
<td><a onclick="return confirm('Are you sure to cancel this order !!!')" href="{{url('cancel_order',$order->id)}}" class="btn btn-danger">Cancel Order</a></td>

@else
<td><p style="color:blue;">Cannot Cancel Now</p></td>

@endif


</tr>
@endforeach

</table>





</div>






     
  
     

      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>





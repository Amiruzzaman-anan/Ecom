<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.css')


  <style type="text/css">
    .div_center{
        text-align: center;
        padding-top: 40px;
    }

    .city {
  font-size: 40px;
  padding-bottom: 40px;
}

.text_color{

    color: black;
    padding-bottom: 20px;
}



.div_design{
    padding-bottom: 15px;
    
}


.title_deg{

text-align: center;
font-size: 25px;
font-weight: bold;
padding-bottom: 40px;
}

.table_deg{

    border: 2px solid white;
    width:100%;
    margin:auto;
    padding-top: 50px;
    text-align: center;
}

.th_deg{

background-color:skyblue;
padding: 10px;

}
    </style>
  </head>
  <body>
    <div class="container-scroller">
    
    @include('admin.sidebar')
    @include('admin.header')

    <div class="main-panel">
          <div class="content-wrapper">
  
        <h2 class="title_deg">All Orders</h2>


        <div style="padding-left: 400px; padding-bottom: 30px;">
<form action="{{url('search')}}" method="get">
@csrf

<input class="text_color" type="text" name="search" placeholder="Search for Order">
<input type="submit" value="search" class="btn btn-outline-primary">
</form>


        </div>

        <table class="table_deg">
        <tr>
        <th class="th_deg">Name</th>
        <th class="th_deg">Email</th>
        <th class="th_deg">Address</th>
        <th class="th_deg">Phone</th>
        <th class="th_deg">Product Title</th>
        <th class="th_deg">Quantity</th>  
        <th class="th_deg">Price</th>
        <th class="th_deg">Payment Status</th>
        <th class="th_deg">Delivery Status</th>
        <th class="th_deg">Image</th>
        <th class="th_deg">Action</th>
        <th class="th_deg">Print PDF</th>
    </tr>

    @forelse($order as $order)
    <tr>
    <td>{{$order->name}}</td>
    <td>{{$order->email}}</td>
    <td>{{$order->address}}</td>
    <td>{{$order->phone}}</td>
    <td>{{$order->product_title}}</td>
    <td>{{$order->quantity}}</td>
    <td>৳ {{$order->price}}</td>
    <td>{{$order->payment_status}}</td>
    <td>{{$order->delivery_status}}</td>
    <td><img src="product/{{$order->image}}" height="100" width="180" ></td>

    @if($order->delivery_status=='processing')
    <td><a href="{{url('delivered',$order->id)}}" onclick="return confirm('Are you sure this product is delivered !!!')" class="btn btn-primary">Delivered</a></td>


    @else
    <td><p style="color:green;">Delivered</p></td>

    @endif
   
    <td><a href="{{url('print_pdf',$order->id)}}" class="btn btn-secondary">Print PDF</a></td>

    
    </tr>

    @empty
<tr>
<td colspan="16">No Data Found</td>

</tr>

    @endforelse
        </table>

</div>
</div>
</div>


    @include('admin.script')
      <!-- partial -->
     
        <!-- partial -->
       
    <!-- container-scroller -->
    <!-- plugins:js -->
   
  </body>
</html>
<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.css')



  <style type="text/css">
  .center{
    margin:auto;
    width: 50%;
    text-align:center;
    margin-top: 40px;
    border: 2px solid white;


}

.city {
    text-align: center;
  font-size: 40px;
  padding-bottom: 40px;
}

.img_size{
width: 350px;
height: 100px;

}

.th_color{
background:skyblue;
}

.th_deg{
padding: 30px;
}
    </style>

  </head>
  <body>
    <div class="container-scroller">
    
    @include('admin.sidebar')
    @include('admin.header')


    <div class="main-panel">
          <div class="content-wrapper">

          @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{session()->get('message')}}

            </div>

            @endif

          <h2 class="city">All Products</h2>
<table class="center">

<tr class="th_color">
<th class="th_deg">Product Title</th>
<th class="th_deg">Description</th>
<th class="th_deg">Quantity</th>
<th class="th_deg">Brand</th>
<th class="th_deg">Price</th>
<th class="th_deg">Discount Price</th>
<th class="th_deg">Product Image</th>
<th class="th_deg">Delete</th>
<th class="th_deg">Edit</th>

</tr>


@foreach($product as $product)
<tr>
    <td>{{$product->title}}</td>
    <td>{{$product->description}}</td>
    <td>{{$product->quantity}}</td>
    <td>{{$product->brand}}</td>
    <td>৳{{$product->price}}</td>
    <td>৳{{$product->discount_price}}</td>
    <td><img src="/product/{{$product->image}}" alt="" class="img_size"></td>
    <td> <a onclick="return confirm('Are you sure to delete this')" class="btn btn-danger" href="{{url('delete_product',$product->id)}}">Delete</a> </td>
    <td> <a class="btn btn-success" href="{{url('update_product',$product->id)}}">Edit</a> </td>

</tr>
@endforeach




</table>

          </div>
    </div>

    @include('admin.script')
      <!-- partial -->
     
        <!-- partial -->
       
    <!-- container-scroller -->
    <!-- plugins:js -->
   
  </body>
</html>
@extends('layout.master')
@section('content')
@if (session('ZINUTE'))
  <div class="alert alert-success">
    {{session('ZINUTE')}}
  </div>

@endif
<br>
<br>
<div class="row">

@foreach ($dish as $ey)

<div class="col-sm-4 md-4" style="width: 18rem;">
  <img class="card-img-top" src="{{$ey->image_url}}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$ey->title}}</h5>
    <p class="card-text">{{$ey->description}}</p>
    <a href="{{route('singledish',$ey->id)}}" class="btn btn-primary">More Details</a>

    <form class="" action="{{route('addToCart')}}" method="post">
      @csrf
      <input type="hidden" name="id" value="{{$ey->id}}">
    <button type="submit"  class="btn btn-danger">ADD TO CART</a>
    </form>
  <button data-id="{{$ey->id}}" type="button" class="carts btn btn-success btn-product"><span class="glyphicon glyphicon-shopping-cart"></span> Add JSON Cart</button>
  <a href="{{route('add.cart', $ey->id)}}"  class="btn btn-danger">ADD TO NEW CART</a>

  </div>
</div>
@endforeach
<button id="asd" type="button" name="button">asd</button>
</div>


    {{-- <tr>


  <td>{{$ey->title}}</td>
  <td>{{$ey->description}}</td>
  <td>{{$ey->image_url}}</td>
  <td>{{$ey->price}}</td>
  <td>{{$ey->main_id}}</td>

    </tr>


  </table> --}}

  <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
       <script type="text/javascript">
          $(document).ready(function () {
              $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });

              $('#asd').click (function () {
                alert('asd');
              });
              $('button.carts').click(function () {
                  var dish_id = $(this).data('id');
                  var url = "/cart";
                  console.log('preke ideta');

                  $.ajax({
                      type:'Post',
                      url: url,
                      data:{id:dish_id},
                      dataType:'json',
                      success: function (data) {
                          console.log(data);
                          $('#total').html(data.totalQty);
                      },
                      error: function (data){
                          console.log('Error:', data);
                      }

                  });
              });
          });
      </script>
@endsection

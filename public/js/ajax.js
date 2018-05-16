//
// let totalItems = 0;
// $('.jquery').on('click', function(event) {
//   event.preventDefault();
//   totalItems++;
//   $('#jquery').html(totalItems);
// });


$('.jquery').on('click', function(event) {
  event.preventDefault();
  let dish = $(this).data('dish');
$.ajax({
  type: 'GET',
  url: '/addDishAjax/' + dish,
  dataType: 'json',
  header: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },
  success: function(data){
    console.log(data['items']);

    $('#jquery').html(data.items.length);
  },
  error: function(data){
    console.log(data['items']);
  },
})
});

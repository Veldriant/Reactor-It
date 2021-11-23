let data = Array.from(document.querySelectorAll('.tz-gallery .portfolio-item')),
    step = 6,
    item = 0;

data.slice(step).forEach(e => e.style.display = 'none');
item += step;

document.querySelector('#more').addEventListener('click', function(e){
  let tmp = data.slice(item, item + step);
  tmp.forEach(e => e.style.display = 'block');
  item += step;

  if(tmp.length < 1)
    this.remove();
});

$( document ).ready(function() {
  $('#contactForms').on('submit', function(e){
      e.preventDefault();
      $.ajax({
        url: '/feedback',
        data: $("#contactForms").serialize(),
        type: 'POST',
        dataType: 'json',
      })
  });
});




$( document ).ready(function() {
  $( document ).ready(function() {
        console.log( "document loaded" );
    });

    $( window ).on( "load", function() {
        console.log( "window loaded" );
    });
});







//
//
// $('#contactForms').on('submit',function(event){
//        event.preventDefault();
//
//        let name = $('#name').val();
//        let email = $('#email').val();
//        let msg = $('#msg').val();
//
//        $.ajax({
//          url: "/index",
//          type:"POST",
//          data:{
//            "_token": "{{ csrf_token() }}",
//            name:name,
//            email:email,
//            msg:msg,
//          },
//          success:function(response){
//            console.log(response);
//          },
//         });
//        });

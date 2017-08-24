

// $('#search').keyup(function(){

// $.ajax({
//    url: '/getcity',
//    data: {
//       format: 'json'
//    },
//    error: function() {
//       $('#update').html('<p>An error has occurred</p>');
//    },
//    dataType: 'jsonp',
//    success: function(data) {
//       var $name = $('<h1>').text(data.talks[0].name);
//       $('#update')
//          .append($name)
//    },
//    type: 'GET'
// });
// });






// function search_data(search_value) {
//     $.ajax({
//         url: '/getcity/' + search_value,
//         method: 'POST'
//     }).done(function(response){
//         $('#results').html(response); // put the returning html in the 'results' div
//     });
// }
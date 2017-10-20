<!DOCTYPE html>
<head>
  <title>Pusher Test</title>
  <script src="https://js.pusher.com/4.1/pusher.min.js"></script>
  <script src="{{asset('/js/bower_components/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('/js/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
  <script src="{{asset('/js/bower_components/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js')}}"></script>
    <style media="screen">
    .alert-minimalist {
      	background-color: rgb(241, 242, 240);
      	border-color: rgba(149, 149, 149, 0.3);
      	border-radius: 3px;
      	color: rgb(149, 149, 149);
      	padding: 10px;
      }
      .alert-minimalist > [data-notify="icon"] {
      	height: 50px;
      	margin-right: 12px;
      }
      .alert-minimalist > [data-notify="title"] {
      	color: rgb(51, 51, 51);
      	display: block;
      	font-weight: bold;
      	margin-bottom: 5px;
      }
      .alert-minimalist > [data-notify="message"] {
      	font-size: 80%;
      }
    </style>
    <body>
      <button type="button" name="button" id="show">Show</button>
    </body>
  <script>

    $("#show").click(function(){
      $.notifyDefaults({
      	url_target: "_self"
      });
      $.notify({
      	icon: 'https://randomuser.me/api/portraits/med/men/77.jpg',
      	title: 'Byron Morgan',
      	message: 'Momentum reduce child mortality effectiveness incubation empowerment connect.',
        url: "https://twitter.com/Mouse0270",
	      target: "_blank"
      },{
      	type: 'minimalist',
      	delay: 7000,
      	icon_type: 'image',
      	template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
      		'<a href="https://twitter.com/Mouse0270"><img data-notify="icon" class="img-circle pull-left">' +
      		'<span data-notify="title">{1}</span>' +
      		'<span data-notify="message">{2}</span></a>' +
      	'</div>',
        url: "https://twitter.com/Mouse0270",
	      target: "_self"
      });
    })
    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('7e60769bc3587cde5ee2', {
      cluster: 'ap1',
      encrypted: true
    });

    var channel = pusher.subscribe('hotel');
    channel.bind('booking', function(data) {
      $.notify({
      	icon: 'https://randomuser.me/api/portraits/med/men/77.jpg',
      	title: 'Byron Morgan',
      	message: 'Momentum reduce child mortality effectiveness incubation empowerment connect.',
        url: "https://twitter.com/Mouse0270",
	      target: "_blank"
      },{
      	type: 'minimalist',
      	delay: 7000,
      	icon_type: 'image',
      	template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
      		'<img data-notify="icon" class="img-circle pull-left">' +
      		'<span data-notify="title">{1}</span>' +
      		'<span data-notify="message">{2}</span>' +
      	'</div>'
      });
      // setTimeout(function () {
      //   $.notify('I have a progress bar', { showProgressbar: true });
      // }, 2000);
    });

    // $.notify({
    // 	icon: 'https://randomuser.me/api/portraits/med/men/77.jpg',
    // 	title: 'Byron Morgan',
    // 	message: 'Momentum reduce child mortality effectiveness incubation empowerment connect.'
    // },{
    // 	type: 'minimalist',
    // 	delay: 5000,
    // 	icon_type: 'image',
    // 	template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
    // 		'<img data-notify="icon" class="img-circle pull-left">' +
    // 		'<span data-notify="title">{1}</span>' +
    // 		'<span data-notify="message">{2}</span>' +
    // 	'</div>'
    // });
  </script>
</head>

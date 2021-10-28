<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Project</title>

    <link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.min.css')}}">
   
    <link rel="stylesheet" href="{{asset('public/frontend/css/customize.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
 
@include ('frontend.layouts.header')
@yield('content')
@include ('frontend.layouts.footer')
</section>
    <div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="gotoup">
					<img src=" {{asset('public/frontend/img/scrl.jpg')}}" style="width: 40px; height: 40px;">
				</div>
			</div>
		</div>
	</div>


    <!-- <script src="js/jquery-3.2.1.slim.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$(window).scroll(function(){
				if($(this).scrollTop()>300){
					$('.gotoup').fadeIn();
				}else{
					$('.gotoup').fadeOut();
				}
			});
			$('.gotoup').click(function(){
				$('html,body').animate({scrollTop:0},1000);
			});
		});
	</script>
	<script src="{{asset('public/frontend/js/popper.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
       
</body>
</html>
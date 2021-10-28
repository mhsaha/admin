@extends('frontend.layouts.master')
@section('content')
 <!-- Banner Section -->
 <section class="banner_part">
		<img src="{{asset('public/frontend/img/banner.jpg')}}" style="width: 100%">
	</section>

	
    <section class="news_event" style="background: #ddd;">
    <div class="container">
        <div class="row">
            <div class="col-md-3" style="padding-top:15px;">
                <h3 style="border-bottom:1px solid #000;width:85%"> News and Events</h3>
            </div>
            <div class="col-md-9" style="padding-top:15px;"">
                   <table class=" table table-striped table-bordered table-hover table-md table-warning table-responsive">
                <thead class="thead-dark">
                    <tr>
                        <th>SL</th>
                        <th>Date</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($news_event as $key => $news)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td width="17%">{{date('d-m-y',strtotime($news->date))}}</td>
                        <td> <img src="{{asset('public/upload/news_images/'.$news->image)}}" style="width:200px" ; height="120px"></td>
                        <td>{{$news->long_title}}</td>
                        <td><a href="{{route('news.event.details',$news->id)}}" class="btn btn-info">Details</a></td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>

</section>



</section>




</section>

@endsection
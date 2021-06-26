<style>
.cat-head
{
	font-family: 'Open Sans', sans-serif;
      font-style: normal;
      font-weight: 400;

}

ul.blog-sidebar-menu li:nth-child(even) {
background: #ecc807;
}

ul.blog-sidebar-menu li:nth-child(odd) {
background: #f7e898;
}
ul.blog-sidebar-menu li{

  transition: background-color 0.5s ease;
}

ul.blog-sidebar-menu li:hover{
    background: green;
    opacity: 0.7;
}

.list-group-item{
  text-align: center;
 
 
}
.list-group-item a{
  color:black;
}
.list-group-item a:hover{
  color:white;
}

</style>

@extends("app")

@section('head_title', trans('words.blog_title').' | '.getcong('site_name') )
@section('head_url', Request::url())

@section("content")
    <!--Breadcrumb Section-->

    <section class="breadcrumb-box" data-parallax="scroll" >
        <div class="inner-container container">
         
        </div>
    </section>
    <!--Breadcrumb Section-->
    
 
  <section class="main-container container">
<br><br>
<h1 style="text-align:center;font-family: Open Sans;"><b>Floorfly Blog: Be professional in handling properties in Bangladesh</b> </h1>
<br>
  	<aside class="col-sm-4">
    <!--  <div class="sidebar-box sidebar-blog-cat">-->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,300" rel="stylesheet" type="text/css">
		<h4 class="cat-head">All Categories</h4><br>
		<ul class="blog-sidebar-menu">

		    {{--@php $all_cats= \App\Blogcategory::all(); @endphp--}}
		    @foreach($allcategories as $result)
		     <li class="list-group-item" >
		        <a href="{{route('blog-category.single',['slug'=>$result->slug])}}" class="">{{$result->name}} <span  style="float:right; ">{{$result->blogs->count()}}</span>   </a>

		     @endforeach

		</ul>
		<!--</div>-->
    </aside>

    <div class="col-sm-8">
      <!-- Properties -->
      <div class="content-box">
      <section class="property-listing boxed-view clearfix" style="margin-top: 0px;padding: 0px;">
        <div class="inner-container clearfix">
          @if($blogs->count()>0)
              @foreach($blogs as $result)

          <div class="property-box col-xs-12 col-sm-6  wow fadeInUp">
<ul class="post-info-header list-inline">
                  
                  <li><p style="color: rgb(170, 170, 170);"> {{$result->created_at->format('j-F-Y')}}</p></li>
                </ul>
            <div class="inner-box" style="margin: 0px 20px 10px 10px;">
	          <a href="{{route('blog.single',['slug'=> $result->slug]) }}" class="img-container">

	            <img src="{{$result->feature}}" alt="{{$result->title}}">

	         
	          </a>
	          <div class="bottom-sec">
	            <a href="{{route('blog.single',['slug'=> $result->slug]) }}" class="title" style="font-size:14px;">{{ Str::limit($result->title,100) }}</a>
	          
	          <div class="desc" style="font-size:12px;">
	              {!! Str::limit($result->description,130) !!}
 <a href="{{route('blog.single',['slug'=> $result->slug]) }}" class="btn more-link" >Read More</a>
	            </div> 

	         
	          </div>
       

	         
	        </div>
          </div>

          @endforeach
          @else
            <h2  style="text-align:center"> Opps ! No Post Found. </h2>
            @endif
        </div>
        <!-- Pagination -->
        <div class="blog-pagination">
            {{ $blogs->links() }}
        </div>
        <!-- End of Pagination -->
      </section>
      </div>
      <!-- End of Properties -->
    </div>
  
  </section>

 
 
@endsection

@extends('main')

@section('styles')
<style>
.head{
	height: 200px;
}
</style>
@endsection

@section('title',' | Home')

@section('content')
<div class="row">
	<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img class="d-block w-100 head" src="https://scontent.fzag1-1.fna.fbcdn.net/v/t31.0-8/28619001_1855757341103328_5782338428699299521_o.jpg?oh=c33b91fae19e78111ad18b5c96d5eb94&oe=5B053510" alt="First slide">
	    	<div class="carousel-caption d-none d-md-block">
	    		<h5>Laravel page</h5>
	    		<p>Welcome to the laravel page!</p>
	    	</div>
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100 head" src="https://scontent.fzag1-1.fna.fbcdn.net/v/t31.0-8/28619001_1855757341103328_5782338428699299521_o.jpg?oh=c33b91fae19e78111ad18b5c96d5eb94&oe=5B053510" alt="Second slide">
	    	<div class="carousel-caption d-none d-md-block">
	    		<h5>Laravel page</h5>
	    		<p>Welcome to the laravel page!</p>
	    	</div>
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100 head" src="https://scontent.fzag1-1.fna.fbcdn.net/v/t31.0-8/28619001_1855757341103328_5782338428699299521_o.jpg?oh=c33b91fae19e78111ad18b5c96d5eb94&oe=5B053510" alt="Third slide">
	    	<div class="carousel-caption d-none d-md-block">
	    		<h5>Laravel page</h5>
	    		<p>Welcome to the laravel page!</p>
	    	</div>
	    </div>
	  </div>
	</div>
</div>

<div class="row">
	<div class="mt-3 col-lg-3 col-md-4 col-sm-6 col-xs-12" align="center">	
		<div class="thumbnail">
	    <img src="https://cloudprod.triand.com/njsimg/production/item/0017/2289/temp_png_document/graphblank31_png-fullscreen.png?1348237370" alt="...">
	    <div class="caption">
	      <h3>Thumbnail label</h3>
	    </div>
	  </div>
	</div>
	<div class="mt-3 col-lg-3 col-md-4 col-sm-6 col-xs-12" align="center">
		<div class="thumbnail">
	    <img src="https://cloudprod.triand.com/njsimg/production/item/0017/2289/temp_png_document/graphblank31_png-fullscreen.png?1348237370" alt="...">
	    <div class="caption">
	      <h3>Thumbnail label</h3>
	    </div>
	  </div>
	</div>
	<div class="mt-3 col-lg-3 col-md-4 col-sm-6 col-xs-12" align="center">
		<div class="thumbnail">
	    <img src="https://cloudprod.triand.com/njsimg/production/item/0017/2289/temp_png_document/graphblank31_png-fullscreen.png?1348237370" alt="...">
	    <div class="caption">
	      <h3>Thumbnail label</h3>
	    </div>
	  </div>
	</div>
	<div class="mt-3 col-lg-3 col-md-4 col-sm-6 col-xs-12" align="center">
		<div class="thumbnail">
	    <img src="https://cloudprod.triand.com/njsimg/production/item/0017/2289/temp_png_document/graphblank31_png-fullscreen.png?1348237370" alt="...">
	    <div class="caption">
	      <h3>Thumbnail label</h3>
	    </div>
	  </div>
	</div>
</div>
@endsection
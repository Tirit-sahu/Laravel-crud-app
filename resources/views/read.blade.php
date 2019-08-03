@include('inc/header')
	<div class="container">
		<div class="row">
			<legend>Read Article</legend>
			<p class="lead">{{$articles->title}}</p>
			<p>{{$articles->description}}</p>
			<br><br>
		</div>
	</div>
@include('inc/footer')
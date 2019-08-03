@include('inc.header')
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<form class="form-horizontal" method="post" action="{{ url('/edit', array($articles->id)) }}">
          {{csrf_field()}}
  <fieldset>
    <legend>Laravel crud</legend>
    @if(count($errors) > 0)
        @foreach($errors->all() as $error)
          <div class="alert alert-danger">
            {{$error}}
          </div>
        @endforeach
    @endif
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Title</label>
      <div class="col-lg-10">
        <input type="text" name="title" value="<?php echo $articles->title; ?>" class="form-control" id="inputEmail" placeholder="Title">
      </div>
    </div>
    
    <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Description</label>
      <div class="col-lg-10">
        <textarea name="description" placeholder="Description" class="form-control" rows="3" id="textArea"><?php echo $articles->description; ?></textarea>
      </div>
    </div>
    
    
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ url('/') }}" class="btn btn-default">Back</a>
      </div>
    </div>
  </fieldset>
</form>
			</div>
		</div>
	</div>
@include('inc.footer')
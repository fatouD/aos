
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ApiPhotos</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
  </head>
  <body>
<div class="container">

	<div class="row">

		<div class="col-md-8 col-md-offset-2">

			<div class="panel panel-primary">

				<div class="panel-heading">

					<h1>Upload new Image</h1>

				</div>

				<div class="panel-body">



					<form method="POST" action="{{ url('/upload') }}" enctype="multipart/form-data">

						{{ csrf_field() }}

						<div class="form-group">

							<label for="image" >Image:</label>

							<input type="file" name="photo" id="photo">

						</div>

						<div class="form-group">

							<label for="desc" >Description</label>

							<textarea name="description" id="description" class="form-control" placeholder="Description..."></textarea>

						</div>

						<div class="form-group">

							<button action="submit" class="btn btn-primary">Upload</button>

						</div>

					</form>



				</div>

			</div>

			

		</div>

	</div>

</div>
</body>
</html>
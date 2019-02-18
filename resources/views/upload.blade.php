
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ApiPhotos</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
<style>
            html, body {
                background-color: #677179;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;

            }

            .container {
                text-align: center;

            }

            .title {
                font-size: 84px;
                color: white;
            }

            .links  {
                color: white;
                padding: 0 25px;
                font-size: 75px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .form-control{color:black;}

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>

  </head>
  <body>
<div class="container">

	<div class="row">

		<div class="col-md-8 col-md-offset-2">

			<div class="panel panel-primary">

				<div class="panel-heading">

					<h1 class="links">Charger une nouvelle photo</h1>

				</div>

				<div class="panel-body">



					<form method="POST" action="{{ url('/upload') }}" enctype="multipart/form-data">

						{{ csrf_field() }}

						<div class="form-group">

							<label for="image" >Image:</label>

							<input type="file" name="photo" id="photo"><br><br>

						</div>

						<div class="form-group">

							<label for="desc" >Description</label>

							<textarea name="description" id="description" 
							 style="width: 300px;height:75px;" class="form-control" placeholder="Description..."  ></textarea><br><br>

						</div>

						<div class="form-group">

							<button action="submit" class="btn btn-primary">Charger</button>

						</div>

					</form>



				</div>

			</div>

			

		</div>

	</div>

</div>
</body>
</html>
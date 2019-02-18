@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">tableau de bord </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                      
        <form method="POST"  action="{{ route('store') }}">
           {{ csrf_field() }}
           <label>Nom</label> <input type="text" name="name">
           <label>Description</label> <input type="text" name="description">
            
            <input type="submit" value="Creer" />

        </form><br><br><br>

                   

     <a href="album">Voir un album</a>   
                                    

</div>




            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        <h1 class="display-4">Hello, world!</h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <hr class="my-4">
        <p>
            <?php 
                for ($i=0; $i < 10; $i++) { 
                    echo " It uses utility classes for typography and spacing to space content out within the larger container.</p>
           ";
                }
                ?>
            <p class="lead">
          <a class="btn btn-primary btn-lg" href="#" role="button">Login</a>
          <a class="btn btn-secondary btn-lg" href="#" role="button">Register</a>
        </p>
    </div>
@endsection
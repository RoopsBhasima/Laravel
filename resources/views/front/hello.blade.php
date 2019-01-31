@extends('master')
@section('content')
 <h1 class="btn btn-primary">I am Hello Blade</h1>
    @for($i=1;$i<=10;$i++)
    <br>{{$i}}
    @endfor

    <?php
    //Palin PHP
    echo "<br>";
    echo date('Y-m-d h:i:s');
    ?>
    @endsection

    @section('title')
    This is a title
    @endsection

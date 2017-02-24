@extends('layouts.app')
@section('title','Create')
@section('content')

<section class="content">
    <h1>
        Create stock
    </h1>
    <form method = 'get' action = '{!!url("stock")!!}'>
        <button class = 'btn btn-danger'>stock Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!!url("stock")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="Item">Item</label>
            <input id="Item" name = "Item" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="Description">Description</label>
            <input id="Description" name = "Description" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="Supplier">Supplier</label>
            <input id="Supplier" name = "Supplier" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="Actual">Actual</label>
            <input id="Actual" name = "Actual" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="Lower_level">Lower_level</label>
            <input id="Lower_level" name = "Lower_level" type="text" class="form-control">
        </div>
        <button class = 'btn btn-primary' type ='submit'>Create</button>
    </form>
</section>
@endsection

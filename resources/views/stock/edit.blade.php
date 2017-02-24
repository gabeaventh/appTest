@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Edit stock
    </h1>
    <form method = 'get' action = '{!!url("stock")!!}'>
        <button class = 'btn btn-danger'>stock Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("stock")!!}/{!!$stock->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="Item">Item</label>
            <input id="Item" name = "Item" type="text" class="form-control" value="{!!$stock->
            Item!!}"> 
        </div>
        <div class="form-group">
            <label for="Description">Description</label>
            <input id="Description" name = "Description" type="text" class="form-control" value="{!!$stock->
            Description!!}"> 
        </div>
        <div class="form-group">
            <label for="Supplier">Supplier</label>
            <input id="Supplier" name = "Supplier" type="text" class="form-control" value="{!!$stock->
            Supplier!!}"> 
        </div>
        <div class="form-group">
            <label for="Actual">Actual</label>
            <input id="Actual" name = "Actual" type="text" class="form-control" value="{!!$stock->
            Actual!!}"> 
        </div>
        <div class="form-group">
            <label for="Lower_level">Lower_level</label>
            <input id="Lower_level" name = "Lower_level" type="text" class="form-control" value="{!!$stock->
            Lower_level!!}"> 
        </div>
        <button class = 'btn btn-primary' type ='submit'>Update</button>
    </form>
</section>
@endsection
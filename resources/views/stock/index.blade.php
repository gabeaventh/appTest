@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Stock Index
    </h1>
    <form class = 'col s3' method = 'get' action = '{!!url("stock")!!}/create'>
        <button class = 'btn btn-primary' type = 'submit'>Create New stock</button>
    </form>
    <br>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>Item</th>
            <th>Description</th>
            <th>Supplier</th>
            <th>Actual</th>
            <th>Lower_level</th>
            <th>Progress</th>
        </thead>
        <tbody>
            @foreach($stocks as $stock)
            <tr>
                <td>{!!$stock->Item!!}</td>
                <td>{!!$stock->Description!!}</td>
                <td>{!!$stock->Supplier!!}</td>
                <td>{!!$stock->Actual!!}</td>
                <td>{!!$stock->Lower_level!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/stock/{!!$stock->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/stock/{!!$stock->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/stock/{!!$stock->id!!}'><i class = 'material-icons'>info</i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!! $stocks->render() !!}

</section>
@endsection

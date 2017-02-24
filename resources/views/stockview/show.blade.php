@extends('layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show stock
    </h1>
    <br>
    <form method = 'get' action = '{!!url("stock")!!}'>
        <button class = 'btn btn-primary'>stock Index</button>
    </form>
    <br>
    <table class = 'table table-bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td>
                    <b><i>Item : </i></b>
                </td>
                <td>{!!$stock->Item!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Description : </i></b>
                </td>
                <td>{!!$stock->Description!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Supplier : </i></b>
                </td>
                <td>{!!$stock->Supplier!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Actual : </i></b>
                </td>
                <td>{!!$stock->Actual!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Lower_level : </i></b>
                </td>
                <td>{!!$stock->Lower_level!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection

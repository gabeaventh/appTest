<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Stock;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class StockController.
 *
 * @author  The scaffold-interface created at 2017-02-04 01:24:32pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class StockViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - stock';
        $stocks = Stock::paginate(6);
        return view('stockview.index',compact('stocks','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - stock';

        return view('stockview.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $stock = new Stock();


        $stock->Item = $request->Item;


        $stock->Description = $request->Description;


        $stock->Supplier = $request->Supplier;


        $stock->Actual = $request->Actual;


        $stock->Lower_level = $request->Lower_level;



        $stock->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new stock has been created !!']);

        return redirect('stockview');
    }

    /**
     * Display the specified resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {
        $title = 'Show - stock';

        if($request->ajax())
        {
            return URL::to('stockview/'.$id);
        }

        $stock = Stock::findOrfail($id);
        return view('stock.show',compact('title','stockview'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - stock';
        if($request->ajax())
        {
            return URL::to('stockview/'. $id . '/edit');
        }


        $stock = Stock::findOrfail($id);
        return view('stockview.edit',compact('title','stockview'  ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $stock = Stock::findOrfail($id);

        $stock->Item = $request->Item;

        $stock->Description = $request->Description;

        $stock->Supplier = $request->Supplier;

        $stock->Actual = $request->Actual;

        $stock->Lower_level = $request->Lower_level;


        $stock->save();

        return redirect('stockview');
    }

    /**
     * Delete confirmation message by Ajaxis.
     *
     * @link      https://github.com/amranidev/ajaxis
     * @param    \Illuminate\Http\Request  $request
     * @return  String
     */
    public function DeleteMsg($id,Request $request)
    {
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/stock/'. $id . '/delete');

        if($request->ajax())
        {
            return $msg;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param    int $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     	$stock = Stock::findOrfail($id);
     	$stock->delete();
        return URL::to('stockview');
    }
}

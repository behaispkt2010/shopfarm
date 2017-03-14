<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductUpdatePrice;
use DateTime;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class HistoryInputController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(!empty($request->get('date'))){
            $date = $request->get('date');
//            dd($date);
            $productUpdatePrice=ProductUpdatePrice::where(DB::raw("(DATE_FORMAT(created_at,'%d-%m-%Y'))"),$date)
                ->paginate(6);
            $data=[
                'productUpdatePrice'=>$productUpdatePrice,
                'date'=>$date,
            ];
            return view('admin.historyInput.edit',$data);
        }
        elseif(!empty($request->get('from'))){

            $from = $request->get('from');
            $to = $request->get('to');

            $productUpdatePrice = ProductUpdatePrice::groupBy(DB::raw("DATE(created_at)"))
                ->selectRaw('sum(price_in) as sum_price_in')
                ->selectRaw('sum(price_out) as sum_price_out')
                ->selectRaw('count(*) as count')
                ->selectRaw('sum(number) as sum_number')
                ->selectRaw('created_at')
                ->whereBetween('created_at', array(new DateTime($from), new DateTime($to)))
                ->paginate(6);
//        dd($productUpdatePrice);
            $data = [
                'productUpdatePrice' => $productUpdatePrice,
            ];
            return view('admin.historyInput.index', $data);
        }
        else {
            $productUpdatePrice = ProductUpdatePrice::groupBy(DB::raw("DATE(created_at)"))
                ->selectRaw('sum(price_in) as sum_price_in')
                ->selectRaw('sum(price_out) as sum_price_out')
                ->selectRaw('count(*) as count')
                ->selectRaw('sum(number) as sum_number')
                ->selectRaw('created_at')
                ->paginate(6);
//        dd($productUpdatePrice);
            $data = [
                'productUpdatePrice' => $productUpdatePrice,
            ];
            return view('admin.historyInput.index', $data);
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

//        return view('admin.historyInput.edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function search(Request $request){

    }
}

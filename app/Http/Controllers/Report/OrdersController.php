<?php
namespace App\Http\Controllers\Report;

use App\Order;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PDF\PDFController as CommonPdf;
use Request,PDF,PdfMerger;
use DB,Response,App,Session,File,Redirect;

class OrdersController extends PDFController {

 /**
  * Index
  * -----------------------------------------------
  * @author      :   
  * @param       :   null
  * @return      :   null
  * @access      :   public
  * @see         :   remark
  */
	public function getIndex(){
      $arrAllOrders = Order::select('orders.*', 'users.address', 'users.province', 'users.name', 'users.phone_number')
              ->leftJoin('users', 'orders.customer_id', '=', 'users.id')
              ->orderBy('id','DESC')
              ->paginate(9);
      return view('reports.pdf.orders.index',compact('arrAllOrders'));
    }
}

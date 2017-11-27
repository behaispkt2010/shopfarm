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
  * @author      :   ANS798     - 2016/11/01 - create
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
       $customer = \DB::table('Customer as c')
                    ->select(
                            'c.LastName'
                            ,'c.FirstName'
                            )
                    ->where('c.Id','=',$customer_id)
                    ->first();

        $data_origin           = $this->getDataContractChangeSheet($customer_id);
        //object to array
        //$data_origin    = json_decode(json_encode($data), true);
        //var_dump($data_origin);die();

        $customer_name  = !is_null($customer) ? $customer->LastName.$customer->FirstName.'_'.date('Ymd') :date('Ymd');
        $file_name_form = '変更届_'.$customer_name.'.pdf';
        $file_name_full = \Config::get('app.pdf_folder_temp').$file_name_form;
        $file_name_full = CommonPdf::getUTF8($file_name_full);

        $file = PDF::loadView('reports.pdf.contract_change.index', compact('data_origin','customer'))
            ->setPaper('a4', 'portrait')
            ->setWarnings(false)
            ->save($file_name_full);

        /*$merger = array(
                0 =>'退会届.pdf'
        );  
        $file_merge =  CommonPdf::getMergerPdfTemp(
            array(
                0 => $file_name_form,
            ),
            $merger 
        );*/
        //$file_to_view = $file_merge;
	    return CommonPdf::getShowPdfTemp($file_name_form);
    }

   /**
    * show
    * -----------------------------------------------
    * @author      :   ANS798     - 2016/11/01 - create
    * @param       :   null
    * @return      :   null
    * @access      :   public
    * @see         :   remark
    */
    public function show(){

      //click ok button after save in screen contract-change
       $dataInput = \Input::all();
       $dataInput  = array_map("trim", $dataInput);

       $customer_id  =  $dataInput['customer-id'];
       $seq_id       =  $dataInput['seqId'];
       $customer = \DB::table('Customer as c')
                    ->select(
                            'c.LastName'
                            ,'c.FirstName'
                            )
                    ->where('c.Id','=',$customer_id)
                    ->first();
        $data = $this->getDataContractChangeSheet($customer_id,$seq_id);

        $customer_name  = !is_null($customer) ? $customer->LastName.$customer->FirstName.'_'.date('Ymd') :date('Ymd');
        $file_name_form = '変更届_'.$customer_name.'.pdf';
        $file_name_full = \Config::get('app.pdf_folder_temp').$file_name_form;
        $file_name_full = CommonPdf::getUTF8($file_name_full);

        $file = PDF::loadView('reports.pdf.contract_change.index', compact('data','customer','dataInput'))
            ->setPaper('a4', 'portrait')
            ->setWarnings(false)
            ->save($file_name_full);
      return CommonPdf::getShowPdfTemp($file_name_form);
    }

   /**
    * getDataContractChangeSheet
    * -----------------------------------------------
    * @author      :   ANS798     - 2016/11/01 - create
    * @param       :   customer_id
    * @return      :   array
    * @access      :   public
    * @see         :   remark
    */
    public function getDataContractChangeSheet($customer_id,$seq_id){

       $data = \DB::table('ContractChange_sheet as ccs')
                ->leftJoin('Customer as c',function($join){
                     $join->on('ccs.Member__c',     '=', 'c.Id')
                          ->where('c.IsDeleted',    '=', 0);
                })
                ->leftJoin('Branch__c as br',function($join){
                     $join->on('ccs.Branch__c',     '=', 'br.Id')
                          ->where('br.IsDeleted',   '=', 0);
                })
                ->leftJoin('LibraryCode as lb_37',function($join){
                     $join->on('ccs.AnnualDiscount__c',     '=', 'lb_37.LibraryNo')
                          ->where('lb_37.LibraryCode', '=', 37)
                          ->where('lb_37.IsDeleted',   '=', 0);
                })
                ->leftJoin('Course__c as cs',function($join){
                     $join->on('ccs.Course__c',     '=', 'cs.Id')
                          ->where('cs.IsDeleted',    '=', 0);
                })
                ->leftJoin('CoursePrice__c as cp',function($join){
                     $join->on('ccs.CoursePrice',     '=', 'cp.Id')
                          ->where('cp.IsDeleted',    '=', 0);
                })
                ->leftJoin('LibraryCode as lb_9',function($join){
                     $join->on('ccs.Nanayo__c',     '=', 'lb_9.LibraryNo')
                          ->where('lb_9.LibraryCode', '=', 9)
                          ->where('lb_9.IsDeleted',   '=', 0);
                })
                ->leftJoin('LibraryCode as lb_10',function($join){
                     $join->on('ccs.SessionTime__c',     '=', 'lb_10.LibraryNo')
                          ->where('lb_10.LibraryCode', '=', 10)
                          ->where('lb_10.IsDeleted',   '=', 0);
                })

                ->select('ccs.Id'
                        ,DB::raw('IFNULL(ccs.Member__c, "") as Member__c')
                        ,DB::raw('IFNULL(ccs.Change_date, "") as Change_date')
                        ,DB::raw('IFNULL(ccs.AnnualDiscount__c, "") as AnnualDiscount__c')
                        ,DB::raw('IFNULL(ccs.Course__c, "") as Course__c')
                        ,DB::raw('IFNULL(ccs.CoursePrice, "") as CoursePrice')
                        ,DB::raw('IFNULL(ccs.Nanayo__c, "") as Nanayo__c')
                        ,DB::raw('IFNULL(ccs.SessionTime__c, "") as SessionTime__c')
                        ,DB::raw('IFNULL(ccs.ApplyMoney, "") as ApplyMoney')
                        ,DB::raw('IFNULL(ccs.Write__c, "") as Write__c')
                        ,DB::raw('IFNULL(ccs.WriteDate__c, "") as WriteDate__c')
                        ,DB::raw('IFNULL(ccs.Manager__c, "") as Manager__c')
                        ,DB::raw('IFNULL(ccs.ManagerDate__c, "") as ManagerDate__c')
                        ,DB::raw('IFNULL(c.FirstName, "") as FirstName')
                        ,DB::raw('IFNULL(c.LastName, "") as LastName')
                        ,DB::raw('IFNULL(lb_37.LibraryName, "") as AnnualDiscount_Nm')
                        ,DB::raw('IFNULL(cs.Name, "") as Course_Nm')
                        ,DB::raw('IFNULL(cp.Name, "") as CoursePrice_Nm')
                        ,DB::raw('IFNULL(lb_9.LibraryName, "") as DayOfWeek')
                        ,DB::raw('IFNULL(lb_10.LibraryName, "") as Time')
                        ,DB::raw('IFNULL(br.Name, "") as Branch_Nm')
                        ,DB::raw('IFNULL(ccs.CoursePriceName, "") as CoursePriceName')
                        )
                ->where('ccs.IsDeleted', '0')
                ->where('ccs.Member__c', $customer_id)
                ->where('ccs.CustomerDetail_SeqId', $seq_id)
                ->first();
        return $data;
    }
}

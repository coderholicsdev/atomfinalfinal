<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

use App\Models\Loan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoansController extends Controller
{
    public function apply_loan(Request $request){

        $this->validate($request,[
            'loan_amount'=>['required', 'max:7'],
            'tenure_type'=>'required',
            'tenure_duration'=>'required',
            'collateral_1'=>'required',

        ]);
        if ($request->loan_amount > 5000000){
            HelperController::flashSession(false, 'loan amount has exceeded the limit, please reduce and  try again');
            return redirect('/add');

        }
        if($request->tenure_type == "1"){
           $due_date= Carbon::now('Africa/lagos')->addDays($request->tenure_duration)->toDayDateTimeString();
        }
        else{
          $due_date= Carbon::now('Africa/lagos')->addMonths($request->tenure_duration)->toDayDateTimeString();

        }
        $Loan = new Loan();
        $Loan->loan_amount = $request->loan_amount;
        $Loan->user_id = auth('sanctum')->user()->id;
        $Loan->tenure_type = $request->tenure_type;
        $Loan->tenure_duration= $request->tenure_duration;
        $Loan->loan_state = "pending";
        $Loan->due_date=  $due_date;
        $interest_percentage = 20;
        $Loan->interest = ($interest_percentage / 100) * $Loan->loan_amount;

        if ($Loan->save()) {
            if($request->hasFile('collateral_1')){

                $image = $request->file('collateral_1');

                //Generate path and file name for file
                $upload_path=storage_path("app/public/storage/collateralimg");
                $filename=date("YmdHis").'.'.$image->getClientOriginalExtension();

                //move image from temp server folder
                $image->move($upload_path, $filename);

                //Save filename to db
                $Loan->collateral_1= $filename;
                $Loan->save();


            }
            if($request->hasFile('collateral_2')){
                $newimage = $request->file('collateral_2');

                //Generate path and file name for file
                $upload_path=storage_path("app/public/storage/collateralimg");
                $newfilename=date("YmdHis").'col2'.'.'.$newimage->getClientOriginalExtension();

                //move newimage from temp server folder
                $newimage->move($upload_path, $newfilename);

                //Save newfilename to db
                $Loan->collateral_2= $newfilename;
                $Loan->save();

            }
            if($request->hasFile('collateral_receipt')){
                $newimage = $request->file('collateral_receipt');

                //Generate path and file name for file
                $upload_path=storage_path("app/public/storage/collateralimg");
                $receiptfile=date("YmdHis").'rec'.'.'.$newimage->getClientOriginalExtension();

                //move newimage from temp server folder
                $newimage->move($upload_path, $receiptfile);

                //Save receiptfile to db
                $Loan->collateral_receipt= $receiptfile;
                $Loan->save();

            }

            HelperController::flashSession(true, 'loan details saved, we will get back to you soon');
            return redirect('/home');

        }
        HelperController::flashSession(false, 'Loan application failed, please try again');
    }
    public function getLoans(){
        $user = auth('sanctum')->user()->id;
        $loan_history = Loan::where('user_id',$user)->get();
//        dd($loan_history);
        if ($loan_history != null){
            $loan_amount_total= $loan_history->sum('loan_amount');
            $loan_interest_total= $loan_history->sum('interest');
            $total_loan = $loan_interest_total + $loan_amount_total;

            if($loan_history->due_date == Carbon::now('Africa/lagos')->toDayDateTimeString()){
                $loan = Loan::where('loan_state');
                $loan->loan_state ="overdue";
            }
            $role = Auth('sanctum')->user()->role;



            if($role == '100'){
                return view('admin');
            }else if($role == '1'){
                return view('home',["loan_history"=>$loan_history->all(), 'total_loan'=>$total_loan, 'loan_interest_total'=>$loan_interest_total, 'loan_amount_total'=>$loan_amount_total]);


            }else if($role == '2'){
                return redirect('admin/home');

            }


        }
        return view('home', ['loan_history'=>$loan_history]);



    }
}

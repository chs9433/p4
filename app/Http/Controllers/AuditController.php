<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Audit;
use App\Location;

class AuditController extends Controller
{
    //
    public function create($title='vAudit',$alert=NULL,Request $request)
    {
        #Create Table
        $audit_name='AUDIT-'.strtoupper($request['submarket']).'-'.$request['startDate'];
        $market=Location::select('market')->where('submarket','=',$request['submarket'])->first();
        $market=$market->market;
        $audit = new Audit();
        $audit->name=$audit_name;
        $audit->market=$market;
        $audit->submarket=$request['submarket'];
        $audit->audit_start_date=$request['startDate'];
        $audit->audit_end_date=$request['endDate'];
        $audit->lead_auditor=$request['leadAuditor'];
        $audit->guest_auditor=$request['guestAuditor'];
        $audit->rfe_sme=$request['rfeSME'];
        $audit->ehs_sme=$request['ehsSME'];
        $audit->audit_status='PLAN';
        $audit->save();

        $auditData=$audit;
        return view('alerts.create.success')->with(['title'=>$title,'auditData'=>$auditData,'alertReRoute'=>'/index']);
    }

    public function load($title='vAudit',$alert=NULL,Request $request)
    {
        $audit = new Audit();
        $auditID=$request['auditID'];
        $auditData = Audit::where('id','=',$auditID)->get()->toArray();
        return view('dashboard')->with(['title'=>$title,'auditData'=>$auditData[0]]);
    }


    public function delete($title='vAudit',$alert=NULL,Request $request)
    {
        $audit = new Audit();
        $auditID=$request['auditID'];
        $auditName=Audit::select('name')->where('id','=',$auditID)->first();
        $result = Audit::where('id','=',$auditID)->delete();
        return view('alerts.delete.success')->with(['title'=>$title,'result'=>$result,'auditID'=>$auditID,'auditName'=>$auditName->name,'alertReRoute'=>'/index']);
    }
}

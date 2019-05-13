<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Audit;

class AuditController extends Controller
{
    //
    public function create($title='vAudit',$alert=NULL,Request $request)
    {


        $arrInput=array(
            $request['submarket'],
            $request['startDate'],
            $request['endDate'],
            $request['leadAuditor'],
            $request['guestAuditor'],
            $request['rfeSME'],
            $request['ehsSME']
        );

        $audit_id=
        #Create Table
        $audit = new Audit();
        $audit->market='VZW Market';
        $audit->submarket=$request['submarket'];
        $audit->audit_start=$request['startDate'];
        $audit->audit_end=$request['endDate'];
        $audit->lead_auditor=$request['leadAuditor'];
        $audit->guest_auditor=$request['guestAuditor'];
        $audit->rfe_sme=$request['rfeSME'];
        $audit->ehs_sme=$request['ehsSME'];
        $audit->audit_status='PLAN';
        $audit->save();


        $formInput=json_encode($arrInput,JSON_PRETTY_PRINT);
        return view('alerts.success')->with(['title'=>$title,'formInput'=>$formInput,'alertReRoute'=>'/index']);
    }
    public function load($title='vAudit',$alert=NULL,Request $request)
    {
        $audit = new Audit();
        $audits = $audit->get();

    }
    public function update($title='vAudit',$alert=NULL,Request $request)
    {

    }
    public function delete($title='vAudit',$alert=NULL,Request $request)
    {

    }
}

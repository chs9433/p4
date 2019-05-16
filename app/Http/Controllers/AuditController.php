<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use App;
use App\Location;
use App\Audit;
use App\Site;

class AuditController extends Controller
{
    public function create($title='vAudit',$alert=NULL,Request $request)
    {
        # Data Validation Rules
        $validationRules=([
        'submarket' => 'required|string',
        'startDate' => 'required|date',
        'endDate' => 'required|date',
        'leadAuditor' => 'required|string',
        'guestAuditor' => 'required|string',
        'rfeSME' => 'required|string',
        'ehsSME' => 'required|string'
        ]);

        # Make the call to validate inputs
        $request->validate($validationRules);

        #Create Table
        $location = Location::select('id')->where('submarket','=',$request['submarket'])->first();
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
        $audit->location()->associate($location); #Associates a location with an audit
        $audit->save();
        $auditData=$audit;
        return view('alerts.create.success')->with(['title'=>$title,'auditData'=>$auditData,'alertReRoute'=>'/index']);
    }

    public function load($title='vAudit',$alert=NULL,Request $request)
    {
        # Data Validation Rules
        $validationRules=([
        'auditID' => 'required|string'
        ]);

        #Error Messages
        $errorMessages=([
        'auditID.required' => 'The \'Audit\' field is required.'
        ]);

        # Make the call to validate inputs
        $request->validate($validationRules,$errorMessages);

        #Loads Audit and Redirects the User to the 'Dashboard' View
        $audit = new Audit();
        $auditID=$request['auditID'];
        $auditData = Audit::where('id','=',$auditID)->get()->toArray();
        $sites=Site::select('name','city','state','tower_type','site_type')->where('submarket','=',$auditData[0]['submarket'])->get();
        return view('dashboard')->with(['title'=>$title,'auditData'=>$auditData[0],'sites'=>$sites]);
    }

    public function delete($title='vAudit',$alert=NULL,Request $request)
    {
        # Data Validation Rules
        $validationRules=([
        'auditID' => 'required|string'
        ]);

        #Error Messages
        $errorMessages=([
        'auditID.required' => 'The \'Audit\' field is required.'
        ]);

        # Make the call to validate inputs
        $request->validate($validationRules,$errorMessages);

        #Deletes Audit
        $audit = new Audit();
        $auditID=$request['auditID'];
        $auditName=Audit::select('name')->where('id','=',$auditID)->first();
        $result = Audit::where('id','=',$auditID)->delete();
        return view('alerts.delete.success')->with(['title'=>$title,'result'=>$result,'auditID'=>$auditID,'auditName'=>$auditName->name,'alertReRoute'=>'/index']);
    }
}

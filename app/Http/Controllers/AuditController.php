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
        'market' => 'required|string',
        'submarket' => 'required|string',
        'audit_start_date' => 'required',
        'audit_end_date' => 'required',
        'lead_auditor' => 'required|string',
        'guest_auditor' => 'required|string',
        'rfe_sme' => 'required|string',
        'ehs_sme' => 'required|string'
        ]);

        #Error Messages
        $errorMessages=([
        'market.required' => 'The \'Market\' field is required.',
        'submarket.required' => 'The \'Submarket\' field is required.',
        'audit_start_date.required' => 'The \'Audit Start Date\' field is required.',
        'audit_end_date.required' => 'The \'Audit End Date\' field is required.',
        'lead_auditor.required' => 'The \'Lead Auditor\' field is required.',
        'guest_auditor.required' => 'The \'Guest Auditor\' field is required.',
        'rfe_sme.required' => 'The \'RFE SME\' field is required.',
        'ehs_sme.reequired' => 'The \'EHS SME\' field is required.',
        ]);


        # Make the call to validate inputs
        $request->validate($validationRules,$errorMessages);

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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

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
        $formInput=json_encode($arrInput,JSON_PRETTY_PRINT);
        return view('alerts.success')->with(['title'=>$title,'formInput'=>$formInput,'alertReRoute'=>'/index']);
    }
    public function load($title='vAudit',$alert=NULL,Request $request)
    {

    }
    public function update($title='vAudit',$alert=NULL,Request $request)
    {

    }
    public function delete($title='vAudit',$alert=NULL,Request $request)
    {

    }
}

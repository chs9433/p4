<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\Audit;

class AppController extends Controller
{

    public function login($title='vAudit',$alert=NULL)
    {
        #Redirects to Login Form
        return view('login')->with(['title'=>$title,'alert'=>$alert]);
    }

    public function index($title='vAudit',$alert=NULL)
    {
        #Redirects to Index View
        return view('index')->with(['title'=>$title,'alert'=>$alert]);
    }

    public function create($title='vAudit')
    {
        #Redirects to Create Audit Form
        $submarkets = Location::select('submarket')->groupBy('submarket')->get();
        return view('forms.create.audit')->with(['title'=>$title,'submarkets'=>$submarkets]);
    }

    public function load($title='vAudit')
    {
        #Redirects to Load Audit Form
        $audits = Audit::orderBy('id')->select('id','name')->get();
        return view('forms.load.audit')->with(['title'=>$title,'audits'=>$audits]);
    }

    public function update($title='vAudit')
    {
        #Redirects to Update Audit Form
        $audits = Audit::orderBy('id')->select('id','name')->get();
        return view('forms.update.audit')->with(['title'=>$title,'audits'=>$audits]);
    }

    public function delete($title='vAudit')
    {
        #Redirects to Delete Audit Form
        $audits = Audit::orderBy('id')->select('id','name')->get();
        return view('forms.delete.audit')->with(['title'=>$title,'audits'=>$audits]);
    }

    public function processFormLogin(REQUEST $request,$title='vAudit',$alert=NULL)
    {
        #Process Login Form and Redirects to Main Index View
        $user=array();
        $user['uswin']=$request['uswin'];
        $user['fname']='Christopher';
        $user['lname']='Sheppard';
        $alert=json_encode($user,JSON_PRETTY_PRINT);
        return view('/index')->with(['title'=>$title,'alert'=>$alert, 'user'=>$user]);
    }

}

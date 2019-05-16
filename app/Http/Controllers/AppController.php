<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\Audit;

class AppController extends Controller
{
    //
    /**
* GET /books/{title}
*/
public function login($title='vAudit',$alert=NULL)
{
    return view('login')->with(['title'=>$title,'alert'=>$alert]);
}

public function index($title='vAudit',$alert=NULL)
{
    $viewName='Main Menu';
    return view('index')->with(['title'=>$title,'viewName'=>$viewName,'alert'=>$alert]);
}

public function create($title='vAudit')
{
    # Get data for authors in alphabetical order by last name
    $submarkets = Location::select('submarket')->groupBy('submarket')->get();
    return view('forms.create.audit')->with(['title'=>$title,'submarkets'=>$submarkets]);
}

public function load($title='vAudit')
{
    $audits = Audit::orderBy('id')->select('id','name')->get();
    return view('forms.load.audit')->with(['title'=>$title,'audits'=>$audits]);
}

public function update($title='vAudit')
{
    $audits = Audit::orderBy('id')->select('id','name')->get();
    return view('forms.update.audit')->with(['title'=>$title,'audits'=>$audits]);
}

public function delete($title='vAudit')
{
    $audits = Audit::orderBy('id')->select('id','name')->get();
    return view('forms.delete.audit')->with(['title'=>$title,'audits'=>$audits]);
}

public function loadPMTools($title='vAudit')
{
    return view('form.pmtools')->with(['title'=>$title]);
}

public function processFormLogin(REQUEST $request,$title='vAudit',$alert=NULL)
{
    # Get Data
    $user=array();
    $user['uswin']=$request['uswin'];
    $user['fname']='Christopher';
    $user['lname']='Sheppard';
    $alert=json_encode($user,JSON_PRETTY_PRINT);
    return view('/index')->with(['title'=>$title,'alert'=>$alert, 'user'=>$user]);
}

public function processProjectCreationRequest(REQUEST $request,$title='vAudit',$alert=NULL)
{
    # Get Data
    $arr = array('project_name'=>$request['varProjectName'],'project_sponsor'=>$request['varProjectSponsor']);
    $alert=json_encode($arr,JSON_PRETTY_PRINT);
    return view('welcome')->with(['title'=>$title,'alert'=>$alert]);
}
}

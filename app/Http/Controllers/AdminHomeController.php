<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Session;
use DB;
use Storage;
use Url;
use Mail;   
use Hash;

class AdminHomeController extends Controller
{
    public function __construct(Request $req){
        error_reporting(0);
        date_default_timezone_set('Asia/Jakarta');
        $this->request = $req;
    }

    public function index(){
        return view('admin.home');
    }
}

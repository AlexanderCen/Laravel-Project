<?php

namespace App\Http\Controllers;
use App\FAQ;

use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function gotoEducationpage(){
        return view('education');
    }

}

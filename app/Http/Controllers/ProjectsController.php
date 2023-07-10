<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectsModel;


class ProjectsController extends Controller
{
    function ProjectsPage(){

        $ProjectData= json_decode(ProjectsModel::orderBy('id','desc')->get());

        return view('Projects' , ['ProjectData'=>$ProjectData]);
    }
}

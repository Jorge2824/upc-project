<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ApiCoursesController extends Controller
{
    public function searchCourses(Request $request) {
        $name = $request->input('name');
        $data = DB::select("select * from courses");
        return $data;
    }
}

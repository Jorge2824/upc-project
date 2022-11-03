<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ApiCoursesController extends Controller
{
    public function searchCourses(Request $request) {
        $parent_id = $request["parent_id"];
        $statement = "select c.*, m.id parent_id from marks_by_course m join courses c on c.id = m.course_id
        where if(? = 0, m.parent_id is null, m.parent_id = ?)";
        $params = [$parent_id, $parent_id];
        $data = DB::select($statement, $params);
        return $data;
    }
}

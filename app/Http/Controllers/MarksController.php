<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MarksModel;

class MarksController extends Controller
{
    public function add_grade(Request $request)
    {
        $request->validate([
            "professor" => "string|required",
            "subject" => "string|required",
            "mark" => "int|required|min:1|max:5"
        ]);

        MarksModel::create([
            "professor" => $request->get("professor"),
            "subject" => $request->get("subject"),
            "mark" => $request->get("mark")
        ]);

        return redirect("/");
    }
}

<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EducationController extends Controller
{
    //

    function add_education(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'degree_name' => 'required',
        //     'institution_name' => 'required',
        //     'major' => 'required',
        //     'cgpa' => 'required',
        //     'passing_month' => 'required',
        //     'scale' => 'required',
        //     'passing_year' => 'required',
        //     'institution_url' => 'required'

        // ]);
        // if ($validator->fails()) {
        //     return response()->json(['errors' => $validator->errors()], 422);
        // }
        // $education = new Education();
        // $education->degree_name = $request->degree_name;
        // $education->institute_name = $request->institution_name;
        // $education->passing_year = $request->passing_year;
        // $education->major = $request->major;
        // $education->minor = $request->minor;
        // $education->minor = $request->minor;
        // $education->cgpa = $request->cgpa;
        // $education->cgpa_scale = $request->scale;
        // $education->passing_month = $request->passing_month;
        // $education->institution_address = $request->institution_address;
        // $education->institution_url = $request->institution_url;
        // $education->save();
        return response()->json(['success' => 'Data added successfully!'], 200);
    }

    function get_educations()
    {
        $educations = Education::all();
        if ($educations->isNotEmpty()) {
            return response()->json(['success' => true, 'data' => $educations], 200);
        }
        return response()->json(['error' => 'No data found'], 200);
    }

    function demoResponse()
    {
        $data = [
            "name" => "Alimul Mahfuz",
            "surname" => "Tushar",
            "education" => [
                "bsc" => "AIUB",
                "ssc" => "Isc"
            ]
        ];
        $collection=collect($data);
        return response()->json(['data'=>$data],200);
    
    }
}

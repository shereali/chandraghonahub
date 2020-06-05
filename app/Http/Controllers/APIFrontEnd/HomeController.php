<?php

namespace App\Http\Controllers\APIFrontEnd;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getUsers = User::select('passing_year')->groupBy('passing_year')->get();
        $data = array();
        foreach ($getUsers as $key=>$value){
            $data['userInfo'][$value->passing_year] = User::where('passing_year', $value->passing_year)->get();
        }
        return response()->json($data);
    }


    public function searchEngine(Request $request){

          User::where('name', 'like', '%' . $request->search_keywords . '%')
            ->orWhere('email', 'like', '%' . $request->search_keywords . '%')
            ->orWhere('age', 'like', '%' . $request->search_keywords . '%')
            ->orWhere('mobile_number', 'like', '%' . $request->search_keywords . '%')
            ->orWhere('gender', 'like', '%' . $request->search_keywords . '%')
            ->orWhere('institute', 'like', '%' . $request->search_keywords . '%')
            ->orWhere('department', 'like', '%' . $request->search_keywords . '%')
            ->orWhere('batch', 'like', '%' . $request->search_keywords . '%')
            ->orWhere('passing_year', 'like', '%' . $request->search_keywords . '%')
            ->orWhere('designation', 'like', '%' . $request->search_keywords . '%')
            ->orWhere('present_address', 'like', '%' . $request->search_keywords . '%')
            ->orWhere('permanent_address', 'like', '%' . $request->search_keywords . '%')
            ->orWhere('chandraghona_living_area', 'like', '%' . $request->search_keywords . '%')
            ->limit($this->defaultLimitTo)
            ->get();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['userinfo'] = User::find($id);
        $institutes = json_decode($data['userinfo']->institute);
        foreach ($institutes as $key=>$value) {
            if($value==1)
                $data['institutes'][$key] = 'K.P.M High School & College';
            else if($value==2)
                $data['institutes'][$key] = 'K.R.C High School';
            else if($value==3)
                $data['institutes'][$key] = 'Karnaphuli Sheshu Beddaloy';
            else if($value==4)
                $data['institutes'][$key] = 'Karnaphuli College';
            else if($value==4)
                $data['institutes'][$key] = 'Chittagong University';
        }
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function search(Request $request){
        if($search = $request->search){
            $getUsers = User::select('passing_year')->groupBy('passing_year')->get();
            foreach ($getUsers as $key=>$value) {
                $userInfo = User::where('passing_year', $value->passing_year)->where(function ($query) use ($search) {
                    $query->where('name', 'LIKE', "%$search%");
                    $query->orWhere('email', 'LIKE', "%$search%");
                    $query->orWhere('mobile_number', 'LIKE', "%$search%");
                    $query->orWhere('passing_year', 'LIKE', "%$search%");
                    $query->orWhere('present_address', 'LIKE', "%$search%");
                    $query->orWhere('batch', 'LIKE', "%$search%");
                })->get();
                if(count($userInfo)>0){
                    $data['userInfo'][$value->passing_year] = $userInfo;
                }
            }
        }else{
            $getUsers = User::select('passing_year')->groupBy('passing_year')->get();
            $data = array();
            foreach ($getUsers as $key=>$value){
                $data['userInfo'][$value->passing_year] = User::where('passing_year', $value->passing_year)->get();
            }
        }

        // $finalData = array_filter($data);
        return response()->json($data);
    }
}

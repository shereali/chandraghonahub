<?php

namespace App\Http\Controllers\APIBackend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function getCountryList(){
        $countries            = new Countries();
        $all_countries        = $countries->all();
        $data['country_info'] = [];

        foreach ($all_countries as $key => $val) {
            array_push($data['country_info'], [
                'name'       => $val['name']['common'],
                'currencies' => $val['currencies'] ?? [],
                'iso_a2'     => $val['iso_a2'],
                'iso_a3'     => $val['iso_a3'],
            ]);
        }
        return $data;
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
        //
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
}

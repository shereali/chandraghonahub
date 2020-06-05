<?php

namespace App\Http\Controllers\APIFrontEnd;

use App\User;
use Khsing\World\World;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Khsing\World\Models\Continent;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use PragmaRX\Countries\Package\Services\Countries;

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
        
        // $countries            = new Countries();
        //  $all_countries        = $countries->all();
        // $data['country_info'] = [];

        // foreach ($all_countries as $key => $val) {
        //     array_push($data['country_info'], [
        //         'name'       => $val['name']['common'],
        //         'currencies' => $val['currencies'] ?? [],
        //         'iso_a2'     => $val['iso_a2'],
        //         'iso_a3'     => $val['iso_a3'],
        //         'city'       => $val['capital']
        //     ]);
        // }

         $countries = DB::table('world_countries')->orderBy('name')->get();

        $data['country_list'] = [];
        foreach($countries as $key => $country){
            // $data['country_lists'] = $country->name;
            array_push($data['country_list'], [
                'id'           => $country->id,
                'country_name' => $country->name,
            ]);

        }
        
        return response()->json($data);
    }

    public function cityList($country_id){

        $cities = DB::table('world_cities')->where('country_id', $country_id)->orderBy('name')->get();

        $data['city_list'] = [];
        foreach($cities as $key => $city){
            
            array_push($data['city_list'], [
                'id'        =>$city->id,
                'city_name' => $city->name,
            ]);
        }
       
        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:191',
            'email' => 'required|string|max:191|email|unique:users',
            'mobile_number' => 'required|string|max:191|unique:users',
            // 'password' => 'required|string|max:191|min:8',
            // 'photo' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
            'photo' => 'required',
            'gender' => 'required',
            'age' => 'required',
            'department' => 'required',
            'chandraghona_living_area' => 'required',
        ]);

        $image = $request->input('photo'); // image base64 encoded
        preg_match("/data:image\/(.*?);/",$image,$image_extension); // extract the image extension
        $image = preg_replace('/data:image\/(.*?);base64,/','',$image); // remove the type part
        $image = str_replace(' ', '+', $image);
        $imageName = 'image_' . time() . '.' . $image_extension[1]; //generating unique file name;
        Storage::disk('public')->put($imageName,base64_decode($image));

        $institute = [];

        if($request->institute_1 == true){
            array_push($institute, 1);
        }
        if($request->institute_2 == true){
            array_push($institute, 2);
        }
        if($request->institute_3 == true){
            array_push($institute, 3);
        }
        if($request->institute_4 == true){
            array_push($institute, 4);
        }
        if($request->institute_5 == true){
            array_push($institute, 5);
        }

       $model = new User;

        $model->name                     = $request->name;
        $model->email                    = $request->email;
        $model->age                      = $request->age;
        $model->mobile_number            = $request->mobile_number;
        $model->gender                   = $request->gender;
        $model->profile_photo            = $imageName;
        $model->institute                = json_encode($institute);
        $model->department               = $request->department;
        $model->batch                    = $request->batch;
        $model->passing_year             = $request->passing_year;
        $model->designation              = $request->designation;
        $model->country_id               = $request->country_id;
        $model->city_id                  = $request->city_id;
        $model->present_address          = $request->present_address;
        $model->permanent_address        = $request->permanent_address;
        $model->chandraghona_living_area = $request->chandraghona_living_area;
        $model->password                 = Hash::make(12345678);
        $model->save();
        
        return response()->json([
            'success' => true,
            'message' => 'Congratulations! Your registration has been completed!'
        ]);
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

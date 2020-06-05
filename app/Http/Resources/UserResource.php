<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'age' => $this->age,
            'email' => $this->email,
            'mobile_number' => $this->mobile_number,
            'male' => $this->male,
            'institute_1' => $this->institute_1,
            'institute_2' => $this->institute_2,
            'department' => $this->department,
            'batch' => $this->batch,
            'passing_year' => $this->passing_year,
            'designation' => $this->designation,
            'country_name' => $this->country_name,
            'city_name' => $this->city_name,
            'present_address' => $this->present_address,
            'permanent_address' => $this->permanent_address,
            'chandraghona_living_area' => $this->chandraghona_living_area,
        ];
    }
}

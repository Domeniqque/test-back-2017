<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class DoctorResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "speciality" => $this->speciality,
            "phone" => $this->phone,
            "description" => $this->description,
            "photo" => asset($this->photo),
            "last_update" => $this->last_update,
        ];
    }
}

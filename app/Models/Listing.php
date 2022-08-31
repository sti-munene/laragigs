<?php

namespace App\Models;


class Listing
{
    public static function all()
    {
        return [
            [
                'id' => '1',
                'title' => 'Listing One',
                'desc' => 'Donec et molestie nisi. Nunc posuere venenatis eleifend.
             Aenean finibus ante quis euismod dignissim. Sed leo leo, dignissim 
             vel porttitor eget, gravida at massa. Cras ut porttitor ligula. 
             Sed mollis, ante sed scelerisque porttitor, tellus turpis laoreet 
             erat, viverra egestas sapien dui ullamcorper lectus.'
            ],
            [
                'id' => '2',
                'title' => 'Listing Two',
                'desc' => 'Donec et molestie nisi. Nunc posuere venenatis eleifend.
             Aenean finibus ante quis euismod dignissim. Sed leo leo, dignissim 
             vel porttitor eget, gravida at massa. Cras ut porttitor ligula. 
             Sed mollis, ante sed scelerisque porttitor, tellus turpis laoreet 
             erat, viverra egestas sapien dui ullamcorper lectus.'
            ]
        ];
    }

    public static function find($id)
    {
        $listings = self::all();

        foreach ($listings as $listing) {
            if ($listing['id'] == $id) {
                return $listing;
            }
        }
        return;
    }
}

<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class MenuModel extends Model
{
    //
    public $table = "menus";
    public static function getMenuLocations(){
        $locations =array();
        $locations[1]='Headder locarion';
        $locations[2]='Footer locarion1';
        $locations[3]='Footer locarion2';
        $locations[4]='Footer locarion3';
        return $locations;
    }


}

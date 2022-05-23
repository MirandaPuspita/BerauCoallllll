<?php

namespace App\Helper;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class Helpers
{
    public static function getGeoJson(string $table)
    {
        try {
            $result = DB::table($table, 't')->selectRaw("json_build_object('type', 'FeatureCollection', 'features', json_agg(st_asgeojson(t.*)::json)) as geojson")->first();
            return json_decode($result->geojson, true);
        } catch (\Throwable $th) {
            return null;
        }
    }

    public static function getColumns(string $table)
    {
        return Schema::getColumnListing($table);
    }
}

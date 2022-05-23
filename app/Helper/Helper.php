<?php

namespace App\Helper;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class Helper
{
    public static function getGeoJson(string $table)
    {
        try {
            $result = DB::table($table, 't')
                ->whereNotNull('geom')
                ->selectRaw("json_build_object(
                    'type', 'FeatureCollection',
                    'features', coalesce(json_agg(st_asgeojson(t.*)::json), '[]'::json)
                ) as geojson")->first();
            return json_decode($result->geojson, true);
        } catch (\Throwable $th) {
            logger()->error($th->getMessage());
            return null;
        }
    }

    public static function getColumns(string $table)
    {
        return Schema::getColumnListing($table);
    }
}

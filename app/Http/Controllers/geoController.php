<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class geoController extends Controller
{
    function geo () {

        $qry = ""; 
        $taken = false;

        if (isset($_GET["zip_code"])) {
            if (!$taken) {
                $qry = " zip_code = '".$_GET["zip_code"]."' ";
                $taken = true; 
            } else {
                $qry .= " AND zip_code = '".$_GET["zip_code"]."' ";
            }
        }
        echo($qry);
        if (isset($_GET["geo_code"])) {
            if (!$taken) {
                $qry = " geo_code = '".$_GET["geo_code"]."' ";
                $taken = true; 
            } else {
                $qry .= " AND geo_code = '".$_GET["geo_code"]."' ";
            }
        }
        if (isset($_GET["city_name"])) {
            if (!$taken) {
                $qry = " city_name = '".$_GET["city_name"]."' ";
                $taken = true; 
            } else {
                $qry .= " AND city_name = '".$_GET["city_name"]."' ";
            }
        }

        // Pagination
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        } else {
            $page = 1;
        }

        $no_of_records_per_page = 10;
        $offset = ($page-1) * $no_of_records_per_page;

        $sql = "SELECT * FROM geo_locations WHERE" . $qry . " LIMIT $offset, $no_of_records_per_page";
        
        $geoLocationslist = \DB::select($sql);

        return view('welcome', ['geoLocationslist' => $geoLocationslist, 'page' => $page, 'amount' => $no_of_records_per_page]);
    }
}

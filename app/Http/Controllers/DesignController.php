<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesignController extends Controller
{
    public function statusColour($status){

        $result = $status;
        switch ($status) {
            case 'active':
                $result = "success";
                break;
            case 'pending':
                $result = "warning";
                break;
            case 'closed':
                $result = "gray";
                break;
            case 'cancelled':
                $result = "danger";
                break;
        }

        return $result;

    }
}

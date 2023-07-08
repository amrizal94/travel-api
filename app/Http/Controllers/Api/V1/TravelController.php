<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\TravelResource;
use App\Models\Travel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TravelController extends Controller
{
    public function index(){
        $travels = Travel::where('is_public', true)->paginate();
        return TravelResource::collection($travels);
    }
}

<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\PromotionListResource;
use App\Http\Resources\PromotionShowResource;
use App\Models\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $peomotions = Promotion::list();
        $promotions = PromotionListResource::collection( $peomotions);
        return response (["success"=>true, "data"=>$promotions],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Promotion::store($request);
        return ["success" => true, "Message" =>"Promotion created successfully"];
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        $promotion = Promotion::find($id);
        $promotion = new PromotionShowResource($promotion);
        return ["success" => true, "data" => $promotion];
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        Promotion::store($request,$id);
        return ["success" => true, "Message" =>"Promotion updated successfully"];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $promotion = Promotion::find($id);
        $promotion->delete();
        return ["success" => true, "Message" =>"Promotion deleted successfully"];
    }
}

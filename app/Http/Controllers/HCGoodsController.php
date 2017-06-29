<?php namespace App\Http\Controllers;

use App\models\HCGoods;
use App\models\HCPriceRules;
use App\models\HCPriceRulesAffectedItems;
use Illuminate\Routing\Controller;

class HCGoodsController extends Controller
{

    /**
     * Display a listing of the resource.
     * GET /hcgoods
     *
     * @return mixed
     */
    public function index()
    {
        $configuration = [];
        $configuration ['list'] = HCGoods::with(['rules','categories'])->get()->toArray();

        return view('goodsList', $configuration);
    }

    /**
     * Show the form for creating a new resource.
     * GET /hcgoods/create
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * POST /hcgoods
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     * GET /hcgoods/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * GET /hcgoods/{id}/edit
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * PUT /hcgoods/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /hcgoods/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}
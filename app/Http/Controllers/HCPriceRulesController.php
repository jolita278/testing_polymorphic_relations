<?php namespace App\Http\Controllers;

use App\models\HCGoods;
use App\models\HCGoodsCategories;
use App\models\HCPriceRules;
use App\models\HCPriceRulesAffectedItems;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class HCPriceRulesController extends Controller
{

    /**
     * Display a listing of the resource.
     * GET /hcpricerules
     *
     * @return Response
     */
    public function index()
    {
        $configuration = [];
        $configuration ['list'] = HCPriceRules::get()->toArray();

        return view('rulesList', $configuration);
    }

    /**
     * Show the form for creating a new resource.
     * GET /hcpricerules/create
     *
     * @return Response
     */
    public function create()
    {
        $config['good'] = HCGoods::pluck('name', 'id')->toArray();
        $config['category'] = HCGoodsCategories::pluck('name', 'id')->toArray();

        $result = DB::select("SHOW COLUMNS FROM `hc_price_rules` LIKE 'type';");
        $regex = "/'(.*?)'/";
        preg_match_all($regex, $result[0]->Type, $enum_array);
        $config['type'] = array_combine($enum_array[1], $enum_array[1]);

        return view('rulesForm', $config);
    }

    /**
     * Store a newly created resource in storage.
     * POST /hcpricerules
     *
     * @return Response
     */
    public function store()
    {
        $data = request()->all();
        $record = HCPriceRules::create(array(
            'name' => $data['name'],
            'from' => $data['from'],
            'to' => $data['to'],
            'type' => $data['type'],
            'amount' => $data['amount'],
        ));

        HCPriceRulesAffectedItems::create(array(
            'rule_id' => $record->id,
            'rulable_id' => $data['a_goods'],
            'rulable_type' => HCGoods::class,
        ));

        HCPriceRulesAffectedItems::create(array(
            'rule_id' => $record->id,
            'rulable_id' => $data['a_categories'],
            'rulable_type' => HCGoodsCategories::class,
        ));
        return view('rulesList');
    }


    /**
     * Display the specified resource.
     * GET /hcpricerules/{id}
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
     * GET /hcpricerules/{id}/edit
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
     * PUT /hcpricerules/{id}
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
     * DELETE /hcpricerules/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}
<?php

namespace QuickInmobiliario\Http\Controllers;

use Illuminate\Http\Request;
use QuickInmobiliario\Http\Requests\StorePricePlan;
use QuickInmobiliario\PricePlan;

class PricePlanController extends Controller
{
  /**
  * @return Response
  */
  public function index(){
    return view('price_plans.index', ['price_plans' => PricePlan::all()]);
  }

  public function show($id){
    return view('price_plans.show', ['price_plan' => $this->getPricePlan($id)]);
  }

  /**
  * @return Response
  */
  public function create(){
    return view('price_plans.create');
  }

  /**
  * @param StorePricePlan $request
  * @return Response
  */
  public function store(StorePricePlan $request){
    $price_plan = new PricePlan;
    $this->setPricePlan($price_plan, $request);

    return redirect()->route('price_plan_show_path', $price_plan->id);
  }

  /**
  * @param Integer $id
  * @return Response
  */
  public function edit($id){
    return view('price_plans.edit', ['price_plan' => $this->getPricePlan($id)]);
  }

  public function update($id, StorePricePlan $request){
    $price_plan = $this->getPricePlan($id);
    $this->setPricePlan($price_plan, $request);

    return redirect()->route('price_plan_edit_path', $price_plan->id);
  }

  /**
  * @param Integer $id
  */
  public function destroy($id){
    $price_plan = $this->getPricePlan($id);
    $price_plan->delete();

    return redirect()->route('price_plans_path');
  }

  /**
  * @param Integer $id
  * @return PricePlan
  */
  private function getPricePlan($id){
    return PricePlan::findOrFail($id);
  }

  /**
  * @param PricePlan $price_plan
  * @param StorePricePlan $request
  */
  private function setPricePlan(PricePlan $price_plan, StorePricePlan $request){
    $price_plan->name = $request->get('name');
    $price_plan->price = $request->get('price');;
    $price_plan->description = $request->get('description');
    $price_plan->save();
  }
}
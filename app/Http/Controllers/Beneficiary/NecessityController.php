<?php

namespace App\Http\Controllers\Beneficiary;
use Illuminate\Http\Request;

use DB;
use DataTables;
use App\Models\Necessity;
use App\Http\Controllers\Controller;
use App\Services\UserStatsService;

class NecessityController extends Controller {


    protected $userStatsService;

    public function __construct(UserStatsService $userStatsService)
    {
        $this->userStatsService = $userStatsService;
    }

    /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    $necessity = Necessity::find($id);
    $necessity->delete();
    return redirect()->back()->with('destroyBeneficiarieNecessity', '200');
  }




  // show beneficiarie Necessities in settings
  public function index(Request $request){
    $user = auth()->user();
    $userStats = $this->userStatsService->getUserStats($user);

    $info = auth()->user()->info;
    return view('pages.account.necessities.necessities', compact('info','userStats'));
  }

  // add beneficiarie's Necessities in settings
  public function store(Request $request){
    $necessity = new Necessity;
    $necessity->beneficiary_id = auth()->user()->info->beneficiaryProfile->id;
    $necessity->note = $request->input('note');
    $necessity->name = $request->input('name');
    $necessity->save();

    return redirect()->back()->with('addBeneficiarieNecessity', '200');

  }

}

?>

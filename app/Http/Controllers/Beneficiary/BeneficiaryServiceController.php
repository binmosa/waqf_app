<?php

namespace App\Http\Controllers\Beneficiary;
use App\Services\UserStatsService;
use DB;
use DataTables;
use App\Models\Beneficiary;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Interfaces\BeneficiaryRepositoryInterface;

class BeneficiaryServiceController extends Controller {



    protected $userStatsService;

    public function __construct(UserStatsService $userStatsService)
    {
        $this->userStatsService = $userStatsService;
    }


    /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {

      $user = auth()->user();
      $userStats = $this->userStatsService->getUserStats($user);
    $info =  auth()->user()->info;
    return view('pages.account.services.services', compact('info', 'userStats'));
  }


}

?>

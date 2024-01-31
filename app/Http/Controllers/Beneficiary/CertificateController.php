<?php

namespace App\Http\Controllers\Beneficiary;
use App\Services\UserStatsService;
use Illuminate\Http\Request;

use DB;
use DataTables;
use App\Models\Certificate;
use App\Http\Controllers\Controller;

class CertificateController extends Controller {



    protected $userStatsService;

    public function __construct(UserStatsService $userStatsService)
    {
        $this->userStatsService = $userStatsService;
    }



  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {

  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    $certificate = Certificate::find($id);
    $certificate->delete();
    return redirect()->back()->with('destroyBeneficiarieCertificate', '200');
  }


  // show beneficiarie certificates in settings
  public function index(Request $request){
      $user = auth()->user();
      $userStats = $this->userStatsService->getUserStats($user);
    $info = auth()->user()->info;
    return view('pages.account.certificates.certificates', compact('info','userStats'));
  }

  // add beneficiarie's certificates in settings
  public function store(Request $request){
    $fileNameToStore=null;
    $request->validate([
      'attachment'=> ['required','max:1024']
    ]);


    if($request->hasFile('attachment')){
      $filenameWithExt = $request->file('attachment')->getClientOriginalName();
      $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
      $extension = $request->file('attachment')->getClientOriginalExtension();
      $fileNameToStore = $filename.'_'.time().'.'.$extension;
      $path = $request->file('attachment')->storeAs('public/attachments/certificate',$fileNameToStore);
    }

    $certificate = new Certificate;
    $certificate->beneficiary_id = auth()->user()->info->beneficiaryProfile->id;
    $certificate->note = $request->input('note');
    $certificate->attachment = $fileNameToStore;
    $certificate->certificate_date = $request->input('certificate_date');
    $certificate->certificate_name = $request->input('certificate_name');
    $certificate->save();

    return redirect()->back()->with('addBeneficiarieCertificate', '200');

  }
}

?>

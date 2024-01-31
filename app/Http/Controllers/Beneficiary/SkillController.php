<?php
namespace App\Http\Controllers\Beneficiary;
use App\Services\UserStatsService;
use Illuminate\Http\Request;

use DB;
use DataTables;
use App\Models\Skill;
use App\Http\Controllers\Controller;


class SkillController extends Controller {




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
        $skill = Skill::find($id);
        $skill->delete();

    return redirect()->back()->with('destroyBeneficiarieSkills', '200');

  }

   // show beneficiarie skills in settings
   public function index(Request $request){

       $user = auth()->user();
       $userStats = $this->userStatsService->getUserStats($user);
       $info = auth()->user()->info;
    return view('pages.account.skills.skills', compact('info','userStats'));
  }

  // add beneficiarie's skills in settings
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
      $path = $request->file('attachment')->storeAs('public/attachments/skill',$fileNameToStore);
    }

        $skill = new Skill;
        $skill->beneficiary_id = auth()->user()->info->beneficiaryProfile->id;
        $skill->note = $request->input('note');
        $skill->attachment = $fileNameToStore;
        $skill->skill_date = $request->input('skill_date');
        $skill->skill_name = $request->input('skill_name');
        $skill->skill_level = $request->input('skill_level');
        $skill->skill_certificate = $request->input('skill_certificate');
      $skill->save();

    return redirect()->back()->with('addBeneficiarieSkills', '200');

  }

}

?>

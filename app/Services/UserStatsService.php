<?php

namespace App\Services;

use anlutro\LaravelSettings\ArrayUtil;
use App\Models\Beneficiary;
use App\Models\Experience;
use App\Models\Necessity;
use App\Models\Skill;
use App\Models\Certificate;

class UserStatsService
{
    public function getUserStats($user)
    {
        if($user->hasRole('beneficiary')) {
        $info = $user->info;
        $currentUserInfoId = $user->info->id;
        $currentBeneficiary = Beneficiary::where('user_info_id', $currentUserInfoId)->first();

        $beneficiaryId = $currentBeneficiary->id;
        $beneficiaryCount = Beneficiary::where('id', $beneficiaryId)->count();
        $experienceCount = Experience::where('beneficiary_id', $beneficiaryId)->count();
        $necessityCount = Necessity::where('beneficiary_id', $beneficiaryId)->count();
        $skillCount = Skill::where('beneficiary_id', $beneficiaryId)->count();
        $certificateCount = Certificate::where('beneficiary_id', $beneficiaryId)->count();
        $membership_id = Beneficiary::where('id', $beneficiaryId)->get();

        return [
            'info' => $info,
            'beneficiaryCount' => $beneficiaryCount,
            'experienceCount' => $experienceCount,
            'necessityCount' => $necessityCount,
            'skillCount' => $skillCount,
            'certificateCount' => $certificateCount,
            'membership_id' => $membership_id
        ];
        }

        else {
            return null ;
        }

    }
}

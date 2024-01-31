<x-base-layout>

    {{ theme()->getView('pages/account/_navbar', array('class' => 'mb-5 mb-xl-10',
     'info' => auth()->user()->info,
     'beneficiaryCount' => $userStats['beneficiaryCount'],
     'experienceCount' => $userStats['experienceCount'],
     'necessityCount' => $userStats['necessityCount'],
     'skillCount' => $userStats['skillCount'],
     'certificateCount' => $userStats['certificateCount'],
     'membership_id' => $userStats['membership_id']
)) }}

    {{ theme()->getView('pages/account/experiences/_experiences-list', array('class' => 'mb-5 mb-xl-10', 'info' => $info )) }}


</x-base-layout>

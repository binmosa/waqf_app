<x-base-layout>

    @if(Auth::user()->hasRole('supporter'))

    {{ theme()->getView('pages/account/_navbar', array('class' => 'mb-5 mb-xl-10','info' => auth()->user()->info)) }}

    @else
    {{ theme()->getView('pages/account/_navbar', array('class' => 'mb-5 mb-xl-10',
    'info' => auth()->user()->info,
    'beneficiaryCount' => $userStats['beneficiaryCount'],
    'experienceCount' => $userStats['experienceCount'],
    'necessityCount' => $userStats['necessityCount'],
    'skillCount' => $userStats['skillCount'],
    'certificateCount' => $userStats['certificateCount'],
    'membership_id' => $userStats['membership_id']

    )) }}
    @endif

    {{ theme()->getView('pages/account/overview/_details', array('class' => 'mb-5 mb-xl-10', 'info' => auth()->user()->info)) }}



</x-base-layout>

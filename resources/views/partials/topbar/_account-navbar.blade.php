<?php use App\Http\Controllers\Account\NavbarController;
NavbarController::index();
?>

{{ theme()->getView('pages/account/_navbar', array('class' => 'mb-5 mb-xl-10',
   'info' => auth()->user()->info,
   'beneficiaryCount' => $beneficiaryCount,
   'experienceCount' => $experienceCount,
   'necessityCount' => $necessityCount,
   'skillCount' => $skillCount,
   'certificateCount' => $certificateCount
   )) }}

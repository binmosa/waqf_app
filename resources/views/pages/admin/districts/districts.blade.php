<x-base-layout>

    {{ theme()->getView('pages/admin/districts/_districts-list', array('class' => 'mb-5', 'info' => $info ,'districts'=>$districts)) }}

</x-base-layout>

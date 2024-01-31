<x-base-layout>


     @auth

    <!------------- ADMIN HOME START ------------->
     @hasanyrole('admin|superadmin')
    <!--begin::Row-->
    <div class="row gy-6 g-xl-12" style="height: 430px;">
        <!--begin::Col-->
        <div class="col-xxl-4">
            {{ theme()->getView('partials/widgets/mixed/_widget-2', [
                'class' => 'card-xxl-stretch
                                                                                                                                                ',
                'chartColor' => 'danger',
                'beneficiaries' => $beneficiaries,
                'volunteers' => $volunteers,
                'supporters' => $supporters,
                'projects' => $projects,
            ]) }}
        </div>
        <!--end::Col-->

        <!--begin::Col-->
        <div class="col-xxl-4" style="height: 430px;">
            {{ theme()->getView('partials/widgets/lists/_widget-4', ['class' => 'card','activities' => $activities]) }}
        </div>
        <!--end::Col-->

        <!--begin::Col-->
        <div class="col-xxl-4">
            {{ theme()->getView('partials/widgets/lists/_widget-3', ['class' => 'card', 'latestProjects' => $latestProjects]) }}
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->

    <!--begin::Row-->
    <div class="row gy-5 gx-xl-12 h-auto">
        <!--begin::Col-->
        @if (auth()->check() &&
            auth()->user()->hasRole('admin'))
            <div class="col-xl-12 ">

                <!-- Display All Supporters -->
                <x-admin.tables.table1 class="card-xxl-stretch mb-5 mb-xl-8 table-responsive-lg card-scroll" title="الداعمون"
                                       userCount="اكثر من {{ count($Supporters) }} داعم"  buttonName=" الداعمون" buttonURL="admin\supporters"
                                       :columns="['اسم الداعم', 'رقم العضوية', 'نوع العضوية','الوصف', 'نوع التأثير', 'الوظيفة', 'رقم الهاتف','جهة العمل','خيارات']">
                    @foreach ($Supporters->slice(0,6) as $row)
                        <tr>
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input widget-9-check" type="checkbox" value="1" />
                                </div>
                            </td>
                            <td>


                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-45px me-5">
                                        @if($row->avatar == null)
                                            <img src="{{ asset(theme()->getMediaUrlPath() . 'avatars/blank.png') }}" alt="" />
                                        @else
                                            <img src="{{ asset(theme()->getMediaUrlPath() .$row->avatar) }}" alt="" />
                                        @endif
                                    </div>
                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="#"
                                           class="text-dark fw-bolder text-hover-primary fs-6">{{ $row->info?->user->first_name }} {{ $row->info?->user->last_name }}</a>
                                        <span
                                            class="text-muted fw-bold text-muted d-block fs-7">{{ $row->user?->email }} | infID: {{ $row->info?->id }} | userID: {{ $row->info?->user_id }}</span>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <div class="text-dark fw-bolder text-hover-primary d-block fs-6">
                                    {{ $row->membership_id }}</div>
                            </td>

                            <td>
                                <div class="text-dark fw-bolder text-hover-primary d-block fs-6">
                                    {{ $row->membershipType->name }}</div>
                            </td>

                            <td>
                                <div class="text-dark fw-bolder text-hover-primary d-block fs-6">
                                    {{ $row->description }}</div>
                            </td>


                            <td class="min-w-125px">
                                @foreach ($row->supporter_influence as $v)
                                    <span class="badge badge-light-danger fs-8 fw-bolder">{{ $v->influenceType->name }} </span>
                                @endforeach
                            </td>


                            <td class="min-w-125px">

                                <span class="badge badge-light-success fs-8 fw-bolder">  {{ $row->work }}</span>

                            </td>
                            {{--                {{dd($row)}}--}}

                            <td class="min-w-125px">{{ $row->info?->phone }}</td>

                            <td class="min-w-125px">{{ $row->info?->company }}</td>

                            <td>
                                <a href="{{ route('admin.settings.overview', $row->info->user->id) }}" title="عرض الملف الشخصي"
                                   class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                    {!! theme()->getSvgIcon('icons/duotune/general/gen019.svg', 'svg-icon-3') !!}
                                </a>

                                @hasrole('superadmin')
                                <form method="post" class="d-inline-block" action="{{ route('supporters.destroy', $row->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    {{-- <input type="hidden" value="{{ $row->id }}" name="id"> --}}
                                    <a href="{{ route('supporters.destroy', $row->id) }}"
                                       class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm"
                                       onclick="if(confirm('هل تود حذف هذا العنصر؟')) { event.preventDefault();
                            this.closest('form').submit();} else { return false }"
                                       type="submit" value="حذف">
                                        {!! theme()->getSvgIcon('icons/duotune/general/gen027.svg', 'svg-icon-3') !!}
                                    </a>
                                </form>
                                @endhasrole
                            </td>
                        </tr>
                    @endforeach

                </x-admin.tables.table1>
            </div>
        @endif
        <!--end::Col-->
    </div>
    <!--end::Row-->


    <!--begin::Row-->
    <div class="row gy-5 gx-xl-12 h-auto">
        <!--begin::Col-->
        @if (auth()->check() &&
            auth()->user()->hasRole('admin'))
            <div class="col-xl-12">
                {{-- {{ theme()->getView('partials/widgets/tables/_widget-9', ['class' => 'card-xxl-stretch mb-5 mb-xl-8']) }} --}}
                <!-- Display All Eneficiaries -->
                <x-admin.tables.table1 class="card-xxl-stretch mb-5 mb-xl-8" title="المستفيدون"
                                       userCount="اكثر من {{ count($latestBeneficiaries) }} مستفيد" buttonName="المستفيدون" buttonURL="admin/beneficiaries"
                                       :columns="['اسم المستفيد', 'رقم العضوية', 'المهنة', 'عضو متطوع؟', 'تاريخ الميلاد','عرض الحساب']">
                    @foreach ($latestBeneficiaries->slice(0,6) as $row)
                        <tr>
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input widget-9-check" type="checkbox" value="1" />
                                </div>
                            </td>

                            <td>
                                @php
                                    $avatar = $row->User->avatar ?: 'avatars/blank.png';
                                @endphp
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-45px me-5">
                                        <img src="{{ asset(theme()->getMediaUrlPath() . $avatar) }}" alt="" />
                                    </div>
                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="#"
                                           class="text-dark fw-bolder text-hover-primary fs-6">{{ $row->User->user->name }}</a>

                                        <span
                                            class="text-muted fw-bold text-muted d-block fs-7">{{ $row->User->user?->email }}</span>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <div class="text-dark fw-bolder text-hover-primary d-block fs-6">
                                    {{ $row->membership_id }}
                                </div>
                            </td>

                            <td>
                                <a href="#"
                                   class="text-dark fw-bolder text-hover-primary d-block fs-6">{{ $row->id_occupation ?? '-' }}</a>
                                {{-- <span class="text-muted fw-bold text-muted d-block fs-7 text-right" lang="en"
                            dir="ltr">
                            الهاتف :: {{ $row->User->phone }}</span> --}}
                            </td>

                            <td class="min-w-125px">
                                @if ($row->User->volunteer != null)
                                    <span
                                        class="badge badge-light-success fs-8 fw-bolder">{{ $row->User->volunteer->volunteer_type }}</span>
                                @else
                                    <span class="badge badge-light-danger fs-8 fw-bolder">لا</span>
                                @endif
                            </td>

                            <td>
                                <div class="text-dark fw-bolder text-hover-primary d-block fs-6">
                                    {{ $row->date_of_birth ? $row->date_of_birth->format('Y-m-d') : $row->User->user->created_at }}
                                </div>
                                <span class="text-muted fw-bold text-muted d-block fs-7">{{ $row->age }} سنة</span>
                            </td>

                            <td>
                                <a href="{{ route('admin.settings.overview', $row->User->user->id) }}"
                                   class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                    {!! theme()->getSvgIcon('icons/duotune/general/gen019.svg', 'svg-icon-3') !!}
                                </a>


                            </td>
                        </tr>
                    @endforeach
                </x-admin.tables.table1>
            </div>
        @endif
        <!--end::Col-->
    </div>
    <!--end::Row-->


    @endhasrole
    <!------------- ADMIN HOME END ------------->













    <!------------- USER HOME START ------------->
    @hasrole('beneficiary')

    <!-- Please use the below action bar for warning / informing users regarding any new things  -->

{{--        <!--begin::Alert-->--}}
{{--        <div class="alert alert-dismissible bg-light-primary d-flex flex-column flex-sm-row p-5 mb-10">--}}
{{--            <!--begin::Icon-->--}}
{{--            <i class="ki-duotone ki-notification-bing fs-2hx text-primary me-4 mb-5 mb-sm-0"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>--}}
{{--            <!--end::Icon-->--}}


{{--            <!--begin::Wrapper-->--}}
{{--            <div class="d-flex flex-column pe-0 pe-sm-10">--}}
{{--                <!--begin::Title-->--}}
{{--                <h4 class="fw-semibold text-primary">اعلان للمستخدمين</h4>--}}
{{--                <!--end::Title-->--}}

{{--                <!--begin::Content-->--}}
{{--                <span>سيتم تحديث النظام خلال الفترة يوم الخميس الموافق ٥ ذو الحجة، وسيتم ايقاف جميع الخدمات خلال هذه الفترة</span>--}}
{{--                <!--end::Content-->--}}
{{--            </div>--}}
{{--            <!--end::Wrapper-->--}}

{{--            <!--begin::Close-->--}}
{{--            <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">--}}
{{--                <i class="fs-6 text-primary"> X </i>--}}
{{--            </button>--}}
{{--            <!--end::Close-->--}}
{{--        </div>--}}
{{--        <!--end::Alert-->--}}


    <!-- End of action bar -->



    <!--begin::User Beneficary Dadhboard info-->
        <div class="row gy-5 g-xl-8">
            <!--begin::Col-->
            <div class="col-xxl-12">
                {{ theme()->getView('partials/widgets/mixed/_widget-6', [
                    'class' => 'card-xxl-stretch
                                                                                                                                                    ',
                    'chartColor' => 'danger',
                    'chartHeight' => '200px',
                    'beneficiaries' => $beneficiaries,
                    'volunteers' => $volunteers,
                    'supporters' => $supporters,
                    'projects' => $projects,
                ]) }}
            </div>
            <!--end::Col-->
        </div>
    <!--End::User Beneficary Dadhboard info-->
    @endhasrole




    <!------------- SUPPORTER HOME ------------->
    @hasrole('supporter')

        <!--begin::User Beneficary Dadhboard info-->
        <div class="row gy-5 g-xl-8">
            <!--begin::Col-->
            <div class="col-xxl-12">
                {{ theme()->getView('partials/widgets/mixed/_widget-5', [
                    'class' => 'card-xxl-stretch
                                                                                                                                                    ',
                    'chartColor' => 'danger',
                    'chartHeight' => '200px',
                    'beneficiaries' => $beneficiaries,
                    'volunteers' => $volunteers,
                    'supporters' => $supporters,
                    'projects' => $projects,
                ]) }}
            </div>
            <!--end::Col-->
        </div>
        <!--End::User Beneficary Dadhboard info-->

    @endhasrole

        <!------------- USER HOME END ------------->

    @endauth




</x-base-layout>

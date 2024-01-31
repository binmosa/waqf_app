<x-base-layout>

<div class="block mb-5">
    <!--begin::Add user-->
    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"  data-bs-target="#kt_modal_add_customer">
        <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
        <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
                                                    <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
                                                </svg>
                                            </span>
        <!--end::Svg Icon-->إضافة مستخدم جديد</button>
    <!--end::Add user-->
</div>

    <x-alert>
    </x-alert>

    <!--begin::Basic info-->
<div class="card mb-3 mt-2">

    @if ($errors->count() > 0)
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }} <br>
            @endforeach
        </div>
    @endif

    <div class="card">
        <!--begin::Card body-->
        <div class="card-body">

            <!--begin::Modal - Adjust Balance-->
            <div class="modal fade" id="kt_modal_export_users" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header">
                            <!--begin::Modal title-->
                            <h2 class="fw-bolder">تصدير المستخدمين</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                 data-kt-users-modal-action="close">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                             height="24" viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="6" y="17.3137"
                                                  width="16" height="2" rx="1"
                                                  transform="rotate(-45 6 17.3137)" fill="black" />
                                            <rect x="7.41422" y="6" width="16"
                                                  height="2" rx="1"
                                                  transform="rotate(45 7.41422 6)" fill="black" />
                                        </svg>
                                    </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->

                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!--end::Modal - New Card-->

            @include('pages.admin.users.modal')

            <!--begin::Table-->
            <table class="table align-middle table-row-dashed fs-6 table-responsive-lg" id="kt_ecommerce_products_table">
                <!--begin::Table head-->
                <thead>
                    <!--begin::Table row-->
                    <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                        <th class="w-10px pe-2"></th>
                        <th class="min-w-125px">الاسم الكامل</th>
                        <th class="min-w-125px">البريد الالكتروني</th>
                        <th class="min-w-125px">نوع الحساب</th>
                        <th class="min-w-125px">آخر تسجيل دخول</th>
                        <th class="min-w-100px">خيارات</th>
                    </tr>
                    <!--end::Table row-->
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody class="text-gray-600 fw-bold">
                </tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->
        </div>
        <!--end::Card body-->

    </div>
    <!--end::Card-->

</div>

    @section('scripts')
        <script src="{{ asset('alkhirat/plugins/custom/datatables/datatables.bundle.js') }}"></script>
        <script type="text/javascript">
            $(function() {
                var table = $('#kt_ecommerce_products_table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('user.list') }}",
                    language: {
                        "sProcessing": "@lang('جاري العرض...')",
                        "sLengthMenu": "@lang('عرض _MENU_ سجل')",
                        "sZeroRecords": "@lang('لاتوجد سجلات متطابقة')",
                        "sInfo": "@lang('عرض _START_ إلى _END_ من أصل _TOTAL_ سجل')",
                        "sInfoEmpty": "@lang('إظهار 0 إلى 0 من أصل 0 سجل')",
                        "sInfoFiltered": "@lang('(تم التصفية من أصل _MAX_ إجمالي سجل)')",
                        "sSearch": "@lang('بحث  '):",
                    },
                    scrollX: false, // Enable horizontal scrolling
                    scrollY: ' 500px', // Set the desired vertical scroll height
                    scrollCollapse: true, // Allow the table to collapse when vertical space is limited

                    columns: [
                        {
                            data: 'id',
                            name: 'id'
                        },
                        {
                            data: 'name',
                            name: 'name' ,
                            render: function(data, type, row) {
                                return '<a href="/admin/settings/overview/' + row.id + '" title="الانتقال للملف الشخصي">' + data + '</a>';
                            }
                        },
                        {
                            data: 'email',
                            name: 'email'
                        },

                        {
                            data: 'role',
                            name: 'role',
                            render: function(data, type, row, meta) {
                                if (data === null || data === '') {
                                    return '<span class="badge badge-light-danger">لم يتم تعيين النوع</span>';
                                }
                                return data;
                            }

                        },
                        {
                            data: 'last_login_at',
                            name: 'last_login_at'
                        },
                        {
                            data: 'actions',
                            name: 'actions',
                            sortable: false,
                            searchable: false,
                        },
                    ]
                });

            });
        </script>
    @endsection

</x-base-layout>

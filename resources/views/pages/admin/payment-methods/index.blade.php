<x-base-layout>

    <div class="block mb-4">
        <!--begin::Add user-->
        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"  data-bs-target="#kt_modal_add_customer">
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
                                                    <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
                                                </svg>
                                            </span>
            <!--end::Svg Icon-->إضافة طريقة دفع</button>
        <!--end::Add user-->
    </div>

        <x-alert>
        </x-alert>

                <!--begin::Card-->
                <div class="card">

                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
                            <!--begin::Table head-->
                            <thead>
                                <!--begin::Table row-->
                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                    <th class="w-10px pe-2">
                                    </th>
                                    <th class="min-w-125px">الاسم</th>
                                    <th></th>
                                </tr>
                                <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="fw-bold text-gray-600">
                            </tbody>
                            <!--end::Table body-->
                        </table>
                        <!--end::Table-->
                    </div>
                    {{ $methods->links() }}
                    <!--end::Card body-->
                </div>
                <!--end::Card-->

                @include('pages.admin.payment-methods.modal')


    @section('scripts')
    <script src="{{ asset('alkhirat/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script type="text/javascript">
        $(function() {
            var table = $('#kt_ecommerce_products_table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('payment_methods.list') }}",
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
                        name: 'name'
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

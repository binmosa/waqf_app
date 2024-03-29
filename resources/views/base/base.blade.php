<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"{!! theme()->printHtmlAttributes('html') !!}
    {{ theme()->printHtmlClasses('html') }}>
{{-- begin::Head --}}

<head>
    <meta charset="utf-8" />
    <title>{{ ucfirst(theme()->getOption('meta', 'title')) }} | البوابة الالكترونية </title>
    <meta name="description" content="{{ ucfirst(theme()->getOption('meta', 'description')) }}" />
    <meta name="keywords" content="{{ theme()->getOption('meta', 'keywords') }}" />
    <link rel="canonical" href="{{ ucfirst(theme()->getOption('meta', 'canonical')) }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="{{ asset(theme()->getDemo() . '/' . theme()->getOption('assets', 'favicon')) }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">





    {{-- begin::Fonts --}}
    {{ theme()->includeFonts() }}
    {{-- end::Fonts --}}

    @if (theme()->hasOption('page', 'assets/vendors/css'))
        {{-- begin::Page Vendor Stylesheets(used by this page) --}}
        @foreach (array_unique(theme()->getOption('page', 'assets/vendors/css')) as $file)
            {!! preloadCss(assetCustom($file)) !!}
        @endforeach

         <!--begin::Vendor Stylesheets(used for this page only)-->
      <link href="{{asset('/assets/plugins/custom/prismjs/prismjs.bundle.css')}} " rel="stylesheet" type="text/css"/>
      <link href="{{asset('/assets/plugins/custom/datatables/datatables.bundle.css')}} " rel="stylesheet" type="text/css"/>
      <!--end::Vendor Stylesheets-->
        {{-- end::Page Vendor Stylesheets --}}
    @endif

    @if (theme()->hasOption('page', 'assets/custom/css'))
        {{-- begin::Page Custom Stylesheets(used by this page) --}}
        @foreach (array_unique(theme()->getOption('page', 'assets/custom/css')) as $file)
            {!! preloadCss(assetCustom($file)) !!}
        @endforeach
        {{-- end::Page Custom Stylesheets --}}
    @endif

    @if (theme()->hasOption('assets', 'css'))
        {{-- begin::Global Stylesheets Bundle(used by all pages) --}}
        @foreach (array_unique(theme()->getOption('assets', 'css')) as $file)
            @if (strpos($file, 'plugins') !== false)
                {!! preloadCss(assetCustom($file)) !!}
            @else
                <link href="{{ assetCustom($file) }}" rel="stylesheet" type="text/css" />
            @endif
        @endforeach
        {{-- end::Global Stylesheets Bundle --}}
    @endif

    @if (theme()->getViewMode() === 'preview')
        {{ theme()->getView('partials/trackers/_ga-general') }}
        {{ theme()->getView('partials/trackers/_ga-tag-manager-for-head') }}
    @endif

    @yield('styles')
</head>
{{-- end::Head --}}

{{-- begin::Body --}}

<body {!! theme()->printHtmlAttributes('body') !!} {!! theme()->printHtmlClasses('body') !!} {!! theme()->printCssVariables('body') !!}>

    @if (theme()->getOption('layout', 'loader/display') === true)
        {{ theme()->getView('layout/_loader') }}
    @endif

    @yield('content')

    {{-- begin::Javascript --}}
    @if (theme()->hasOption('assets', 'js'))
        {{-- begin::Global Javascript Bundle(used by all pages) --}}
        @foreach (array_unique(theme()->getOption('assets', 'js')) as $file)
            <script src="{{ asset(theme()->getDemo() . '/' . $file) }}"></script>
        @endforeach
        {{-- end::Global Javascript Bundle --}}
    @endif

    @if (theme()->hasOption('page', 'assets/vendors/js'))
        {{-- begin::Page Vendors Javascript(used by this page) --}}
        @foreach (array_unique(theme()->getOption('page', 'assets/vendors/js')) as $file)
            <script src="{{ asset(theme()->getDemo() . '/' . $file) }}"></script>
        @endforeach
        {{-- end::Page Vendors Javascript --}}
    @endif

    @if (theme()->hasOption('page', 'assets/custom/js'))
        {{-- begin::Page Custom Javascript(used by this page) --}}
        @foreach (array_unique(theme()->getOption('page', 'assets/custom/js')) as $file)
            <script src="{{ asset(theme()->getDemo() . '/' . $file) }}"></script>
        @endforeach
        {{-- end::Page Custom Javascript --}}


    @endif
    {{-- end::Javascript --}}

    @if (theme()->getViewMode() === 'preview')
        {{ theme()->getView('partials/trackers/_ga-tag-manager-for-body') }}
    @endif

    @yield('scripts')
    @stack('js')










    <script>
        $(document).on('click', '[data-dismiss="modal"]', function(e) {
            e.preventDefault()
            e.stopPropagation()

            $(this).parents('.modal').modal('hide')
        })

        $(document).on('hidden.bs.modal', '#kt_modal_edit_customer', function(e) {
            $(this).remove()
        })

        $(document).on('click', '.edit-btn', function(e) {
            e.preventDefault()
            e.stopPropagation()

            $.ajax({
                url: $(e.target).attr('href'),
                success: r => {
                    $('body').append(r)
                    console.log($('#kt_modal_edit_customer'));
                    $('#kt_modal_edit_customer').modal('show')
                }
            })
        })

        $(document).on('click', '.modal [type=reset]', function(e) {
            $(this).parents('.modal').modal('hide')
        })
    </script>


    <script>

        const deleteLinks = document.querySelectorAll('.delete-skill');

        deleteLinks.forEach(function(link) {
            link.addEventListener('click', function(e) {
                e.preventDefault();

                const skillId = link.getAttribute('data-skill-id');

                Swal.fire({
                    text: "هل أنت متأكد من حذف السجل؟",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonText: "نعم، الرجاء الحذف",
                    cancelButtonText: "إلغاء",
                    buttonsStyling: false,
                    customClass: {
                        confirmButton: "btn btn-danger",
                        cancelButton: "btn btn-secondary"
                    }
                }).then(function(result) {
                    if (result.isConfirmed) {
                        // Proceed with the delete action for the specific skill ID
                        const deleteUrl = link.href.replace('skill_id', skillId);
                        window.location.href = deleteUrl;
                    }
                });
            });
        });

    </script>


</body>
{{-- end::Body --}}

</html>

@extends('dashboard.layouts.dashboard_layout')

@section('css')
@endsection

@section('content')
    <div class="card card-flush">
        <!--begin::Card header-->
        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
            <!--begin::Card title-->
            <div class="card-title">
            </div>
            <!--end::Card title-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0">
            <!--begin::Table-->
            <div id="kt_ecommerce_category_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="table-responsive">
                    <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer" id="data_table">
                        <!--begin::Table head-->
                        <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                <th class="w-10px pe-2" style="text-align: start;">#</th>
                                <th class="min-w-250px" style="text-align: start;">{{ trans('contact-us.fullname') }}</th>
                                <th class="min-w-100px" style="text-align: start;">{{ trans('contact-us.email') }}</th>
                                <th class="min-w-100px" style="text-align: start;">{{ trans('contact-us.is_read') }}</th>
                                <th class="min-w-70px" style="text-align: start;">{{ trans('general.actions') }}</th>
                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="fw-bold text-gray-600">

                        </tbody>
                        <!--end::Table body-->
                    </table>
                </div>
            </div>
            <!--end::Table-->
        </div>
        <!--end::Card body-->
    </div>
@endsection

@section('js')
    <script>
        var arabicLanguage = {
            select: {
                rows: {
                    _: " صف محدد ",
                    0: " لا صفوف محددة ",
                    1: " صف محدد "
                }
            },
            "sEmptyTable": "لم يعثر على أية بيانات",
            "sInfo": "عرض _START_ إلى _END_ من أصل _TOTAL_ مدخل",
            "sInfoEmpty": "عرض 0 إلى 0 من أصل 0 مدخل",
            "sInfoFiltered": "(منتقاة من مجموع _MAX_ مُدخل)",
            "sInfoPostFix": "",
            "sInfoThousands": ",",
            "sLengthMenu": "أظهر _MENU_ مدخل",
            "sLoadingRecords": "جارٍ التحميل...",
            "sProcessing": "جارٍ التحميل...",
            "sSearch": "بحث:",
            "sZeroRecords": "لم يعثر على أية سجلات",
            "oPaginate": {
                "sFirst": "الأول",
                "sLast": "الأخير",
                "sNext": "التالي",
                "sPrevious": "السابق"
            },
            "oAria": {
                "sSortAscending": ": تفعيل لترتيب العمود تصاعدياً",
                "sSortDescending": ": تفعيل لترتيب العمود تنازلياً"
            }

        };
    </script>

    <script type="text/javascript">
        var table_language;
        var current_language = "{!! config('app.locale') !!}";
        if (current_language == "ar") {
            var table_language = arabicLanguage;
        }

        $(document).ready(function() {
            $(function() {
                var table = $('#data_table').DataTable({
                    processing: true,
                    serverSide: true,
                    language: table_language,
                    ajax: "{{ route('contact-us.index') }}",
                    columns: [{
                            data: 'id',
                            name: 'id'
                        },
                        {
                            data: 'full_name',
                            name: 'full_name'
                        },
                        {
                            data: 'email',
                            name: 'email'
                        },
                        {
                            data: 'is_read',
                            name: 'is_read'
                        },
                        {
                            data: 'action',
                            name: 'action',
                        },
                    ]
                });
            });
        });
    </script>

    <script>
        function DeleteMessage(id, element) {
            Swal.fire({
                title: '{{ trans('delete_popup.title') }}',
                text: "{{trans('delete_popup.message')}}",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '{{ trans('delete_popup.confirm') }}',
                cancelButtonText: '{{ trans('delete_popup.cancel') }}'
            }).then((result) => {

                if (result.isConfirmed) {
                    performDelete(id, element)

                }
            })

        }

        function performDelete(id, element) {
            axios.delete('{{LaravelLocalization::getCurrentLocale()}}/dashboard/contact-us/' + id)
                .then(function(response) {
                    console.log(response);
                    Swal.fire({
                        position: 'center',
                        icon: response.data.icon,
                        title: response.data.message,
                        showConfirmButton: false,
                        timer: 1500
                    })
                    element.closest('tr').remove();
                })
                .catch(function(error) {
                    console.log(error);
                    Swal.fire({
                        position: 'center',
                        icon: error.response.data.icon,
                        title: error.response.data.message,
                        showConfirmButton: false,
                        timer: 1500
                    })
                });
        }
    </script>
@endsection

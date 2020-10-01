@extends('layouts/theme')

@section('content')

@section('ajax_data_table_css')
    <link href="{{ asset('app-assets/vendors/css/tables/datatable/datatables.min.css')}}" rel="stylesheet">
    <script src="{{ asset('app-assets/js/scripts/tables/datatable/datatables.buttons.min.js')}}"></script>
    <script src="{{ asset('app-assets/js/scripts/tables/datatable/buttons.html5.min.js')}}"></script>
    <script src="{{ asset('app-assets/js/scripts/tables/datatable/buttons.bootstrap.min.js')}}"></script>
    <script src="{{ asset('app-assets/js/scripts/tables/datatable/datatables.bootstrap4.min.js')}}"></script>

@endsection
<section id="basic-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Serveurs</h4>

                    <a href="{{route('clients_Ajouter')}}" class="btn btn-primary btn-print mr-1 mb-1" role="button" aria-pressed="true"><i
                            class="feather icon-plus"></i></a>




                </div>
                <div class="card-content">

                    <div class="card-body card-dashboard">
                        <table class="table zero-configuration" id="datatable-ajax-crud">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nom De Clients</th>
                                <th>Email</th>
                                <th>Date De creation</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>









<script type="text/javascript">

    $(document).ready(function () {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#datatable-ajax-crud').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ url('admin/clients_index') }}",
            columns: [
                {data: 'id', name: 'id', 'visible': false},
                {data: 'nom_client', name: 'nom_client'},
                {data: 'email_primaire', name: 'email_primaire'},
                {data: 'created_at', name: 'created_at'},
                {data: 'action', name: 'action', orderable: false},
            ],
            order: [[0, 'desc']]
        });


    });
</script>
@section('ajax_data_table_js')
    <script src="{{ asset('app-assets/js/scripts/tables/datatable/datatables.min.js')}}"></script>
    <script src="{{ asset('app-assets/js/scripts/tables/datatable/datatables.buttons.min.js')}}"></script>
    <script src="{{ asset('app-assets/js/scripts/tables/datatable/buttons.html5.min.js')}}"></script>
    <script src="{{ asset('app-assets/js/scripts/tables/datatable/buttons.bootstrap.min.js')}}"></script>
    <script src="{{ asset('app-assets/js/scripts/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('app-assets/js/scripts/tables/datatable/datatable.js')}}"></script>
@endsection


@stop

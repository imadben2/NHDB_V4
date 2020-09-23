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


                    <button class="btn btn-primary btn-print mr-1 mb-1" id="addNewBook" data-toggle="modal"><i
                            class="feather icon-plus"></i></button>
                </div>
                <div class="card-content">

                    <div class="card-body card-dashboard">
                        <table class="table zero-configuration" id="datatable-ajax-crud">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Nom De Clients</th>
                                <th>Type</th>
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
            ajax: "{{ url('clients_index') }}",
            columns: [
                {data: 'id', name: 'id', 'visible': false},
                {data: 'Nom_De_Clients', name: 'Nom_De_Clients'},
                {data: 'Type', name: 'Type'},
                {data: 'Email', name: 'Email'},
                {data: 'Date_De_creation', name: 'Date_De_creation'},
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

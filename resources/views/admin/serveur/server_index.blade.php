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
                        <button class="btn btn-primary btn-print mr-1 mb-1" id="new-serveur" data-toggle="modal"><i
                                class="feather icon-plus"></i></button>
                    </div>
                    <div class="card-content">

                        <div class="card-body card-dashboard">
                            <table class="table zero-configuration" id="datatable-ajax-crud">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Serveur</th>
                    <th>Numéro</th>
                    <th>Created at</th>
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







    <!-- boostrap add and edit book model -->
    <div class="modal fade" id="ajax-book-model" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="ajaxBookModel"></h4>
                </div>
                <div class="modal-body">
                    <form action="javascript:void(0)" id="addEditBookForm" name="addEditBookForm" class="form-horizontal" method="POST">
                        <input type="hidden" name="id" id="id">
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Book Name</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="title" name="title" placeholder="Enter Book Name" maxlength="50" required="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Book Code</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="code" name="code" placeholder="Enter Book Code" maxlength="50" required="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Book Author</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="author" name="author" placeholder="Enter author Name" required="">
                            </div>
                        </div>

                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary" id="btn-save" value="addNewBook">Save changes
                            </button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>
    <!-- end bootstrap model -->

    <script type="text/javascript">

        $(document).ready( function () {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#datatable-ajax-crud').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ url('serveurs_datatable_crud') }}",
                columns: [
                    {data: 'id', name: 'id', 'visible': false},
                    { data: 'nom_serveur', name: 'nom_serveur' },
                    { data: 'numero', name: 'numero' },
                    { data: 'created_at', name: 'created_at' },
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

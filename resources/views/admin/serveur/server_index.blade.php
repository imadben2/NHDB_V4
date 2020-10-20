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


                    <a href="{{route('test_envoi_email')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Primary link</a>


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
                <form action="javascript:void(0)" id="addEditBookForm" name="addEditBookForm" class="form-horizontal"
                      method="POST">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Nom Serveur</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="nom_serveur" name="nom_serveur" maxlength="50"
                                   required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Numéro Serveur</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="numero_server" name="numero_server"
                                   maxlength="50" required="">
                        </div>
                    </div>


                    <div class="col-sm-offset-2 col-sm-10">

                        <button type="submit" class="btn btn-primary" id="btn-save" value="addNewBook">Souvegarder
                        </button>

                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Anuller</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
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
            ajax: "{{ url('admin/serveurs_datatable_index') }}",
            columns: [
                {data: 'id', name: 'id', 'visible': false},
                {data: 'nom_serveur', name: 'nom_serveur'},
                {data: 'numero', name: 'numero'},
                {data: 'created_at', name: 'created_at'},
                {data: 'action', name: 'action', orderable: false},
            ],
            order: [[0, 'desc']]
        });
        $('#addNewBook').click(function () {
            $('#addEditBookForm').trigger("reset");
            $('#ajaxBookModel').html("Ajouter Serveur");
            $('#ajax-book-model').modal('show');
        });

        $('body').on('click', '.edit', function () {

            var id = $(this).data('id');

            // ajax
            $.ajax({
                type: "POST",
                url: "{{ url('admin/serveurs_datatable_update') }}",
                data: {id: id},
                dataType: 'json',
                success: function (res) {
                    $('#ajaxBookModel').html("Modifier Serveur");
                    $('#ajax-book-model').modal('show');
                    $('#id').val(res.id);
                    $('#nom_serveur').val(res.nom_serveur);
                    $('#numero_server').val(res.numero);
                }
            });

        });

        $('body').on('click', '.delete', function () {

            if (confirm("Delete Record?") == true) {
                var id = $(this).data('id');

                // ajax
                $.ajax({
                    type: "POST",
                    url: "{{ url('admin/serveurs_datatable_delete') }}",
                    data: {id: id},
                    dataType: 'json',
                    success: function (res) {

                        var oTable = $('#datatable-ajax-crud').dataTable();
                        oTable.fnDraw(false);
                    }
                });
            }

        });

        $('body').on('click', '#btn-save', function (event) {
            var id = $("#id").val();
            var nom_serveur = $("#nom_serveur").val();
            var numero_server = $("#numero_server").val();
            $("#btn-save").html('Please Wait...');
            $("#btn-save").attr("disabled", true);
            $.ajax({
                type: "POST",
                url: "{{ url('admin/serveurs_datatable_store') }}",
                data: {
                    id: id,
                    nom_serveur: nom_serveur,
                    numero_server: numero_server,
                },
                dataType: 'json',
                success: function (res) {
                    $("#ajax-book-model").modal('hide');
                    var oTable = $('#datatable-ajax-crud').dataTable();
                    oTable.fnDraw(false);
                    $("#btn-save").html('Submit');
                    $("#btn-save").attr("disabled", false);
                }
            });

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

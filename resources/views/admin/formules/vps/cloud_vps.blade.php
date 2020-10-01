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
                    <h4 class="card-title">Hebergement Cloud VPS</h4>


                    <button class="btn btn-primary btn-print mr-1 mb-1" id="addNewBook" data-toggle="modal"><i
                            class="feather icon-plus"></i></button>
                </div>
                <div class="card-content">

                    <div class="card-body card-dashboard">
                        <table class="table zero-configuration" id="datatable-ajax-crud">
                            <thead>
                            <tr>
                                <th>Nom de La formule</th>
                                <th>Espace Disque</th>
                                <th>Unité</th>
                                <th>Compte Emails</th>
                                <th>Prix</th>
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
                        <label for="name" class="col-sm-8 control-label">Nom de La formule</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="nom_de_La_formule1" name="nom_de_La_formule1" maxlength="50"
                                   required="">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="name" class="col-sm-8 control-label">Espace Disque</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="espace_Disque" name="espace_Disque"
                                   maxlength="50" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-8 control-label">Unité</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="unite" name="unite"
                                   maxlength="50" required="">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="name" class="col-sm-8 control-label">Compte Emails</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="compte_Emails" name="compte_Emails"
                                   maxlength="50" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-8 control-label">Prix</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="prix" name="prix"
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
            ajax: "{{ url('admin/indexVps') }}",
            columns: [

                {data: 'nom_formules', name: 'nom_formules'},
                {data: 'espace_disque', name: 'espace_disque'},
                {data: 'espace_unite', name: 'espace_unite'},
                {data: 'nombre_mail', name: 'nombre_mail'},
                {data: 'prix', name: 'prix'},
                {data: 'action', name: 'action', orderable: false},
            ],
            order: [[0, 'desc']]
        });


        $('#addNewBook').click(function () {
            $('#addEditBookForm').trigger("reset");
            $('#ajaxBookModel').html("Hebergement Cloud VPS");
            $('#ajax-book-model').modal('show');
        });

        $('body').on('click', '.edit', function () {

            var id = $(this).data('id');

            // ajax
            $.ajax({
                type: "POST",
                url: "{{ url('admin/Vps_update') }}",
                data: {id: id},
                dataType: 'json',
                success: function (res) {
                    $('#ajaxBookModel').html("Modifier Formule");
                    $('#ajax-book-model').modal('show');
                    $('#id').val(res.id);
                    $('#nom_de_La_formule1').val(res.nom_formules);
                    $('#espace_Disque').val(res.espace_disque);
                    $('#unite').val(res.espace_unite);
                    $('#compte_Emails').val(res.nombre_mail);
                    $('#prix').val(res.prix);

                }
            });

        });

        $('body').on('click', '.delete', function () {

            if (confirm("Delete Record?") == true) {
                var id = $(this).data('id');

                // ajax
                $.ajax({
                    type: "POST",
                    url: "{{ url('admin/Vps_delete') }}",
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

            var espace_Disque = $("#espace_Disque").val();
            var unite = $("#unite").val();
            var compte_Emails = $("#compte_Emails").val();
            var nom_de_La_formule1 = $("#nom_de_La_formule1").val();
            var prix = $("#prix").val();
            $("#btn-save").html('Please Wait...');
            $("#btn-save").attr("disabled", true);
            $.ajax({
                type: "POST",
                url: "{{ url('admin/Vps_store') }}",
                data: {
                    id: id,
                    nom_de_La_formule: nom_de_La_formule1,
                    espace_Disque: espace_Disque,
                    unite: unite,
                    compte_Emails: compte_Emails,
                    prix: prix,
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

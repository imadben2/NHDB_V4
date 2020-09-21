@extends('layouts/theme')

@section('data_table')
    <link href="{{ asset('app-assets/vendors/css/tables/datatable/datatables.min.css')}}" rel="stylesheet">
@endsection

@section('content')



    <!-- Zero configuration table -->
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


                            <div class="table-responsive">

                                <table class="table zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nom Serveurs</th>
                                        <th>Numéro</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach ($serveurs as $serveur)
                                        <tr id="id_serveur_{{ $serveur->id_serveur }}">
                                            <td>{{  $serveur->id_serveur  }}</td>
                                            <td>{{ $serveur->nom_serveur }}</td>
                                            <td>{{ $serveur->numero }}</td>


                                            <td>
                                                <Container>
                                                    <form action="{{ route('serveurs.destroy',$serveur->id_serveur) }}"
                                                          method="POST">
                                                        <a class="btn btn-icon btn-info " id="show-customer"
                                                           data-toggle="modal" data-id="{{ $serveur->id_serveur }}"><i
                                                                class="feather icon-eye"></i></a>
                                                        <a href="javascript:void(0)" class="btn btn-icon btn-success "
                                                           id="edit-customer" data-toggle="modal"
                                                           data-id="{{ $serveur->id_serveur }}"><i
                                                                class="feather icon-edit"></i> </a>
                                                        <meta name="csrf-token" content="{{ csrf_token() }}">
                                                        <a href="javascript:;" data-toggle="modal"
                                                           onclick="deleteData({{$serveur->id_serveur}})"
                                                           data-target="#DeleteModal" class="btn btn-icon btn-danger"><i
                                                                class="feather icon-delete"></i></a>
                                            </td>
                                            </form>
                                            </td>
                                            </Container>

                                        </tr>
                                    @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Zero configuration table -->
    <!-- Column selectors with Export Options and print table -->




    <!-- modal ajouter serveurs -->

    <div class="modal fade" id="crud-modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="customerCrudModal"></h4>
                </div>
                <div class="modal-body">
                    <form name="custForm" action="{{ route('serveurs.store') }}" method="POST">
                        <input type="hidden" name="serv_id" id="serv_id">
                        @csrf
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Nom:</strong>
                                    <input type="text" name="nom_serveur" id="nom_serveur" class="form-control"
                                           placeholder="nom" required onchange="validate()">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Numéro:</strong>
                                    <input type="text" name="numero" id="numero" class="form-control" required
                                           placeholder="numéro" onchange="validate()">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" id="btn-update" name="btnupdate" class="btn btn-primary" disabled>
                                    Modifier
                                </button>
                                <button type="submit" id="btn-save" name="btnsave" class="btn btn-primary" enabled>
                                    Ajouter
                                </button>
                                <a href="" data-dismiss="modal" class="btn btn-danger">Annuler</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- end modal ajouter serveurs -->


    <!--  DELETE serveurs -->



    <!-- Modal -->
    <div class="modal fade text-left" id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel120"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger white">
                    <h5 class="modal-title" id="myModalLabel120">Confirmation de Suppression</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Voulez-vous vraiment supprimer?
                </div>
                <div class="modal-footer">


                    <form action="" id="deleteForm" method="post">


                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}


                        <div class="modal-footer">
                            <center>
                                <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
                                <button type="submit" name="" class="btn btn-danger" data-dismiss="modal"
                                        onclick="formSubmit()">Supprimé
                                </button>
                            </center>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>

    <!-- modal afficher serveurs -->



    <div class="modal fade" id="crud-modal-show" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="customerCrudModal-show"></h4>
                </div>
                <div class="modal-body">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <span>Nom:</span>
                                                </div>
                                                <div class="col-md-8">
                                                    <span>{{$serveur->nom_serveur}}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <span>Numero:</span>
                                                </div>
                                                <div class="col-md-8">
                                                    <span>{{$serveur->numero}}</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" data-dismiss="modal"
                                                    class="btn btn-primary mr-1 mb-1">OK
                                            </button>

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    </div>
    </div>


    <!-- modal afficher serveurs -->

@endsection

@section('ajax-script')


    <script>
        $(document).ready(function () {

            /* ajouter */


            $('#new-serveur').click(function () {

                $('#btn-save').val("create-customer");
                $('#nom_serveur').val('');
                $('#numero').val('');
                $('#customer').trigger("reset");
                $('#btn-save').show();
                $('#btn-update').hide();
                $('#customerCrudModal').html("Ajouter Serveur");
                $('#crud-modal').modal('show');
            });


            /* modifier */


            $('body').on('click', '#edit-customer', function () {
                $('#customer').trigger("reset");
                var id_serveur = $(this).data('id');
                console.log(id_serveur);
                $.get('serveurs/' + id_serveur + '/edit', function (data) {
                    $('#customerCrudModal').html("Modifier Serveur");
                    $("#btn-update").removeAttr('disabled');
                    $('#btn-update').show();
                    $('#btn-save').hide();
                    $('#crud-modal').modal('show');
                    $('#serv_id').val(id_serveur);
                    $('#nom_serveur').val(data.nom_serveur);
                    $('#numero').val(data.numero);

                })
            });

            /* aficher */
            $('body').on('click', '#show-customer', function () {
                $('#customerCrudModal-show').html("Serveur");
                $('#crud-modal-show').modal('show');
            });

            /* supprimer */


            $('body').on('click', '#delete-customer', function () {
                var id_serveur = $(this).data("id");
                var token = $("meta[name='csrf-token']").attr("content");
                confirm("Are You sure want to delete !");

                $.ajax({
                    type: "DELETE",
                    url: "{{ url('serveurs')}}" + '/' + id_serveur,

                    data: {
                        "id": id_serveur,
                        "_token": token,
                    },
                    success: function (data) {
                        console.log(id_serveur);
                        $('#msg').html('Customer entry deleted successfully');
                        $("#id_serveur_" + id_serveur).remove();
                    },
                    error: function (data) {
                        console.log('Error:', data);
                    }
                });
            });
        });

    </script>

    <script type="text/javascript">
        function deleteData(id) {
            var id = id;
            var url = '{{ route("serveurs.destroy", ":id") }}';
            url = url.replace(':id', id);
            $("#deleteForm").attr('action', url);
        }

        function formSubmit() {
            $("#deleteForm").submit();
        }
    </script>
@endsection
@section('vendor-script')
    {{-- vendor files --}}



    <script src="{{ asset('app-assets/js/scripts/tables/datatable/datatables.min.js')}}"></script>
    <script src="{{ asset('app-assets/js/scripts/tables/datatable/datatables.buttons.min.js')}}"></script>
    <script src="{{ asset('app-assets/js/scripts/tables/datatable/buttons.html5.min.js')}}"></script>

    <script src="{{ asset('app-assets/js/scripts/tables/datatable/buttons.bootstrap.min.js')}}"></script>
    <script src="{{ asset('app-assets/js/scripts/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('app-assets/js/scripts/tables/datatable/datatable.js')}}"></script>



@endsection

@extends('layouts/theme')

@section('content')



    <div class="content-header row">
    </div>
    <div class="content-body">
        <!-- users edit start -->
        <section class="users-edit">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <ul class="nav nav-tabs mb-3" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center active" id="account-tab" data-toggle="tab"
                                   href="#account" aria-controls="account" role="tab" aria-selected="true">
                                    <i class="feather icon-user mr-25"></i><span
                                        class="d-none d-sm-block">Client</span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
                                <form novalidate class="form" action="{{route('clients_store')}}"
                                      enctype="multipart/form-data"
                                      method="post" >

                                    @csrf

                                    <div class="row">
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label>Nom (*):</label>
                                                    <input type="text" class="form-control" required name="nom_client"
                                                           >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label>Nom et Prénom :</label>
                                                    <input type="text" class="form-control" required name="nom_contact"
                                                           data-validation-required-message="This name field is required">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label>E-mail</label>
                                                    <input type="email" class="form-control" required name="email_primaire"
                                                           data-validation-required-message="This email field is required">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label>E-mail secondaire :</label>
                                                    <input type="email" class="form-control" required name="email_secondaire"
                                                           data-validation-required-message="This email field is required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">

                                            <div class="form-group">
                                                <label>Type :</label>
                                                <select class="form-control">
                                                    <option>Active</option>
                                                    <option>Blocked</option>
                                                    <option>deactivated</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label>Fonction :</label>
                                                    <input type="text" class="form-control" required name="fonction_contact"
                                                           data-validation-required-message="This name field is required">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Adresse (de facturation) (*):</label>
                                                <input type="text" name="adresse_facturation" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label>N° de Tel. mobile :</label>
                                                <input type="text" name="mobile_phone" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="table-responsive border rounded px-1 ">
                                                <h6 class="border-bottom py-1 mx-1 mb-0 font-medium-2"><i
                                                        class="feather icon-lock mr-50 "></i>Autres informations</h6>


                                                <div class="col-12 col-sm-6">

                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Taux de la TVA appliqué :</label>
                                                            <input type="text" class="form-control" required name="tva"
                                                                   data-validation-required-message="This name field is required">
                                                        </div>
                                                    </div>


                                                    <div class="form-group">
                                                        <label>Taux de la remise appliqué :</label>
                                                        <input type="text" name="remise" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="card-header">
                                                    <h4 class="card-title">Remarques :</h4>
                                                </div>
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <fieldset class="form-group">
                                                                    <textarea name="remarque" class="form-control"
                                                                              id="basicTextarea" rows="3"
                                                                              placeholder="Textarea"></textarea>
                                                                </fieldset>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                            <button type="submit"
                                                    class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Enregistrer

                                            </button>
                                            <button type="reset" class="btn btn-outline-warning">Reset</button>
                                        </div>
                                    </div>
                                </form>
                                <!-- users edit account form ends -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- users edit ends -->






@stop

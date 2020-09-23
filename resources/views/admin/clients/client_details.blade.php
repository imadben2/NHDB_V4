@extends('layouts/theme')

@section('content')




  <!-- Basic ListGroups start -->
  <section id="basic-list-group">
    <div class="row match-height">
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Client</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-md-5">
                                <span>Nom:</span>
                            </div>
                            <div class="col-md-7">
                                <span>n</span>
                            </div>

                            <div class="col-md-5">
                                <span>Type:</span>
                            </div>
                            <div class="col-md-7">
                                <span>Nom et Prenom</span>
                            </div>

                            <div class="col-md-5">
                                <span>Fonction:</span>
                            </div>
                            <div class="col-md-7">
                                <span>n</span>
                            </div>

                            <div class="col-md-5">
                                <span>Adress(Facturation):</span>
                            </div>
                            <div class="col-md-7">
                                <span>n</span>
                            </div>

                            <div class="col-md-5">
                                <span>E-MAIL:</span>
                            </div>
                            <div class="col-md-7">
                                <span>n</span>
                            </div>


                            <div class="col-md-5">
                                <span>E-MAIL(secondaire):</span>
                            </div>
                            <div class="col-md-7">
                                <span>n</span>
                            </div>

                            <div class="col-md-5">
                                <span>N Télephone:</span>
                            </div>
                            <div class="col-md-7">
                                <span>n</span>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Information de l abonnement</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-md-5">
                                <span>Taux Tva:</span>
                            </div>
                            <div class="col-md-7">
                                <span>n</span>
                            </div>

                            <div class="col-md-5">
                                <span>Taux de remise:</span>
                            </div>
                            <div class="col-md-7">
                                <span>Nom et Prenom</span>
                            </div>

                            <div class="col-md-5">
                                <span>Remarque:</span>
                            </div>
                            <div class="col-md-7">
                                <span>n</span>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>






        </div>



                <!-- Hoverable rows start -->
                <div class="row" id="table-hover-row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Listes Des Prodtuis</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">

                                </div>
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr>

                                                <th>Nom Client</th>
                                                <th>Type Produit</th>
                                                <th>Serveur</th>
                                                <th>Expire Le</th>
                                                <th>Status</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Leanne Graham</td>
                                                <td>sincere@april.biz</td>
                                                <td>@mdo</td>
                                                <td>sincere@april.biz</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Ervin Howell</td>
                                                <td>shanna@melissa.tv</td>
                                                <td>@fat</td>
                                                <td>sincere@april.biz</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Clementine Bauch</td>
                                                <td>nathan@yesenia.net</td>
                                                <td>@twitter</td>
                                                <td>sincere@april.biz</td>
                                                <td>@mdo</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
</section>
<!-- Basic ListGroups end -->





@endsection

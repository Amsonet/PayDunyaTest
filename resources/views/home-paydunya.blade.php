@extends('layouts.akadpro.layout')

@section('content')


      <section class="wrapper site-min-height">
      <form action="#" class="form-horizontal style-form">
      <h3><i class="fa fa-angle-right"></i>Bienvenue sur la Platforme de Paydunya</h3>
        <div class="row mt">
          

        
     	
          <!--  FORM -->
          <div class="col-lg-12">
            <div class="form-panel">
              
                <div class="form-group" style="padding-left:200px;">
                  <label class="control-label col-md-2">Votre code de transfert:</label>
                  <div class="col-md-6 col-xs-11">
                  <input type="text" class="form-control" value="XXX-XXX-XXX" readonly>
                    <span class="help-block">A transmettre au bénéficiaire</span>
                  </div>
                </div>
                <div class="form-group" style="padding-left:200px;">
                  <label class="control-label col-md-2">Montant:</label>
                  <div class="col-md-2 col-xs-11">
                    <div class="input-append date dpYears">
                    <input type="number" class="form-control" value=""  required>
                      <span class="input-group-btn add-on">
                        <button class="btn btn-theme" type="button"><i class="fa fa-calendar"></i></button>
                        </span>
                    </div>
                    <span class="help-block">EN CFA</span>
                  </div>

                  <label class="col-md-1"></label>


                  <label class="control-label col-md-1">Motif du transfert:</label>
                  <div class="col-md-2 col-xs-11">
                    <div   class="input-append date dpYears">
                    <input type="text" class="form-control" value="" required >
                      
                    </div>
                    <span class="help-block"></span>
                  </div>
                </div>
              
               
             
            </div>
          </div>
          <!-- /col-lg-12 -->

		




          <div class="col-lg-12 mt">
            <div class="row content-panel">
              <div class="panel-heading">
              <h4><i class="fa fa-angle-right"></i> Comment le bénéficiaire souhaite-t-il recevoir l’argent?</h4>


                <ul class="nav nav-tabs nav-justified">
                  <li class="active">
                    <a data-toggle="tab" href="#especes">Payer en Especes</a>
                  </li>
                  <li>
                    <a data-toggle="tab" href="#bancaire" class="contact-map">Virer sur son Compte Bancaire</a>
                  </li>
                  <li>
                    <a data-toggle="tab" href="#paydunya">Approvisionner son Compte Paydunya</a>
                  </li>
                </ul>
              </div>
              <!-- /panel-heading -->
              <div class="panel-body">
                <div class="tab-content">

                  <div id="especes" class="tab-pane active">

                  <h5 style="color:#0171b2"><i class="fa fa-angle-right"></i> Le bénéficiaire devra se rendre au point de retrait le plus proche ; muni d’une pièce d’identité et du code de la transaction ci-dessus</h5><br/>

                    <div class="row">

     <!--  FORM -->
     <div class="col-lg-12">
            <div class="form-panel">
              
            <div class="form-group" style="padding-left:50px;">
                  <label class="control-label col-md-1">Ville:</label>
                  <div class="col-md-3 col-xs-11">
                    <div class="input-append date dpYears">
                    <input type="number" class="form-control" value=""  required>
                     
                    </div>
                    <span class="help-block"></span>
                  </div>

                  <label class="col-md-1"></label>


                  <label class="control-label col-md-1">Pays:</label>
                  <div class="col-md-3 col-xs-11">
                    <div   class="input-append date dpYears">
                    <input type="text" class="form-control" value="" required >
                      
                    </div>
                    <span class="help-block"></span>
                  </div>
                </div>


                <div class="form-group" style="padding-left:50px;">
                  <label class="control-label col-md-1">Nom:</label>
                  <div class="col-md-3 col-xs-11">
                    <div class="input-append date dpYears">
                    <input type="number" class="form-control" value=""  required>
                      
                    </div>
                    <span class="help-block">Nom du Beneficiaire</span>
                  </div>

                  <label class="col-md-1"></label>


                  <label class="control-label col-md-1">Prenoms:</label>
                  <div class="col-md-3 col-xs-11">
                    <div   class="input-append date dpYears">
                    <input type="text" class="form-control" value="" required >
                      
                    </div>
                    <span class="help-block">Prenoms du Beneficiaire</span>
                  </div>
                </div>
              

                <div class="form-group" style="padding-left:50px;">
                  <label class="control-label col-md-1">Tel:</label>
                  <div class="col-md-3 col-xs-11">
                    <div class="input-append date dpYears">
                    <input type="number" class="form-control" value=""  required>
                      
                    </div>
                    <span class="help-block"></span>
                  </div>

                  <label class="col-md-1"></label>


                  <label class="control-label col-md-1">Profession:</label>
                  <div class="col-md-3 col-xs-11">
                    <div   class="input-append date dpYears">
                    <input type="text" class="form-control" value="" required >
                      
                    </div>
                    <span class="help-block"></span>
                  </div>
                </div>


                <div class="form-group" style="padding-left:50px;">
                  <label class="control-label col-md-1">Question:</label>
                  <div class="col-md-3 col-xs-11">
                    <div class="input-append date dpYears">
                    <input type="number" class="form-control" value=""  required>
                      
                    </div>
                    <span class="help-block"></span>
                  </div>

                  <label class="col-md-1"></label>


                  <label class="control-label col-md-1">Reponse:</label>
                  <div class="col-md-3 col-xs-11">
                    <div   class="input-append date dpYears">
                    <input type="text" class="form-control" value="" required >
                      
                    </div>
                    <span class="help-block"></span>
                  </div>
                </div>


                
                <div class="form-group" style="padding-left:50px;">
                  
                  
                    <label class="control-label col-md-1">
                    <button class="btn btn-theme" type="submit">Envoyer</button>
                    </label>

                    <div class="col-md-3 col-xs-11">

                    </div>
                  
                </div>



          
            </div>
          </div>
          <!-- /col-lg-12 -->
                     
                      
                    </div>
                    <!-- /Especes -->
                  </div>
                  <!-- /tab-pane -->







                  <div id="bancaire" class="tab-pane">
                  <h5 style="color:#0171b2"><i class="fa fa-angle-right"></i> Le montant sera directement viré sur le compte bancaire du bénéficiaire ; que vous allez renseigner ci-dessous</h5><br/>

                    <div class="row">



                <div class="form-group" style="padding-left:50px;">
                  <label class="control-label col-md-1">Ville:</label>
                  <div class="col-md-3 col-xs-11">
                    <div class="input-append date dpYears">
                    <input type="number" class="form-control" value=""  required>
                     
                    </div>
                    <span class="help-block"></span>
                  </div>

                  <label class="col-md-1"></label>


                  <label class="control-label col-md-1">Pays:</label>
                  <div class="col-md-3 col-xs-11">
                    <div   class="input-append date dpYears">
                    <input type="text" class="form-control" value="" required >
                      
                    </div>
                    <span class="help-block"></span>
                  </div>
                </div>


                <div class="form-group" style="padding-left:50px;">
                
                <div class="col-md-2 col-xs-11">
                    <div class="input-append date dpYears">
                    <input type="number" class="form-control" value=""  required>
                     
                    </div>
                    <span class="help-block">Code Pays</span>
                  </div>

                  <label class="col-md-0.5"></label>

                  <div class="col-md-2 col-xs-11">
                    <div class="input-append date dpYears">
                    <input type="number" class="form-control" value=""  required>
                     
                    </div>
                    <span class="help-block">Code Banque</span>
                  </div>

                  <label class="col-md-0.5"></label>


                  <div class="col-md-2 col-xs-11">
                    <div class="input-append date dpYears">
                    <input type="number" class="form-control" value=""  required>
                     
                    </div>
                    <span class="help-block">Code Guichet</span>
                  </div>

                  <label class="col-md-0.5"></label>

                  <div class="col-md-2 col-xs-11">
                    <div class="input-append date dpYears">
                    <input type="number" class="form-control" value=""  required>
                     
                    </div>
                    <span class="help-block">Numero Compte</span>
                  </div>

                  <label class="col-md-0.5"></label>

                  
                  <div class="col-md-1 col-xs-11">
                    <div   class="input-append date dpYears">
                    <input type="text" class="form-control" value="" required >
                      
                    </div>
                    <span class="help-block">Cle RIB</span>
                  </div>
                </div>


                <div class="form-group" style="padding-left:50px;">
                  <label class="control-label col-md-1">Code IBAN:</label>
                  <div class="col-md-3 col-xs-11">
                  <input type="text" class="form-control" value="XXX-XXX-XXX" >
                    <span class="help-block"></span>
                  </div>
                </div>

                <div class="form-group" style="padding-left:50px;">
                  <label class="control-label col-md-1">Numeros compte:</label>
                  <div class="col-md-3 col-xs-11">
                  <input type="text" class="form-control" value="XXX-XXX-XXX" >
                    <span class="help-block">Interne</span>
                  </div>
                </div>

                <div class="form-group" style="padding-left:50px;">
                  <label class="control-label col-md-1">Code SWIFT:</label>
                  <div class="col-md-3 col-xs-11">
                  <input type="text" class="form-control" value="XXX-XXX-XXX" >
                    <span class="help-block"></span>
                  </div>
                </div>


                <div class="form-group" style="padding-left:50px;">
                  
                  
                    <label class="control-label col-md-1">
                    <button class="btn btn-theme" type="submit">Envoyer</button>

                    </label>
                    
                    <div class="col-md-3 col-xs-11">

                    </div>
                  
                </div>



                    </div>
                    <!-- /row -->

                  </div>
                  <!-- /tab-pane -->
                  <div id="paydunya" class="tab-pane">

                  <h5 style="color:#0171b2"><i class="fa fa-angle-right"></i> Ceci est valable uniquement que pour les destinataires qui ont un compte Paydunya ; Entrez l’identifiant Paydunya ou le nom du compte. Le compte sera crédité directement ; Le propriétaire du compte recevra une notification que son compte a été approvisionné.</h5><br/>

                    <div class="row">

                     


                      <div class="col-lg-8 col-lg-offset-2 detailed mt">
                        <h4 class="mb">Information- Paydunya</h4>
                          
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Speudo ou Identifiant: </label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="addr2" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Nom: </label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="phone" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Prenoms: </label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="cell" class="form-control">
                            </div>
                          </div>
                          
                        
                          <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <button class="btn btn-theme" type="submit">Envoyer</button>
                            </div>
                          </div>
                       
                      </div>
                      <!-- /col-lg-8 -->
                    </div>
                    <!-- /row -->
                  </div>
                  <!-- /tab-pane -->
                </div>
                <!-- /tab-content -->
              </div>
              <!-- /panel-body -->
            </div>
            <!-- /col-lg-12 -->
          </div>
          <!-- /row -->
        </div>
        <!-- /container -->
        </form></section>
      <!-- /wrapper -->
	  
@endsection

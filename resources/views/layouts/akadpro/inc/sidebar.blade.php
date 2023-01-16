 <!--sidebar start-->
 
 <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="" alt='{{Auth::User()->name}}' title='{{Auth::User()->name}}' ><img src="{{ asset('template/Dashio/img/ui-danro.jpg') }}" class="img-circle" width="80"></a></p>
          <h5 class="centered">{{Auth::User()->name}}(montant disponible sur le compte)</h5>
          <li class="mt">
            <a href="/dashboard">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
         
   
          <li>
            <a href="/home">
              <i class="fa fa-map-marker"></i>
              <span>Envoyer de l'argent</span>
              </a>
          </li>
		   <li>
            <a href="/home">
              <i class="fa fa-map-marker"></i>
              <span>Recharger mon compte</span>
              </a>
          </li>
		
		  
		   <li class="/home">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>Gestion</span>
              </a>
            <ul class="sub">
              <li><a href="form_component.html">Points de Ventes</a></li>
              <li><a href="form_component.html">Fournisseurs</a></li>
              <li><a href="advanced_form_components.html">Types de courriers</a></li>
              <li><a href="form_validation.html">Types de demandes</a></li>
              <li><a href="contactform.html">Parametrages des Processus</a></li>
			  
            </ul>
          </li>
		  
		  
		 <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>SECURITE</span>
              </a>
            <ul class="sub">
              <li><a href="/home">Gestion des utilisateurs</a></li>             
			  
            </ul>
          </li>
		  
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
	
<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
       <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-item active">
                    <a href="{{ route('home') }}" class='sidebar-link'>
                        <i class="bi bi-house-fill"></i>
                        <span>Tableau De Bord</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <div class="card-body">
                        <div class="badges">
                            @if (Auth::user()->role_name=='Admin')
                            <span>Nom: <span class="fw-bolder">{{ Auth::user()->name }}</span></span>
                            <hr>
                            <span>Role:</span>
                            <span class="badge bg-success">Administrateur</span>
                            @endif
                            @if (Auth::user()->role_name=='Manager')
                                <span>Nom: <span class="fw-bolder">{{ Auth::user()->name }}</span></span>
                                <hr>
                                <span>Role:</span>
                                <span class="badge bg-info">Manager</span>
                            @endif
                            @if (Auth::user()->role_name=='Commercial')
                                <span>Nom: <span class="fw-bolder">{{ Auth::user()->name }}</span></span>
                                <hr>
                                <span>Role:</span>
                                <span class="badge bg-warning">Commercial</span>
                            @endif
                        </div>
                    </div>
                </li>

                <li class="sidebar-item">
                    <a href="{{ route('change/password') }}" class='sidebar-link'>
                        <i class="bi bi-shield-lock"></i>
                        <span>Changer Mot De Passe</span>
                    </a>
                </li>
                <li class="sidebar-title">Gestion</li>
                @if ((Auth::user()->role_name=='Admin'))
                   <!-- ------------Sidebar for Admin Role ---------------** -->
                      <!--         UTILISATEURS          -->
                      <li class="sidebar-item  has-sub active">
                        <a href="#" class='sidebar-link' >
                           <img src="https://img.icons8.com/cotton/25/000000/group--v2.png"/>
                           <span>Utilisateurs</span>
                        </a>
                        <ul class="submenu">
                           <li class="submenu-item">
                               <a href="{{ route('userManagement') }}">Liste des Utilisateurs</a>
                           </li>
                           <li class="submenu-item">
                            <a href="{{ route('user/add/new') }}">Nouvelle Utilisateur</a>
                            </li>
                           <li class="submenu-item">
                               <a href="{{ route('activity/log') }}">Activité des Utilisateurs Connecté</a>
                           </li>
                           <li class="submenu-item">
                               <a href="{{ route('activity/login/logout') }}">Activitées de Connexion</a>
                           </li>
                        </ul>
                      </li>
                   <!--          ACHATS               -->
                  <li class="sidebar-item  has-sub active">
                        <a href="#" class='sidebar-link' >
                           <img src="https://img.icons8.com/plasticine/25/000000/shopping.png"/>
                           <span>Achats</span>
                        </a>
                        <ul class="submenu">
                           <img src="https://img.icons8.com/plasticine/23/000000/supplier.png"/>
                           <i>Fournisseurs :</i>
                           <li class="submenu-item">
                               <a href="{{ route('userManagement') }}">Liste des Fournisseurs</a>
                           </li>
                           <li class="submenu-item">
                               <a href="{{ route('activity/log') }}">Nouveau Fournisseur</a>
                           </li>
                           <img src="https://img.icons8.com/cotton/20/ffffff/shopping.png"/>
                            <i>Commande Fournisseur :</i>
                            <li class="submenu-item">
                                <a href="{{ route('userManagement') }}">Liste des Commandes</a>
                            </li>
                            <li class="submenu-item">
                                <a href="{{ route('activity/log')  }}">Nouvelle Commande</a>
                            </li>
                            <img src="https://img.icons8.com/ios/20/4a90e2/receipt-and-change.png"/>
                            <i>Bon de Reception :</i>
                            <li class="submenu-item">
                                <a href="{{ route('userManagement') }}">Liste des bons </a>
                            </li>
                            <li class="submenu-item">
                                <a href="{{ route('user/add/new') }}">Nouvelle bon</a>
                            </li>
                            <img src="https://img.icons8.com/nolan/20/invoice.png"/>
                            <i>Facture Client :</i>
                            <li class="submenu-item">
                                <a href="{{ route('userManagement') }}">Liste des Factures</a>
                            </li>
                            <li class="submenu-item">
                                <a href="{{ route('user/add/new') }}">Nouvelle Facture</a>
                            </li>
                        </ul>
                      </li>
                     </li>
                  <!--             VENTES          -->
                  <li class="sidebar-item  has-sub active">
                    <a href="#" class='sidebar-link' >
                        <img src="https://img.icons8.com/doodle/25/4a90e2/sale-price-tag.png"/>
                       <span>Ventes</span>
                    </a>
                    <ul class="submenu">
                        <img src="https://img.icons8.com/ultraviolet/25/4a90e2/client-management.png"/>
                       <i>Clients :</i>
                       <li class="submenu-item">
                           <a href="{{ route('userManagement') }}">Liste des Clients</a>
                       </li>
                       <li class="submenu-item">
                           <a href="{{ route('activity/log') }}">Nouveau Client</a>
                       </li>
                       <img src="https://img.icons8.com/cotton/20/ffffff/shopping.png"/>
                        <i>Commande Client :</i>
                        <li class="submenu-item">
                            <a href="{{ route('userManagement') }}">Liste des Commandes</a>
                        </li>
                        <li class="submenu-item">
                            <a href="{{ route('activity/log')  }}">Nouvelle Commande</a>
                        </li>
                        <img src="https://img.icons8.com/cotton/20/4a90e2/delivery-scooter--v3.png"/>
                        <i>Bon de Livraison :</i>
                        <li class="submenu-item">
                            <a href="{{ route('userManagement') }}">Liste des bons </a>
                        </li>
                        <li class="submenu-item">
                            <a href="{{ route('user/add/new') }}">Nouvelle bon</a>
                        </li>
                        <img src="https://img.icons8.com/dusk/20/4a90e2/euro-exchange.png"/>
                        <i>Devis :</i>
                        <li class="submenu-item">
                            <a href="{{ route('userManagement') }}">Liste des Devis</a>
                        </li>
                        <li class="submenu-item">
                            <a href="{{ route('user/add/new') }}">Nouvelle Devis</a>
                        </li>
                     </ul>
                     </li>
                   </li>
                  </li>
                  <!--            STOCK           -->
                  <li class="sidebar-item  has-sub active">
                     <a href="#" class='sidebar-link' >
                        <img src="https://img.icons8.com/color/25/4a90e2/sell-stock.png"/>
                       <span>Stock</span>
                     </a>
                     <ul class="submenu">
                        <img src="https://img.icons8.com/nolan/20/product.png"/>
                       <i>Produits :</i>
                       <li class="submenu-item">
                           <a href="{{ route('userManagement') }}">Liste des Produits</a>
                       </li>
                       <li class="submenu-item">
                           <a href="{{ route('activity/log') }}">Nouveau Produit</a>
                       </li>
                     </ul>
                  </li>

                     @elseif ( (Auth::user()->role_name=='Manager'))
                        <!-- ------------Sidebar for Manager Role ---------------** -->
                        <!--          ACHATS               -->
                 <li class="sidebar-item  has-sub active">
                    <a href="#" class='sidebar-link' >
                       <img src="https://img.icons8.com/plasticine/25/000000/shopping.png"/>
                       <span>Achats</span>
                    </a>
                    <ul class="submenu">
                       <img src="https://img.icons8.com/plasticine/23/000000/supplier.png"/>
                       <i>Fournisseurs :</i>
                       <li class="submenu-item">
                           <a href="{{ route('userManagement') }}">Liste des Fournisseurs</a>
                       </li>
                       <li class="submenu-item">
                           <a href="{{ route('activity/log') }}">Nouveau Fournisseur</a>
                       </li>
                       <img src="https://img.icons8.com/cotton/20/ffffff/shopping.png"/>
                        <i>Commande Fournisseur :</i>
                        <li class="submenu-item">
                            <a href="{{ route('userManagement') }}">Liste des Commandes</a>
                        </li>
                        <li class="submenu-item">
                            <a href="{{ route('activity/log')  }}">Nouvelle Commande</a>
                        </li>
                        <img src="https://img.icons8.com/ios/20/4a90e2/receipt-and-change.png"/>
                        <i>Bon de Reception :</i>
                        <li class="submenu-item">
                            <a href="{{ route('userManagement') }}">Liste des bons </a>
                        </li>
                        <li class="submenu-item">
                            <a href="{{ route('user/add/new') }}">Nouvelle bon</a>
                        </li>
                        <img src="https://img.icons8.com/nolan/20/invoice.png"/>
                        <i>Facture Client :</i>
                        <li class="submenu-item">
                            <a href="{{ route('userManagement') }}">Liste des Factures</a>
                        </li>
                        <li class="submenu-item">
                            <a href="{{ route('user/add/new') }}">Nouvelle Facture</a>
                        </li>
                    </ul>
                  </li>
                 </li>
                 <!--             VENTES          -->
                  <li class="sidebar-item  has-sub active">
                 <a href="#" class='sidebar-link' >
                    <img src="https://img.icons8.com/doodle/25/4a90e2/sale-price-tag.png"/>
                   <span>Ventes</span>
                  </a>
                 <ul class="submenu">
                    <img src="https://img.icons8.com/ultraviolet/25/4a90e2/client-management.png"/>
                   <i>Clients :</i>
                   <li class="submenu-item">
                       <a href="{{ route('userManagement') }}">Liste des Clients</a>
                   </li>
                   <li class="submenu-item">
                       <a href="{{ route('activity/log') }}">Nouveau Client</a>
                   </li>
                   <img src="https://img.icons8.com/cotton/20/ffffff/shopping.png"/>
                    <i>Commande Client :</i>
                    <li class="submenu-item">
                        <a href="{{ route('userManagement') }}">Liste des Commandes</a>
                    </li>
                    <li class="submenu-item">
                        <a href="{{ route('activity/log')  }}">Nouvelle Commande</a>
                    </li>
                    <img src="https://img.icons8.com/cotton/20/4a90e2/delivery-scooter--v3.png"/>
                    <i>Bon de Livraison :</i>
                    <li class="submenu-item">
                        <a href="{{ route('userManagement') }}">Liste des bons </a>
                    </li>
                    <li class="submenu-item">
                        <a href="{{ route('user/add/new') }}">Nouvelle bon</a>
                    </li>
                    <img src="https://img.icons8.com/dusk/20/4a90e2/euro-exchange.png"/>
                    <i>Devis :</i>
                    <li class="submenu-item">
                        <a href="{{ route('userManagement') }}">Liste des Devis</a>
                    </li>
                    <li class="submenu-item">
                        <a href="{{ route('user/add/new') }}">Nouvelle Devis</a>
                    </li>
                 </ul>
                 </li>
                 </li>
                 </li>
                 <!--            STOCK           -->
                 <li class="sidebar-item  has-sub active">
                    <a href="#" class='sidebar-link' >
                        <img src="https://img.icons8.com/color/25/4a90e2/sell-stock.png"/>
                       <span>Stock</span>
                      </a>
                      <ul class="submenu">
                         <img src="https://img.icons8.com/nolan/20/product.png"/>
                         <i>Produits :</i>
                         <li class="submenu-item">
                           <a href="{{ route('userManagement') }}">Liste des Produits</a>
                         </li>
                          <li class="submenu-item">
                           <a href="{{ route('activity/log') }}">Nouveau Produit</a>
                         </li>
                     </ul>
                   </li>

                    @else

                      <!-- ------------Sidebar for Commercial Role ---------------** -->
                      <!--            STOCK           -->
                 <li class="sidebar-item  has-sub active">
                     <a href="#" class='sidebar-link' >
                      <img src="https://img.icons8.com/color/25/4a90e2/sell-stock.png"/>
                      <span>Stock</span>
                     </a>
                     <ul class="submenu">
                       <img src="https://img.icons8.com/nolan/20/product.png"/>
                      <i>Produits :</i>
                      <li class="submenu-item">
                       <a href="{{ route('userManagement') }}">Liste des Produits</a>
                      </li>
                       <li class="submenu-item">
                       <a href="{{ route('activity/log') }}">Nouveau Produit</a>
                       </li>
                     </ul>
                    </li>



                @endif

                  <li class="sidebar-item">
                 <a href="{{ route('lock_screen') }}" class='sidebar-link'>
                   <i class="bi bi-lock-fill"></i>
                   <span>Verrouiller l'écran</span>
                 </a>
                  </li>

                   <li class="sidebar-item">
                       <a href="{{ route('logout') }}" class='sidebar-link'>
                           <i class="bi bi-box-arrow-right"></i>
                           <span>Déconnexion</span>
                       </a>
                   </li>
                </ul>
          </div>

        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>

 <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                  <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                     <?php echo $_SESSION['user'] ?>
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item"  href="profileInstructor.php"> Perfil</a>
                        
                      <a class="dropdown-item"  href="../utili/logout.php"><i class="fa fa-sign-out pull-right"></i> Salir</a>
                    </div>
                  </li>
  
                  
                </ul>
              </nav>
            </div>
          </div>
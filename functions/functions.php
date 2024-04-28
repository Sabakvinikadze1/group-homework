

                  <?php 
                  
                  
                  function navigation($links) {
                    foreach ($links as $link) {
                        echo
                        ' <li class="nav-item">
                            <a class="nav-link" href="'. $link["link"] .'">' . $link["title"] . '</a>
                        </li>
                        ';
                    }
                  }
                  ?>

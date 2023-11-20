<header>
    <div class="container">
        <div class="logo">
            <a href="../Public/Home.php">
                <img src="../Image/logo.png" alt="">
            </a>
        </div>
        <div class="nav">
            <ul>
                <li><a href="../Public/Home.php">HOME</a></li>
                <li><a>WHERE TO GO</a>
                    <div class="dropdown">
                        <div class="list1">
                            <div class="header-list">
                                <h2>Most Attractive In SEA</h2>
                            </div>
                            <div class="list-menu">
                                <div class="menu-list-left">
                                    <ul>
                                        <?php 
                                            $mostAttractiveInSea = [
                                                [
                                                    "list"=> "Thailand",
                                                    "href"=> "place_Thailand.php",
                                                ],
                                                [
                                                    "list"=> "Vietnam",
                                                    "href"=> "place_Vietnam.php",
                                                ],
                                                [
                                                    "list"=> "Singapore",
                                                    "href"=> "place_Singapore.php",
                                                ],
                                                [
                                                    "list"=> "Indonesia",
                                                    "href"=> "place_Indonesia.php",
                                                ],
                                                [
                                                    "list"=> "Lao",
                                                    "href"=> "place_Lao.php",
                                                ],
                                            ];
                                            foreach ($mostAttractiveInSea as $list ){
                                                echo "<li>";
                                                echo '<i class="fa-solid fa-location-dot"></i>';
                                                echo '<a href="'.$list["href"].'">'.$list["list"].'</a>';
                                                echo '</li>';
                                            }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="list2">
                            <div class="header-list">
                                <h2>Local</h2>
                            </div>
                            <div class="list-menu">
                                <div class="menu-list-1">
                                    <ul>
                                        <?php 
                                            $local = [
                                                [
                                                    'list'=> 'Banteay Meanchey',
                                                    'href'=> '#',
                                                ],
                                                [
                                                    'list'=> 'Battambang',
                                                    'href'=> '#',
                                                ],
                                                [
                                                    'list'=> 'Kampong Cham',
                                                    'href'=> '#',
                                                ],
                                                [
                                                    'list'=> 'Kampong Chhnang',
                                                    'href'=> '#',
                                                ],
                                                [
                                                    'list'=> 'Kampong Speu',
                                                    'href'=> '#',
                                                ],
                                                [
                                                    'list'=> 'Kampong Thom',
                                                    'href'=> '#',
                                                ],
                                                
                                            ];
                                            foreach ($local as $list){
                                                echo '<li>';
                                                echo '<i class="fa-solid fa-location-dot"></i>';
                                                echo '<a href="'.$list["href"].'">'.$list["list"].'</a>';
                                                echo '</li>';
                                            }
                                        ?>
                                    </ul>
                                </div>
                                <div class="menu-list-1">
                                    <ul>
                                        <?php 
                                            $local = [
                                                [
                                                    'list'=> 'Kampot',
                                                    'href'=> '#',
                                                ],
                                                [
                                                    'list'=> 'Kandal',
                                                    'href'=> '#',
                                                ],
                                                [
                                                    'list'=> 'Koh Kong',
                                                    'href'=> '#',
                                                ],
                                                [
                                                    'list'=> 'Kratié',
                                                    'href'=> '#',
                                                ],
                                                [
                                                    'list'=> 'Mondulkiri',
                                                    'href'=> '#',
                                                ],
                                                [
                                                    'list'=> 'Phnom Penh',
                                                    'href'=> '#',
                                                ],

                                                
                                            ];
                                            foreach ($local as $list){
                                                echo '<li>';
                                                echo '<i class="fa-solid fa-location-dot"></i>';
                                                echo '<a href="'.$list["href"].'">'.$list["list"].'</a>';
                                                echo '</li>';
                                            }
                                        ?>
                                        
                                    </ul>
                                </div>
                                <div class="menu-list-1">
                                    <ul>
                                        <?php 
                                            $local = [
                                                [
                                                    'list'=> 'Preah Vihear',
                                                    'href'=> '#',
                                                ],
                                                [
                                                    'list'=> 'Prey Veng',
                                                    'href'=> '#',
                                                ],
                                                [
                                                    'list'=> 'Pursat',
                                                    'href'=> '#',
                                                ],
                                                [
                                                    'list'=> 'Ratanakiri',
                                                    'href'=> '#',
                                                ],
                                                [
                                                    'list'=> 'Siem Reap',
                                                    'href'=> '#',
                                                ],
                                                [
                                                    'list'=> 'Preah Sihanouk',
                                                    'href'=> '#',
                                                ],
   
                                            ];
                                            foreach ($local as $list){
                                                echo '<li>';
                                                echo '<i class="fa-solid fa-location-dot"></i>';
                                                echo '<a href="'.$list["href"].'">'.$list["list"].'</a>';
                                                echo '</li>';
                                            }
                                        ?>
                                    </ul>
                                </div>
                                <div class="menu-list-1">
                                    <ul>
                                        <?php 
                                            $local = [
                                                [
                                                    'list'=> 'Stung Treng',
                                                    'href'=> '#',
                                                ],
                                                [
                                                    'list'=> 'Svay Rieng',
                                                    'href'=> '#',
                                                ],
                                                [
                                                    'list'=> 'Takéo',
                                                    'href'=> '#',
                                                ],
                                                [
                                                    'list'=> 'Oddar Meanchey',
                                                    'href'=> '#',
                                                ],
                                                [
                                                    'list'=> 'Kep',
                                                    'href'=> '#',
                                                ],
                                                [
                                                    'list'=> 'Pailin',
                                                    'href'=> '#',
                                                ],
                                                [
                                                    'list'=> 'Tboung Khmum',
                                                    'href'=> '#',
                                                ]
                                            ];
                                            foreach ($local as $list){
                                                echo '<li>';
                                                echo '<i class="fa-solid fa-location-dot"></i>';
                                                echo '<a href="'.$list["href"].'">'.$list["list"].'</a>';
                                                echo '</li>';
                                            }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li><a href="#">HOW TO GO</a></li>
                <li>
                    <a>WHERE TO STAY</a>
                    <div class="dropdown">
                        <div class="list1">
                            <div class="header-list">
                                <h2>Most Attractive In SEA</h2>
                            </div>
                            <div class="list-menu">
                                <div class="menu-list-left">
                                    <ul>
                                        <?php 
                                            $mostAttractiveInSea = [
                                                [
                                                    "list"=> "Thailand",
                                                    "href"=> "hotel_Thailand.php",
                                                ],
                                                [
                                                    "list"=> "Vietnam",
                                                    "href"=> "hotel_Vietnam.php",
                                                ],
                                                [
                                                    "list"=> "Singapore",
                                                    "href"=> "hotel_Singapore.php",
                                                ],
                                                [
                                                    "list"=> "Indonesia",
                                                    "href"=> "hotel_Indonesia.php",
                                                ],
                                                [
                                                    "list"=> "Lao",
                                                    "href"=> "hotel_Lao.php",
                                                ],
                                            ];
                                            foreach ($mostAttractiveInSea as $list ){
                                                echo "<li>";
                                                echo '<i class="fa-solid fa-map-pin"></i>';
                                                echo '<a href="'.$list["href"].'">'.$list["list"].'</a>';
                                                echo '</li>';
                                            }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="list2">
                            <div class="header-list">
                                <h2>Local</h2>
                            </div>
                            <div class="list-menu">
                                <div class="menu-list-1">
                                    <ul>
                                        <?php 
                                            $local = [
                                                [
                                                    'list'=> 'Banteay Meanchey',
                                                    'href'=> '#',
                                                ],
                                                [
                                                    'list'=> 'Battambang',
                                                    'href'=> '#',
                                                ],
                                                [
                                                    'list'=> 'Kampong Cham',
                                                    'href'=> '#',
                                                ],
                                                [
                                                    'list'=> 'Kampong Chhnang',
                                                    'href'=> '#',
                                                ],
                                                [
                                                    'list'=> 'Kampong Speu',
                                                    'href'=> '#',
                                                ],
                                                [
                                                    'list'=> 'Kampong Thom',
                                                    'href'=> '#',
                                                ],
                                                
                                            ];
                                            foreach ($local as $list){
                                                echo '<li>';
                                                echo '<i class="fa-solid fa-map-pin"></i>';
                                                echo '<a href="'.$list["href"].'">'.$list["list"].'</a>';
                                                echo '</li>';
                                            }
                                        ?>
                                    </ul>
                                </div>
                                <div class="menu-list-1">
                                    <ul>
                                        <?php 
                                            $local = [
                                                [
                                                    'list'=> 'Kampot',
                                                    'href'=> '#',
                                                ],
                                                [
                                                    'list'=> 'Kandal',
                                                    'href'=> '#',
                                                ],
                                                [
                                                    'list'=> 'Koh Kong',
                                                    'href'=> '#',
                                                ],
                                                [
                                                    'list'=> 'Kratié',
                                                    'href'=> '#',
                                                ],
                                                [
                                                    'list'=> 'Mondulkiri',
                                                    'href'=> '#',
                                                ],
                                                [
                                                    'list'=> 'Phnom Penh',
                                                    'href'=> '#',
                                                ],

                                                
                                            ];
                                            foreach ($local as $list){
                                                echo '<li>';
                                                echo '<i class="fa-solid fa-map-pin"></i>';
                                                echo '<a href="'.$list["href"].'">'.$list["list"].'</a>';
                                                echo '</li>';
                                            }
                                        ?>
                                        
                                    </ul>
                                </div>
                                <div class="menu-list-1">
                                    <ul>
                                        <?php 
                                            $local = [
                                                [
                                                    'list'=> 'Preah Vihear',
                                                    'href'=> '#',
                                                ],
                                                [
                                                    'list'=> 'Prey Veng',
                                                    'href'=> '#',
                                                ],
                                                [
                                                    'list'=> 'Pursat',
                                                    'href'=> '#',
                                                ],
                                                [
                                                    'list'=> 'Ratanakiri',
                                                    'href'=> '#',
                                                ],
                                                [
                                                    'list'=> 'Siem Reap',
                                                    'href'=> '#',
                                                ],
                                                [
                                                    'list'=> 'Preah Sihanouk',
                                                    'href'=> '#',
                                                ],
   
                                            ];
                                            foreach ($local as $list){
                                                echo '<li>';
                                                echo '<i class="fa-solid fa-map-pin"></i>';
                                                echo '<a href="'.$list["href"].'">'.$list["list"].'</a>';
                                                echo '</li>';
                                            }
                                        ?>
                                    </ul>
                                </div>
                                <div class="menu-list-1">
                                    <ul>
                                        <?php 
                                            $local = [
                                                [
                                                    'list'=> 'Stung Treng',
                                                    'href'=> '#',
                                                ],
                                                [
                                                    'list'=> 'Svay Rieng',
                                                    'href'=> '#',
                                                ],
                                                [
                                                    'list'=> 'Takéo',
                                                    'href'=> '#',
                                                ],
                                                [
                                                    'list'=> 'Oddar Meanchey',
                                                    'href'=> '#',
                                                ],
                                                [
                                                    'list'=> 'Kep',
                                                    'href'=> '#',
                                                ],
                                                [
                                                    'list'=> 'Pailin',
                                                    'href'=> '#',
                                                ],
                                                [
                                                    'list'=> 'Tboung Khmum',
                                                    'href'=> '#',
                                                ]
                                            ];
                                            foreach ($local as $list){
                                                echo '<li>';
                                                echo '<i class="fa-solid fa-map-pin"></i>';
                                                echo '<a href="'.$list["href"].'">'.$list["list"].'</a>';
                                                echo '</li>';
                                            }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>                      
                </li>
                <li><a href="#">CONTACT</a></li>
                <li><a href="#">ABOUT US</a></li>
            </ul>
        </div>

        <div class="wish-icon">
            <!-- <div class="wish">
                <i class="fa-brands fa-facebook"></i>
                <h3>Facebook</h3>
            </div>
            <div class="wish">
                <i class="fa-solid fa-magnifying-glass"></i>
                <h3>Search Here</h3>
            </div> -->
            <div class="wish">
                <i class="fa-regular fa-user"></i>
                <h3>Login</h3>
            </div>
        </div>
    </div>
</header>


<!-- login -->
<div class="wrapper">
        <div class="icon-close"><i class="fa-regular fa-circle-xmark close-login"></i></div>
        <div class="form-box login">
            <h2>Login</h2>
            <form action="#">
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                    <input type="email" required>
                    <label for="">Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-lock"></i></span>
                    <input type="password" required>
                    <label for="">Password</label>
                </div>
                <button type="submit" class="btn btn-login">Login</button>
                <div class="login-register">
                    <p>Don't have an account ?<a class="register-link">Register</a></p>
                </div>
            </form>
        </div>

        <div class="form-box register">
            <h2>Registration</h2>
            <form action="#">
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-user"></i></span>
                    <input type="text" required>
                    <label for="">Username</label>
                </div>
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                    <input type="email" required>
                    <label for="">Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-lock"></i></span>
                    <input type="password" required>
                    <label for="">Password</label>
                </div>
                <div class="remember-forgot">
                    <label for=""><input type="checkbox">I agree to the terms & conditions</label>
                </div>
                <button type="submit" class="btn btn-register">Register</button>
                <div class="login-register">
                    <p>Already have an account ?<a class="login-link">Login</a></p>
                </div>
            </form>
        </div>
    </div>
    <!-- end login -->
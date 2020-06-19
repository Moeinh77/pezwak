<?php
	class Border
	{
		############################################
		function ShowFooter () {
    	echo '
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    © 2015 YourCompany | By : <a href="http://www.designbootstrap.com/" target="_blank">DesignBootstrap</a>
                </div>

            </div>
        </div>
    </footer>

    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>' ;

             }
             ##################################



             function ShowHeader($UserName){

echo '
    <header>
        <div class="container" back>
            <div class="row">
                <div class="col-md-12">
                    <strong>User Name: </strong> <!-- username -->' ;
                   echo $UserName;
                    echo '
                </div>

            </div>
        </div>
    </header>


    <!-- HEADER END-->

    <div class="navbar_mine">
    <div class="navbar  set-radius-zero" style="background-color: Tomato">
        <div class="container">
            <div >

                <a class="navbar-brand" href="admin.php">

                    <img src="img/logo.png" style="width:60px ;height:60px" />
                </a>

            </div>

            <div class="left-div">
                <div class="user-settings-wrapper">
                    <ul class="nav">



                    </ul>
                </div>
            </div>
        </div>
    </div>
                <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a class="menu-top-active" href="index.php">Logout</a></li>


                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    ';
             }



	}

?>

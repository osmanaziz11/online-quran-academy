        <?php define('ACCESS',true); ?>
        <!-- Require Header  -->
        <?php require_once('header.php'); ?>
        <!-- Content  -->
        <?php $topic=ucwords(str_replace('-',' ',$_GET['topic']));

?>
        <div class="row p-4" id="info_header">
            <div class="col">
                <h5><?php echo $topic ?></h5>
            </div>
        </div>
        <div class="row my-4 px-3" id="course_container">
            <div class="col-md-8 ">
                <?php  if($_GET['topic']=='wudu')
                {?>
                <div class="img_container">
                    <img src="assects/img/how-to-1.png" alt="">
                </div>
                <h5 class="text-center" style="color:green; font-weight:bold;">How to Make Wudu</h5>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/watch?v=s8k-GnuvO90"
                        allowfullscreen></iframe>
                </div>

                <?php  }else  if($_GET['topic']=='salat-by-male'){?>

                <div class="container">
                    <div class="row">
                        <div class="col-md-6"><img src="assects/img/male-namaz-1.png" alt=""></div>
                        <div class="col-md-6"><img src="assects/img/male-namaz-2.png" alt=""></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"><img src="assects/img/male-namaz-3.png" alt=""></div>
                        <div class="col-md-6"><img src="assects/img/male-namaz-4.png" alt=""></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"><img src="assects/img/male-namaz-5.png" alt=""></div>
                        <div class="col-md-6"><img src="assects/img/male-namaz-6.png" alt=""></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"><img src="assects/img/male-namaz-7.png" alt=""></div>
                        <div class="col-md-6"><img src="assects/img/male-namaz-8.png" alt=""></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"><img src="assects/img/male-namaz-9.png" alt=""></div>
                        <div class="col-md-6"><img src="assects/img/male-namaz-10.png" alt=""></div>
                    </div>
                </div>

                <?php  }else  if($_GET['topic']=='salat-by-female'){?>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6"><img src="assects/img/female-namaz-1.png" alt=""></div>
                        <div class="col-md-6"><img src="assects/img/female-namaz-2.png" alt=""></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"><img src="assects/img/female-namaz-3.png" alt=""></div>
                        <div class="col-md-6"><img src="assects/img/female-namaz-4.png" alt=""></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"><img src="assects/img/female_salat-5.png" alt=""></div>
                        <div class="col-md-6"><img src="assects/img/female_salat-6.png" alt=""></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"><img src="assects/img/female_salat-7.png" alt=""></div>
                        <div class="col-6"><img src="assects/img/female_salat-8.png" alt=""></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"><img src="assects/img/female_salat-9.png" alt=""></div>
                        <div class="col-md-6"><img src="assects/img/female_salat-10.png" alt=""></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"><img src="assects/img/female_salat-11.png" alt=""></div>
                        <div class="col-md-6"><img src="assects/img/female_salat-12.png" alt=""></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"><img src="assects/img/female_salat-13.png" alt=""></div>
                        <div class="col-md-6"><img src="assects/img/female_salat-14.png" alt=""></div>
                    </div>
                </div>

                <?php  }else  if($_GET['topic']=='kalma'){?>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6"><img src="assects/img/kalma1.jpg" alt=""></div>
                        <div class="col-md-6"><img src="assects/img/kalma2.jpg" alt=""></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"><img src="assects/img/kalma3.jpg" alt=""></div>
                        <div class="col-md-6"><img src="assects/img/kalma4.jpg" alt=""></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"><img src="assects/img/kalma5.jpg" alt=""></div>
                        <div class="col-md-6"><img src="assects/img/kalma6.jpg" alt=""></div>
                    </div>
                </div>

                <?php  }else  if($_GET['topic']=='dua'){ ?>
                <div class="container">
                    <div class="row">
                        <div class="col-12"><img src="assects/img/Dua1.png" alt=""></div>

                    </div>

                </div>

                <?php  } ?>
            </div>
            <div class="col-md-4">
                <h5 class="my-4 pb-2" style="border-bottom:2px solid #0FBE7C;">Canada Immigration News</h5>
                <h5 class="mb-3 pb-2" style="border-bottom:2px solid #0FBE7C;">@CitImmCanada on Twitter</h5>
                <p style="color:#0FBE7C; border-bottom:1px solid #EAEAEA;">RT @Nat_Div_RCMP: The RCMP has an important
                    message for anyone entering Canada
                    to escape the
                    Ukraine-Russia conflict,
                    who may ha...</p>
                <p style="color:#0FBE7C; border-bottom:1px solid #EAEAEA;">@waris2292 3/3 Canada also has other
                    immigration programs. You can find
                    information about permanent
                    immigration to
                    Canada on our...</p>
                <p style="color:#0FBE7C; border-bottom:1px solid #EAEAEA;">@waris2292 2/3 accepted applications as
                    quickly as possible. As updates on the
                    special measures
                    program become
                    available, we wil...</p>
                <p style="color:#0FBE7C; border-bottom:1px solid #EAEAEA;">@waris2292 1/3 Hi. We know that there are
                    still many Afghans who have not been
                    able to travel to
                    Canada under the
                    special immigr...</p>
                <p style="color:#0FBE7C; border-bottom:1px solid #EAEAEA;">@hkphotovision 3/3 You don’t need to contact
                    us to get a new letter or to ask
                    for an extension.</p>

            </div>
        </div>



        <!-- Require Footer  -->
        <?php require_once('footer.php'); ?>

        </body>

        </html>
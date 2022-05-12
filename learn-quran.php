        <?php define('ACCESS',true); ?>
        <!-- Require Header  -->
        <?php require_once('header.php'); ?>
        <!-- Content  -->
        <?php $title=ucwords(str_replace('-',' ',$_GET['title']));

?>
        <!-- Fee Structure  -->
        <div class="row p-4" id="info_header">
            <div class="col">
                <h5><?php echo $title ?></h5>
            </div>
        </div>
        <div class="row px-3 py-5" id="fee_structure">
            <div class="col-md-4 mb-3 d-md-block d-flex flex-column justify-content-center align-items-center">
                <div class="img_container">
                    <img src="assects/img/Quran1.png" alt="">
                </div>
                <h4 class="d-inline-block my-4 pb-2" style="border-bottom:2px solid #0FBE7C;">
                    Quran With Tajweed
                    </h5>
                    <p>Amid the difficult times of COVID-19 times,learning Quran online while staying at home is the
                        best
                        utilization of the
                        time.It is also the best chance to build and revive the relation with Almighty God.</p>
                    <p>Read more</p>
                    <h3 class="my-4 pb-2" style="border-bottom:2px solid #0FBE7C; display:inline-block">Quran With
                        Tajweed
                </h4>
                <div class="banner_img_container my-4">
                    <img src="assects/img/stayhome-trial-450x80-1.png" alt="">
                </div>
                <p>
                    Learning Quran with Tajweed is a frugal, skimping, secured, effortless and conductive way of
                    using
                    modern technology for
                    the betterment of mankind. The main purpose for designing this program is to facilitate the
                    Muslim
                    community UK , USA ,
                    Australia of those countries where hiring Online Quran Tutor is not convenient or accessible.
                </p>
                <h5 class="mt-5 mb-4 pb-2 d-inline-block" style="border-bottom:2px solid #0FBE7C;">Quran Memorization
                </h5>
                <p>Quran Memorization at home is easy now. Alhamdulillah we all are Muslims and Allah created us in
                    the
                    Muslim’s home. He
                    sent the Prophet Muhammad (Peace Be Upon Him) to us for telling the way which goes to the
                    jannah.
                    Basically Quran
                    Memorization is a spiritual and physical project. This course is made easy Online. We have
                    designed
                    a beautiful and
                    affordable course of Online Quran Memorization for Kids.</p>
            </div>
            <div class="col-md-8 ">
                <?php  if($_GET['title']=='quran-with-tajweed')
                {?>
                <div class="img_container">
                    <img src="assects/img/Quran1.png" alt="">
                </div>

                <p class="my-3">Amid the difficult times of COVID-19 times,learning Quran online while staying at home
                    is the best
                    utilization of the time.It is also the best chance to build and revive the relation with Almighty
                    God. Habib-a-Pak Quran academy is offering an online safe and convenient way to learn Quran with
                    Tajweed. The main objective of this program is to provide the muslim community of United Kingdom,
                    United States of America, Canada and Australia an opportunity to get the services of male and female
                    teachers of Quran at affordable plans on their choice of time.Online flexible classes by Habib-a-Pak
                    Quran Academy is the convenient way of learning the Quran with Tajweed at home.The classes are
                    scheduled according to the avalability of the student. </p>

                <?php  }else  if($_GET['title']=='hifz-e-quran'){?>
                <div class="img_container">
                    <img src="assects/img/Quran2.png" alt="">
                </div>

                <p class="my-3">Muslim kids living abroad are facing problems to complete Hifz e Quran (Memorization).
                    The muslims always seek the best Quran teacher for their kids to teach them proper Tajweed and
                    Recitation rules.Habib-a-Pak Quran academy has the best solution for this challenge.We hire male and
                    female quran teachers on the basis of competency, dedication and punctuality to satisfy the needs of
                    our students.Habib-a-Pak Quran academy has designed a special course for this purpose. </p>

                <?php  }else  if($_GET['title']=='rivision-of-quran'){?>
                <div class="img_container">
                    <img src="assects/img/Quran3.png" alt="">
                </div>

                <p class="my-3">Revision of the Quran (Tajweed & Hifz) is an important part of learning the Quran.
                    Revision is the best way to correct the mistakes of the recitation of the Quran. Habib-a-Pak Quran
                    Academy provides home based class to revise Quran Pak from the best male and female teachers. We
                    provide the students of any age group our services to revise the Hifz and Tajweed of Quran.Our male
                    and female teachers are Hafiz e Quran qualified from the best Madaris of the country and they can
                    recite Quran in arabic accent. </p>

                <?php  }else  if($_GET['title']=='quran-for-kids'){?>
                <div class="img_container">
                    <img src="assects/img/Quran4.png" alt="">
                </div>

                <p class="my-3">The muslim kids living in abroad are facing great difficulty to learn and hifz Quran as
                    it is very hard and expensive to find a Quran teacher in non muslim countries like UK, USA, Canada
                    and Australia. Life is also very busy over there due to which most of the parents can not teach
                    their kids Quran. Habib-a-Pak Quran Academy has resolved this problem by offering online Quran
                    teaching. Now equal opportunities are available for adults and kids (males and females) to learn
                    Quran with Tajweed at their own schedule while staying at their home.Our teachers can also
                    communicate in English so there is no need to worry about language. </p>

                <?php  }else  if($_GET['title']=='female-quran-teacher'){?>
                <div class="img_container">
                    <img src="assects/img/Quran5.png" alt="">
                </div>

                <p class="my-3">The Quran faculty of Habib-a-Pak Quran academy consists of both male and female Quran
                    teachers. Habib-a-Pak Quran Academy has hired female teachers so that the students who are reluctant
                    to learn from male teachers could learn Quran from female teachers comfortably.As it is hard to find
                    the best female teacher, we have made every effort to hire the competent female teacher.These female
                    teachers are Hafiza from reputable Madaris and equally qualified .</p>

                <?php  } ?>

            </div>
        </div>


        <!-- Require Footer  -->
        <?php require_once('footer.php'); ?>

        </body>

        </html>
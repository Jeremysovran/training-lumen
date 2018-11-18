<?php require __DIR__.'/layout/header.php' ?>


<!-- cover -->
<div class="d-flex justify-content-center">
    <div class="p-0 col-lg-8 pt-lg-4">
        <div class="cover">
            <div class="cover--gradient"></div>
            <div class="cover--photo d-lg-flex align-items-lg-end justify-content-lg-start" style="background: url(https://scontent-cdg2-1.xx.fbcdn.net/v/t1.0-9/43086296_2199135283698569_542827224185700352_o.png?_nc_cat=105&oh=7b9b31bbff282e4ceda9c420e2eae059&oe=5C536B7B) no-repeat;">
                <div class="cover--photo--profil--desktop d-none d-lg-block align-items-lg-end" style="background: url(https://scontent-cdg2-1.xx.fbcdn.net/v/t1.0-9/13510827_1738096696469099_2376030713156492362_n.png?_nc_cat=104&oh=41a26a1a1924f195fb360bb4e8da3d76&oe=5C532334) no-repeat;"></div>
                <div class="cover--username d-none d-lg-block  mb-2 ml-3 text-light">username</div>
            </div>
            <div class="col cover--photo--profil d-lg-none" style="background: url(https://scontent-cdg2-1.xx.fbcdn.net/v/t1.0-9/13510827_1738096696469099_2376030713156492362_n.png?_nc_cat=104&oh=41a26a1a1924f195fb360bb4e8da3d76&oe=5C532334) no-repeat;">
            </div>
            <div class="col text-center pb-3 d-lg-none">
                <p>User Name </p>
            </div>
        </div>
        <div class="container-fluid">
            <!-- nav -->
            <div class="row nav nav--border d-none d-lg-flex border-right border-left border-bottom">
                <ul class="d-flex justify-content-center">
                    <li class="border-left border-right"><a href="">A propos</a></li>
                    <li class="border-right"><a href="">Amis</a></li>
                    <li class="border-right"><a href="">Photos</a></li>
                </ul>
            </div>
            <!-- bio -->
            <div class="row bio p-3 align-items-center d-lg-none">
                <li><i class="m-2"></i>Etudes: Formation développeur web à <a href="">Oclock</a></li>

            </div>
            <!-- nav about/photos/friends mobile -->
            <div class="row nav nav--secondary justify-content-center d-lg-none">
                <li><a href=""><i class=""></i><span>A propos</span></a></li>
                <li><a href=""><i class=""></i><span>Photos</span></a></li>
                <li><a href=""><i class=""></i><span>Amis</span></a></li>
            </div>

        </div>
        <!-- input add post -->
        <div class="container">
            <div class="row p-2 d-lg-none align-items-center">
                <div class="addpost--photo mr-3"><a href=""><i style="background:url(https://scontent-cdg2-1.xx.fbcdn.net/v/t1.0-9/13510827_1738096696469099_2376030713156492362_n.png?_nc_cat=104&oh=41a26a1a1924f195fb360bb4e8da3d76&oe=5C532334) no-repeat;"></i></a></div>
                <form action="" method="POST" class="contact-form">
                <input type="texte" name="produit" placeholder="Exprimez-vous" class="addpost--input">
                <label for="file" value="file" class="fileMobile"><i class="icon-add"></i></label>
            </form>
            </div>
        </div>
        <main class="col-lg-12 p-0 d-lg-flex justify-content-center">
            <!-- Aside -->
            <aside class="col-12 p-0 col-lg-4 pr-lg-3">
                <div class="container d-none d-lg-flex flex-column">
                    <div class="p-2 w-100">
                        <div class="intro box d-flex align-items-center">
                            <i class="picto mr-2 "></i>
                            <div>
                                <h2>intro</h2>
                            </div>
                        </div>
                        <p>Avec <em>O'clock</em> la force tu auras!</p>
                    </div>
                    <div class="row bio m-2 pt-3 pb-2 align-items-center d-none d-lg-flex">
                        <li><i class="mr-2"></i>Etudes: Formation développeur web à <a href="">Oclock</a></li>
                    </div>
                </div>
                <!-- gallery photo-->
                <div class="container">
                    <div class="row p-2 categoryTitle justify-content-between">
                        <a href=""><i class=""></i>Photos</a>
                        <a href="">Voir toutes les photos</a>
                    </div>
                    <div class="row">
                        <div class="gallery col-12 p-0">
                            <div class="column1 col-6 d-flex flex-column p-0">
                                <i class="borderBottom borderRight" style="background:url(https://scontent-cdg2-1.xx.fbcdn.net/v/t1.0-9/13510827_1738096696469099_2376030713156492362_n.png?_nc_cat=104&oh=41a26a1a1924f195fb360bb4e8da3d76&oe=5C532334)"></i>
                                <i class="borderRight" style="background:url(https://scontent-cdg2-1.xx.fbcdn.net/v/t1.0-9/13510827_1738096696469099_2376030713156492362_n.png?_nc_cat=104&oh=41a26a1a1924f195fb360bb4e8da3d76&oe=5C532334)"></i>
                            </div>
                            <div class="column1 col-6 d-flex flex-column p-0">
                                <i class="borderBottom" style="background:url(https://scontent-cdg2-1.xx.fbcdn.net/v/t1.0-9/13510827_1738096696469099_2376030713156492362_n.png?_nc_cat=104&oh=41a26a1a1924f195fb360bb4e8da3d76&oe=5C532334)"></i>
                                <i class=" " style="background:url(https://scontent-cdg2-1.xx.fbcdn.net/v/t1.0-9/13510827_1738096696469099_2376030713156492362_n.png?_nc_cat=104&oh=41a26a1a1924f195fb360bb4e8da3d76&oe=5C532334)"></i>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- friend container -->
                <div class="container">
                    <div class="row p-2 categoryTitle justify-content-between">
                        <a href=""><i class=""></i>Amis</a>
                        <a href="">liste des amis</a>
                    </div>
                    <div class="row">
                        <div class="friendsGallery col-12 p-0">
                            <i class="friendsGallery--photo borderRight col-4" style="background:url(https://scontent-cdg2-1.xx.fbcdn.net/v/t1.0-9/13510827_1738096696469099_2376030713156492362_n.png?_nc_cat=104&oh=41a26a1a1924f195fb360bb4e8da3d76&oe=5C532334) no-repeat center"></i>
                            <i class="friendsGallery--photo borderRight col-4" style="background:url(https://scontent-cdg2-1.xx.fbcdn.net/v/t1.0-9/13510827_1738096696469099_2376030713156492362_n.png?_nc_cat=104&oh=41a26a1a1924f195fb360bb4e8da3d76&oe=5C532334) no-repeat center"></i>
                            <i class="friendsGallery--photo col-4 mb-0" style="background:url(https://scontent-cdg2-1.xx.fbcdn.net/v/t1.0-9/13510827_1738096696469099_2376030713156492362_n.png?_nc_cat=104&oh=41a26a1a1924f195fb360bb4e8da3d76&oe=5C532334) no-repeat center"></i>
                        </div>
                    </div>
                    <div class="row friendGallery--user text-center pb-2">
                        <div class="col-4">user name</div>
                        <div class="col-4">user name</div>
                        <div class="col-4">user name</div>
                    </div>
                    <div class="row">
                        <div class="friendsGallery col-12 p-0">
                            <i class="friendsGallery--photo borderRight col-4" style="background:url(https://scontent-cdg2-1.xx.fbcdn.net/v/t1.0-9/13510827_1738096696469099_2376030713156492362_n.png?_nc_cat=104&oh=41a26a1a1924f195fb360bb4e8da3d76&oe=5C532334) no-repeat center"></i>
                            <i class="friendsGallery--photo borderRight col-4" style="background:url(https://scontent-cdg2-1.xx.fbcdn.net/v/t1.0-9/13510827_1738096696469099_2376030713156492362_n.png?_nc_cat=104&oh=41a26a1a1924f195fb360bb4e8da3d76&oe=5C532334) no-repeat center"></i>
                            <i class="friendsGallery--photo col-4 mb-0" style="background:url(https://scontent-cdg2-1.xx.fbcdn.net/v/t1.0-9/13510827_1738096696469099_2376030713156492362_n.png?_nc_cat=104&oh=41a26a1a1924f195fb360bb4e8da3d76&oe=5C532334) no-repeat center"></i>
                        </div>
                    </div>
                    <div class="row friendGallery--user text-center pb-2">
                        <div class="col-4">user name</div>
                        <div class="col-4">user name</div>
                        <div class="col-4">user name</div>
                    </div>
                </div>
                <!-- END Aside -->
            </aside>
            <!-- Main -->
            <section class="col-12 p-0 col-lg-8">
                <!--add post -->
                <div class="container d-none d-lg-block">
                    <div class="row p-3">
                        <div class="inBox">
                            <form action="" method="POST" class="contact-form" enctype="multipart/form-data">
                                <input type="texte" id="text" name="text" placeholder="Exprimez-vous"></textarea>
                                <div class="button-add">
                                    <input type="file" name="picture" id="file" />

                                    <label for="file" value="file"><i class="icon-add"></i>photo/video</label>

                                    <input type="submit" value="envoyer">
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
                <!--content post -->
                <?php foreach ($allPost as $currentPost) : ?>
                <div class="container">
                    <div class="row p-3 d-flex align-items-center">
                        <div class="post--photoProfil mr-3" style="background:url(https://scontent-cdg2-1.xx.fbcdn.net/v/t1.0-9/13510827_1738096696469099_2376030713156492362_n.png?_nc_cat=104&oh=41a26a1a1924f195fb360bb4e8da3d76&oe=5C532334) no-repeat"></div>
                        <div class="post--userName"><span>test</span> a partagé un post.</div>
                    </div>
                    <div class="row pl-3 pr-3">
                        <p><?= $currentPost->text ?></p>
                    </div>
                    <div class="row">
                        <div class="postCover col-12 p-0 mt-2">
                        <?php if(!empty($currentPost->picture)) : ?>
                            <div class="postCover--photo" style="background: url(<?= $_SERVER['BASE_URI'] ?>/assets/img/<?= $currentPost->picture ?>) no-repeat center;"></div>
                            <?php endif ?>

                        </div>
                    </div>
                    <div class="row align-items-center p-3 mt-2 mb-2 like-cpt">
                        <i class="likeIcon mr-2"></i><span>1</span>
                    </div>
                    <div class="row pt-2 pb-2">
                        <a class="col-6 like  pt-2 pb-2 d-flex align-items-center justify-content-center">
                            <div class="like--img mr-2"></div>
                            <div>J'aime</div>
                        </a>
                        <a class="col-6 comment pt-2 pb-2 d-flex align-items-center justify-content-center">
                            <div class="comment--img mr-2" style="    background: url(https://static.xx.fbcdn.net/rsrc.php/v3/yK/r/mrcmNcOTzz0.png)no-repeat;"></div>
                            <div>Commenter</div>
                        </a>
                    </div>
                    <div class="row p-2 align-items-center">
                        <div class="commentlist--photo ml-2 mr-3" style="background:url(https://scontent-cdg2-1.xx.fbcdn.net/v/t1.0-9/13510827_1738096696469099_2376030713156492362_n.png?_nc_cat=104&oh=41a26a1a1924f195fb360bb4e8da3d76&oe=5C532334) no-repeat"></div>
                        <div class="commentlist--text p-2"><span>User name</span></div>
                    </div>
                    <div class="row p-2 align-items-center">
                        <div class="addpost--photo mr-3"><a href=""><i style="background:url(https://scontent-cdg2-1.xx.fbcdn.net/v/t1.0-9/13510827_1738096696469099_2376030713156492362_n.png?_nc_cat=104&oh=41a26a1a1924f195fb360bb4e8da3d76&oe=5C532334) no-repeat;"></i></a></div>
                        <form action="" method="get" class="inputComment">
                            <input type="texte" name="produit" placeholder="Exprimez-vous" class="addpost--input">

                        </form>
                    </div>
                </div>
                <?php endforeach ?>
                <!-- END Main -->
            </section>
        </main>
    </div>
</div>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Type</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach ($allPost as $currentPost) : ?>
    <tr>
      <td><?= $currentPost->text ?></td>
      <td><?= $currentPost->picture ?></td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>

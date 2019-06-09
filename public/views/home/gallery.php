
<div class="content">
    <div class="sf-container-flex-proyectos">
        <div class="sf-content-titles-proyectos">
            <div class="sf-title-proyectos">¡RENUEVA <label>TODO</label>!</div>
            <div class="sf-subtitle-proyectos">PROYECTOS <label>REALIZADOS</label></div>
        </div>
        <div class="sf-container-pictures-proyectos">
            <div class="sf-container-pictures-tiny">
                <ul class="list-categories">
                    <?php 
                    $cont = 0;
                    foreach($gallery as $room): 
                        $cont++;
                    ?>
                        <li>
                            <a href="#" class="<?php echo ($cont == 1)?'active':'';  ?>" data-id="<?php echo $cont; ?>">
                                <i class="fa <?php echo $room['icon'] ?>"></i>
                                <div><?php echo $room['name'] ?></div>
                            </a>
                        </li>
                    <?php endforeach ?>
                </ul>

            </div>
            <div class="sf-container-picture-big">
                    <div class="load"></div>
                    <?php 
                    $contGallery = 0;
                    foreach($gallery as $room): 
                        $contGallery++;
                    ?>
                    <div id="<?php echo 'gallery_'.$contGallery ?>" class="owl-carousel owl-theme" style="display: <?php echo ($contGallery == 1)?'block':'none';  ?>">
                        <?php foreach($room['photos'] as $photos): ?>
                        <div class="item">
                            <img src="assets/img/room/<?php echo $photos['image']?>">
                        </div>
                        <?php endforeach ?>
                    </div>
                    <?php endforeach ?>

                
                
            </div>
        </div>
    </div>
</div>

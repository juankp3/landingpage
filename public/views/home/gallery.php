<section class="sf-container-proyectos-new">
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
                                <a href="#" class="<?php echo ($cont == 1)?'active':'';  ?>">
                                    <i class="fa <?php echo $room['icon'] ?>"></i>
                                    <div><?php echo $room['name'] ?></div>
                                </a>
                            </li>
                        <?php endforeach ?>
                    </ul>

                </div>
                <div class="sf-container-picture-big">

                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <img src="assets/img/room/SALA-1.png">
                        </div>
                        <div class="item">
                            <img src="assets/img/room/SALA-2.png">
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<ul class="list-categories">
    <?php foreach($gallery as $room): ?>
        <li>
            <a href="#">
                <i class="fa <?php echo $room['icon'] ?>"></i>
                <div><?php echo $room['name'] ?></div>
            </a>
        </li>
    <?php endforeach ?>
</ul>


<div class="owl-carousel owl-theme">
    <div class="item">
        <img src="assets/img/room/SALA-1.png">
    </div>
    <div class="item">
        <img src="assets/img/room/SALA-2.png">
    </div>
</div>
<h1>les Animes</h1>

<div class="row row-cols-1 row-cols-md-3 g-4 mx-2">
    <?php foreach ($articles as $article) { ?>
        <div class="col">
            <div class="card h-100">
                <p><?php echo '<img src="view/images/'.$article['image'].'" class="card-img-top" alt="..."/>';?></p>
                <div class="card-body">
                <h2><?= $article['titre'] ?></h2>
                <p><?php echo $article['contenu']; ?></p>
                </div>
            </div>
        </div>
    <?php } ?>
</div>


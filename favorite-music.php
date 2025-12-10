<?php include 'includes/header.php' ?>

<?php

$favoriteAlbums = [
    [
        'title' => 'Load',
        'artist' => 'Metallica',
        'year' => 1997,
        'img' => 'load.jpg'
    ],
    [
        'title' => 'The Stage',
        'artist' => 'Avenged Sevenfold',
        'year' => 2016,
        'img' => 'thestage.jpg'
    ],
    [
        'title' => 'American Idiot',
        'artist' => 'Green Day',
        'year' => 2004,
        'img' => 'americanidiot.jpg'
    ],
    [
        'title' => 'Music to be Murdered By',
        'artist' => 'Eminem',
        'year' => 2020,
        'img' => 'mtmb.jpg'
    ],
]
?>

<section class="music-container">
    <h1 class="page-title">Must Hear Music</h1>

    <div class="albums-grid">
        <?php foreach ($favoriteAlbums as $album): ?>

        <div class="album-card">
            <img src="images/music/<?php echo $album['img']; ?>" alt="<?php echo $album['title']; ?> Cover">
            <div class="album-info">
                <h2><?php echo $album['title']; ?></h2>
                <p><?php echo $album['artist']; ?> | <?php echo $album['year']; ?> </p>
            </div>
        </div>
    <?php endforeach; ?>
    </div>
</section>

<?php include 'includes/footer.php' ?>
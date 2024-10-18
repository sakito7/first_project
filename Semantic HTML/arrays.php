<?php
$videojuegos = [
    [
        'title' => 'Elden Ring',
        'img' => './apps.30323.14537704372270848.6ecb6038-5426-409a-8660-158d1eb64fb0.jpeg',
        'description'=> '',
    ], 
    [
        'title' => 'God of War',
        'img' => './LsaRVLF2IU2L1FNtu9d3MKLq.avif',
        'description'=> '',
    ], 
    [
        'title' => 'Sun Wukong',
        'img' => './black-myth-wukong-sara-lanciaro-76b21bc2-image-432241ba6.jpg.webp',
        'description'=> '',
    ],
    [
        'title' => 'Read dead dedemption II',
        'img' => './readdead.jpeg',
        'description'=> '',

    ],
    [
        'title' => 'The last of us Part II',
        'img' => './thelastofus.webp',
        'description'=> '',
    ],
    [
        'title' => 'GTA V',
        'img' => './GTA-V.jpg',
        'description'=> '',
    ],
    [
        'title' => 'Minecraft',
        'img' => './minecraft.jpg',
        'description'=> '',
    ],
    [
        'title' => 'Saga Souls',
        'img' => './saga souls-1.webp',
        'description'=> '',
    ],
    [
        'title' => 'Resident Evil II',
        'img' => './reident evil.jpeg',
        'description'=> '',
    ],
    [
        'title' => 'Final Fantasy',
        'img' => './Final-Fantasy.png',
        'description'=> '',
    ]
];
?>

<?php foreach ($videojuegos as $index => $game): ?>
    <h2><?php echo ($index + 1) . ". " . $game['title']; ?></h2>
    <table style="width:100%">
        <tr>
            <td width="60%"><img src="<?php echo $game['img']; ?>" alt="<?php echo $game['title']; ?>" width="100%" class="item"></td>
            <td width="40%"><?php echo $game['description']; ?></td>
        </tr>
    </table>
    <br>
    <hr>
<?php endforeach; ?>
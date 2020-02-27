<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Games Library</title>
</head>
<body>
    <table>
        <thead>
        <tr>
            <th>Title</th>
            <th>Price</th>
            <th>Explore</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach( $library as $game ): ?>
        <tr>
            <td><?php echo $game['title'] ?></td>
            <td>&pound;<?php echo $game['price'] ?></td>
            <td><a href="<?php echo $game['youtube_link'] ?>" target="_blank">View youtube videos</a></td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>

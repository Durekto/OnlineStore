<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sneakers House</title>
    <link rel="stylesheet" href="<?= Framework::asset('home.css'); ?>">
    <link rel="icon" href="<?= Framework::image('icon.png'); ?>">
</head>
<body>
<header>
    <div class="container">
        <div id="logo">
            <img src="<?= Framework::image('logo.png'); ?>" alt="Sneakers House">
        </div>
        <div>
            <p>We always sell quality products.
                The best quality on the market.
            </p>
            <p>
                The lowest prices in Europe.
                Call for services!
            </p>
        </div>
        <nav>
            <a href="?auth=login">Login</a>
            <a href="?auth=registration">Registration</a>
        </nav>
    </div>
    <nav>
        <?php foreach($data['pages'] as $page) :?>
            <a href=""><?php echo $page['name']; ?></a>
        <?php endforeach; ?>
    </nav>
</header>
<main>
    <?php foreach($data['products'] as $product) : ?>
        <article>
            <img src="<?=Framework::image($product['image'])?>" alt="<?=$product['name'];?>">
            <div>
                <div><?=$product['name'];?></div>
                <div><?=$product['description'];?></div>
                <div><?=$product['price'];?></div>
            </div>
        </article>
    <?php endforeach; ?>
</main>
<footer>
    <p>
        Best Sneakers Shoes Online Store
        Welcome to the world of sneakers where only top quality kicks are offered.

        Online Shop works exclusively with trusted manufacturers, ensuring the latest series, including limited must-have. The selection in our store is very thorough and well thought out, based on timeless design, functionality, natural materials and original solutions. Not rest on our laurels, so we can continue to expand with new brands and models, so that the products displayed the world stage to reflect ever. We sell best shoes sneakers-known and well-known manufacturers such as adidas, Nike, Reebok, Converse, Asics, New Balance, Puma, Jordan. In our online shop you will find of course only genuine top quality shoes sneaker. We invite you to shop.

        Buy your perfect shoes!
        Being comfortable and fashionable in a modern city means to wear good shoes. That is why in this shoe store we have gathered only the trainers that meet the needs and requirements of the most demanding customers. For those of them who value quality and perfectly made products, we decided to work exclusively with trusted manufacturers. This move ensures that the latest series, also including limited must-haves, can be within their reach. We believe that shoes can make every outfit look great, but we also know that these are the accessories that can make it look even better. Our “Accessories” section is full of ideas. You can find there: socks, stance socks, bags, caps and many more. All the orders placed through our online shop are handled with care. We do our best to dispatch and ship them as soon as possible. Snickers are orderable from every country inside and outside the European Union.
    </p>
</footer>
</body>
</html>

<?php
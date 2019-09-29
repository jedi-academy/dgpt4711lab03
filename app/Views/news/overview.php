<h2><?= $title ?></h2>

<?php if (! empty($news) && is_array($news)) : ?>

        <?php foreach ($news as $news_item): ?>

                <h3><?= $news_item['title'] ?></h3>

                <div class="main">
                        <?= $news_item['body'] ?>
                </div>
                <p><a href="<?= '/news/'.$news_item['slug'] ?>">View article</a></p>

        <?php endforeach; ?>

<?php else : ?>

        <h3>No News</h3>

        <p>Unable to find any news for you.</p>

<?php endif ?>

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


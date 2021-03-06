<?php
use yii\helpers\Html;

?>
<h4>Categories</h4>
<div class="list-group">
    <?php
        foreach($data['categories'] as $category):
            echo Html::a(
                $category->name
                .Html::tag('span', $category->getPosts()->count(), ['class' => 'badge']),
                ['/category/posts', 'slug' => $category->slug],
                ['class' => 'list-group-item']
            );
        endforeach;
    ?>
</div>
<h4>Last posts</h4>
<div class="list-group">
    <?php
        foreach($data['posts'] as $post):
            echo Html::a(
                $post->name,
                ['/post/view', 'slug' => $post->slug],
                ['class' => 'list-group-item']
            );
        endforeach;
    ?>
</div>
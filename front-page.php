
<!-- ヘッダー ------------------------------------------------------------------------------>
<?php get_header(); ?>


<!-- プロフィール ------------------------------------------------------------------------------>
<article class="profile flex-column" id="profile">
    <div class="container flex-row flex-gap-64 flex-wrap">

        <section class="profile-info flex-column flex-gap-32 flex-column-center smooth_up">
            <div class="profile-image">
                <img src="<?php echo CFS()->get('profile-image'); ?>" alt="">
            </div>
            <h2 class="profile-info-name subscript">小川　太誠</h2>

            <div>
                <p>1998年5月16日（25歳）</p>
                <p><?php echo CFS()->get('profile-living'); ?></p>
            </div>

            <div class="profile-info-tags flex-row flex-gap-8 flex-wrap flex-row-center">
                <?php foreach ((array) CFS()->get('profile-tags') as $item): ?>
                    <p class="square"><?php echo $item['profile-tag']; ?></p>
                <?php endforeach; ?>
            </div>

        </section>
        
        <section class="profile-greeting smooth_up">
            <?php echo CFS()->get('profile-greeting'); ?>
        </section>
        
    </div>
</article>
                
<!-- 制作物 ------------------------------------------------------------------------------>
<article class="works" id="works">
    <div class="container flex-column flex-gap-64">
        <h2 class="subscript smooth_up">制作物</h2>
        <div class="works-articles flex-column flex-gap-160">


            <?php foreach ((array) CFS()->get('works-articles') as $item): ?>
                
                <article class="works-article flex-row flex-gap-32 flex-wrap flex-row-center smooth_up">
                    
                    <!-- 参考画像 -->
                    <div class="works-article-image">
                        <a href="<?php echo $item['works-article-image-link']['url']; ?>" target="_blank">
                            <img src="<?php echo $item['works-article-image']; ?>">
                        </a>
                    </div>
                    
                    <!-- ラッパー -->
                    <div class="works-article-body flex-column flex-gap-32">

                        <!-- 見出し -->
                        <h3 class="works-article-body-title line-clamp-2">
                            <?php echo $item['works-article-body-title']; ?>
                        </h3>

                        <!-- 詳細 -->
                        <p class="works-article-body-description line-clamp-5">
                            <?php echo $item['works-article-body-description']; ?>
                        </p>

                        <!-- ソース -->
                        <ul class="works-article-body-sources flex-row flex-gap-32 flex-wrap">
                            <?php foreach ((array) $item['works-article-body-sources'] as $item_child): ?>
                                <li class="works-article-body-sources-link"><?php echo $item_child['works-article-body-sources-link']; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                </article>

            <?php endforeach; ?>

        </div>
    </div>
</article>


<!-- スキル・資格 ------------------------------------------------------------------------------>
<article class="skills" id="skills">
    <div class="container flex-column flex-gap-64">

        <!-- セクションタイトル -->
        <h2 class="subscript smooth_up">スキル・資格</h2>

        <div class="flex-column flex-gap-128">

            <?php foreach ( (array) CFS()->get('skills-list') as $item ): ?>
            <article class="skills-list flex-column flex-gap-64 flex-column-center">

                <!-- カテゴリー名 -->
                <h3 class="skills-list-category smooth_up"><?php echo $item['skills-list-category']; ?></h3>
                    
                <div class="skills-list-items">
                <?php foreach ( (array) $item['skills-list-items'] as $item_child ):?>
                    
                    <!-- スキル -->
                    <section class="skills-list-item flex-column flex-gap-16 smooth_up">

                        <!-- 名称 -->
                        <h4 class="skills-list-item-header leftline"><?php echo $item_child['skills-list-item-header']; ?></h4>
                        
                        <!-- 詳細 -->
                        <ul class="skills-list-item-body">
                        <?php foreach ( (array) $item_child['skills-list-item-body'] as $item_child_child ):?>
                            <li><?php echo $item_child_child['skills-list-item-body-li']; ?></li>
                        <?php endforeach; ?>
                        </ul>
                        
                    </section>

                <?php endforeach; ?>

                </div>
            </article>
            <?php endforeach; ?>
    </div>
</article>


<!-- 経験・経歴 ------------------------------------------------------------------------------>
<article class="experience" id="experience">
    <div class="container flex-column flex-gap-64">
        <h2 class="subscript smooth_up">経験・経歴</h2>
        <div class="flex-column flex-gap-32">

            <?php foreach ( (array) CFS()->get('experience-section') as $item ):?>
            <section class="experience-section flex-column flex-gap-16 smooth_right">

                <!-- 期間 -->
                <p class="experience-section-duration leftline"><?php echo $item['experience-section-duration']; ?></p>

                <!-- 名称 -->
                <h3 class="experience-section-title"><?php echo $item['experience-section-title']; ?></h3>

                <!-- 概要 -->
                <div class="experience-section-description">
                    <p><?php echo $item['experience-section-description']; ?></p>
                </div>

            </section>
            <?php endforeach; ?>

        </div>
    </div>
    
</article>


<!-- お問い合わせ ------------------------------------------------------------------------------>
<article class="contact" id="contact">
    <div class="container flex-column flex-gap-64">
        <h2 class="subscript smooth_up">Contact</h2>
        <form class="form flex-column flex-gap-32" action="#">
            <input class="form-input form-outline smooth_up" type="text" id="name" name="name" placeholder="名前（必須）" required>
            <input class="form-input form-outline smooth_up"  type="email" id="email" name="email" placeholder="メールアドレス（必須）" required>
            <textarea class="form-textarea form-outline smooth_up" id="comment" cols="50" rows="5" name="comment" placeholder="お問い合わせ内容（必須）" required></textarea>
            <input class="form-submit button smooth_up" type="submit" value="送信する">
        </form>
    </div>
</article>

<!-- フッター ------------------------------------------------------------------------------>
<?php get_footer(); ?>
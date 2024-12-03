<?php get_header(); ?>


<main>
  <article>
    <section id="news-main">
      <div class="news-main-inner">
        <div id="news-title">
          <h1>NEWS<br><span>ニュース</span></h1>
          <p>TOP > NEWS</p>
        </div>
      </div>
    </section>

    <section id="news">

      <?php
      //取得したい投稿記事などの条件を引数として渡す
      $args = array(
        // 投稿タイプ
        'post_type'      => 'post',
        // カテゴリー名
        'category_name' => 'news',
        // 1ページに表示する投稿数
        'posts_per_page' => 3,
      );
      // データの取得
      $posts = get_posts($args);
      ?>

      <?php foreach ($posts as $post): ?>
        <?php setup_postdata($post); ?>

        <!-- 日付を出力する -->
        <?php echo get_the_date(); ?>
        <br>
        <div id="each-title">
          <!--  投稿記事のタイトルを表示する -->
          <?php the_title(); ?>
        </div>
        <?php the_content(); ?>
        <br>

      <?php endforeach; ?>
      <!-- 使用した投稿データをリセット -->
      <?php wp_reset_postdata(); ?>
    </section>
  </article>

  <!-- news loop until here-->

  <div class="news-pagination">
    <?php
    // ページネーション
    echo paginate_links(array(
      'total' => $wp_query->max_num_pages,
      'prev_text' => '&lt;&lt;前へ',
      'next_text' => '次へ&gt;&gt;',
    ));
    ?>
  </div>


  <?php get_footer(); ?>
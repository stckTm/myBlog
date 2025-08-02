<?php
function my_theme_setup() {
  // アイキャッチ画像を有効化
  add_theme_support('post-thumbnails');

  // 抜粋を固定ページでも使えるようにする（必要なら）
  add_post_type_support('page', 'excerpt');

  // タイトルタグを自動生成
  add_theme_support('title-tag');

  // HTML5出力のサポート
  add_theme_support('html5', array(
    'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
  ));
}
add_action('after_setup_theme', 'my_theme_setup');


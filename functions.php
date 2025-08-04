<?php
function my_theme_setup()
{
  // アイキャッチ画像を有効化
  add_theme_support('post-thumbnails');

  // 抜粋を固定ページでも使えるようにする（必要なら）
  add_post_type_support('page', 'excerpt');

  // タイトルタグを自動生成
  add_theme_support('title-tag');

  // HTML5出力のサポート
  add_theme_support('html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption'
  ));
}

add_action('after_setup_theme', 'my_theme_setup');

//  アイキャッチ画像がなければ標準画像を取得
function get_eyecatch_with_default()
{
  if (has_post_thumbnail()) :
    $id = get_post_thumbnail_id();
    $img = wp_get_attachment_image_src($id, 'large');
  else:
    $img = array(get_template_directory_uri() . '/img/post-bg.jpg');
  endif;

  return $img;
}

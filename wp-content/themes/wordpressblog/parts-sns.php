<?php 
  $twitter_url = get_the_author_meta('twitter');
  // https://twiter.com/の値を探してくる、見つかった値を置換、検索・置換えの対象は$twitter_url
  $twitter_user =str_replace("https://twitter.com/","",$twitter_url);
?>

<!-- URL部分はパーマリンクで実装 -->
<!-- Facebookでシェアは動作確認でエラーが起こるため、一旦コメントアウト -->
<!-- <a href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>"
 rel="nofollow" target="_blank">Facebookシェア</a> -->
<!-- <a href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>"
  onclick="window.open(this.href,'FBwindow','width=650,height=450,menubar=no,toolbar=no,scrollbars=yes');return false;" title="Facebookでシェア">Facebookでシェア</a> -->
<div class="row py-5">
  <div class="col-12">
    <a  class="text-white" href="https://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php
      the_title(); ?>&via=<?php echo $twitter_user; ?>">
      <div class="twitter p-3">
        Twitterでシェア
      </div>
    </a>
  </div>

</div>

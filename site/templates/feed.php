<?php
header('Content-Type: application/rss+xml; charset=utf-8');
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
  <channel>
    <title><![CDATA[<?= $site->title()->html() ?>]]></title>
    <link><?= $site->url() ?></link>
    <description><![CDATA[<?= $site->description()->html() ?>]]></description>
    <language>en-us</language>
    <lastBuildDate><?= date('r') ?></lastBuildDate>
    <atom:link href="<?= page('1_blog')->url() ?>/feed.xml" rel="self" type="application/rss+xml"/>
    <?php
    $blog = page('1_blog');
    if($blog):
      $articles = $blog->children()->sortBy('date', 'desc')->limit(20);
      foreach($articles as $article):
    ?>
    <item>
      <title><![CDATA[<?= $article->title()->html() ?>]]></title>
      <link><?= $article->url() ?></link>
      <guid isPermaLink="true"><?= $article->url() ?></guid>
      <pubDate><?= date('r', $article->date()->toUnix()) ?></pubDate>
      <description><![CDATA[<?= $article->intro()->or($article->description())->html() ?>]]></description>
    </item>
    <?php
      endforeach;
    endif;
    ?>
  </channel>
</rss>

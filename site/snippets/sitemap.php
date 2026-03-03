<?= '<?xml version="1.0" encoding="UTF-8"?>' ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  <?php foreach ($pages as $p): ?>
  <?php if ($p->isListed()): ?>
  <url>
    <loc><?= html($p->url()) ?></loc>
    <?php if ($p->modified()): ?>
    <lastmod><?= date('Y-m-d', $p->modified()) ?></lastmod>
    <?php endif ?>
    <changefreq><?= ($p->template() == 'home') ? 'weekly' : 'monthly' ?></changefreq>
    <priority><?= ($p->depth() === 1) ? '0.8' : '0.6' ?></priority>
  </url>
  <?php endif ?>
  <?php endforeach ?>
</urlset>

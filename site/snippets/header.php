<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?= $page->description()->or($site->description()) ?>">
  <title><?= $page->title() ?> | <?= $site->title() ?></title>

  <!-- Open Graph -->
  <meta property="og:type" content="<?= $page->isHomePage() ? 'website' : 'article' ?>">
  <meta property="og:url" content="<?= $page->url() ?>">
  <meta property="og:title" content="<?= $page->title() ?> | <?= $site->title() ?>">
  <meta property="og:description" content="<?= $page->description()->or('An autonomous AI studio. Agents building, writing, and shipping — with one human watching.') ?>">
  <?php if ($page->cover()->isNotEmpty() && $ogCover = $page->cover()->toFile()): ?>
  <meta property="og:image" content="<?= $ogCover->url() ?>">
  <?php else: ?>
  <meta property="og:image" content="<?= url('assets/images/og-default.jpg') ?>">
  <?php endif ?>
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:site_name" content="Idle Sparks">

  <!-- Twitter / X -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?= $page->title() ?> | <?= $site->title() ?>">
  <meta name="twitter:description" content="<?= $page->description()->or('An autonomous AI studio. Agents building, writing, and shipping — with one human watching.') ?>">
  <?php if ($page->cover()->isNotEmpty() && $twCover = $page->cover()->toFile()): ?>
  <meta name="twitter:image" content="<?= $twCover->url() ?>">
  <?php else: ?>
  <meta name="twitter:image" content="<?= url('assets/images/og-default.jpg') ?>">
  <?php endif ?>

  <!-- Schema: WebSite -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "WebSite",
    "name": "Idle Sparks",
    "url": "https://idlesparks.com",
    "description": "An autonomous AI studio. Agents building, writing, and shipping — with one human watching.",
    "author": {
      "@type": "Person",
      "name": "Chris",
      "url": "https://idlesparks.com"
    }
  }
  </script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Space+Mono:ital,wght@0,400;0,700;1,400&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
  <?= css('assets/css/main.css') ?>
</head>
<body class="bg-navy-900 text-white font-sans antialiased">
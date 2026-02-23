<?php snippet('header') ?>
<?php snippet('nav') ?>

<main>
  <!-- Blog Header -->
  <section class="relative py-20 lg:py-28">
    <div class="absolute inset-0 blueprint-grid"></div>
    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-navy-900"></div>
    <div class="relative max-w-7xl mx-auto px-6 lg:px-8">
      <span class="tech-label">// Journal</span>
      <h1 class="mt-4 text-4xl md:text-6xl font-bold text-white"><?= $page->title() ?></h1>
      <?php if ($page->text()->isNotEmpty()): ?>
      <p class="mt-4 text-lg text-gray-200 max-w-2xl"><?= $page->text() ?></p>
      <?php endif ?>
    </div>
  </section>

  <!-- Blog Posts Grid -->
  <section class="relative py-12 lg:py-16">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <?php
      $articles = $page->children()->listed()->flip();
      if ($articles->isNotEmpty()):
      ?>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php foreach ($articles as $article): ?>
        <a href="<?= $article->url() ?>" class="blueprint-card rounded-xl overflow-hidden group">
          <?php if ($cover = $article->cover()->toFile()): ?>
          <div class="aspect-video overflow-hidden">
            <img src="<?= $cover->url() ?>" alt="<?= $article->title() ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
          </div>
          <?php else: ?>
          <div class="aspect-video bg-navy-600 blueprint-grid-light flex items-center justify-center">
            <div class="text-center">
              <svg class="w-8 h-8 text-blueprint-400/60 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
              </svg>
            </div>
          </div>
          <?php endif ?>
          <div class="p-6">
            <div class="flex items-center gap-3 mb-3">
              <?php if ($article->date()->isNotEmpty()): ?>
              <span class="tech-label"><?= $article->date()->toDate('M d, Y') ?></span>
              <?php endif ?>
              <?php if ($article->tags()->isNotEmpty()): ?>
              <span class="text-blueprint-600">|</span>
              <span class="tech-label"><?= $article->tags()->split(',')[0] ?? '' ?></span>
              <?php endif ?>
            </div>
            <h2 class="text-lg font-semibold text-white group-hover:text-blueprint-400 transition-colors">
              <?= $article->title()->html() ?>
            </h2>
            <?php if ($article->intro()->isNotEmpty()): ?>
            <p class="mt-2 text-sm text-gray-300 line-clamp-3"><?= $article->intro() ?></p>
            <?php endif ?>
            <div class="mt-4 text-xs text-blueprint-500 font-mono">Read article →</div>
          </div>
        </a>
        <?php endforeach ?>
      </div>
      <?php else: ?>
      <div class="text-center py-20">
        <p class="text-gray-300">No articles published yet.</p>
      </div>
      <?php endif ?>
    </div>
  </section>
</main>

<?php snippet('footer') ?>

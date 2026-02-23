<?php snippet('header') ?>
<?php snippet('nav') ?>

<main>
  <!-- Article Header -->
  <section class="relative py-20 lg:py-28">
    <div class="absolute inset-0 blueprint-grid"></div>
    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-navy-900"></div>
    <div class="relative max-w-3xl mx-auto px-6 lg:px-8">
      <a href="<?= $page->parent()->url() ?>" class="inline-flex items-center gap-2 text-sm text-blueprint-400 hover:text-blueprint-300 transition-colors mb-8">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"/></svg>
        Back to Blog
      </a>

      <div class="flex items-center gap-3 mb-4">
        <?php if ($page->date()->isNotEmpty()): ?>
        <span class="tech-label"><?= $page->date()->toDate('M d, Y') ?></span>
        <?php endif ?>
        <?php if ($page->tags()->isNotEmpty()): ?>
        <span class="text-blueprint-600">|</span>
        <?php foreach ($page->tags()->split(',') as $tag): ?>
        <span class="px-2 py-0.5 text-xs font-mono text-blueprint-400 bg-blueprint-500/20 rounded"><?= trim($tag) ?></span>
        <?php endforeach ?>
        <?php endif ?>
      </div>

      <h1 class="text-3xl md:text-5xl font-bold text-white leading-tight"><?= $page->title()->html() ?></h1>

      <?php if ($page->intro()->isNotEmpty()): ?>
      <p class="mt-6 text-xl text-gray-200 leading-relaxed"><?= $page->intro() ?></p>
      <?php endif ?>
    </div>
  </section>

  <!-- Article Content -->
  <section class="relative py-12">
    <div class="max-w-3xl mx-auto px-6 lg:px-8">
      <article class="project-text">
        <?= $page->text()->kirbytext() ?>
      </article>

      <!-- Article Navigation -->
      <div class="section-divider mt-16 mb-8"></div>
      <div class="flex justify-between items-center">
        <?php if ($prev = $page->prev()): ?>
        <a href="<?= $prev->url() ?>" class="text-sm text-gray-200 hover:text-blueprint-400 transition-colors flex items-center gap-2">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"/></svg>
          <?= $prev->title()->html() ?>
        </a>
        <?php else: ?>
        <div></div>
        <?php endif ?>

        <?php if ($next = $page->next()): ?>
        <a href="<?= $next->url() ?>" class="text-sm text-gray-200 hover:text-blueprint-400 transition-colors flex items-center gap-2">
          <?= $next->title()->html() ?>
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
        <?php endif ?>
      </div>
    </div>
  </section>
</main>

<?php snippet('footer') ?>

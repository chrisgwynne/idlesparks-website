<?php snippet('header') ?>
<?php snippet('nav') ?>

<main>
  <!-- Work Header -->
  <section class="relative py-20 lg:py-28">
    <div class="absolute inset-0 blueprint-grid"></div>
    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-navy-900"></div>
    <div class="relative max-w-7xl mx-auto px-6 lg:px-8">
      <span class="tech-label">// Portfolio</span>
      <h1 class="mt-4 text-4xl md:text-6xl font-bold text-white"><?= $page->title() ?></h1>
      <?php if ($page->text()->isNotEmpty()): ?>
      <p class="mt-4 text-lg text-gray-200 max-w-2xl"><?= $page->text() ?></p>
      <?php endif ?>
    </div>
  </section>

  <!-- Projects Grid -->
  <section class="relative py-12 lg:py-16">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <?php
      $projects = $page->children()->listed();
      if ($projects->isNotEmpty()):
      ?>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <?php foreach ($projects as $project): ?>
        <a href="<?= $project->url() ?>" class="blueprint-card rounded-xl overflow-hidden group">
          <?php if ($cover = $project->cover()->toFile()): ?>
          <div class="aspect-[16/10] overflow-hidden">
            <img src="<?= $cover->url() ?>" alt="<?= $project->title() ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
          </div>
          <?php else: ?>
          <div class="aspect-[16/10] bg-navy-600 blueprint-grid flex items-center justify-center relative">
            <!-- Blueprint decorative elements -->
            <div class="absolute inset-8 border border-dashed border-blueprint-500/30 rounded"></div>
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-4 h-4 border border-blueprint-400/40 rounded-full"></div>
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-1 h-1 bg-blueprint-500/50 rounded-full"></div>
            <span class="tech-label relative z-10"><?= $project->category() ?></span>
          </div>
          <?php endif ?>
          <div class="p-6 lg:p-8">
            <div class="flex items-center gap-3 mb-3">
              <?php if ($project->category()->isNotEmpty()): ?>
              <span class="tech-label"><?= $project->category() ?></span>
              <?php endif ?>
              <?php if ($project->year()->isNotEmpty()): ?>
              <span class="text-blueprint-600">|</span>
              <span class="tech-label"><?= $project->year() ?></span>
              <?php endif ?>
            </div>
            <h2 class="text-xl font-semibold text-white group-hover:text-blueprint-400 transition-colors">
              <?= $project->title()->html() ?>
            </h2>
            <?php if ($project->description()->isNotEmpty()): ?>
            <p class="mt-2 text-sm text-gray-300 line-clamp-2"><?= $project->description() ?></p>
            <?php endif ?>
            <?php if ($project->tags()->isNotEmpty()): ?>
            <div class="mt-4 flex flex-wrap gap-2">
              <?php foreach ($project->tags()->split(',') as $tag): ?>
              <span class="px-2 py-0.5 text-xs font-mono text-blueprint-400/80 border border-blueprint-600/40 rounded"><?= trim($tag) ?></span>
              <?php endforeach ?>
            </div>
            <?php endif ?>
          </div>
        </a>
        <?php endforeach ?>
      </div>
      <?php else: ?>
      <div class="text-center py-20">
        <p class="text-gray-300">No projects published yet.</p>
      </div>
      <?php endif ?>
    </div>
  </section>
</main>

<?php snippet('footer') ?>

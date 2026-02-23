<?php snippet('header') ?>
<?php snippet('nav') ?>

<main>
  <!-- Hero Section -->
  <section class="relative min-h-[85vh] flex items-center overflow-hidden">
    <!-- Blueprint grid background -->
    <div class="absolute inset-0 blueprint-grid"></div>

    <!-- Radial gradient overlay -->
    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-navy-900/50 to-navy-900"></div>

    <div class="relative max-w-5xl mx-auto px-6 lg:px-8 py-24 text-center">
      <!-- Badge pill -->
      <div class="mb-10 flex justify-center">
        <div class="inline-flex items-center gap-2.5 px-5 py-2.5 rounded-full bg-navy-700/90 border border-blueprint-600/40 backdrop-blur-sm">
          <span class="relative flex h-2.5 w-2.5 shrink-0">
            <span class="absolute inline-flex h-full w-full rounded-full bg-blueprint-400 opacity-75 animate-ping"></span>
            <span class="relative inline-flex h-2.5 w-2.5 rounded-full bg-blueprint-400"></span>
          </span>
          <span class="text-sm font-medium text-gray-200 leading-none"><?= $page->badge() ?></span>
        </div>
      </div>

      <!-- Main headline -->
      <h1 class="text-5xl md:text-7xl lg:text-[5.5rem] font-extrabold leading-[1.1] tracking-tight">
        <span class="text-white"><?= $page->headline() ?></span>
        <br>
        <span class="relative inline-block text-blueprint-400">
          <?= $page->headline_accent() ?>
          <!-- Hand-drawn underline accent -->
          <svg class="absolute -bottom-2 left-0 w-full h-3 text-blueprint-500/60" viewBox="0 0 200 12" fill="none" preserveAspectRatio="none">
            <path d="M2 8 C40 2, 80 12, 120 6 S180 2, 198 7" stroke="currentColor" stroke-width="3" stroke-linecap="round" fill="none"/>
          </svg>
        </span>
      </h1>

      <!-- Subtitle -->
      <p class="mt-8 text-lg md:text-xl text-gray-200 max-w-2xl mx-auto leading-relaxed italic">
        <?= $page->subheadline() ?>
      </p>

      <!-- CTA buttons -->
      <div class="mt-10 flex flex-wrap justify-center gap-4">
        <a href="<?= url('work') ?>" class="inline-flex items-center gap-2 px-8 py-3.5 bg-blueprint-600 hover:bg-blueprint-500 text-white text-sm font-medium rounded-lg transition-all duration-200 shadow-lg shadow-blueprint-600/20">
          View Our Work
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
        <a href="<?= url('contact') ?>" class="inline-flex items-center gap-2 px-8 py-3.5 border border-blueprint-600/50 hover:border-blueprint-500/50 text-blueprint-400 hover:text-white text-sm font-medium rounded-lg transition-all duration-200">
          Get in Touch
        </a>
      </div>

      <!-- Stats row -->
      <?php if ($page->stats()->isNotEmpty()): ?>
      <div class="mt-20 pt-10 border-t border-blueprint-600/40">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
          <?php foreach ($page->stats()->toStructure() as $stat): ?>
          <div>
            <div class="text-3xl md:text-4xl font-bold text-white"><?= $stat->value() ?></div>
            <div class="mt-1 tech-label"><?= $stat->label() ?></div>
          </div>
          <?php endforeach ?>
        </div>
      </div>
      <?php endif ?>
    </div>
  </section>

  <!-- Services / What We Do -->
  <section class="relative py-24 lg:py-32">
    <div class="absolute inset-0 blueprint-grid-light"></div>
    <div class="relative max-w-7xl mx-auto px-6 lg:px-8">
      <div class="mb-16">
        <span class="tech-label">// Services</span>
        <h2 class="mt-4 text-3xl md:text-5xl font-bold text-white"><?= $page->services_headline() ?></h2>
        <?php if ($page->services_text()->isNotEmpty()): ?>
        <p class="mt-4 text-gray-200 text-lg max-w-2xl"><?= $page->services_text() ?></p>
        <?php endif ?>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php foreach ($page->services()->toStructure() as $service): ?>
        <div class="blueprint-card rounded-xl p-8 group">
          <div class="w-12 h-12 flex items-center justify-center rounded-lg bg-blueprint-500/20 text-blueprint-400 mb-6 group-hover:bg-blueprint-500/25 transition-colors">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="<?= $service->icon() ?>"/>
            </svg>
          </div>
          <h3 class="text-xl font-semibold text-white mb-3"><?= $service->title() ?></h3>
          <p class="text-gray-200 text-sm leading-relaxed"><?= $service->description() ?></p>
        </div>
        <?php endforeach ?>
      </div>
    </div>
  </section>

  <!-- Featured Work Preview -->
  <section class="relative py-24 lg:py-32 border-t border-blueprint-600/30">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6">
        <div>
          <span class="tech-label">// Selected Projects</span>
          <h2 class="mt-4 text-3xl md:text-5xl font-bold text-white"><?= $page->featured_headline() ?></h2>
        </div>
        <a href="<?= url('work') ?>" class="text-sm text-blueprint-400 hover:text-blueprint-300 transition-colors flex items-center gap-2">
          View all projects
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
      </div>

      <?php
      $workPage = page('work');
      if ($workPage):
        $projects = $workPage->children()->listed()->limit(3);
        if ($projects->isNotEmpty()):
      ?>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <?php foreach ($projects as $project): ?>
        <a href="<?= $project->url() ?>" class="blueprint-card rounded-xl overflow-hidden group">
          <?php if ($cover = $project->cover()->toFile()): ?>
          <div class="aspect-video overflow-hidden">
            <img src="<?= $cover->url() ?>" alt="<?= $project->title() ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
          </div>
          <?php else: ?>
          <div class="aspect-video bg-navy-600 blueprint-grid flex items-center justify-center">
            <span class="tech-label">Blueprint</span>
          </div>
          <?php endif ?>
          <div class="p-6">
            <span class="tech-label"><?= $project->category() ?></span>
            <h3 class="mt-2 text-lg font-semibold text-white group-hover:text-blueprint-400 transition-colors"><?= $project->title() ?></h3>
            <p class="mt-2 text-sm text-gray-300 line-clamp-2"><?= $project->description() ?></p>
          </div>
        </a>
        <?php endforeach ?>
      </div>
      <?php endif; endif; ?>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="relative py-24 lg:py-32 border-t border-blueprint-600/30">
    <div class="absolute inset-0 blueprint-grid"></div>
    <div class="absolute inset-0 bg-gradient-to-t from-navy-900 via-transparent to-navy-900"></div>
    <div class="relative max-w-4xl mx-auto px-6 lg:px-8 text-center">
      <span class="tech-label">// Start a Project</span>
      <h2 class="mt-4 text-3xl md:text-5xl font-bold text-white"><?= $page->cta_headline() ?></h2>
      <p class="mt-6 text-lg text-gray-200 max-w-2xl mx-auto"><?= $page->cta_text() ?></p>
      <div class="mt-10">
        <a href="<?= url('contact') ?>" class="inline-flex items-center gap-2 px-10 py-4 bg-blueprint-600 hover:bg-blueprint-500 text-white font-medium rounded-lg transition-all duration-200 shadow-lg shadow-blueprint-600/20">
          Let's Talk
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
      </div>
    </div>
  </section>
</main>

<?php snippet('footer') ?>

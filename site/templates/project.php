<?php snippet('header') ?>
<?php snippet('nav') ?>

<main>
  <!-- Project Header -->
  <section class="relative py-20 lg:py-28">
    <div class="absolute inset-0 blueprint-grid"></div>
    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-navy-900"></div>
    <div class="relative max-w-5xl mx-auto px-6 lg:px-8">
      <a href="<?= $page->parent()->url() ?>" class="inline-flex items-center gap-2 text-sm text-blueprint-400 hover:text-blueprint-300 transition-colors mb-8">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"/></svg>
        Back to Work
      </a>

      <div class="flex items-center gap-3 mb-4">
        <?php if ($page->category()->isNotEmpty()): ?>
        <span class="tech-label"><?= $page->category() ?></span>
        <?php endif ?>
        <?php if ($page->year()->isNotEmpty()): ?>
        <span class="text-blueprint-600">|</span>
        <span class="tech-label"><?= $page->year() ?></span>
        <?php endif ?>
      </div>

      <h1 class="text-3xl md:text-5xl font-bold text-white leading-tight"><?= $page->title()->html() ?></h1>

      <?php if ($page->description()->isNotEmpty()): ?>
      <p class="mt-6 text-xl text-gray-200 leading-relaxed"><?= $page->description() ?></p>
      <?php endif ?>

      <!-- Project Meta -->
      <?php if ($page->client()->isNotEmpty() || $page->role()->isNotEmpty() || $page->url_link()->isNotEmpty()): ?>
      <div class="mt-10 grid grid-cols-2 md:grid-cols-4 gap-6 pt-8 border-t border-blueprint-600/40">
        <?php if ($page->client()->isNotEmpty()): ?>
        <div>
          <span class="tech-label">Client</span>
          <p class="mt-1 text-sm text-white"><?= $page->client() ?></p>
        </div>
        <?php endif ?>
        <?php if ($page->role()->isNotEmpty()): ?>
        <div>
          <span class="tech-label">Role</span>
          <p class="mt-1 text-sm text-white"><?= $page->role() ?></p>
        </div>
        <?php endif ?>
        <?php if ($page->year()->isNotEmpty()): ?>
        <div>
          <span class="tech-label">Year</span>
          <p class="mt-1 text-sm text-white"><?= $page->year() ?></p>
        </div>
        <?php endif ?>
        <?php if ($page->url_link()->isNotEmpty()): ?>
        <div>
          <span class="tech-label">Link</span>
          <p class="mt-1"><a href="<?= $page->url_link() ?>" target="_blank" class="text-sm text-blueprint-400 hover:text-blueprint-300">Visit Site →</a></p>
        </div>
        <?php endif ?>
      </div>
      <?php endif ?>
    </div>
  </section>

  <!-- Project Cover Image -->
  <?php if ($cover = $page->cover()->toFile()): ?>
  <section class="max-w-6xl mx-auto px-6 lg:px-8 pb-12">
    <div class="rounded-xl overflow-hidden border border-blueprint-600/40">
      <img src="<?= $cover->url() ?>" alt="<?= $page->title() ?>" class="w-full">
    </div>
  </section>
  <?php endif ?>

  <!-- Project Content -->
  <section class="relative py-12">
    <div class="max-w-3xl mx-auto px-6 lg:px-8">
      <article class="prose prose-invert prose-lg max-w-none
                      prose-headings:text-white prose-headings:font-bold
                      prose-p:text-gray-200 prose-p:leading-relaxed
                      prose-a:text-blueprint-400 prose-a:no-underline hover:prose-a:text-blueprint-300
                      prose-strong:text-white
                      prose-img:rounded-xl">
        <?= $page->text()->kirbytext() ?>
      </article>

      <!-- Project Gallery -->
      <?php
      $gallery = $page->images()->filterBy('template', '!=', 'cover');
      if ($gallery->isNotEmpty()):
      ?>
      <div class="mt-16">
        <span class="tech-label">// Gallery</span>
        <div class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-4">
          <?php foreach ($gallery as $image): ?>
          <div class="rounded-xl overflow-hidden border border-blueprint-600/40">
            <img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>" class="w-full">
          </div>
          <?php endforeach ?>
        </div>
      </div>
      <?php endif ?>

      <!-- Navigation -->
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

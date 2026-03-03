<?php snippet('header') ?>
<?php snippet('nav') ?>

<main>
  <!-- Studio Header -->
  <section class="relative py-20 lg:py-28">
    <div class="absolute inset-0 blueprint-grid"></div>
    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-navy-900"></div>
    <div class="relative max-w-7xl mx-auto px-6 lg:px-8">
      <span class="tech-label">// System Status</span>
      <h1 class="mt-4 text-4xl md:text-6xl font-bold text-white"><?= $page->title() ?></h1>
      <?php if ($page->description()->isNotEmpty()): ?>
      <p class="mt-4 text-lg text-gray-200 max-w-2xl"><?= $page->description() ?></p>
      <?php endif ?>
    </div>
  </section>

  <!-- Studio Content -->
  <section class="relative py-12 lg:py-16">
    <div class="max-w-3xl mx-auto px-6 lg:px-8">
      <article class="project-text">
        <?= $page->text()->kirbytext() ?>
      </article>
    </div>
  </section>
</main>

<?php snippet('footer') ?>
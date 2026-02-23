<?php snippet('header') ?>
<?php snippet('nav') ?>

<main>
  <section class="relative py-20 lg:py-28">
    <div class="absolute inset-0 blueprint-grid"></div>
    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-navy-900"></div>
    <div class="relative max-w-3xl mx-auto px-6 lg:px-8">
      <span class="tech-label">// Page</span>
      <h1 class="mt-4 text-4xl md:text-6xl font-bold text-white"><?= $page->title() ?></h1>
    </div>
  </section>

  <section class="relative py-12">
    <div class="max-w-3xl mx-auto px-6 lg:px-8">
      <article class="prose prose-invert prose-lg max-w-none
                      prose-headings:text-white prose-headings:font-bold
                      prose-p:text-gray-300 prose-p:leading-relaxed
                      prose-a:text-blueprint-400">
        <?= $page->text()->kirbytext() ?>
      </article>
    </div>
  </section>
</main>

<?php snippet('footer') ?>

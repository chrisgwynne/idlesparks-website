<?php snippet('header') ?>
<?php snippet('nav') ?>

<main class="relative min-h-[70vh] flex items-center">
  <div class="absolute inset-0 blueprint-grid"></div>
  <div class="absolute inset-0 bg-gradient-to-b from-transparent to-navy-900"></div>
  <div class="relative max-w-4xl mx-auto px-6 lg:px-8 text-center">
    <!-- Blueprint-style 404 -->
    <div class="mb-8">
      <span class="tech-label">// Error <?= $page->title() ?></span>
    </div>
    <div class="text-[10rem] md:text-[14rem] font-bold text-blueprint-700/25 leading-none select-none">
      404
    </div>
    <h1 class="text-2xl md:text-4xl font-bold text-white -mt-16 relative z-10">Page Not Found</h1>
    <p class="mt-4 text-gray-200 text-lg">The blueprint you're looking for doesn't exist in our archives.</p>
    <a href="<?= $site->url() ?>" class="inline-flex items-center gap-2 mt-8 px-8 py-3.5 bg-blueprint-600 hover:bg-blueprint-500 text-white text-sm font-medium rounded-lg transition-all duration-200">
      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"/></svg>
      Return to Homepage
    </a>
  </div>
</main>

<?php snippet('footer') ?>

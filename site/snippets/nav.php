<header class="fixed top-0 left-0 right-0 z-50 border-b border-blueprint-600/40 bg-navy-900/80 backdrop-blur-xl">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <nav class="flex items-center justify-between h-18">
      <!-- Logo -->
      <a href="<?= $site->url() ?>" class="flex items-center gap-3 group">
        <img src="<?= url('assets/images/logo.png') ?>" alt="<?= $site->title() ?>" class="h-12 w-auto">
        <span class="text-lg font-semibold text-white group-hover:text-blueprint-400 transition-colors hidden sm:block"><?= $site->title() ?></span>
      </a>

      <!-- Desktop Navigation -->
      <ul class="hidden md:flex items-center gap-1">
        <?php foreach ($site->children()->listed() as $item): ?>
        <li>
          <a href="<?= $item->url() ?>"
             class="px-4 py-2 text-sm font-medium rounded-lg transition-all duration-200
                    <?php if ($item->isOpen()): ?>
                      text-blueprint-400 bg-blueprint-500/20
                    <?php else: ?>
                      text-gray-200 hover:text-white hover:bg-white/5
                    <?php endif ?>">
            <?= $item->title()->html() ?>
          </a>
        </li>
        <?php endforeach ?>
      </ul>

      <!-- Mobile Menu Button -->
      <button id="mobile-menu-btn" class="md:hidden p-2 text-gray-200 hover:text-white" aria-label="Toggle menu">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path id="menu-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
      </button>
    </nav>
  </div>

  <!-- Mobile Navigation -->
  <div id="mobile-nav" class="mobile-nav hidden md:hidden border-t border-blueprint-600/40 bg-navy-900/90 backdrop-blur-xl">
    <div class="px-6 py-4 space-y-1">
      <?php foreach ($site->children()->listed() as $item): ?>
      <a href="<?= $item->url() ?>"
         class="block px-4 py-3 text-sm font-medium rounded-lg transition-all
                <?php if ($item->isOpen()): ?>
                  text-blueprint-400 bg-blueprint-500/20
                <?php else: ?>
                  text-gray-200 hover:text-white hover:bg-white/5
                <?php endif ?>">
        <?= $item->title()->html() ?>
      </a>
      <?php endforeach ?>
    </div>
  </div>
</header>

<!-- Spacer for fixed header -->
<div class="h-18"></div>

<script>
document.getElementById('mobile-menu-btn').addEventListener('click', function() {
  const nav = document.getElementById('mobile-nav');
  nav.classList.toggle('hidden');
});
</script>

<!-- Footer -->
<footer class="relative border-t border-blueprint-600/40 bg-navy-900">
  <!-- Blueprint grid overlay -->
  <div class="absolute inset-0 blueprint-grid opacity-50 pointer-events-none"></div>

  <div class="relative max-w-7xl mx-auto px-6 lg:px-8 py-16">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
      <!-- Brand Column -->
      <div class="md:col-span-2">
        <a href="<?= $site->url() ?>" class="flex items-center gap-3 mb-4">
          <img src="<?= url('assets/images/logo.png') ?>" alt="<?= $site->title() ?>" class="h-10 w-auto">
          <span class="text-lg font-semibold text-white"><?= $site->title() ?></span>
        </a>
        <p class="text-gray-200 text-sm leading-relaxed max-w-sm">
          <?= $site->description() ?>
        </p>
        <div class="mt-6">
          <span class="tech-label">Est. 2025</span>
        </div>
      </div>

      <!-- Navigation -->
      <div>
        <h4 class="tech-label mb-4">Navigation</h4>
        <ul class="space-y-2">
          <?php foreach ($site->children()->listed() as $item): ?>
          <li>
            <a href="<?= $item->url() ?>" class="text-sm text-gray-200 hover:text-blueprint-400 transition-colors">
              <?= $item->title()->html() ?>
            </a>
          </li>
          <?php endforeach ?>
        </ul>
      </div>

      <!-- Contact Info -->
      <div>
        <h4 class="tech-label mb-4">Connect</h4>
        <ul class="space-y-2">
          <li>
            <a href="mailto:hello@idlesparks.com" class="text-sm text-gray-200 hover:text-blueprint-400 transition-colors">
              hello@idlesparks.com
            </a>
          </li>
          <li>
            <a href="<?= url('contact') ?>" class="text-sm text-gray-200 hover:text-blueprint-400 transition-colors">
              Get in Touch
            </a>
          </li>
        </ul>
      </div>
    </div>

    <!-- Bottom Bar -->
    <div class="section-divider mt-12 mb-6"></div>
    <div class="flex flex-col sm:flex-row justify-between items-center gap-4">
      <p class="text-xs text-gray-400 font-mono">
        &copy; <?= date('Y') ?> <?= $site->title() ?>. All rights reserved.
      </p>
      <p class="text-xs text-gray-500 font-mono">
        <!-- REV. <?= date('Y.m.d') ?> -->
        DRAWING NO. <?= str_pad(rand(1000, 9999), 4, '0', STR_PAD_LEFT) ?>-<?= strtoupper(substr(md5(time()), 0, 4)) ?>
      </p>
    </div>
  </div>
</footer>

</body>
</html>

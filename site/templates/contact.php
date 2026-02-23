<?php snippet('header') ?>
<?php snippet('nav') ?>

<main>
  <!-- Contact Header -->
  <section class="relative py-20 lg:py-28">
    <div class="absolute inset-0 blueprint-grid"></div>
    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-navy-900"></div>
    <div class="relative max-w-7xl mx-auto px-6 lg:px-8">
      <span class="tech-label">// Contact</span>
      <h1 class="mt-4 text-4xl md:text-6xl font-bold text-white"><?= $page->title() ?></h1>
      <?php if ($page->text()->isNotEmpty()): ?>
      <p class="mt-4 text-lg text-gray-200 max-w-2xl"><?= $page->text() ?></p>
      <?php endif ?>
    </div>
  </section>

  <!-- Contact Content -->
  <section class="relative py-12 lg:py-16">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-5 gap-16">

        <!-- Contact Info -->
        <div class="lg:col-span-2">
          <div class="space-y-10">
            <!-- Email -->
            <div>
              <span class="tech-label">Email</span>
              <a href="mailto:<?= $page->email() ?>" class="mt-2 block text-xl text-blueprint-400 hover:text-blueprint-300 transition-colors">
                <?= $page->email() ?>
              </a>
            </div>

            <?php if ($page->phone()->isNotEmpty()): ?>
            <!-- Phone -->
            <div>
              <span class="tech-label">Phone</span>
              <a href="tel:<?= $page->phone() ?>" class="mt-2 block text-xl text-white hover:text-blueprint-400 transition-colors">
                <?= $page->phone() ?>
              </a>
            </div>
            <?php endif ?>

            <?php if ($page->address()->isNotEmpty()): ?>
            <!-- Location -->
            <div>
              <span class="tech-label">Location</span>
              <p class="mt-2 text-white leading-relaxed">
                <?= $page->address()->kirbytext() ?>
              </p>
            </div>
            <?php endif ?>

            <!-- Social Links -->
            <?php if ($page->social()->isNotEmpty()): ?>
            <div>
              <span class="tech-label">Connect</span>
              <div class="mt-3 flex gap-4">
                <?php foreach ($page->social()->toStructure() as $link): ?>
                <a href="<?= $link->url() ?>" target="_blank" rel="noopener" class="w-10 h-10 flex items-center justify-center rounded-lg border border-blueprint-600/40 text-gray-200 hover:text-blueprint-400 hover:border-blueprint-400/35 transition-all">
                  <span class="text-xs font-mono font-bold"><?= Str::upper(Str::substr($link->platform(), 0, 2)) ?></span>
                </a>
                <?php endforeach ?>
              </div>
            </div>
            <?php endif ?>
          </div>

          <!-- Blueprint decoration -->
          <div class="mt-16 hidden lg:block">
            <div class="relative w-48 h-48 border border-dashed border-blueprint-600/40 rounded-xl">
              <div class="absolute top-4 left-4 tech-label">SECTION A-A</div>
              <div class="absolute inset-8 border border-blueprint-500/25 rounded"></div>
              <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-3 h-3 border border-blueprint-400/35 rounded-full"></div>
            </div>
          </div>
        </div>

        <!-- Contact Form -->
        <div class="lg:col-span-3">
          <div class="blueprint-card rounded-xl p-8 lg:p-10">
            <h2 class="text-2xl font-bold text-white mb-2">Send a Message</h2>
            <p class="text-gray-300 text-sm mb-8">Fill out the form below and we'll get back to you.</p>

            <form method="post" action="<?= $page->url() ?>" class="space-y-6">
              <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                  <label for="name" class="tech-label block mb-2">Name</label>
                  <input type="text" id="name" name="name" required
                         class="w-full px-4 py-3 bg-navy-700/60 border border-blueprint-600/40 rounded-lg text-white text-sm placeholder-gray-500 focus:outline-none focus:border-blueprint-500/50 focus:ring-1 focus:ring-blueprint-500/20 transition-all"
                         placeholder="Your name">
                </div>
                <div>
                  <label for="email" class="tech-label block mb-2">Email</label>
                  <input type="email" id="email" name="email" required
                         class="w-full px-4 py-3 bg-navy-700/60 border border-blueprint-600/40 rounded-lg text-white text-sm placeholder-gray-500 focus:outline-none focus:border-blueprint-500/50 focus:ring-1 focus:ring-blueprint-500/20 transition-all"
                         placeholder="your@email.com">
                </div>
              </div>

              <div>
                <label for="subject" class="tech-label block mb-2">Subject</label>
                <input type="text" id="subject" name="subject"
                       class="w-full px-4 py-3 bg-navy-700/60 border border-blueprint-600/40 rounded-lg text-white text-sm placeholder-gray-500 focus:outline-none focus:border-blueprint-500/50 focus:ring-1 focus:ring-blueprint-500/20 transition-all"
                       placeholder="Project inquiry">
              </div>

              <div>
                <label for="message" class="tech-label block mb-2">Message</label>
                <textarea id="message" name="message" rows="6" required
                          class="w-full px-4 py-3 bg-navy-700/60 border border-blueprint-600/40 rounded-lg text-white text-sm placeholder-gray-500 focus:outline-none focus:border-blueprint-500/50 focus:ring-1 focus:ring-blueprint-500/20 transition-all resize-none"
                          placeholder="Tell us about your project..."></textarea>
              </div>

              <button type="submit"
                      class="w-full md:w-auto px-10 py-3.5 bg-blueprint-600 hover:bg-blueprint-500 text-white text-sm font-medium rounded-lg transition-all duration-200 shadow-lg shadow-blueprint-600/20 flex items-center justify-center gap-2">
                Send Message
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php snippet('footer') ?>

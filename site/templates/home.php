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
        <div class="online-badge-pill">
          <span class="online-badge-dot">
            <span class="online-badge-dot-ping"></span>
            <span class="online-badge-dot-core"></span>
          </span>
          <span class="online-badge-text"><?= $page->badge() ?></span>
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
          See What I've Built
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
        <a href="<?= url('contact') ?>" class="inline-flex items-center gap-2 px-8 py-3.5 border border-blueprint-600/50 hover:border-blueprint-500/50 text-blueprint-400 hover:text-white text-sm font-medium rounded-lg transition-all duration-200">
          Say Hello
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
        <span class="tech-label">// What I'm Into</span>
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

  <!-- Tools I Tinker With -->
  <section class="relative py-24 lg:py-32 border-t border-blueprint-600/30">
    <div class="absolute inset-0 blueprint-grid-light"></div>
    <div class="relative max-w-7xl mx-auto px-6 lg:px-8">

      <div class="mb-12">
        <span class="tech-label">// Tools I Tinker With</span>
        <h2 class="mt-4 text-3xl md:text-5xl font-bold text-white">The stack that makes it possible.</h2>
        <p class="mt-4 text-gray-300 text-lg max-w-2xl">Not a sponsor list. Just the things I actually reach for every day.</p>
      </div>

      <div class="tools-grid">

        <!-- Row 1 -->
        <div class="tool-card">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3c-1.5 0-2.5.8-3 2-.4.9-.3 2 .2 2.8L7.5 18h9l-1.7-10.2c.5-.8.6-1.9.2-2.8C14.5 3.8 13.5 3 12 3zM9 18v1.5a3 3 0 006 0V18"/></svg>
          <span>OpenClaw</span>
        </div>

        <div class="tool-card">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
          <span>Claude Code</span>
        </div>

        <div class="tool-card">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5"/></svg>
          <span>Cursor</span>
        </div>

        <div class="tool-card">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
          <span>OpenCode</span>
        </div>

        <div class="tool-card">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"/></svg>
          <span>Vibe Coding</span>
        </div>

        <div class="tool-card">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
          <span>Ollama</span>
        </div>

        <div class="tool-card">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 3H7a2 2 0 00-2 2v2M9 3h6M9 3v2m6-2h2a2 2 0 012 2v2m0 0H21M5 7H3m2 4H3m2 4H3m18-8h2m-2 4h2m-2 4h2M5 19H7a2 2 0 002-2v-2M5 19v2m14-2h-2a2 2 0 01-2-2v-2m4 4v2M9 21h6m-6 0v-2m6 2v-2M9 9h6v6H9V9z"/></svg>
          <span>LocalAI</span>
        </div>

        <div class="tool-card">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 016 0v6a3 3 0 01-3 3z"/></svg>
          <span>Whisper</span>
        </div>

        <div class="tool-card">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/></svg>
          <span>Cloudflare</span>
        </div>

        <div class="tool-card">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="5" cy="6" r="2"/><circle cx="19" cy="6" r="2"/><circle cx="12" cy="18" r="2"/><path stroke-linecap="round" stroke-linejoin="round" d="M7 6h10M6 7l5.5 10M18 7l-5.5 10"/></svg>
          <span>n8n</span>
        </div>

        <!-- Row 2 -->
        <div class="tool-card">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
          <span>Home Assistant</span>
        </div>

        <div class="tool-card">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M6 6h3v3H6zm0 5h3v3H6zm5-5h3v3h-3zm5 0h3v3h-3zM5 3h14a2 2 0 012 2v4a5 5 0 01-3 4.58V20a1 1 0 01-1 1H7a1 1 0 01-1-1v-6.42A5 5 0 013 9V5a2 2 0 012-2z"/></svg>
          <span>Docker</span>
        </div>

        <div class="tool-card">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
          <span>Tailscale</span>
        </div>

        <div class="tool-card">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.82m5.84-2.56a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.82m2.56-5.84a14.98 14.98 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"/></svg>
          <span>Coolify</span>
        </div>

        <div class="tool-card">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/></svg>
          <span>Vaultwarden</span>
        </div>

        <div class="tool-card">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/></svg>
          <span>Immich</span>
        </div>

        <div class="tool-card">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15.91 11.672a.375.375 0 010 .656l-5.603 3.113a.375.375 0 01-.557-.328V8.887c0-.286.307-.466.557-.327l5.603 3.112z"/></svg>
          <span>Jellyfin</span>
        </div>

        <div class="tool-card">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z"/></svg>
          <span>Frigate</span>
        </div>

        <div class="tool-card">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0"/></svg>
          <span>ntfy</span>
        </div>

        <div class="tool-card">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"/></svg>
          <span>Synology</span>
        </div>

        <!-- Row 3 -->
        <div class="tool-card">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 3v1.5M4.5 8.25H3m18 0h-1.5M4.5 12H3m18 0h-1.5m-15 3.75H3m18 0h-1.5M8.25 19.5V21M12 3v1.5m0 15V21m3.75-18v1.5m0 15V21m-9-1.5h10.5a2.25 2.25 0 002.25-2.25V6.75a2.25 2.25 0 00-2.25-2.25H6.75A2.25 2.25 0 004.5 6.75v10.5a2.25 2.25 0 002.25 2.25zm.75-12h9v9h-9v-9z"/></svg>
          <span>Hardware</span>
        </div>

        <div class="tool-card">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9"/></svg>
          <span>3D Printing</span>
        </div>

        <div class="tool-card">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M6 12h.01M18 12h.01M12 6h.01M12 18h.01M12 12h.01"/><circle cx="6" cy="12" r="2"/><circle cx="18" cy="12" r="2"/><circle cx="12" cy="6" r="2"/><circle cx="12" cy="18" r="2"/><path stroke-linecap="round" stroke-linejoin="round" d="M8 12h8M12 8v8"/></svg>
          <span>Drones</span>
        </div>

        <div class="tool-card">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="4" y="8" width="16" height="8" rx="1"/><path stroke-linecap="round" stroke-linejoin="round" d="M7 8V6m0 10v2M12 8V6m0 10v2M17 8V6m0 10v2M4 12h16"/></svg>
          <span>ESP32</span>
        </div>

        <div class="tool-card">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M14.25 6.087c0-.355.186-.676.401-.959.221-.29.349-.634.349-1.003 0-1.036-1.007-1.875-2.25-1.875s-2.25.84-2.25 1.875c0 .369.128.713.349 1.003.215.283.401.604.401.959v0a.64.64 0 01-.657.643 48.39 48.39 0 01-4.163-.3c.186 1.613.293 3.25.315 4.907a.656.656 0 01-.658.663v0c-.355 0-.676-.186-.959-.401a1.647 1.647 0 00-1.003-.349c-1.036 0-1.875 1.007-1.875 2.25s.84 2.25 1.875 2.25c.369 0 .713-.128 1.003-.349.283-.215.604-.401.959-.401v0c.31 0 .555.26.532.57a48.039 48.039 0 01-.642 5.056c1.518.19 3.058.309 4.616.354a.64.64 0 00.657-.643v0c0-.355-.186-.676-.401-.959a1.647 1.647 0 01-.349-1.003c0-1.035 1.008-1.875 2.25-1.875 1.243 0 2.25.84 2.25 1.875 0 .369-.128.713-.349 1.003-.215.283-.4.604-.4.959v0c0 .333.277.599.61.58a48.1 48.1 0 005.427-.63 48.05 48.05 0 00.582-4.717.532.532 0 00-.533-.57v0c-.355 0-.676.186-.959.401-.29.221-.634.349-1.003.349-1.035 0-1.875-1.007-1.875-2.25s.84-2.25 1.875-2.25c.37 0 .713.128 1.003.349.283.215.604.401.959.401v0a.656.656 0 00.658-.663 48.422 48.422 0 00-.37-5.36c-1.886.342-3.81.574-5.766.689a.578.578 0 01-.61-.58v0z"/></svg>
          <span>Gaming</span>
        </div>

        <div class="tool-card">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
          <span>Scrypted</span>
        </div>

        <div class="tool-card">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
          <span>Raycast</span>
        </div>

        <div class="tool-card">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/></svg>
          <span>Shortcuts</span>
        </div>

        <div class="tool-card">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941"/></svg>
          <span>Uptime Kuma</span>
        </div>

        <div class="tool-card">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418"/></svg>
          <span>Caddy</span>
        </div>

      </div>
    </div>
  </section>

  <!-- Featured Work Preview -->
  <section class="relative py-24 lg:py-32 border-t border-blueprint-600/30">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6">
        <div>
          <span class="tech-label">// Things I've Built</span>
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
      <span class="tech-label">// Let's Build Something</span>
      <h2 class="mt-4 text-3xl md:text-5xl font-bold text-white"><?= $page->cta_headline() ?></h2>
      <p class="mt-6 text-lg text-gray-200 max-w-2xl mx-auto"><?= $page->cta_text() ?></p>
      <div class="mt-10">
        <a href="<?= url('contact') ?>" class="inline-flex items-center gap-2 px-10 py-4 bg-blueprint-600 hover:bg-blueprint-500 text-white font-medium rounded-lg transition-all duration-200 shadow-lg shadow-blueprint-600/20">
          Drop me a message
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
      </div>
    </div>
  </section>
</main>

<?php snippet('footer') ?>

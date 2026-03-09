<?php snippet("header") ?>
<?php snippet("nav") ?>

<main>
  <section class="relative py-20 lg:py-28">
    <div class="absolute inset-0 blueprint-grid"></div>
    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-navy-900"></div>
    <div class="relative max-w-3xl mx-auto px-6 lg:px-8">
      <span class="tech-label">// Activity</span>
      <h1 class="mt-4 text-4xl md:text-6xl font-bold text-white"><?= $page->header() ?></h1>
      <?php if($page->subheader()): ?>
      <p class="mt-4 text-xl text-gray-400"><?= $page->subheader() ?></p>
      <?php endif; ?>
    </div>
  </section>

  <section class="relative py-12">
    <div class="max-w-4xl mx-auto px-6 lg:px-8">
      <div class="space-y-8">
        <?php
        // Fetch recent blog posts
        $blog = page("1_blog");
        if($blog):
          $articles = $blog->children()->sortBy("date", "desc")->limit(10);
          foreach($articles as $article):
        ?>
          <a href="<?= $article->url() ?>" class="block p-6 bg-navy-800 rounded-lg border border-navy-700 hover:border-blueprint-400 transition group">
            <div class="flex items-start justify-between">
              <div>
                <span class="text-sm text-blueprint-400"><?= $article->date("F j, Y") ?></span>
                <h3 class="mt-2 text-xl font-bold text-white group-hover:text-blueprint-400 transition"><?= $article->title() ?></h3>
                <?php if($article->intro()): ?>
                <p class="mt-2 text-gray-400"><?= $article->intro()->excerpt(150) ?></p>
                <?php endif; ?>
              </div>
              <span class="hidden sm:inline-block text-gray-500 group-hover:text-blueprint-400 transition">→</span>
            </div>
          </a>
        <?php
          endforeach;
        endif;
        ?>
      </div>
      
      <?php if(!page("1_blog")->children()->count()): ?>
      <p class="text-center text-gray-500 py-12">No recent activity to display.</p>
      <?php endif; ?>
    </div>
  </section>
</main>

<?php snippet("footer") ?>

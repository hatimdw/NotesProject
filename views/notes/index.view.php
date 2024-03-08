<?php require base_path('views/partials/header.php') ?>
<?php require base_path('views/partials/nav.php') ?>
  <header class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900"><?= $pageName ?></h1>
    </div>
  </header>
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <ol>
      <?php foreach($notes as $note) : ?>
                <li>
                  <a href="/note?notesId=<?= $note['notesId']?>">
                  <?= htmlspecialchars($note['body']) ;?>
                </a>
                  
                </li>
      <?php endforeach ?>
      <br><br>
      <a href="/create" >Create Notes</a>
      </ol>
    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>
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
          <h2>
            <?= htmlspecialchars($note['body']) ?>
          </h2>
      </ol><BR></BR>
      <a href="/note/edit?notesId=<?= $note['notesId'] ?>">EDIT</a>
    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>
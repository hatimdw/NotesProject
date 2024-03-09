<?php require base_path('views/partials/header.php') ?>
<?php require base_path('views/partials/nav.php') ?>
  <header class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900"><?= $pageName ?></h1>
    </div>
  </header>
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="mt-5 md:col-span-2 md:mt-0">
                <form method="POST" action="/notes">
                    <div class="shadow sm:overflow-hidden sm:rounded-md">
                        <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                            <div>
                                <label for="body" class="block text-sm font-medium text-gray-700">Body</label>

                                <div class="mt-1">
                                <textarea
                                        id="body"
                                        name="body"
                                        rows="3"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        placeholder="Here's an idea for a note..."
                                    ></textarea>

                                </div>
                            </div>
                        </div>
                                <?php if (isset($errors['body'])) : ?>
                                    <p><?= $errors['body'] ?></p>
                                <?php endif ?>

                        <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                            <button type="submit"
                                    class="btn btn-default pull-right" id="submit" name="submit">
                                Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>
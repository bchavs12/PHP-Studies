<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/header.php') ?>

<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <p class="mb-6">
      <a href="/notes" class="text-sm font-medium text-blue-500 hover:text-blue-300 hover:underline hover:underline-offset-4">
        <-- Go back to my notes... </a>
    </p>
    <span class="text-fuchsia-800 font-bold text-lg">
      Current Note:
    </span>
    <p class="text-lg ml-2">
      <?= '-> ' . htmlspecialchars($note['body']) ?>
    </p>

    <form method="POST" class="mt-6">
      <input type="hidden" name="id" value="<?= $note['id'] ?>">
      <button type="submit" class="text-sm font-medium text-gray-900 rounded-md hover:text-red-700">
        Delete Note
      </button>
    </form>
  </div>
</main>

<?php require base_path('views/partials/footer.php') ?>
<?php require 'partials/head.php' ?>
<?php require 'partials/nav.php'  ?>
<?php require 'partials/header.php' ?>

<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <span class="text-fuchsia-800 font-bold text-lg">
      💭 Note:
    </span>
    <p class="text-lg">
      <?= $note['body'] ?>
    </p>
    <p class="mt-6">
      <a href="/notes" class="text-blue-500 underline underline-offset-4">
        Go back to the notes...
      </a>
    </p>
  </div>
</main>

<?php require 'partials/footer.php' ?>
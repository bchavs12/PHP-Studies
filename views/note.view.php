<?php require 'partials/head.php' ?>
<?php require 'partials/nav.php'  ?>
<?php require 'partials/header.php' ?>

<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <p>
      <a href="/notes" class="mb-8 text-blue-500 underline font-bold">
        Go back to the notes...
      </a>
    </p>
    <p>
      <?= $note['body'] ?>
    </p>
  </div>
</main>

<?php require 'partials/footer.php' ?>
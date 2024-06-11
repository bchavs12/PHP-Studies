<?php require 'partials/head.php' ?>
<?php require 'partials/nav.php'  ?>
<?php require 'partials/header.php' ?>

<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <ul>
      <?php foreach ($notes as $note) : ?>
        <li>
          <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline hover:underline-offset-2">
            <?= $note['body'] ?>
          </a>
        </li>
      <?php endforeach ?>
    </ul>
    <div class="mt-6">
      <a href="/notes/create" class="text-blue-500 hover:underline">
        Create a note
      </a>
    </div>
  </div>
</main>

<?php require 'partials/footer.php' ?>
<?php require('views/partials/head.php') ?>
<?php require('views/partials/nav.php') ?>
<?php require('views/partials/header.php') ?>

<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <ul>
      <?php foreach ($notes as $note) : ?>
        <li>
          <a href="/note?id=<?= $note['id'] ?>" class="text-black-500 hover:underline hover:underline-offset-2 hover:text-blue-500">
            <?= '📝 - ' . htmlspecialchars($note['body']); ?>
          </a>
        </li>
      <?php endforeach ?>
    </ul>
    <div class="mt-6">
      <a href="/notes/create" type="submit" class="inline-flex justify-center  text-blue-500 hover:underline hover:underline-offset-2">
        ✏ Create a note
      </a>
    </div>
  </div>
</main>

<?php require('views/partials/footer.php') ?>
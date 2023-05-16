<?php include 'inc/header.php'; ?>

<?php
/* $feedback = [
  [
    'id' => '1',
    'name' => 'Egon Schile',
    'email' => 'schile@gmail.com',
    'body' => 'Traversy Media is ok.'
  ],
  [
    'id' => '2',
    'name' => 'Eren Jager',
    'email' => 'eren@gmail.com',
    'body' => "It's better than expected!"
  ],
  [
    'id' => '3',
    'name' => 'Frieda Reiss',
    'email' => 'reiss@gmail.com',
    'body' => 'Traversy Media is kinda middle, ehh.'
  ]
]; */

$sql = 'SELECT * FROM feedback'; // our SQL code (select all rows from our feedback table)
$result = mysqli_query($conn, $sql); // using our sql connection mysql obj and applying our sql code to our database through it
$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC); // storing our sql feedback table rows as associative array into a var
?>

    <h2>Past Feedback</h2>

    <?php if (empty($feedback)): ?>
      <p class="lead mt3">There's no feedback</p>
    <?php endif; ?>
    
    <?php foreach($feedback as $item): ?>
      <div class="card my-3 w-75">
        <div class="card-body text-center">
          <?php echo $item['body']; ?>
          <div class="text-secondary mt-2">
            By <?php echo $item['name']; ?> on <?php echo $item['date']; ?>
          </div>
        </div>
      </div>
    <?php endforeach; ?>

<?php include 'inc/footer.php'; ?>
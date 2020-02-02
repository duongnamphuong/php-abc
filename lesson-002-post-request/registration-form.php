<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Registration Form</title>
</head>
<body>
    <?php if (isset($_POST['form_submitted'])): ?>
        <h2>Thank You <?php echo $_POST['firstname']; ?> </h2>
        <p>You have been registered as
            <?php echo $_POST['firstname'] . ' ' . $_POST['lastname']; ?>
        </p>
        <p>Go <a href="/lesson-002-post-request/registration-form.php">back</a> to the form</p>
    <?php else: ?>
        <h2>Registration Form</h2>
        <form action="registration-form.php" method="POST"> First name:
            <input type="text" name="firstname"><br />Last name:
            <input type="text" name="lastname">
            <input type="hidden" name="form_submitted" value="1" />
            <input type="submit" value="Submit">
        </form>
    <?php endif; ?>

</body>
</html>

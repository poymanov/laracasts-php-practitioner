<?php require 'partials/head.php' ?>
    <h1>New task</h1>

    <form action="/add-task" method="post">
        <p>
            <label>
                Description:
                <textarea name="description"></textarea>
            </label>
        </p>
        <button type="submit">Send</button>
    </form>

<?php require 'partials/footer.php' ?>
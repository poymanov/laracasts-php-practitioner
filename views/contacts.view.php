<?php require 'partials/head.php' ?>
    <h1>Contacts</h1>

    <h2>Feedback</h2>
    <form action="/feedback" method="post">
        <p>
            <label>
                Your name:
                <input type="text" name="name">
            </label>
        </p>
        <p>
            <label>
                Your email:
                <input type="text" name="email">
            </label>
        </p>
        <p>
            <label>
                Your comment:
                <textarea name="comment"></textarea>
            </label>
        </p>
        <button type="submit">Send</button>
    </form>

<?php require 'partials/footer.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="forum-style.css">
    <link rel="icon" type="image/x-Icon" href="ForumAssets/bigkas_icon.ico">
    <script src=”https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js”></script>
    <title>Bigkas Forums</title>
</head>
<body>
    <div class="top-bar">
        <h1>
            <a href="forum-index.php"><img src="ForumAssets/Logo 2.png" alt="Bigkas Forum Logo" height="70" ></a>  
        </h1>
    </div>
    <div class="main">
        <div class="header">
        </div>
        <textarea></textarea>
        <button>add comment</button>
        <div class="comments">
        </div>
        <br>
        <hr>
        <h3> User threads coming soon</h3>
        <h3><u><a href="forum-index.php">Return to Main</a></u></h3>
    </div>
    <script src="forum-data.js"></script>
    <script>
        var id = window.location.search.slice(1);
        var thread = threads.find(t => t.id == id);
        var header = document.querySelector('.header');
        var headerHtml = `
            <h4 class="title">
                ${thread.title}
            </h4>
            <div class="bottom">
                <p class="timestamp">
                    ${new Date(thread.date).toLocaleString()}
                </p>
                <p class="comment-count">
                    ${thread.comments.length} comments
                </p>
            </div>
        `
        header.insertAdjacentHTML('beforeend', headerHtml)

        function addComment(comment) {
            var commentHtml = `
                <div class="comment">
                    <div class="top-comment">
                        <p class="user">
                            ${comment.author}
                        </p>
                        <p class="comment-ts">
                            ${new Date(comment.date).toLocaleString()}
                        </p>
                    </div>
                    <div class="comment-content">
                        ${comment.content}
                    </div>
                </div>
            `
            comments.insertAdjacentHTML('beforeend', commentHtml);
        }

        var comments = document.querySelector('.comments');
        for (let comment of thread.comments) {
            addComment(comment);
        }

        var btn = document.querySelector('button');
        btn.addEventListener('click', function() {
            var txt = document.querySelector('textarea');
            var comment = {
                content: txt.value,
                date: Date.now(),
                author: 'Bryan'
            }
            addComment(comment);
            txt.value = '';
            thread.comments.push(comment);
            localStorage.setItem('threads', JSON.stringify(threads));
        })
    </script>
</body>
</html>

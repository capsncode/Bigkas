

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="forum-style.css">
    <link rel="icon" type="image/x-Icon" href="ForumAssets/bigkas_icon.ico">
    <script src=”https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js”></script>
    <title>Bigkas Forums - Home</title>
</head>
<body>
    <div class="top-bar">
        <h1>
            <a href="forum-index.php"><img src="ForumAssets/Logo 2.png" alt="Bigkas Forum Logo" height="70" ></a>  
        </h1>
    </div>
    <div class="main">
    <ol>
       
    </ol>
    <br>
    <hr>
    <h3> User threads coming soon</h3>
    <h3><u><a href="../iloc/learn-iloc.php">Return to Home</a></u></h3>
    </div>
  
    <script src="forum-data.js"> </script>
    <script>
        console.log(threads);
        var container = document.querySelector('ol');
        for (let thread of threads) {
            var html = `
            <li class="row">
                <a href="forum-thread.php?${thread.id}">
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
                </a>
            </li>
            `
            container.insertAdjacentHTML('beforeend', html);
        }
    </script>
</body>
</html>
var defaultThreads = [
    {
        id: 1,
        title: "Help",
        author: "Admin",
        date: Date.now(),
        content: "Thread content",
        comments: [
            {
                author: "Michael",
                date: Date.now(),
                content: "I need help for logging in."
            },
            {
                author: "Andrew",
                date: Date.now(),
                content: "Same I'm having issues right now."
            }
        ]
    },
    {
        id: 2,
        title: "Suggestions",
        author: "Admin",
        date: Date.now(),
        content: "Thread content 2",
        comments: [
            {
                author: "Allen",
                date: Date.now(),
                content: "Add more dialects pls"
            },
            {
                author: "Joshua",
                date: Date.now(),
                content: "we need extra features"
            }
        ]
    }
]

var threads = defaultThreads
if (localStorage && localStorage.getItem('threads')) {
    threads = JSON.parse(localStorage.getItem('threads'));
} else {
    threads = defaultThreads;
    localStorage.setItem('threads', JSON.stringify(defaultThreads));
}

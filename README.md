# Penstagram
mostly just testing stuff rn
😩


started with things


### todo
- Profile
- Posts
- Notifications
- A search bar
- Friending options
- File uploads
- Customisation
- Security


Source: I've been building community websites for 15 years.

- Plan it a bit but not too much. Make a list of the minimum feature set you want the social network to have, but also make a wishlist. Sometimes when you plan a how to build an app it's important to do it in a way that allows for additional features later on. For all features, write down (or just think of) the questions you need answered and the things you'll need to learn. Also write down all assumptions on how you would build them and test those assumptions with experienced programmers. Iterate on this. You'll never get things right the first time, but testing your assumptions before diving in completely makes you more right.
- Learn about several concepts globally at first (f.ex. html, css, database design, server-side development, client-side development, security, design, usability) and use that knowledge for your planning, but also to think what you would learn. As the other poster said, I would start with HTML.
- Start small and iterate designs (so plan but don't overplan). Don't design and build the tower of Babel, but start with a small feature to test your assumptions and find out how to make it. Then add another one, and another one. Prepare to throw any bit away and start anew. Wrong architectural choices in the beginning can kill your project later on, and you'll be learning tremendously, so allow yourself to both test your assumptions and to build in such a way that if you learn something new later on, you haven't put all your eggs in the one basket of your first 'newbie' design choice. For example, when learning the server-side language, code one of the features you're planning just to learn the language (for example, adding a post or logging in) and see if your assumptions on how to design it were correct.
- Keep it simple. You'll learn a lot so naturally you'll make a lot of errors and create a lot of bugs. Any unneccessary complexity makes it harder to find the cause of an error. Don't start a project intending to use sockets or whatnot to make live features like live updating feeds. Don't use the new fancy framework on the block or a new fancy language (like Golang) because it's newly popular and can do awesome stuff. Start with a trusted language with lots of resources and community help available (for example PHP, Ruby or Python, Javascript to a elsser extent)
- Following from the previous point, make your website a multipage website. Right now, single page app frameworks are very popular. These are frameworks where a part of the user interactivity is programmed client-side, for in the browser, using javascript. This makes for a great experience, like on Facebook, with a live news feed, but it adds way too much complexity for in the beginning (since you'll have code on both the server-side and client-side and you'll have to debug both). And you can always add this later on, when everything works right.
- Read up on security. As a beginner, if you dive in deep without grokking it, you'll be putting people's personal data and thus their lives at risk. So make sure you read some guides on what things to think of, related to the language you'll be using. Be aware especially of SQL injection, XSS attacks and Cross Site Request Forgery.
- Very important: don't build your own authentication system, as you'll make bad errors that make your users unsecure. Use one that comes with your language framework of choice, that has lots of users and is actively maintained.
- Learn from source. There's lots and lots of code people wrote on Github. Read code from cool projects to see how experienced programmers write and think. Check the source of sites you like to learn from their HTML/CSS code.

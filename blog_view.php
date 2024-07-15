<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>My Life. My Blog.</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="#">PAGES</a></li>
                <li><a href="#">PORTFOLIO</a></li>
                <li><a href="#">BLOG</a></li>
                <li><a href="#">CONTACT</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <p>All Posts</p>
        <p>Mar 22, 2023 2 min read <span class="share-options">
    <span class="dots"></span>
    <span class="dots"></span>
    <span class="dots"></span>
    <div class="share-links">
        <a href="https://www.facebook.com/sharer/sharer.php?u=https://yourblogurl.com" target="_blank">Share on Facebook</a>
        <a href="https://twitter.com/intent/tweet?url=https://yourblogurl.com&text=Check%20out%20this%20blog%20post!" target="_blank">Share on Twitter</a>
        <a href="https://www.linkedin.com/shareArticle?url=https://yourblogurl.com&title=Check%20out%20this%20blog%20post!" target="_blank">Share on LinkedIn</a>
    </div>
</span></p>
        <h1>5 reasons to wake up at 5am</h1>
        <p>Create a blog post subtitle that summarizes your post in a few short, punchy sentences and entices your audience to continue reading.</p>
        <div class="posts">
            <img src="https://static.wixstatic.com/media/75059a_19d50c96541b4b1aa915d498b351bd17~mv2.jpg/v1/fill/w_586,h_768,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/75059a_19d50c96541b4b1aa915d498b351bd17~mv2.jpg" alt="Blog post image">
            <p>Welcome to your blog post. Use this space to connect with your readers and potential customers in a way that’s current and interesting. Think of it as an ongoing conversation where you can share updates about business, trends, news, and more.</p>
        </div>
        <div class="post-info">
            <h3>Design with Ease</h3>
            <p>“Do you have a design in mind for your blog? Whether you prefer a trendy postcard look or you’re going for a more editorial style blog - there’s a stunning layout for everyone.”</p>
            <p>Every layout comes with the latest social features built in. Readers will be able to easily share posts on social networks like Facebook and Twitter, view how many people have liked a post, made comments and more. With Wix, building your online community has never been easier.</p>
        </div>
        <div class="post-info">
            <h3>Create Relevant Content</h3>
            <p>You’ll be posting loads of engaging content, so be sure to keep your blog organized with Categories that also allow readers to explore more of what interests them. Each category of your blog has its own page that’s fully customizable. Add a catchy title, a brief description, and a beautiful image to the category page header to truly make it your own. You can also add tags (#vacation #dream #summer) throughout your posts to reach more people, and help readers search for relevant content. Using hashtags can expand your post reach and help people find the content that matters to them. Go ahead, #hashtag away.</p>
            <h4>Stun Your Readers</h4>
            <p><i>“Be original, show off your style, and tell your story.”</i></p>
            <p>Blogging gives your site a voice, so let your business’ personality shine through. Are you a creative agency? Go wild with original blog posts about recent projects, cool inspirational ideas, or what your company culture is like. Add images, and videos to really spice it up, and pepper it with slang to keep readers interested. Are you a programmer? Stay on the more technical side by offering weekly tips, tricks, and hacks that show off your knowledge of the industry. No matter what type of business you have, one thing is for sure - blogging gives your business the opportunity to be heard in a different and unconventional way.</p>
        </div>
        <section class="bottom-sec">
            <div class="other-posts">
                <a href="#">
                    <img src="https://static.wixstatic.com/media/75059a_cf2c39f511b6478eaea5b4f7713831c0~mv2.jpg/v1/fill/w_306,h_172,al_c,q_80,enc_auto/75059a_cf2c39f511b6478eaea5b4f7713831c0~mv2.jpg" alt="Related post image">
                    <p>Transform your winter blues into winter creativity</p>
                </a>
            </div>
            <div class="other-posts">
                <a href="#">
                    <img src="https://static.wixstatic.com/media/a27d24_77c3bdd084c14f50a13aa9b44485c2e3~mv2.jpg/v1/fill/w_306,h_172,al_c,q_80,enc_auto/a27d24_77c3bdd084c14f50a13aa9b44485c2e3~mv2.jpg" alt="Related post image">
                    <p>How decluttering changed my life</p>
                </a>
            </div>
        </section>
        <form action="includes/blog_contr.inc.php" method="post">
            <label for="username"><b>Username</b></label>
            <input type="text" name="username" placeholder="Username" required>
            <label for="email"><b>Email</b></label>
            <input type="email" name="email" placeholder="Email" required>
            <label for="comments"><b>Comments</b></label>
            <textarea id="comments" name="comments" cols="50" rows="5"></textarea>
            <br>
            <button type="submit">Submit</button>
        </form>
    </main>
    <footer>
        <div>
            <p>&copy; 2024 Your Website. All rights reserved.</p>
        </div>
        <ul>
            <li><a href="#">HOME</a></li>
            <li><a href="#">PAGES</a></li>
            <li><a href="#">PORTFOLIO</a></li>
            <li><a href="#">BLOG</a></li>
            <li><a href="#">CONTACT</a></li>
        </ul>
    </footer>
</body>
</html>

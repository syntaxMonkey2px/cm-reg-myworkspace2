<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Comment page testing myspace2</title>

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">

    <!-- css -->
    <link rel="stylesheet" href="<?= base_url('css/fc-reg.css') ?>">


    <style>
        :root {
            --font-body: "Source Sans 3", sans-serif; /*temp*/
            /* --font-body: var(--font-family); */
            --fs-1: var(--size-1);
            --ls-1: 4%;
            --fw-normal: 400;
            --fw-heading: 600;
            --fw-placeholder: 400;
            --input-pad-left: var(--input-vert-padding);
            --body-bgcol: var(--body-bgcol);
        }

        /* Base typography */
        body,
        select {
            font-family: var(--font-body);
            font-size: var(--fs-1);
            letter-spacing: var(--ls-1);
            font-weight: var(--fw-normal);
        }

        h1 {
            font-weight: var(--fw-heading);
        }

        /* Breadcrumb trail */
        .breadcrumb-trail img {
            margin-inline: 6px;
        }

        .breadcrumb-trail a {
            text-decoration: none;
        }

        /* Form container */

        .comment-form--content {
            position: relative;
            max-width: 49em;
            height: 66%; /* temp height */
            display: grid;
            place-items: center;
        }


        .comment-form--content .container:not(#comment-type) {
            padding-left: 0 !important;
        }

        form label {
            display: block;
            width: 100%;
        }

        /* Input/textarea */
        #comment-subject,
        #comment-description {
            width: 100%;
            font-size: var(--fs-1);
            line-height: 1.5;
            padding-left: var(--input-pad-left);
            border-radius: 0 !important;
        }

        #comment-description {
            resize: vertical;
        }

        /* Placeholders */
        #comment-subject::placeholder,
        #comment-description::placeholder {
            opacity: 0.7;
            font-weight: var(--fw-placeholder);
            font-family: var(--font-body);
            font-size: var(--fs-1);
            letter-spacing: var(--ls-1);
        }

        /* Select */
        #comment-type {
            width: 50% !important;
            text-align: left;
            background-color: var(--body-bgcol);
            border-radius: 0 !important;
        }

        /* Button  */
        .comment-btn-container {
            padding-right: 0 !important;
            text-align: right;
        }

        .comment-btn {
            border: none !important;
        }

        /* Debug helper  */
        .b {
            /* outline: 1px solid #2408ddff; */
        }
    </style>


</head>

<body>
    <section class="breadcrumb-trail my-4 mx-4" aria-label="breadcrumb">
        <a href="#" class="text-md">Home</a>
        <img
            src="./css/images/icon-breadcrumb-arrow.svg"
            alt="breadcrumb trail next item indicator" />
        <a href="#">Support</a>
        <img
            src="./css/images/icon-breadcrumb-arrow.svg"
            alt="breadcrumb trail next item indicator" />
        <span>Post Comment</span>
    </section>
    <div class="mx-4">
        <h1 class="pb-3 mb-2">Post Comment</h1>
        <form action="#" id="reg-comment-form" class="comment-form--content container px-3 py-3 mb-4 b" aria-label="post comment form">
            <p class="container mb-4">To report a problem, please fill in this form.</p>
            <div class="container my-2">
                <label for="comment-subject" class="mb-1">Subject</label>
                <input type="text" id="comment-subject" placeholder="Enter a brief description">
            </div>
            <div class="container my-2">
                <label for="comment-description" class="mb-1">Description of problem or suggestion</label>
                <textarea id="comment-description" rows="7" placeholder="Describe your problem or suggestion here"></textarea>
            </div>
            <div class="container my-2">
                <label for="comment-type" class="mb-1">Select a comment type</label>
                <select id="comment-type" class="container mb-1" aria-label="select comment type">
                    <option selected>Question</option>
                    <option value="1">Item 1</option>
                    <option value="2">Item 2</option>
                    <option value="3">Item 3</option>
                    <option value="4">Item 4</option>
                    <option value="5">Item 5</option>
                </select>
            </div>
            <div class="comment-btn-container container my-2">
                <a href="#" class="btn comment-btn" role="button">Register report</a>
            </div>
        </form>
    </div>
    <!-- print tag#id.class list, indented -->
    <!-- <script>
        (function walk(n, d = 0) {
            const isElem = n.nodeType === 1;
            if (isElem) {
                const tag = n.tagName.toLowerCase();
                const id = n.id ? '#' + n.id : '';
                const cls = n.className && typeof n.className === 'string' ? '.' + n.className.trim().replace(/\s+/g, '.') : '';
                console.log(' '.repeat(d * 2) + tag + id + cls);
            }
            for (const c of n.children) walk(c, d + (isElem ? 1 : d));
        })(document.body);
    </script> -->
</body>

</html>
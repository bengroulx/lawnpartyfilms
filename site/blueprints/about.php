<?php if(!defined('KIRBY')) exit ?>

title: Info
pages: false

fields:
    pageTitle-1:
        label: Page Content
        type: headline
    title:
        label: Title
        type: text
        help: This is also the name that will appear in the URL, i.e. devonmussett.com/title-here
    coverImage:
        label: Cover Image
        type: image
        help: Upload an image to the Files section of this page, then choose it from the dropdowns here.
    column1:
        label: Column 1
        type: markdown
        help: Content for the first column. (Left on desktop, top on mobile.)
    column2:
        label: Column 2
        type: markdown
        help: Content for the second column. (Middle on desktop, middle on mobile.)
        width: 1/2
    column3:
        label: Column 3
        type: markdown
        help: Content for the third column. (Right on desktop, bottom on mobile.)
        width: 1/2

    pageTitle-2:
        label: Search Engine Optimization
        type: headline
    metatitle:
        label: SEO Title
        type:  text
        help: This text will show up as the title in search engines and social media sites when shared.
    metadesc:
        label: SEO Description
        type:  textarea
        help: This text will show up as the description in search engines and social media sites when shared.

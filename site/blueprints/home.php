<?php if(!defined('KIRBY')) exit ?>

title: Home
pages: false

fields:
    pageTitle-1:
        label: Page Content
        type: headline
    title:
        label: Title
        type: text
        help: This is also the name that will appear in the URL, i.e. devonmussett.com/title-here
    VideolinkYouTube:
        label: Video • YouTube Hosted
        type: text
        help: Use the bit of letters/numbers afer the ?v from the YouTube video URL, i.e. https://youtube.com/watch?v=qU0TVrnmuFU
        width: 1/2
    VideolinkVimeo:
        label: Video • Vimeo Hosted
        type: text
        help: Paste the combination of numbers/letters that appears in your Vimeo video link, i.e. https://vimeo.com/208042347
        width: 1/2
    coverImage:
        label: Cover Image
        type: image
        help: Upload an image to the Files section of this page, then choose it from the dropdowns here.

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

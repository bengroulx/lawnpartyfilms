<?php if(!defined('KIRBY')) exit ?>

title: Photo
pages: false

fields:
    pageTitle-1:
        label: Page Content
        type: headline
    title:
        label: Title
        type: text
        help: This is also the name that will appear in the URL, i.e. devonmussett.com/title-here
    pictures:
        label: Gallery
        type: gallery

    pagetitle-2:
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

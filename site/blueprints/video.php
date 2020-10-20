<?php if(!defined('KIRBY')) exit ?>

title: Video
pages: false
files:
    size: 2000000

fields:
    pageTitle-1:
        label: About This Video
        type: headline
    title:
        label: Title
        type: text
        help: This is also the name that will appear in the URL, i.e. devonmussett.com/title-here
    artist:
        label: Artist / Created For / Subtitle
        type: text
        help: The subtitle for the page, usually a name or a project type.
        width: 1/2
    type:
        label: Media Type
        type: text
        width: 1/2
        help: The type of media category, such as music video, feature film, etc.
    coverImage:
        label: Cover Image
        type: image
        help: Upload an image to the Files section of this page, then choose it from the dropdowns here.
    aspectRatio:
        label: Aspect Ratio
        type: radio
        columns: 3
        default: 16x9
        options:
            16x9: 16:9 (Standard HD video)
            2x1: 2.35:1 (Widescreen Cinema)
            3x1: 2.75:1 (Ultra Widescreen)
    VideolinkYouTube:
        label: Video • YouTube Hosted
        type: text
        help: Use the bit of letters/numbers afer the ?v from the YouTube video URL, i.e. https://youtube.com/watch?v=qU0TVrnmuFU.
        width: 1/2
    VideolinkVimeo:
        label: Video • Vimeo Hosted
        type: text
        help: Paste the combination of numbers/letters that appears in your Vimeo video link, i.e. https://vimeo.com/208042347
        width: 1/2
    pageTitle-3:
        label: Credits
        type: headline
    credits1a:
        label: Credits 1
        type: text
        width: 1/4
    credits2a:
        label: Credits 2
        type: text
        width: 1/4
    credits3a:
        label: Credits 3
        type: text
        width: 1/4
    credits4a:
        label: Credits 4
        type: text
        width: 1/4
    credits1b:
        type: text
        width: 1/4
    credits2b:
        type: text
        width: 1/4
    credits3b:
        type: text
        width: 1/4
    credits4b:
        type: text
        width: 1/4
    pageTitle-4:
        label: Content
        type: headline
    description:
        label: Additional content
        type: markdown
    pictures:
        label: Stills & Behind-the-Scenes Gallery
        type: gallery
        aspectRatio: 16:9
    pageTitle-5:
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

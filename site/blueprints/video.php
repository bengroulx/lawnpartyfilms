<?php if(!defined('KIRBY')) exit ?>

title: Video
pages: false

fields:
    pagetitle-1:
        label: Video Information
        type: headline
    title:
        label: Title
        type: text
    artist:
        label: Artist / Created For
        type: text
    videoLink:
        label: Link to Video
        type: text

    pagetitle-2:
        label: Who’s Included
        type: headline
    type:
        label: Media Type
        type: text
        width: 1/4
    director:
        label: Directed By
        type: text
        width: 1/4
    producer:
        label: Produced By
        type: text
        width: 1/4
    cinematographer:
        label: Cinematography By
        type: text
        width: 1/4
    description:
        label: Description
        type: markdown

    pagetitle-3:
        label: META Information
        type: headline
    metatitle:
        label: META Title
        type:  text
        icon:  header
    metadesc:
        label: META Description
        type:  textarea
        icon:  file-code-o

<?php if(!defined('KIRBY')) exit ?>

title: Videos
pages:
    template: video

fields:
    pagetitle-1:
        label: Page Information
        type: headline
    title:
        label: Title
        type:  text
    headerImage:
        label: Header Image
        type:  text
    pagetitle-2:
        label: Page Content
        type: headline
    h1:
        label: Page Headline
        type:  text
    h2:
        label: Page Subheadline
        type:  text
    introduction:
        label: Introduction
        type:  textarea
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

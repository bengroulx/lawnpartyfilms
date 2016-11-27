<?php if(!defined('KIRBY')) exit ?>

title: About
pages: false

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
    brief:
        label: Brief Introductory Blurb
        type:  textarea
        size:  large
    creator1:
        label: Creator 1
        type:  textarea
        width: 1/2
    creator2:
        label: Creator 2
        type:  textarea
        width: 1/2
    creator3:
        label: Creator 3
        type:  textarea
        width: 1/2
    services:
        label: Services
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

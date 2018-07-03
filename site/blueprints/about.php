<?php if(!defined('KIRBY')) exit ?>

title: Info
pages: false

fields:
    pagetitle-1:
        label: Page Information
        type: headline
    title:
        label: Title
        type:  text

    pagetitle-2:
        label: Page Content
        type: headline
    h1:
        label: Page Headline
        type:  text
    brief:
        label: Brief Introductory Blurb
        type:  text
        size:  large
    creator1:
        label: Creator 1
        type:  markdown
    creator2:
        label: Creator 2
        type:  markdown
    creator3:
        label: Creator 3
        type:  markdown

    pagetitle-3:
        label: META Information
        type: headline
    metatitle:
        label: META Title
        type:  text
        icon:  header
    metadesc:
        label: META Description
        type: text
        size: large
        icon: file-code-o

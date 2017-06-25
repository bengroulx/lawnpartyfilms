<?php if(!defined('KIRBY')) exit ?>

title: Default
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
    text:
        label: Content
        type:  markdown
        size:  large

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

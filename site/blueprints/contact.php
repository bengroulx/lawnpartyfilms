<?php if(!defined('KIRBY')) exit ?>

title: Contact
pages: false
files: true

fields:
    pagetitle-1:
        label: Page Information
        type: headline
    title:
        label: Title
        type:  text
    h1:
        label: Headline
        type:  text

    pagetitle-2:
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

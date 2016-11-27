<?php if(!defined('KIRBY')) exit ?>

title: Home
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
        label: Headline
        type:  text
    introduction:
        label: Demo Reel / Intro Video (use iframe)
        type:  text
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

<?php if(!defined('KIRBY')) exit ?>

title: Rentals - Product Details
pages: false
files: true

fields:
    pagetitle-1:
        label: Page Content
        type: headline
    title:
        label: Product Name
        type:  text
    description:
        label: Product Description
        type:  markdown
    specs:
        label: Product Specs
        type:  markdown
    image:
        label: Product Image
        type:  text
    costPrice:
        label: Cost — How much? (e.g. “100”)
        type:  text
        width: 1/2
    costTime:
        label: Cost — How long? (e.g. “day” or “hour”)
        type:  text
        width: 1/2
    link:
        label: External link
        type: text
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

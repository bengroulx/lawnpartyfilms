<?php if(!defined('KIRBY')) exit ?>

title: Site
pages: default

fields:
    title:
        label: Site Title
        type:  text
    author:
        label: Author
        type:  text
        width: 1/2
    role:
        label: Author Role
        type:  text
        width: 1/2
    description:
        label: Description
        type:  text
    keywords:
        label: Keywords
        type:  tags
    copyright:
        label: Copyright
        type:  textarea

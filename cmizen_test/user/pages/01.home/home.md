---
title: Home
process:
    markdown: true
    twig: true
child_type: default
content_news:
    items: '@self.children'
    order:
        by: date
        dir: desc
    limit: 3
    pagination: true
content_about:
    items:
        '@page.self': /about-me
content_gallery:
    items:
        '@page.self': /gallery
---


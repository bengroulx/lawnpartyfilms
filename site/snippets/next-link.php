<svg class="arrow" xmlns="http://www.w3.org/2000/svg"><title>Arrow</title><path d="M17.857 6.147l-5.837-6.001c-.19-.195-.498-.195-.688 0-.19.195-.19.512 0 .707l5.007 5.147h-15.852c-.269 0-.486.224-.486.5s.218.5.486.5h15.852l-5.007 5.147c-.19.195-.19.512 0 .707.095.098.22.146.344.146.125 0 .249-.049.344-.146l5.837-6.001c.19-.195.19-.512 0-.707l-.001.001z"  fill-rule="nonzero"/></svg>
<div class="next-list"><?php if($page->hasNext()): ?>
<a href="<?= $page->next()->url() ?>">Watch <?php echo $page->next()->title()->html() ?> next</a>
<?php endif ?></div>

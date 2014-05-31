// PHP Example for OpenCart 1.5

<?php

  $num_pages = ceil($product_total / $limit);

  if ($page == 1) {
      $this->document->addLink($this->url->link('product/special'), 'canonical');
  } else {
      $this->document->addLink($this->url->link('product/special', 'page=' . $page), 'canonical');
  }

  if ($page < $num_pages) {
      $this->document->addLink($this->url->link('product/special', 'page=' . ($page + 1)), 'next');
  }

  if ($page > 1) {

      // Remove page duplicate
      if ($page == 2) {
          $this->document->addLink($this->url->link('product/special'), 'prev');
      } else {
          $this->document->addLink($this->url->link('product/special', 'page=' . ($page - 1)), 'prev');
      }
  }
